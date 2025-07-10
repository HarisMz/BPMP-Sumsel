// Pikat Bidar Form Handler JavaScript
document.addEventListener("DOMContentLoaded", function () {
  let currentStep = 1;
  const totalSteps = 3;

  // Initialize form display
  initializeForm();

  function initializeForm() {
    showStep(currentStep);
    updateStepProgress();
  }

  function showStep(step) {
    // Hide all form steps and remove active class
    for (let i = 1; i <= totalSteps; i++) {
      const stepElement = document.getElementById(`form-step-${i}`);
      if (stepElement) {
        stepElement.classList.remove("active");
      }
    }

    // Hide submitted message and remove active class
    const submittedElement = document.querySelector(".form-submitted");
    if (submittedElement) {
      submittedElement.classList.remove("active");
    }

    // Show current step with active class
    const currentStepElement = document.getElementById(`form-step-${step}`);
    if (currentStepElement) {
      currentStepElement.classList.add("active");
    }

    // Show submitted message if step is 4
    if (step === 4) {
      if (submittedElement) {
        submittedElement.classList.add("active");
      }
    }
  }

  function updateStepProgress() {
    const stepElements = document.querySelectorAll(".step");
    stepElements.forEach((element, index) => {
      const stepNumber = index + 1;
      const stepNumberElement = element.querySelector(".step-number");

      // Remove all classes first
      element.classList.remove("active", "completed");
      stepNumberElement.classList.remove("active", "completed");

      if (stepNumber < currentStep) {
        // Completed step
        element.classList.add("completed");
        stepNumberElement.classList.add("completed");
        stepNumberElement.innerHTML =
          '<img src="/assets/images/mini-checklist.svg" alt="Mini Checklist">';
      } else if (stepNumber === currentStep) {
        // Active step
        element.classList.add("active");
        stepNumberElement.classList.add("active");
        stepNumberElement.textContent = stepNumber;
      } else {
        // Future step
        stepNumberElement.textContent = stepNumber;
      }
    });
  }

  function validateStep1() {
    const requiredFields = [
      "nama",
      "jabatan",
      "instansi-lembaga",
      "wilayah",
      "nomor-kontak",
      "email",
    ];
    let isValid = true;
    let firstInvalidField = null;

    requiredFields.forEach((fieldId) => {
      const field = document.getElementById(fieldId);
      if (field) {
        const value = field.value.trim();
        if (value === "") {
          isValid = false;
          field.classList.add("error");
          if (!firstInvalidField) {
            firstInvalidField = field;
          }
        } else {
          field.classList.remove("error");
        }
      }
    });

    // Email validation
    const emailField = document.getElementById("email");
    if (emailField && emailField.value.trim() !== "") {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailField.value.trim())) {
        isValid = false;
        emailField.classList.add("error");
        if (!firstInvalidField) {
          firstInvalidField = emailField;
        }
      }
    }

    if (!isValid && firstInvalidField) {
      firstInvalidField.focus();
      showErrorMessage("Mohon lengkapi semua field yang diperlukan");
    }

    return isValid;
  }

  function validateStep2() {
    let isValid = true;
    let firstInvalidField = null;

    // Validate tema pendampingan
    const temaSelect = document.querySelector('select[name=""]');
    if (temaSelect && temaSelect.value === "") {
      isValid = false;
      temaSelect.classList.add("error");
      if (!firstInvalidField) {
        firstInvalidField = temaSelect;
      }
    } else if (temaSelect) {
      temaSelect.classList.remove("error");
    }

    // Validate mode pendampingan
    const modeRadios = document.querySelectorAll(
      'input[name="mode-pendampingan"]'
    );
    const modeSelected = Array.from(modeRadios).some((radio) => radio.checked);

    if (!modeSelected) {
      isValid = false;
      if (!firstInvalidField) {
        firstInvalidField = modeRadios[0];
      }
    }

    // Validate jumlah peserta
    const jumlahPeserta = document.getElementById("jumlah-peserta");
    if (jumlahPeserta && jumlahPeserta.value.trim() === "") {
      isValid = false;
      jumlahPeserta.classList.add("error");
      if (!firstInvalidField) {
        firstInvalidField = jumlahPeserta;
      }
    } else if (jumlahPeserta) {
      jumlahPeserta.classList.remove("error");
    }

    // Validate usulan tanggal
    const usulanTanggal = document.getElementById("usulan_tanggal");
    if (usulanTanggal && usulanTanggal.value === "") {
      isValid = false;
      usulanTanggal.classList.add("error");
      if (!firstInvalidField) {
        firstInvalidField = usulanTanggal;
      }
    } else if (usulanTanggal) {
      usulanTanggal.classList.remove("error");
    }

    // Validate jam
    const jam = document.getElementById("jam");
    if (jam && jam.value === "") {
      isValid = false;
      jam.classList.add("error");
      if (!firstInvalidField) {
        firstInvalidField = jam;
      }
    } else if (jam) {
      jam.classList.remove("error");
    }

    if (!isValid && firstInvalidField) {
      firstInvalidField.focus();
      showErrorMessage("Mohon lengkapi semua field yang diperlukan");
    }

    return isValid;
  }

  function populateConfirmationData() {
    // Personal data
    document.getElementById("conf-nama").textContent =
      document.getElementById("nama").value || "-";
    document.getElementById("conf-jabatan").textContent =
      document.getElementById("jabatan").value || "-";
    document.getElementById("conf-nip").textContent =
      document.getElementById("nip").value || "-";
    document.getElementById("conf-instansi").textContent =
      document.getElementById("instansi-lembaga").value || "-";
    document.getElementById("conf-wilayah").textContent =
      document.getElementById("wilayah").value || "-";
    document.getElementById("conf-nomor").textContent =
      document.getElementById("nomor-kontak").value || "-";
    document.getElementById("conf-email").textContent =
      document.getElementById("email").value || "-";

    // Tema pendampingan
    const temaSelect = document.querySelector('select[name=""]');
    document.getElementById("conf-tema").textContent = temaSelect
      ? temaSelect.options[temaSelect.selectedIndex].text
      : "-";

    // Mode pendampingan
    const selectedMode = document.querySelector(
      'input[name="mode-pendampingan"]:checked'
    );
    let mode = "-";

    if (selectedMode) {
      const value = selectedMode.value;
      if (value === "Daring") {
        mode = "Dalam Jaringan (Daring)";
      } else if (value === "Luring") {
        mode = "Luar Jaringan (Luring)";
      }
    }

    document.getElementById("conf-mode").textContent = mode;

    // Other data
    document.getElementById("conf-jumlah").textContent =
      document.getElementById("jumlah-peserta").value || "-";

    // Format tanggal
    const tanggalValue = document.getElementById("usulan_tanggal").value;
    if (tanggalValue) {
      const date = new Date(tanggalValue);
      const formattedDate = date.toLocaleDateString("id-ID", {
        day: "numeric",
        month: "long",
        year: "numeric",
      });
      document.getElementById("conf-tanggal").textContent = formattedDate;
    } else {
      document.getElementById("conf-tanggal").textContent = "-";
    }

    // Format jam
    const jamValue = document.getElementById("jam").value;
    if (jamValue) {
      document.getElementById("conf-jam").textContent = jamValue + " WIB";
    } else {
      document.getElementById("conf-jam").textContent = "-";
    }
  }

  function showErrorMessage(message) {
    // Create or update error message
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
          currentStepElement.firstChild.nextSibling
        );
      }
    }

    errorDiv.textContent = message;
    errorDiv.style.display = "block";

    // Hide error message after 5 seconds
    setTimeout(() => {
      if (errorDiv) {
        errorDiv.style.display = "none";
      }
    }, 5000);
  }

  function hideErrorMessage() {
    const errorDiv = document.querySelector(".error-message");
    if (errorDiv) {
      errorDiv.style.display = "none";
    }
  }

  // Global functions that can be called from HTML
  window.nextStep = function () {
    hideErrorMessage();

    if (currentStep === 1) {
      if (!validateStep1()) {
        return;
      }
    } else if (currentStep === 2) {
      if (!validateStep2()) {
        return;
      }
      populateConfirmationData();
    } else if (currentStep === 3) {
      // Final submission
      console.log("Form submitted successfully");
      // Here you would typically send data to server
    }

    currentStep++;
    if (currentStep > 4) {
      currentStep = 4;
    }

    showStep(currentStep);
    updateStepProgress();
  };

  window.prevStep = function () {
    hideErrorMessage();

    currentStep--;
    if (currentStep < 1) {
      currentStep = 1;
    }

    showStep(currentStep);
    updateStepProgress();
  };

  // Add event listeners for real-time validation
  document.addEventListener("input", function (e) {
    if (e.target.tagName === "INPUT" || e.target.tagName === "SELECT") {
      e.target.classList.remove("error");
    }
  });

  document.addEventListener("change", function (e) {
    if (e.target.type === "radio") {
      e.target.classList.remove("error");
    }
  });
});
