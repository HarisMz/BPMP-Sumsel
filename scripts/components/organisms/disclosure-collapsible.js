// function initCollapsible() {
//   $('.collapsible-header').click(function() {
//     const $parent = $(this).parent();

//     if ($parent.hasClass('accordion')) {
//       // Close other open accordions
//       $parent.siblings('.accordion').removeClass('open').find('.collapsible-content').slideUp(300);
//       // Toggle the current accordion
//       if ($parent.hasClass('open')) {
//         $parent.removeClass('open');
//         $parent.find('.collapsible-content').slideUp(300);
//       } else {
//         $parent.toggleClass('open');
//         $parent.find('.collapsible-content').slideToggle(300);
//       }
//     } else {
//       // Toggle the current collapsible
//       $parent.toggleClass('open');
//       $parent.find('.collapsible-content').slideToggle(300);
//     }
//   });

//   $('.first-open').addClass('open').find('.collapsible-content').slideDown(300);
// }

// $(document).ready(function() {
//   initCollapsible();
// });

function initCollapsible() {
  $(".collapsible-header").click(function () {
    const $parent = $(this).parent();
    const isType2 = $parent.hasClass("type-2") && $parent.hasClass("card");

    if ($parent.hasClass("accordion")) {
      // Tutup accordion lain yang terbuka
      $parent.siblings(".accordion.open").each(function () {
        const $sibling = $(this);
        $sibling.removeClass("open").find(".collapsible-content").slideUp(300);

        // Hapus separator jika type-2
        if ($sibling.hasClass("type-2") && $sibling.hasClass("card")) {
          $sibling.find(".separator-0.vertical.full").remove();
        }
      });

      if ($parent.hasClass("open")) {
        $parent.removeClass("open");
        $parent.find(".collapsible-content").slideUp(300);

        if (isType2) {
          $parent.find(".separator-0.vertical.full").remove();
        }
      } else {
        $parent.addClass("open");
        $parent.find(".collapsible-content").slideDown(300);

        if (isType2) {
          $('<div class="separator-0 vertical full"></div>').insertAfter(
            $parent.find(".collapsible-header").first()
          );
        }
      }
    } else {
      const isOpen = $parent.hasClass("open");
      $parent.toggleClass("open");
      $parent.find(".collapsible-content").slideToggle(300);

      if (isType2) {
        if (isOpen) {
          $parent.find(".separator-0.vertical.full").remove();
        } else {
          $('<div class="separator-0 vertical full"></div>').insertAfter(
            $parent.find(".collapsible-header").first()
          );
        }
      }
    }
  });

  $(".first-open").addClass("open").find(".collapsible-content").slideDown(300);

  // Tambahkan separator jika elemen pertama yang terbuka adalah type-2
  $(".first-open.type-2.card").each(function () {
    const $this = $(this);
    $('<div class="separator-0 vertical full"></div>').insertAfter(
      $this.find(".collapsible-header").first()
    );
  });
}

$(document).ready(function () {
  initCollapsible();
});
