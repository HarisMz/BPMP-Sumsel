function destroyDialog(duration=300, callback) {
    const $dialog = $('.overlay .dialog');
    if ($dialog.length) {
        $dialog.removeClass('open');
        setTimeout(function() {
            $dialog.remove();
            if (callback) callback();
        }, duration);
    } else if (callback) {
        callback();
    }
}

function createDialog(options) {

    hideMenu();
    event.preventDefault();
    destroyDialog(150, function() {
        const {
            style = 'default',
            size = 'fit',
            title = '',
            subtitle = '',
            content = '',
            buttons = [],
            hasclose = true,
            persistent = false,
            blur = true
        } = options;

        const allowedStyles = ['default', 'minimal'];
        const allowedSizes = ['fit', 'medium', 'large', 'fill', 'screen'];

        const dialogStyle = allowedStyles.includes(style) ? style : 'default';
        const dialogSize = allowedSizes.includes(size) ? size : 'fit';

        const headerContent = title ? `
            ${createElement('h2', 'dialog-title', title)}
            ${subtitle ? createElement('p', 'dialog-subtitle', subtitle) : ''}
        ` : '';

        const closeButton = hasclose ? '<div id="close"></div>' : '';

        const buttonHTML = buttons.length ? createElement('div', 'dialog-footer', 
            buttons.map(button => `<a href="${button.target ? `${button.target}` : '#'}" ${button.newtab ? 'target="_blank"' : ''} class="button ${button.class}" ${button.action ? `id="${button.action}"` : ''}>${button.label}</a>`).join('')
        ) : '';

        const dialogHTML = `
        <div class="dialog ${dialogStyle} ${dialogSize}">
            ${title || subtitle ? createElement('div', 'dialog-header', `
                <div>${headerContent}</div>${closeButton}
            `) : ''}
            ${createElement('div', 'dialog-body', content)}
            ${!title && !subtitle && hasclose ? '<div id="close"></div>' : ''} 
            ${buttonHTML}
        </div>`;

        const isPersistent = persistent;
        const isBlur = blur;

        if (!overlayExists) {
            createOverlay(isPersistent, isBlur);
        };

        $('.overlay .wrapper').addClass(options.size);
        $('.overlay .wrapper').append(dialogHTML);
        setTimeout(function() { $('.overlay .dialog').addClass('open'); }, 0);
    });

}

$(document).ready(function() {

    $(document).on('click', '.call-dialog', function(event) {

        destroyDialog();
        event.preventDefault();

        const options = JSON.parse($(this).attr('data-dialog'));

        if (!overlayExists) {
            createOverlay(options.persistent);
        }

        createDialog(options);
    });

    $(document).on('click', '.overlay:has(.dialog)', function() {
        event.preventDefault();
        if (!$('.overlay').hasClass('persistent')) {
            destroyDialog();
            destroyOverlay();
        }
    });

    $(document).on('keydown', function(event) {
        if (event.key === "Escape" || event.keyCode === 27) {
            if ($('body').find('.overlay:has(.dialog)').length != 0 && !$('.overlay').hasClass('persistent')) {
                destroyDialog();
                destroyOverlay();
            }
        }
    });

    $(document).on('click', '.overlay .dialog #close', function() {
        event.preventDefault();
        destroyDialog();
        destroyOverlay();
    });

});