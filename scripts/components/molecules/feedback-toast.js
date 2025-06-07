const maxToast = 3;
const normalDuration = 5000;
const quickDuration = 300;

function removeOldestToast() {
    const $toastBuffer = $('body .toast-buffer');
    const $oldestToast = $toastBuffer.children('.toast:not(.fading-out)').first();
    if ($oldestToast.length) {
        $oldestToast.addClass('fading-out');
        $oldestToast.stop(true, true).fadeOut(quickDuration, function() {
            $(this).remove();
            checkAndRemoveBuffer();
        });
    } else {
        checkAndRemoveBuffer();
    }
}

function checkAndRemoveBuffer() {
    const $toastBuffer = $('body .toast-buffer');
    if ($toastBuffer.length > 0 && $toastBuffer.children('.toast').length === 0) {
        $toastBuffer.remove();
    }
}

function destroyToast($toastElement) {
    $toastElement.addClass('fading-out');
    $toastElement.slideUp(quickDuration, function() {
        $(this).remove();
        checkAndRemoveBuffer();
    });
}

function createToast(options) {
    const {
        style = 'default',
        content = '',
        icon = '',
        links = [],
        duration = normalDuration
    } = options;
    const allowedStyles = ['default', 'success', 'critical', 'informational', 'warning'];
    const toastStyle = allowedStyles.includes(style) ? style : 'default';
    const closeButton = `<div class="close" id="close">
        <svg class="timeout-ring" width="28" height="28"><circle class="timeout-ring__circle" stroke="#ffffff" stroke-width="1.5" fill="transparent" r="11" cx="14.5" cy="13.5"></circle></svg>
    </div>`;
    const linkHTML = links.length ? links.map(link => 
        `<a href="${link.target ? `${link.target}` : '#'}" ${link.newtab ? 'target="_blank"' : ''} class="link secondary noline" ${link.action ? `id="${link.action}"` : ''}>${link.label}</a>`
    ).join('') : '';
    const toastHTML = `
        ${createElement('div', `toast ${toastStyle}`, `
            ${icon ? `${createElement('div', 'toast-icon', '', `data-icon="${icon}"`)}` : ''}
            ${createElement('div', 'toast-info flex row wrap column-mobile gap-x-6 gap-y-3', `
                ${createElement('div', 'content', content)}
                ${createElement('div', 'link-wrapper', `${linkHTML}`)}
            `)}
            ${closeButton}
        `)}
    `;
    const $toastElement = $(toastHTML);
    
    if ($('body').find('.toast-buffer').length == 0) {
        $('body').append('<div class="toast-buffer"></div>');
    }
    
    const $toastBuffer = $('body .toast-buffer');
    let activeToasts = $toastBuffer.children('.toast:not(.fading-out)');

    if (activeToasts.length >= maxToast) {
        removeOldestToast();
    }

    $toastBuffer.append($toastElement);
    $toastElement.hide().slideDown(quickDuration);
    setTimeout(function() {$toastElement.addClass('active')}, 0);

    let fadeOutTimeout;
    function startFadeOutTimer() {
        $toastElement.find('.close .timeout-ring__circle').addClass('animate');
        clearTimeout(fadeOutTimeout);
        fadeOutTimeout = setTimeout(() => {
            destroyToast($toastElement);
        }, options.duration || normalDuration);
    }

    $toastElement.on('pointerenter', function() {
        clearTimeout(fadeOutTimeout);
        $(this).stop(true, true).css('opacity', 1);
        $toastElement.find('.close .timeout-ring__circle').removeClass('animate');
    }).on('pointerleave', function() {
        startFadeOutTimer();
    });

    $toastElement.on('touchstart touchmove', function() {
        clearTimeout(fadeOutTimeout);
        $(this).stop(true, true).css('opacity', 1);
        $toastElement.find('.close .timeout-ring__circle').removeClass('animate');
    }).on('touchend', function() {
        startFadeOutTimer();
    });

    startFadeOutTimer();
}

$(document).ready(function() {
    $(document).on('click', '.call-toast', function(event) {
        event.preventDefault();
        const options = JSON.parse($(this).attr('data-toast'));
        createToast(options);
    });
    $(document).on('click', '.toast .link', function(event) {
        if ($(this).attr('href') === '#' && $(this).is('a')) {
            event.preventDefault();
        };
    });
    $(document).on('click', '.toast #close', function(event) {
        event.preventDefault();
        const $toastElement = $(this).closest('.toast');
        destroyToast($toastElement);
    });
});