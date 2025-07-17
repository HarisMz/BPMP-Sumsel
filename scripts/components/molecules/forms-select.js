$(document).ready(function () {
  // Fungsi resize selector berdasarkan teks terpanjang
  function adjustSelectWidth($select) {
    const $selector = $select.find(".selector");
    const $options = $select.find(".option");

    const temp = $("<div></div>")
      .css({
        position: "absolute",
        visibility: "hidden",
        whiteSpace: "nowrap",
        fontSize: $selector.css("font-size"),
        fontFamily: $selector.css("font-family"),
        fontWeight: $selector.css("font-weight"),
        padding: $selector.css("padding"),
        border: $selector.css("border"),
      })
      .appendTo("body");

    let maxWidth = 0;
    $options.each(function () {
      const text = $(this).text().trim();
      temp.text(text);
      const width = temp.outerWidth();
      if (width > maxWidth) maxWidth = width;
    });

    temp.remove();

    // Tambahkan space untuk ikon dropdown
    const finalWidth = maxWidth + 12;

    $selector.css("width", finalWidth);
    $select.find(".options").css("min-width", finalWidth);
    $select.attr("data-resized", "true"); // Penanda agar tidak diresize ulang
  }

  // Resize otomatis jika ada tambahan opsi (1x saja)
  const observer = new MutationObserver((mutations) => {
    $(".select.adjust").each(function () {
      const $select = $(this);
      const alreadyResized = $select.attr("data-resized") === "true";
      const hasOptions = $select.find(".option").length > 0;
      if (!alreadyResized && hasOptions) {
        adjustSelectWidth($select);
      }
    });
  });

  // Pantau perubahan DOM pada semua komponen select
  $(".select .options").each(function () {
    observer.observe(this, {
      childList: true,
      subtree: false,
    });
  });

  // Jalankan sekali saat awal load untuk isi default
  $(".select.adjust").each(function () {
    $(this).css("width", "fit-content");
    $(this).find(".selector").css("width", "auto");
    adjustSelectWidth($(this));
  });

  // Interaksi click handler (original code)
  $(".select .selector").click(function (event) {
    event.stopPropagation();
    if (!$(this).parent().hasClass("disabled")) {
      $(this).siblings(".options").slideToggle(300);
      $(this).parent().toggleClass("open");
    }
  });

  $(".select .option").click(function () {
    if (!$(this).hasClass("disabled")) {
      const value = $(this).attr("data-value") || $(this).attr("value");
      const valueHTML = $(this).html();
      $(this).parent().siblings(".selector").html(valueHTML);
      $(this).parent().siblings(".selector").attr("data-value", value);
      $(this).siblings().removeClass("selected");
      $(this).addClass("selected");
      $(this).parent().slideUp(300);
      $(this).parent().parent().removeClass("open");
    }
  });

  $(".select .option.selected").each(function () {
    const value = $(this).attr("data-value") || $(this).attr("value");
    const valueHTML = $(this).html();
    $(this).parent().siblings(".selector").html(valueHTML);
    $(this).parent().siblings(".selector").attr("data-value", value);
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");
  });

  $(document).on("click", function (event) {
    if (!$(event.target).closest(".select").length) {
      $(".select.open .options").slideUp(300);
      $(".select").removeClass("open");
    }
  });
});
