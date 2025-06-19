$(document).ready(function () {
  $(document).on("click", ".list-item", function (e) {
    if ($(this).is("a")) {
      const href = $(this).attr("href");
      if (href && href !== "#") {
        return true;
      } else {
        e.preventDefault();
      }
    }
  });
});
