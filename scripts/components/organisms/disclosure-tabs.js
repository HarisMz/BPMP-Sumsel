let currentPath = window.location.pathname;

function initTabs() {
  $(".tabs").each(function () {
    const $tabs = $(this);
    const $menu = $tabs.find(".menu");
    const $items = $menu.find(".item");
    const $contents = $tabs.find(".content .item");

    const $line = $('<div class="active-line"></div>');

    if (!$menu.hasClass("full-border")) {
      $menu.append($line);
    }

    const $scrollLeftIndicator = $(
      '<div class="scroll-indicator scroll-left"></div>'
    );
    const $scrollRightIndicator = $(
      '<div class="scroll-indicator scroll-right"></div>'
    );
    $tabs.append($scrollLeftIndicator).append($scrollRightIndicator);

    function checkScrollIndicators() {
      const scrollLeft = $menu.scrollLeft();
      const scrollWidth = $menu[0].scrollWidth;
      const clientWidth = $menu[0].clientWidth;
      $scrollLeftIndicator.height($menu.height());
      $scrollRightIndicator.height($menu.height());
      $scrollLeftIndicator.css("margin-top", $menu.position().top);
      $scrollRightIndicator.css("margin-top", $menu.position().top);

      if (scrollLeft > 0) {
        $scrollLeftIndicator.addClass("shown");
      } else {
        $scrollLeftIndicator.removeClass("shown");
      }

      if (scrollLeft + clientWidth < scrollWidth) {
        $scrollRightIndicator.addClass("shown");
      } else {
        $scrollRightIndicator.removeClass("shown");
      }
    }

    let isDragging = false;
    let startX;
    let scrollLeft;

    $menu.on("mousedown", function (e) {
      e.preventDefault();
      isDragging = true;
      startX = e.pageX - $menu.offset().left;
      scrollLeft = $menu.scrollLeft();
      $menu.addClass("dragging");
    });

    $(document).on("mousemove", function (e) {
      if (!isDragging) return;
      e.preventDefault();
      const x = e.pageX - $menu.offset().left;
      const walk = (x - startX) * 2;
      $menu.scrollLeft(scrollLeft - walk);
    });

    $(document).on("mouseup", function () {
      isDragging = false;
      $menu.removeClass("dragging");
    });

    function updateLine($activeItem) {
      const isMobile = $(window).width() <= 768;
      const menuScrollLeft = $menu.scrollLeft();

      if (isMobile) {
        $line.css({
          top: "unset",
          left: $activeItem.position().left + menuScrollLeft,
          width: $activeItem.outerWidth(),
          height: "var(--unit-2)",
          "border-top-left-radius": "var(--rounded-full)",
          "border-top-right-radius": "var(--rounded-full)",
        });
      } else {
        const isVertical = $tabs.hasClass("vertical");
        if (isVertical) {
          $line.css({
            top: $activeItem.position().top,
            left: "unset",
            height: $activeItem.outerHeight(),
            width: "var(--unit-2)",
            "border-top-left-radius": "var(--rounded-full)",
            "border-bottom-left-radius": "var(--rounded-full)",
          });
        } else {
          $line.css({
            left: $activeItem.position().left,
            width: $activeItem.outerWidth(),
            height: "var(--unit-2)",
            "border-top-left-radius": "var(--rounded-full)",
            "border-top-right-radius": "var(--rounded-full)",
          });
        }
      }
    }

    function getTabUrlName($item) {
      let tabName = $item.attr("data-linkto");
      if (!tabName) {
        tabName = $item.text().trim();
      }
      return tabName.toLowerCase().replace(/\s+/g, "-");
    }

    function updateURL(urlTabName) {
      let currentPathNew = currentPath;
      if (!currentPathNew.endsWith("/")) {
        currentPathNew += "/";
      }
      const pathSegments = currentPathNew
        .split("/")
        .filter((segment) => segment);
      const lastSegment = pathSegments[pathSegments.length - 1];
      const matchingTab = $('.item[data-linkto="' + lastSegment + '"]');
      if (matchingTab.length > 0) {
        pathSegments.pop();
      }
      if (urlTabName) {
        pathSegments[pathSegments.length] = urlTabName;
      }
      const newPath = "/" + pathSegments.join("/") + "/";
      history.replaceState(null, "", newPath);
    }

    function generateDataLinkto(text) {
      return text.toLowerCase().replace(/\s+/g, "-");
    }

    $items.each(function () {
      const $item = $(this);
      if (!$item.attr("data-linkto")) {
        const itemText = $item.text().trim();
        const dataLinktoValue = generateDataLinkto(itemText);
        $item.attr("data-linkto", dataLinktoValue);
      }

      const dataLinkto = $item.attr("data-linkto");
      const baseHref = window.location.pathname
        .split("/")
        .filter(Boolean)
        .slice(0, -1)
        .join("/");
      const newHref = `/${baseHref}/${dataLinkto}/`;
      $item.attr("href", newHref);
    });

    let isAnimating = false;

    $items.click(function (e) {
      e.preventDefault();
      const $clickedItem = $(this);

      if ($clickedItem.hasClass("active")) return;

      const clickedId = $clickedItem.attr("id");
      const targetId = "#" + clickedId.replace("menu", "content");
      const $targetContent = $tabs.find(targetId);

      if ($tabs.hasClass("one-page")) {
        const menuId = $clickedItem.attr("id");
        const targetContentId = menuId.replace("menu", "content");
        const $anchorTarget = $("#" + targetContentId);

        if ($anchorTarget.length) {
          requestAnimationFrame(() => {
            const rootStyles = getComputedStyle(document.documentElement);
            const siteHeader = parseInt(
              rootStyles.getPropertyValue("--site-header"),
              10
            );
            const sitePadding = parseInt(
              rootStyles.getPropertyValue("--site-padding"),
              10
            );
            const unit9 = parseInt(
              rootStyles.getPropertyValue("--unit-12"),
              10
            );
            const scrollOffset =
              $anchorTarget.offset().top - siteHeader - unit9;
            window.scrollTo({ top: scrollOffset, behavior: "auto" });
          });
        }

        $items.removeClass("active");
        $clickedItem.addClass("active");
        updateLine($clickedItem);
        return;
      }

      if ($tabs.is(":animated") || isAnimating) return;
      isAnimating = true;

      const $activeContent = $contents.filter(":visible");

      $items.removeClass("active");
      $clickedItem.addClass("active");

      $activeContent.stop(true, true).fadeTo(60, 0, function () {
        $activeContent.slideUp(120, function () {
          $(this).css({ opacity: "0" });
          $targetContent
            .stop(true, true)
            .css({ opacity: "0" })
            .slideDown(120, function () {
              $(this).fadeTo(60, 1, function () {
                isAnimating = false;
              });
            });
        });
      });

      updateLine($clickedItem);
      setTimeout(() => {
        updateLine($clickedItem);
      }, 300);

      if (!$tabs.hasClass("no-update")) {
        const urlTabName = getTabUrlName($clickedItem);
        updateURL(urlTabName);
      }

      setTimeout(() => {
        isAnimating = false;
      }, 300);
    });

    if (!$tabs.hasClass("one-page")) {
      $contents.hide();
    }

    if ($tabs.hasClass("one-page")) {
      $contents.show();
    }

    const currentPath = window.location.pathname;
    const currentTabName = currentPath.split("/").filter(Boolean).pop();

    if (currentTabName) {
      const $matchingTab = $items.filter(function () {
        return getTabUrlName($(this)) === currentTabName;
      });

      if ($matchingTab.length) {
        const matchingId = $matchingTab.attr("id");
        const targetId = "#" + matchingId.replace("menu", "content");

        $items.removeClass("active");
        $matchingTab.addClass("active");

        if (!$tabs.hasClass("one-page")) {
          const $matchingContent = $tabs.find(targetId);
          $contents.hide();
          $matchingContent.show();
        }

        updateLine($matchingTab);
        setTimeout(() => {
          updateLine($matchingTab);
        }, 300);
      } else {
        const $firstItem = $items.first();
        $firstItem.addClass("active");

        if (!$tabs.hasClass("one-page")) {
          const $firstContent = $contents.first();
          $contents.hide();
          $firstContent.show();
        }

        updateLine($firstItem);
        setTimeout(() => {
          updateLine($firstItem);
        }, 300);
      }
    } else {
      const $firstItem = $items.first();
      $firstItem.addClass("active");

      if (!$tabs.hasClass("one-page")) {
        const $firstContent = $contents.first();
        $contents.hide();
        $firstContent.show();
      }

      updateLine($firstItem);
      setTimeout(() => {
        updateLine($firstItem);
      }, 300);
    }

    function updateLineOnScrollResize() {
      const $activeItem = $items.filter(".active");
      updateLine($activeItem);
    }

    checkScrollIndicators();

    $(window).on("scroll resize", function () {
      updateLineOnScrollResize();
      checkScrollIndicators();
    });
    $menu.on("scroll", function () {
      updateLineOnScrollResize();
      checkScrollIndicators();
    });
  });
}

$(document).ready(function () {
  initTabs();
});
