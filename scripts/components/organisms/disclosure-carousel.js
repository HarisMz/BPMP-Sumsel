const debounce = (func, wait) => {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
};

function checkCarouselBackgroundColor($carousel) {
  requestAnimationFrame(() => {
    const $activeCarouselItem = $carousel.find(".carousel-item.active").first();
    if (!$activeCarouselItem.length) return;

    if ($activeCarouselItem.hasClass("darken")) {
      $carousel.addClass("dark");
      return;
    }

    const carouselItemBgColor = $activeCarouselItem.css("background-color");
    const rgbCarousel = carouselItemBgColor.match(/\d+/g);

    if (rgbCarousel) {
      const [rCarousel, gCarousel, bCarousel] = rgbCarousel.map(Number);
      const luminanceCarousel =
        0.299 * rCarousel + 0.587 * gCarousel + 0.114 * bCarousel;

      $carousel.toggleClass("dark", luminanceCarousel < 128);
    }
  });
}

function initCarousel() {
  $(".carousel").each(function () {
    if (this.dataset.initialized) return;
    this.dataset.initialized = "true";

    const $carousel = $(this);
    const $carouselInner = $carousel.find(".carousel-inner");
    let $items = $carouselInner.children(".carousel-item");
    const initialVisibleCount =
      parseInt($carousel.data("carousel-visible")) || 1;
    let visibleCount = initialVisibleCount;
    const slidingSpan =
      parseInt($carousel.data("sliding-span")) || visibleCount;
    const margin = -1 * parseInt($carouselInner.css("margin-right"), 10);
    let currentIndex = 0;
    const isLooping = $carousel.hasClass("loop");
    const $originalItems = $items.slice(0, visibleCount);
    let isDragging = false;
    let startX, startTranslate, startY;
    let dragDirectionLocked = false;
    const dragThreshold = 100;
    let dragDistance = 0;
    let autoplayInterval;
    const autoplayDuration =
      parseInt($carousel.data("autoplay-duration")) || 3000;
    const isAutoplayEnabled = $carousel.hasClass("autoplay");
    const transitionDuration =
      parseInt($carousel.data("transition-duration")) || 300;
    const transitionTimingFunction =
      $carousel.data("transition-timing-function") || "ease";
    const isDraggable = $carousel.hasClass("draggable");

    // Tambahkan flag untuk mencegah multiple execution
    let isUpdating = false;
    let isInitialized = false;

    function updateVisibleCount() {
      visibleCount =
        window.innerWidth <= 768
          ? 1
          : window.innerWidth <= 1024
          ? Math.round(initialVisibleCount / 2)
          : initialVisibleCount;
    }

    updateVisibleCount();

    function setTransition(duration = transitionDuration) {
      $carouselInner.css(
        "transition",
        `transform ${duration}ms ${transitionTimingFunction}`
      );
    }

    if (isLooping) {
      $items.slice(0, visibleCount).clone().appendTo($carouselInner);
      $items.slice(-visibleCount).clone().prependTo($carouselInner);
      $items = $carouselInner.children(".carousel-item");

      $carouselInner.css("transition", "none");
      setPosition(visibleCount);
      $carouselInner[0].offsetHeight;
      setTimeout(() => setTransition(), 0);
    }

    // $items.removeClass("active");
    // $originalItems.addClass("active");

    function updateItemWidthAndPosition() {
      updateVisibleCount();

      // GUNAKAN clientWidth atau scrollWidth untuk mendapatkan area konten penuh
      const carouselWidth = $carousel[0].clientWidth; // atau gunakan scrollWidth
      // Alternatif: const carouselWidth = $carousel.width(); // content width saja

      const totalMargin = Math.abs(margin) * (visibleCount - 1);
      const hasCard = $carousel.hasClass("has-card");

      let itemWidth;
      if ($carousel.is("[data-peek]")) {
        const peekValue = parseInt($carousel.attr("data-peek"), 10) || 0;
        itemWidth = (carouselWidth - totalMargin) / visibleCount;
        // peekValue digunakan sebagai persen dari itemWidth
        $carouselInner.children(".carousel-item").css({
          width: `calc(${itemWidth}px - (${peekValue}/100 * ${itemWidth}px))`,
          "margin-right": `${Math.abs(margin)}px`,
          padding: "0",
        });
      } else {
        itemWidth = (carouselWidth - totalMargin) / visibleCount;
        $carouselInner.children(".carousel-item").css({
          width: `${itemWidth}px`,
          "margin-right": `${Math.abs(margin)}px`,
        });
      }

      console.log("Item width set to:", itemWidth);

      setPosition(currentIndex + (isLooping ? visibleCount : 0));
    }

    // function updateItemWidthAndPosition() {
    //   updateVisibleCount();

    //   const carouselWidth = $carousel[0].clientWidth;
    //   const totalMargin = Math.abs(margin) * (visibleCount - 1);
    //   const hasCard = $carousel.hasClass("has-card");

    //   // Hitung lebar item dalam persen
    //   const totalContentWidth = carouselWidth - totalMargin;
    //   let itemWidthPercent = 100 / visibleCount;

    //   if ($carousel.is("[data-peek]")) {
    //     const peekValue = parseInt($carousel.attr("data-peek"), 10) || 0;
    //     const adjustedPercent = itemWidthPercent * (1 - peekValue / 100);
    //     $carouselInner.children(".carousel-item").css({
    //       width: `${adjustedPercent}%`,
    //       "margin-right": `${(margin / carouselWidth) * 100}%`,
    //       padding: "0",
    //     });
    //   } else {
    //     $carouselInner.children(".carousel-item").css({
    //       width: `${itemWidthPercent}%`,
    //       "margin-right": `${(margin / carouselWidth) * 100}%`,
    //     });
    //   }

    //   console.log("Item width (in %):", itemWidthPercent);

    //   setPosition(currentIndex + (isLooping ? visibleCount : 0));
    // }

    function setPosition(index) {
      const itemWidthPx =
        $carouselInner.children(".carousel-item").outerWidth() + margin;
      $carouselInner.css("transform", `translateX(-${itemWidthPx * index}px)`);
    }

    const wheelHandler = debounce((e) => {
      if (Math.abs(e.originalEvent.deltaX) > 0) {
        if (
          Math.abs(e.originalEvent.deltaX) > Math.abs(e.originalEvent.deltaY)
        ) {
          e.preventDefault();
          const direction = e.originalEvent.deltaX > 0 ? "next" : "prev";
          slideToIndex(direction);
        }
      }
    }, 200);

    $carousel.on("wheel", wheelHandler);

    let $prevButton, $nextButton;
    if ($carousel.hasClass("arrow")) {
      $prevButton = $(
        '<a class="carousel-nav prev" href="javascript:void(0);"></a>'
      );
      $nextButton = $(
        '<a class="carousel-nav next" href="javascript:void(0);"></a>'
      );

      $carousel.wrap('<div class="carousel-wrapper"></div>');

      const $wrapper = $carousel.closest(".carousel-wrapper");

      $wrapper.append($prevButton).append($nextButton);

      $prevButton.on("click", () => slideToIndex("prev"));
      $nextButton.on("click", () => slideToIndex("next"));
    }

    let $dotsContainer;
    if ($carousel.hasClass("dots")) {
      const totalItems = isLooping
        ? $items.length - 2 * visibleCount
        : $items.length;
      const totalDots = Math.ceil(totalItems / visibleCount);

      $dotsContainer = $('<div class="carousel-dots"></div>');
      for (let i = 0; i < totalDots; i++) {
        const $dot = $('<div class="carousel-dot"></div>').data("index", i);
        $dot.on("click", function () {
          slideToIndex(null, $(this).data("index") * visibleCount);
        });
        $dotsContainer.append($dot);
      }

      $carousel.append($dotsContainer);
      updateDots(0);
    }

    function slideToIndex(direction, specificIndex) {
      updateVisibleCount();
      const itemCount = isLooping
        ? $items.length - 2 * visibleCount
        : $items.length;
      const oldIndex = currentIndex;

      if (specificIndex !== undefined) {
        currentIndex = isLooping
          ? specificIndex
          : Math.min(Math.max(specificIndex, 0), itemCount - visibleCount);
      } else {
        currentIndex += direction === "next" ? slidingSpan : -slidingSpan;
        if (!isLooping) {
          currentIndex = Math.min(
            Math.max(currentIndex, 0),
            itemCount - visibleCount
          );
        }
      }

      if (oldIndex !== currentIndex || isLooping) {
        checkCarouselBackgroundColor($carousel);
        checkHeaderBackgroundColor();

        setTransition();
        setPosition(currentIndex + (isLooping ? visibleCount : 0));

        setTimeout(() => {
          if (isLooping) {
            if (currentIndex < 0 || currentIndex >= itemCount) {
              $carouselInner.css("transition", "none");
              currentIndex = (currentIndex + itemCount) % itemCount;
              setPosition(currentIndex + visibleCount);
              $carouselInner[0].offsetHeight;
              setTransition();
            }
          }

          updateActiveItems();
          if ($dotsContainer) updateDots(currentIndex);
          updateNavigationButtons();
          checkCarouselBackgroundColor($carousel);
          checkHeaderBackgroundColor();
        }, transitionDuration);
      }
    }

    // Improved debounced function
    const debouncedUpdateItemWidthAndPosition = debounce(() => {
      if (!isUpdating) {
        updateItemWidthAndPosition();
      }
    }, 250);

    // Setup resize listener
    $(window).on("resize", debouncedUpdateItemWidthAndPosition);

    // Remove active class from all items
    $items.removeClass("active");
    $originalItems.addClass("active");

    // Initial width and position setup dengan delay
    setTimeout(() => {
      if (!isUpdating) {
        updateItemWidthAndPosition();
      }
    }, 100);

    function startAutoplay() {
      if (isAutoplayEnabled && !autoplayInterval) {
        autoplayInterval = setInterval(
          () => slideToIndex("next"),
          autoplayDuration
        );
      }
    }

    function stopAutoplay() {
      clearInterval(autoplayInterval);
      autoplayInterval = null;
    }

    function pauseCarousel() {
      stopAutoplay();
      $carouselInner.css("transition", "none");
    }

    function resumeCarousel() {
      setTransition();
      startAutoplay();
    }

    if (typeof EventSystem !== "undefined") {
      EventSystem.subscribe("overlayOpened", pauseCarousel);
      EventSystem.subscribe("overlayClosed", resumeCarousel);
    }

    if (isAutoplayEnabled) {
      startAutoplay();
      $carousel.on("mouseenter", stopAutoplay).on("mouseleave", startAutoplay);
    }

    function updateActiveItems() {
      $items.removeClass("active");
      const startIndex = isLooping
        ? currentIndex < 0
          ? $items.length - visibleCount * 2 + currentIndex
          : currentIndex >= $items.length - visibleCount
          ? visibleCount + (currentIndex % visibleCount)
          : currentIndex + visibleCount
        : currentIndex;

      for (let i = startIndex; i < startIndex + visibleCount; i++) {
        $items.eq(i % $items.length).addClass("active");
      }

      checkCarouselBackgroundColor($carousel);
      checkHeaderBackgroundColor();
    }

    function updateNavigationButtons() {
      if ($prevButton && $nextButton) {
        if (isLooping) {
          $prevButton.fadeIn(150);
          $nextButton.fadeIn(150);
        } else {
          $prevButton.toggle(currentIndex > 0);
          $nextButton.toggle(currentIndex < $items.length - visibleCount);
        }
      }
    }

    function updateDots(index) {
      if ($dotsContainer) {
        const itemCount = isLooping
          ? $items.length - 2 * visibleCount
          : $items.length;
        const activeDotIndex = Math.floor(
          ((index + itemCount) % itemCount) / visibleCount
        );
        $dotsContainer
          .children(".carousel-dot")
          .removeClass("active")
          .eq(activeDotIndex)
          .addClass("active");
      }
    }

    updateNavigationButtons();
    checkCarouselBackgroundColor($carousel);
    checkHeaderBackgroundColor();

    if (isDraggable) {
      $carousel.on("mousedown touchstart", function (e) {
        if ($(e.target).closest(".carousel-nav, .carousel-dots").length) return;

        isDragging = false;
        dragDistance = 0;
        dragDirectionLocked = false;
        startX =
          e.type === "mousedown" ? e.pageX : e.originalEvent.touches[0].pageX;
        startY =
          e.type === "mousedown" ? e.pageY : e.originalEvent.touches[0].pageY;
        startTranslate = getTranslateX($carouselInner);
        $carouselInner.css("transition", "none");
        $carousel.addClass("dragging");

        stopAutoplay();
      });

      $(document).on("mousemove touchmove", function (e) {
        if (!$carousel.hasClass("dragging")) return;

        const currentX =
          e.type === "mousemove" ? e.pageX : e.originalEvent.touches[0].pageX;
        const currentY =
          e.type === "mousemove" ? e.pageY : e.originalEvent.touches[0].pageY;
        const deltaX = currentX - startX;
        const deltaY = currentY - startY;

        if (!dragDirectionLocked) {
          if (Math.abs(deltaX) > 5 || Math.abs(deltaY) > 5) {
            dragDirectionLocked = true;
            if (Math.abs(deltaX) > Math.abs(deltaY)) {
              e.preventDefault();
              dragDistance = deltaX;
            } else {
              $carousel.removeClass("dragging");
              return;
            }
          }
        } else if (Math.abs(deltaX) > Math.abs(deltaY)) {
          e.preventDefault();
          dragDistance = deltaX;
        } else {
          return;
        }

        const maxDrag = $carousel.width() * 0.2;
        if (!isLooping) {
          if (currentIndex === 0 && dragDistance > 0) {
            dragDistance = Math.min(dragDistance, maxDrag);
          } else if (
            currentIndex >= $items.length - visibleCount &&
            dragDistance < 0
          ) {
            dragDistance = Math.max(dragDistance, -maxDrag);
          }
        }

        $carouselInner.css(
          "transform",
          `translateX(${startTranslate + dragDistance}px)`
        );
      });

      $(document).on("mouseup touchend", function (e) {
        if (!$carousel.hasClass("dragging")) return;

        $carouselInner.css(
          "transition",
          `transform ${transitionDuration}ms ${transitionTimingFunction}`
        );
        if (Math.abs(dragDistance) > $carousel.width() * 0.2) {
          const slideWidth = $carousel.width() / visibleCount;
          const slidesToMove = Math.round(Math.abs(dragDistance) / slideWidth);
          const direction = dragDistance > 0 ? "prev" : "next";
          slideToIndex(
            direction,
            currentIndex + (direction === "next" ? slidesToMove : -slidesToMove)
          );
        }

        setPosition(currentIndex + (isLooping ? visibleCount : 0));

        $carousel.removeClass("dragging");

        if (Math.abs(dragDistance) <= dragThreshold) {
          $(e.target).trigger("click");
        }

        dragDistance = 0;
        startAutoplay();
      });

      $carousel.on("click", "a", function (e) {
        if (isDragging) {
          e.preventDefault();
        }
      });
    }
  });

  $(".carousel:has(.card)").addClass("has-card");
}

$(document).ready(initCarousel);
