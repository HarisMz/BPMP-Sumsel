let isAnimating = false;

function checkHeaderBackgroundColor() {
  requestAnimationFrame(function () {
    var $header = $(".header");
    var $main = $("main");
    if (!$header.length || !$main.length) return;

    var $sections = $main.children("section");

    function calculateLuminance(rgb) {
      return 0.299 * rgb[0] + 0.587 * rgb[1] + 0.114 * rgb[2];
    }

    function getBackgroundColor($element) {
      var bgColor = $element.css("background-color");
      if (bgColor === "transparent" || bgColor === "rgba(0, 0, 0, 0)") {
        return "rgb(255, 255, 255)";
      }
      return bgColor;
    }

    function setHeaderClass(bgColor) {
      var rgb = bgColor.match(/\d+/g);
      if (rgb) {
        var luminance = calculateLuminance(rgb);
        $header.toggleClass("dark", luminance < 128);
      }
    }

    if (!$sections.length) {
      var mainBgColor = getBackgroundColor($main);
      setHeaderClass(mainBgColor);
      return;
    }

    var $firstSection = $sections.first();
    var $carousel = $firstSection.find(".carousel.full");

    if ($carousel.length) {
      var $activeCarouselItem = $carousel.find(".carousel-item.active").first();

      if ($activeCarouselItem.length) {
        if ($activeCarouselItem.hasClass("darken")) {
          $header.addClass("dark");
        } else {
          var carouselBgColor = getBackgroundColor($activeCarouselItem);
          setHeaderClass(carouselBgColor);
        }
      }
    } else {
      var sectionBgColor = getBackgroundColor($firstSection);

      if (sectionBgColor === "rgb(255, 255, 255)") {
        var mainBgColor = getBackgroundColor($main);
        setHeaderClass(mainBgColor);
      } else {
        setHeaderClass(sectionBgColor);
      }
    }
  });
}

function calculateLuminance(rgb) {
  var r = parseInt(rgb[0]);
  var g = parseInt(rgb[1]);
  var b = parseInt(rgb[2]);
  return 0.299 * r + 0.587 * g + 0.114 * b;
}

$(document).ready(function () {
  checkHeaderBackgroundColor();
  $(window).on("resize", checkHeaderBackgroundColor);
});

function updateHeaderBackgroundOnCarouselChange() {
  $(".carousel").on("slid.bs.carousel", function () {
    checkHeaderBackgroundColor();
  });
}

function checkHeaderSticky() {
  var scrollPos = $(window).scrollTop();
  if (scrollPos >= 0) {
    $(".header").addClass("is-sticky");
  } else {
    $(".header").removeClass("is-sticky");
  }
}

function checkWidth() {
  if ($(window).width() <= 1600) {
    $(".menu .item.dropdown").slice(-2).addClass("inverted");
  } else {
    $(".menu .item.dropdown").slice(-2).removeClass("inverted");
  }
}

// Update fungsi checkMobile
function checkMobile() {
  if (window.matchMedia("(max-width: 1240px)").matches) {
    // MOBILE
    $(".header .menu").addClass("is-mobile");
    $(".dropdown-wrapper .list").hide();

    $(".menu.is-mobile .dropdown").on("click", function () {
      if (isAnimating) return;
      isAnimating = true;

      const menuId = $(this).attr("data-mega-menu");
      $(`.dropdown-wrapper .list`).slideUp(300);
      $(`.dropdown-wrapper .list#${menuId}`).slideDown(300);
      $(".menu .dropdown").removeClass("open");
      $(this).addClass("open");

      setTimeout(() => (isAnimating = false), 300);
    });

    $(".header .mobile-menu").on("click", toggleMenu);
  } else {
    // DESKTOP
    $(".header .menu").removeClass("is-mobile");
    // $(".dropdown-wrapper").hide();
    // $(".dropdown-wrapper .list").hide();

    // Hover behavior for desktop
    $(".header .menu .item.dropdown").hover(
      function () {
        const menuId = $(this).attr("data-mega-menu");
        $(".dropdown-wrapper").stop(true, true).show();
        $(".dropdown-wrapper .list").removeClass("active");
        $(`#${menuId}`).addClass("active");
      },
      function () {
        $(".dropdown-wrapper")
          .delay(200)
          .queue(function (next) {
            if (!$(".dropdown-wrapper").is(":hover")) {
              $(this).hide();
            }
            next();
          });
      }
    );

    $(".dropdown-wrapper").hover(
      function () {
        $(this).show();
      },
      function () {
        $(this).hide();
      }
    );

    // Cleanup mobile events
    $(".menu.is-mobile .dropdown").off();
    $(".header .mobile-menu").off();
  }
}

// Update fungsi toggle menu
function toggleMenu() {
  const $mobileMenu = $(".header .menu.is-mobile");
  const $hamburger = $(".header .mobile-menu");

  if ($mobileMenu.hasClass("open")) {
    $("body").css("overflow", "auto");
    $hamburger.removeClass("open");
    $mobileMenu.removeClass("open").slideUp(300);
    $(".dropdown-wrapper .list").slideUp(300);
    $(".menu .dropdown").removeClass("open");
  } else {
    $("body").css("overflow", "hidden");
    $hamburger.addClass("open");
    $mobileMenu.addClass("open").slideDown(300);
  }
}

function prepareSlug(text) {
  text = text.replace(/&/g, "dan");
  text = text.replace(/\./g, "-");
  text = text.toLowerCase();
  text = text.replace(/[^a-z0-9]+/g, "-");
  text = text.replace(/^-+|-+$/g, "");
  return text;
}

$(document).ready(function () {
  $("li a").each(function () {
    $(this).attr(
      "data-slug",
      $(this).attr("data-slug") || prepareSlug($(this).text())
    );
    const bodyId = $("body").attr("id");
    const slug = $(this).attr("data-slug");
    if (slug === bodyId) {
      $(this).addClass("current");
      $(this).closest(".list-item.dropdown").addClass("current");
      $(this).closest(".item.dropdown").addClass("current");
    }
  });

  checkWidth();
  checkHeaderSticky();
  checkHeaderBackgroundColor();
  checkMobile();

  $(window).on("resize", function () {
    checkHeaderSticky();
    checkHeaderBackgroundColor();
    checkWidth();
    checkMobile();
  });

  // $(
  //   ".header .menu .item:not(.dropdown), .header .menu .list-item:not(.dropdown)"
  // ).on("click", hideMenu);

  $(window).on("scroll", function () {
    checkHeaderSticky();
    // checkHeaderBackgroundColor();
  });
});
