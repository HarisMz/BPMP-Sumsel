function initFileUpload() {
    $('.file-upload').each(function() {
        const $fileUpload = $(this);
        const $input = $fileUpload.find('#file-input');
        const $list = $fileUpload.find('#file-list');
        const $container = $fileUpload.find('.file-input-container');
        const $addMore = $fileUpload.find('#addmore-button');
        const $submit = $fileUpload.find('#submit-button');
        let fileList = [];

        const maxSizeKB = $fileUpload.attr('max-size') ? parseInt($fileUpload.attr('max-size')) : Infinity;
        const maxSizeBytes = maxSizeKB * 1024;

        if ($fileUpload.hasClass('multiple')) {
            $input.attr('multiple', '');
        }

        function updateFileList() {
            $list.empty();
            const fragment = document.createDocumentFragment();

            if ($fileUpload.hasClass('multiple')) {
                $container.toggle(fileList.length === 0);
                $addMore.toggle(fileList.length > 0);
            } else {
                $container.toggle(fileList.length === 0);
            }

            fileList.forEach((file, index) => {
                const fileItem = document.createElement('li');
                fileItem.className = 'file-item';
                fileItem.setAttribute('data-file-name', ` (${formatFileSize(file.size)})`);
                
                const fileName = document.createElement('div');
                fileName.className = 'file-name';
                fileName.textContent = `${file.name}`;

                const deleteBtn = document.createElement('div');
                deleteBtn.className = 'delete-button';
                deleteBtn.setAttribute('title', 'Hapus file');
                deleteBtn.onclick = (event) => {
                    event.stopPropagation();
                    deleteFile(index);
                };
                
                fileItem.appendChild(fileName);
                fileItem.appendChild(deleteBtn);
                fragment.appendChild(fileItem);
            });

            $list[0].appendChild(fragment);
        }

        function formatFileSize(bytes) {
            if (bytes < 1024) return bytes + ' B';
            else if (bytes < 1048576) return (bytes / 1024).toFixed(2) + ' KB';
            else return (bytes / 1048576).toFixed(2) + ' MB';
        }

        function addFiles(newFiles) {
            const filesToAdd = Array.from(newFiles);
            const exceededFiles = filesToAdd.filter(file => file.size > maxSizeBytes);
            
            if (exceededFiles.length > 0) {
                let errorMessage = `File melebihi batas maksimum yang diizinkan (${formatFileSize(maxSizeBytes)}). `;
                
                if (exceededFiles.length === 1) {
                    const exceededFile = exceededFiles[0];
                    errorMessage += `Ukuran file yang Anda pilih adalah ${formatFileSize(exceededFile.size)}.`;
                } else {
                    errorMessage += `${exceededFiles.length} file melebihi batas ukuran.`;
                }

                errorMessage += ' Silakan pilih file dengan ukuran yang lebih kecil.';

                createDialog({
                    title: 'Ukuran File Melebihi Batas',
                    content: errorMessage,
                    buttons: [
                        {
                            'label': 'OK',
                            'class': 'ultimate',
                            'action': 'close',
                            'target': '#',
                            'newtab': false
                        }
                    ],
                    close: true,
                    size: 'medium',
                    persistent: true,
                    blur: false
                });
                return;
            }

            fileList = [...fileList, ...filesToAdd];
            requestAnimationFrame(updateFileList);
        }

        function deleteFile(index) {
            if (index >= 0 && index < fileList.length) {
                fileList.splice(index, 1);
                requestAnimationFrame(updateFileList);
            }
        }

        $container.off('click').on('click', function() {
            $input.click();
        });

        $input.off('change').on('change', function(e) {
            addFiles(e.target.files);
            $(this).val('');
        });

        $addMore.off('click').on('click', function() {
            const newFileInput = $('<input type="file" multiple style="display: none;">');
            $('body').append(newFileInput);
            newFileInput.on('change', function(e) {
                addFiles(e.target.files);
                $(this).remove();
            });
            newFileInput.click();
        });

        $submit.off('click').on('click', function() {
            if (fileList.length === 0) {
                createDialog({
                    title: 'File Belum Ada',
                    content: 'Silakan tambahkan file sebelum melakukan submit.',
                    buttons: [
                        {
                            'label': 'OK',
                            'class': 'ultimate',
                            'action': 'close',
                            'target': '#',
                            'newtab': false
                        }
                    ],
                    close: true,
                    size: 'medium',
                    persistent: true,
                    blur: false
                });
                return;
            }

            const formData = new FormData();
            fileList.forEach(file => {
                formData.append('files[]', file, file.name);
            });

            console.log('Files ready for submission:', fileList.map(f => ({ name: f.name, type: f.type, size: formatFileSize(f.size) })));
            alert('Files submitted! Check console for details.');
        });
    });
}

$(document).ready(function() {
    initFileUpload();
});