document.addEventListener("DOMContentLoaded", function () {
  let currentStep = 1;
  const totalSteps = 2;
  window.uploadedFiles = []; // Global file storage

  initializeForm();

  function initializeForm() {
    showStep(currentStep);
    updateStepProgress();

    // Initialize radio lainnya
    const lainnyaRadio = document.querySelector('input[value="Lainnya"]');
    if (lainnyaRadio && lainnyaRadio.checked) {
      createLainnyaInput();
    }
  }

  function showStep(step) {
    for (let i = 1; i <= totalSteps; i++) {
      const stepElement = document.getElementById(`form-step-${i}`);
      if (stepElement) stepElement.classList.remove("active");
    }

    const submittedElement = document.querySelector(".form-submitted");
    if (submittedElement) submittedElement.classList.remove("active");

    const currentStepElement = document.getElementById(`form-step-${step}`);
    if (currentStepElement) currentStepElement.classList.add("active");

    if (step === 3 && submittedElement) {
      submittedElement.classList.add("active");
    }
  }

  function updateStepProgress() {
    const stepElements = document.querySelectorAll(".step");
    stepElements.forEach((element, index) => {
      const stepNumber = index + 1;
      const stepNumberElement = element.querySelector(".step-number");

      element.classList.remove("active", "completed");
      stepNumberElement.classList.remove("active", "completed");

      if (stepNumber < currentStep) {
        element.classList.add("completed");
        stepNumberElement.classList.add("completed");
        stepNumberElement.innerHTML =
          '<img src="/assets/images/mini-checklist.svg" alt="Check">';
      } else if (stepNumber === currentStep) {
        element.classList.add("active");
        stepNumberElement.classList.add("active");
        stepNumberElement.textContent = stepNumber;
      } else {
        stepNumberElement.textContent = stepNumber;
      }
    });
  }

  function validateStep1() {
    const requiredFields = [
      "nama",
      "nik",
      "nomor-kontak",
      "email",
      "instansi-lembaga",
      "jabatan",
      "alamat",
      "isi-pengaduan",
    ];

    let isValid = true;
    let firstInvalidField = null;

    requiredFields.forEach((fieldId) => {
      const field = document.getElementById(fieldId);
      if (field && field.value.trim() === "") {
        isValid = false;
        field.classList.add("error");
        if (!firstInvalidField) firstInvalidField = field;
      }
    });

    const emailField = document.getElementById("email");
    if (emailField && emailField.value.trim() !== "") {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailField.value.trim())) {
        isValid = false;
        emailField.classList.add("error");
        if (!firstInvalidField) firstInvalidField = emailField;
      }
    }

    const jenisRadios = document.querySelectorAll(
      'input[name="jenis-pengaduan"]'
    );
    const jenisSelected = Array.from(jenisRadios).some(
      (radio) => radio.checked
    );

    if (!jenisSelected) {
      isValid = false;
      jenisRadios.forEach((radio) => {
        radio.closest(".radio").classList.add("error");
      });
      if (!firstInvalidField) firstInvalidField = jenisRadios[0];
    }

    const selectedRadio = document.querySelector(
      'input[name="jenis-pengaduan"]:checked'
    );
    if (selectedRadio && selectedRadio.value === "Lainnya") {
      const lainnyaInput = document.getElementById("isi-lainnya");
      if (!lainnyaInput || lainnyaInput.value.trim() === "") {
        isValid = false;
        if (lainnyaInput) {
          lainnyaInput.classList.add("error");
        }
        if (!firstInvalidField) {
          firstInvalidField = lainnyaInput || selectedRadio;
        }
      }
    }

    if (!isValid && firstInvalidField) {
      firstInvalidField.focus();
      showErrorMessage("Mohon lengkapi semua field yang diperlukan");
    }

    return isValid;
  }

  function createLainnyaInput() {
    let existing = document.getElementById("isi-lainnya-wrapper");
    if (existing) existing.remove();

    const div = document.createElement("div");
    div.className = "form-group";
    div.id = "isi-lainnya-wrapper";
    div.innerHTML = `
      <div class="input">
        <input type="text" id="isi-lainnya" placeholder="Isikan jenis pengaduan lainnya"/>
      </div>
    `;

    const radioContainer = document.querySelector(".flex.column.gap-5.pt-2");
    if (radioContainer) {
      radioContainer.parentNode.insertBefore(div, radioContainer.nextSibling);
    }
  }

  function populateConfirmationData() {
    // Personal data
    document.getElementById("conf-nama").textContent =
      document.getElementById("nama").value || "-";
    document.getElementById("conf-jabatan").textContent =
      document.getElementById("jabatan").value || "-";
    document.getElementById("conf-nik").textContent =
      document.getElementById("nik").value || "-";
    document.getElementById("conf-instansi").textContent =
      document.getElementById("instansi-lembaga").value || "-";
    document.getElementById("conf-alamat").textContent =
      document.getElementById("alamat").value || "-";
    document.getElementById("conf-nomor").textContent =
      document.getElementById("nomor-kontak").value || "-";
    document.getElementById("conf-email").textContent =
      document.getElementById("email").value || "-";
    document.getElementById("conf-isi-pengaduan").textContent =
      document.getElementById("isi-pengaduan").value || "-";

    // Jenis pengaduan
    const selectedRadio = document.querySelector(
      'input[name="jenis-pengaduan"]:checked'
    );
    let jenis = "-";
    if (selectedRadio) {
      jenis =
        selectedRadio.value === "Lainnya"
          ? document.getElementById("isi-lainnya")?.value || "Lainnya"
          : selectedRadio.value;
    }
    document.getElementById("conf-jenis-pengaduan").textContent = jenis;

    // File upload
    const fileListContainer = document.getElementById("conf-file-list");
    fileListContainer.innerHTML = "";

    // Akses file dari global storage
    const files = window.fileUploads["bukti-pengaduan"] || [];

    if (files.length > 0) {
      files.forEach((file) => {
        const div = document.createElement("div");
        div.textContent = file.name;
        fileListContainer.appendChild(div);
      });
    } else {
      const div = document.createElement("div");
      div.textContent = "Tidak ada file yang diupload";
      fileListContainer.appendChild(div);
    }
  }

  function showErrorMessage(message) {
    let errorDiv = document.querySelector(".error-message");
    if (!errorDiv) {
      errorDiv = document.createElement("div");
      errorDiv.className = "error-message";
      errorDiv.style.cssText = `
        background-color: #fee;
        color: #c33;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #fcc;
      `;

      const currentStepElement = document.getElementById(
        `form-step-${currentStep}`
      );
      if (currentStepElement) {
        currentStepElement.insertBefore(
          errorDiv,
          currentStepElement.firstChild
        );
      }
    }

    errorDiv.textContent = message;
    errorDiv.style.display = "block";

    setTimeout(() => {
      if (errorDiv) errorDiv.style.display = "none";
    }, 5000);
  }

  function hideErrorMessage() {
    const errorDiv = document.querySelector(".error-message");
    if (errorDiv) errorDiv.style.display = "none";
  }

  window.nextStep = function () {
    hideErrorMessage();

    if (currentStep === 1) {
      if (!validateStep1()) return;
      populateConfirmationData();
    } else if (currentStep === 2) {
      // Submit form
      const formData = new FormData();
      // ... (tambahkan data form ke formData)

      // Kirim file
      window.uploadedFiles.forEach((file) => {
        formData.append("files[]", file);
      });

      console.log("Form submitted", formData);
      // fetch('/submit-endpoint', { method: 'POST', body: formData })
    }

    currentStep = Math.min(currentStep + 1, 3);
    showStep(currentStep);
    updateStepProgress();
  };

  window.prevStep = function () {
    hideErrorMessage();
    currentStep = Math.max(currentStep - 1, 1);
    showStep(currentStep);
    updateStepProgress();
  };

  // Event listeners
  document.addEventListener("input", (e) => {
    if (["INPUT", "SELECT", "TEXTAREA"].includes(e.target.tagName)) {
      e.target.classList.remove("error");
    }
  });

  document
    .querySelectorAll('input[name="jenis-pengaduan"]')
    .forEach((radio) => {
      radio.addEventListener("change", function () {
        document.querySelectorAll(".radio").forEach((el) => {
          el.classList.remove("error");
        });

        if (this.value === "Lainnya") {
          createLainnyaInput();
        } else {
          const existing = document.getElementById("isi-lainnya-wrapper");
          if (existing) existing.remove();
        }
      });
    });
});
