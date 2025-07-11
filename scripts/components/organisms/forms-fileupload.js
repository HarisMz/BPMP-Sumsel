function initFileUpload() {
  $(".file-upload").each(function () {
    const $fileUpload = $(this);
    const id = $fileUpload.attr("id") || `file-upload-${Date.now()}`;
    $fileUpload.attr("id", id);

    // Inisialisasi file storage global
    if (!window.fileUploads) window.fileUploads = {};
    if (!window.fileUploads[id]) window.fileUploads[id] = [];

    const $input = $fileUpload.find("#file-input");
    const $list = $fileUpload.find("#file-list");
    const $container = $fileUpload.find(".file-input-container");
    const $addMore = $fileUpload.find("#addmore-button");
    const $submit = $fileUpload.find("#submit-button");
    const fileList = window.fileUploads[id]; // Array of {file: File, preview: string?}

    const maxSizeKB = $fileUpload.attr("max-size")
      ? parseInt($fileUpload.attr("max-size"))
      : Infinity;
    const maxSizeBytes = maxSizeKB * 1024;

    if ($fileUpload.hasClass("multiple")) {
      $input.attr("multiple", "");
    }

    function updateFileList() {
      $list.empty();
      const fragment = document.createDocumentFragment();

      if ($fileUpload.hasClass("multiple")) {
        $container.toggle(fileList.length === 0);
        $addMore.toggle(fileList.length > 0);
      } else {
        $container.toggle(fileList.length === 0);
      }

      fileList.forEach((item, index) => {
        const file = item.file;
        const fileItem = document.createElement("li");
        fileItem.className = "file-item";

        // Tampilkan preview untuk gambar
        if (item.preview) {
          const preview = document.createElement("img");
          preview.src = item.preview;
          preview.className = "file-preview";
          fileItem.appendChild(preview);
        }

        const fileInfo = document.createElement("div");
        fileInfo.className = "file-info";

        const fileName = document.createElement("div");
        fileName.className = "file-name";
        fileName.textContent = file.name;

        const fileSize = document.createElement("div");
        fileSize.className = "file-size";
        fileSize.textContent = formatFileSize(file.size);

        fileInfo.appendChild(fileName);
        fileInfo.appendChild(fileSize);
        fileItem.appendChild(fileInfo);

        const deleteBtn = document.createElement("div");
        deleteBtn.className = "delete-button";
        deleteBtn.setAttribute("title", "Hapus file");
        deleteBtn.onclick = (event) => {
          event.stopPropagation();
          deleteFile(index);
        };

        fileItem.appendChild(deleteBtn);
        fragment.appendChild(fileItem);
      });

      $list[0].appendChild(fragment);
    }

    function formatFileSize(bytes) {
      if (bytes < 1024) return bytes + " B";
      else if (bytes < 1048576) return (bytes / 1024).toFixed(2) + " KB";
      else return (bytes / 1048576).toFixed(2) + " MB";
    }

    function addFiles(newFiles) {
      const filesToAdd = Array.from(newFiles);
      const exceededFiles = filesToAdd.filter(
        (file) => file.size > maxSizeBytes
      );

      if (exceededFiles.length > 0) {
        let errorMessage = `File melebihi batas maksimum yang diizinkan (${formatFileSize(
          maxSizeBytes
        )}). `;

        if (exceededFiles.length === 1) {
          const exceededFile = exceededFiles[0];
          errorMessage += `Ukuran file yang Anda pilih adalah ${formatFileSize(
            exceededFile.size
          )}.`;
        } else {
          errorMessage += `${exceededFiles.length} file melebihi batas ukuran.`;
        }

        errorMessage += " Silakan pilih file dengan ukuran yang lebih kecil.";

        createDialog({
          title: "Ukuran File Melebihi Batas",
          content: errorMessage,
          buttons: [
            {
              label: "OK",
              class: "ultimate",
              action: "close",
              target: "#",
              newtab: false,
            },
          ],
          close: true,
          size: "medium",
          persistent: true,
          blur: false,
        });
        return;
      }

      // Generate preview untuk gambar
      filesToAdd.forEach((file) => {
        const item = { file };

        // Buat preview untuk file gambar
        if (file.type.startsWith("image/")) {
          const reader = new FileReader();
          reader.onload = (e) => {
            item.preview = e.target.result;
            updateFileList();
          };
          reader.readAsDataURL(file);
        }

        fileList.push(item);
      });

      updateFileList();
    }

    function deleteFile(index) {
      if (index >= 0 && index < fileList.length) {
        fileList.splice(index, 1);
        updateFileList();
      }
    }

    $container.off("click").on("click", function () {
      $input.click();
    });

    $input.off("change").on("change", function (e) {
      addFiles(e.target.files);
      $(this).val("");
    });

    $addMore.off("click").on("click", function () {
      const newFileInput = $(
        '<input type="file" multiple style="display: none;">'
      );
      $("body").append(newFileInput);
      newFileInput.on("change", function (e) {
        addFiles(e.target.files);
        $(this).remove();
      });
      newFileInput.click();
    });

    // Hapus submit handler bawaan
    $submit.off("click").remove();
  });
}

$(document).ready(function () {
  initFileUpload();
});
