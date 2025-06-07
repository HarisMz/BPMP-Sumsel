function destroyBanner() {
    $(this).closest('.banner').removeClass('active').delay(300).slideUp(300, function() {
        $(this).remove();
        if ($('body').find('.banner-buffer').length > 0) {
            if ($('.banner-buffer').find('.banner').length == 0) {
                $('.banner-buffer').remove();
            }
        }
    });
}

function createBanner(options) {
    event.preventDefault();
    const {
        style = 'default',
        title = '',
        icon = '',
        content = '',
        buttons = [],
        links = [],
        hasclose = true
    } = options;

    const allowedStyles = ['default', 'success', 'critical', 'informational', 'warning'];
    const bannerStyle = allowedStyles.includes(style) ? style : 'default';

    const closeButton = hasclose ? '<div class="close"></div>' : '';

    const buttonHTML = buttons.length ? buttons.map(button => 
        `<a href="${button.target ? `${button.target}` : '#'}" ${button.newtab ? 'target="_blank"' : ''} class="button secondary small" ${button.action ? `id="${button.action}"` : ''}>${button.label}</a>`
    ).join('') : '';

    const linkHTML = links.length ? links.map(link => 
        `<a href="${link.target ? `${link.target}` : '#'}" ${link.newtab ? 'target="_blank"' : ''} class="link secondary noline" ${link.action ? `id="${link.action}"` : ''}>${link.label}</a>`
    ).join('') : '';

    const bannerHTML = `
    ${createElement('div', `banner ${bannerStyle}`, `
        ${createElement('div', 'banner-head', `
            ${closeButton}
            ${createElement('div', 'title', title, icon ? `data-icon="${icon}"` : '')}
        `)}
        ${createElement('div', 'banner-body', `
            ${createElement('div', 'description', content)}
            ${createElement('div', 'action', `
                ${buttonHTML}
                ${linkHTML}
            `)}
        `)}
    `)}`;

    const $bannerElement = $(bannerHTML);

    if ($('body').find('.banner-buffer').length == 0) {
        $('body').append('<div class="banner-buffer"></div>');
    }

    $('body .banner-buffer').append($bannerElement);
    setTimeout(function() {$bannerElement.addClass('active')}, 0);

}

$(document).ready(function() {

    $(document).on('click', '.call-banner', function(event) {
        event.preventDefault();
        const options = JSON.parse($(this).attr('data-banner'));
        createBanner(options);
    });

    $(document).on('click', '.banner .close, .banner #close', function() {
        event.preventDefault();
        destroyBanner.call(this);
    });

    $(document).on('click', '.banner .button, .banner .link', function(event) {
        if ($(this).attr('href') === '#' && $(this).is('a')) {
            event.preventDefault();
        };
    });

});