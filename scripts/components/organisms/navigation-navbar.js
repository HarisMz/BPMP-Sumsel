let isAnimating = false;

function showMenu() {
  const $mobileMenu = $(".header .menu.is-mobile");
  const $hamburger = $(".header .mobile-menu");
  $("body").css("overflow", "hidden");
  $hamburger.addClass("open");
  $mobileMenu.addClass("open").slideDown(300).css("display", "flex");
}

function hideMenu() {
  const $mobileMenu = $(".header .menu.is-mobile");
  const $hamburger = $(".header .mobile-menu");
  $("body").css("overflow", "auto");
  $hamburger.removeClass("open");
  $mobileMenu.removeClass("open").slideUp(300).css("display", "flex");
  $mobileMenu
    .find(".dropdown")
    .next(".dropdown-wrapper")
    .find("> .list")
    .slideUp(300);
  $mobileMenu.find(".dropdown").removeClass("open");
}

function toggleMenu() {
  const $mobileMenu = $(".header .menu.is-mobile");
  const $hamburger = $(".header .mobile-menu");
  if ($mobileMenu.hasClass("open")) {
    hideMenu();
  } else {
    showMenu();
  }
}

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

function checkMobile() {
  if (window.matchMedia("(max-width: 1240px)").matches) {
    // MOBILE
    $(".header .menu")
      .find(".dropdown")
      .next(".dropdown-wrapper")
      .find("> .list")
      .hide();
    $(".header .menu").find(".dropdown").removeClass("open");
    $(".header .mobile-menu").removeClass("open");
    $(".header .menu").removeClass("open").hide();
    $(".header .menu").addClass("is-mobile");
    $(".item.dropdown, .list-item.dropdown").each(function () {
      $(this).find(".dropdown-wrapper").first().insertAfter($(this));
    });

    $(".menu.is-mobile .dropdown").on("click", function () {
      if (isAnimating) return;
      isAnimating = true;
      $(this).next(".dropdown-wrapper").find("> .list").slideToggle(300);
      $(this).toggleClass("open");
      setTimeout(function () {
        isAnimating = false;
      }, 300);
    });

    $(".header .mobile-menu").on("click", function () {
      if (isAnimating) return;
      isAnimating = true;
      toggleMenu();
      setTimeout(function () {
        isAnimating = false;
      }, 300);
    });

    $(".menu .dropdown-wrapper .list").hide();
  } else {
    // DESKTOP
    $(".header .menu")
      .find(".dropdown")
      .next(".dropdown-wrapper")
      .find("> .list")
      .show();
    $(".header .menu").find(".dropdown").removeClass("open");
    $(".header .mobile-menu").removeClass("open");
    $(".header .menu").removeClass("open").show();
    $(".header .menu").removeClass("is-mobile");
    $(".dropdown-wrapper").each(function () {
      $(this).appendTo($(this).prev());
    });

    $(".menu.is-mobile .dropdown").off();

    $(".header .mobile-menu").off();

    $(".menu .dropdown-wrapper .list").show();
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

  $(
    ".header .menu .item:not(.dropdown), .header .menu .list-item:not(.dropdown)"
  ).on("click", hideMenu);

  $(window).on("scroll", function () {
    checkHeaderSticky();
    // checkHeaderBackgroundColor();
  });
});
