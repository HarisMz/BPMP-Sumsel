function initCollapsible() {
  $('.collapsible-header').click(function() {
    const $parent = $(this).parent();

    if ($parent.hasClass('accordion')) {
      // Close other open accordions
      $parent.siblings('.accordion').removeClass('open').find('.collapsible-content').slideUp(300);
      // Toggle the current accordion
      if ($parent.hasClass('open')) {
        $parent.removeClass('open');
        $parent.find('.collapsible-content').slideUp(300);
      } else {
        $parent.toggleClass('open');
        $parent.find('.collapsible-content').slideToggle(300);
      }
    } else {
      // Toggle the current collapsible
      $parent.toggleClass('open');
      $parent.find('.collapsible-content').slideToggle(300);
    }
  });
  
  $('.first-open').addClass('open').find('.collapsible-content').slideDown(300);
}

$(document).ready(function() {
  initCollapsible();
});