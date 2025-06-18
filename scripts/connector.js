document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".connector").forEach(function (el) {
    // Mengambil data attributes
    const width = el.dataset.width;
    const height = el.dataset.height;
    const top = el.dataset.top;
    const left = el.dataset.left;

    // Menghubungkan ke custom properties
    if (width) {
      el.style.setProperty("--connector-width", width);
    }
    if (height) {
      el.style.setProperty("--connector-height", height);
    }
    if (top) {
      el.style.setProperty("--connector-top", top);
    }
    if (left) {
      el.style.setProperty("--connector-left", left);
    }
  });
});
