function destroyPopup(duration=300, callback) {
    const $popup = $('.overlay .popup');
    if ($popup.length) {
        $popup.removeClass('open');
        setTimeout(function() {
            $popup.remove();
            if (callback) callback();
        }, duration);
    } else if (callback) {
        callback();
    }
}

function createPopup(options) {

    hideMenu();
    event.preventDefault();
    destroyDialog(150, function() {
        const {
            size = 'fit',
            content = '',
            hasclose = true,
            persistent = false,
            blur = true
        } = options;

        const allowedSizes = ['fit', 'medium', 'large', 'fill', 'screen'];
        const popupSize = allowedSizes.includes(size) ? size : 'fit';

        const closeButton = hasclose ? '<div id="close"></div>' : '';

        const popupHTML = `
        <div class="popup ${popupSize}">
            ${createElement('div', 'popup-body', content)}
            ${closeButton}
        </div>`;

        const isPersistent = persistent;
        const isBlur = blur;

        if (!overlayExists) {
            createOverlay(isPersistent, isBlur);
        };

        $('.overlay .wrapper').addClass(options.size);
        $('.overlay .wrapper').append(popupHTML);
        setTimeout(function() { $('.overlay .popup').addClass('open'); }, 0);
    });
    
}

$(document).ready(function() {

    $(document).on('click', '.call-popup', function(event) {

        destroyPopup();
        event.preventDefault();

        const options = JSON.parse($(this).attr('data-popup'));

        if (!overlayExists) {
            createOverlay(options.persistent);
        }

        createPopup(options);
    });

    $(document).on('click', '.overlay:has(.popup)', function() {
        event.preventDefault();
        if (!$('.overlay').hasClass('persistent')) {
            destroyPopup();
            destroyOverlay();
        }
    });

    $(document).on('keydown', function(event) {
        if (event.key === "Escape" || event.keyCode === 27) {
            if ($('body').find('.overlay:has(.popup)').length != 0 && !$('.overlay').hasClass('persistent')) {
                destroyPopup();
                destroyOverlay();
            }
        }
    });

    $(document).on('click', '.overlay .popup #close', function() {
        event.preventDefault();
        destroyPopup();
        destroyOverlay();
    });

});