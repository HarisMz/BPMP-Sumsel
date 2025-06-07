function initBreadcrumbbar() {
    $('.breadcrumb .item a').click(function(e) {
        var hrefValue = $(this).attr('href');
        if (hrefValue == '#' || hrefValue == undefined || hrefValue == '') {
            e.preventDefault();
        }
    });

    function addBreadcrumb(title, url) {
        $('#breadcrumb .item').removeClass('active');
        const newItem = `<li class="item"><a href="${url}">${title}</a></li>`;
        $('#breadcrumb ul').append(newItem);
        $('#breadcrumb .item').last().addClass('active');
    }

    $('#breadcrumb .item').last().addClass('active');

    var breadcrumbItems = $('#breadcrumb.collapsed ul li');
    var maxItems = 6;
    var ellipsisText = '';

    if (breadcrumbItems.length > maxItems) {
        breadcrumbItems.slice(1, breadcrumbItems.length - 2).each(function() {
            ellipsisText += `<a href='${$(this).find('a').attr('href')}' class='list-item'><li>${$(this).text()}</li></a>`;
            $(this).remove();
        });

        $(`<li class="item">
            <div class="bc-more tooltip click" data-tooltip="<ul class='list slim'>${ellipsisText}</ul>" data-tooltip-position="bottom"></div>
        </li>`).insertAfter(breadcrumbItems.first());

    }
}

$(document).ready(function() {

    initBreadcrumbbar();

});
