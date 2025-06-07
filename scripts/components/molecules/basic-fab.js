var scrollThreshold = 300;

function destroyFAB(nameid) {
    const $fabToDestroy = $(`.fab[data-nameid="${nameid}"]`);
    if ($fabToDestroy.length > 0) {
        $fabToDestroy.addClass('hidden');
        $fabToDestroy.delay(300).slideUp(300, function() {
            $fabToDestroy.remove();
        });
        if ($('.fab-buffer').find('.fab').length == 0) {
            $('.fab-buffer').remove();
        }
    }
}

function createFAB(options) {

    const {
        style = 'default',
        name = 'Aksi',
        icon = 'question_mark',
        action = '',
        tooltip = false
    } = options;

    const allowedStyles = ['default', 'accent', 'small', 'disabled'];
    const styleClasses = style.split(' ').filter(s => allowedStyles.includes(s)).join(' ');
    const fabStyle = styleClasses || 'default';

    const nameid = name.split(' ').join('-').toLowerCase();

    const fabHTML = `
    <div class="fab hidden ${fabStyle} ${tooltip ? 'tooltip' : ''}" data-nameid="${nameid}" data-tooltip="${name}" data-tooltip-position="left" id="${action}">${icon}</div>
    `;

    const $fabElement = $(fabHTML);

    if ($('body').find('.fab-buffer').length == 0) {
        $('body').append('<div class="fab-buffer"></div>');
    }

    $('body .fab-buffer').append($fabElement);
    $fabElement.hide().slideDown(300, function() {
        $fabElement.removeClass('hidden')
    });

}

function checkScroll() {
    if ($(window).scrollTop() > scrollThreshold) {
        if ($('#site-stt').hasClass('hidden')) {
            $('#site-stt').slideDown(300);
            setTimeout(function() {
                $('#site-stt').removeClass('hidden');
            }, 300);
        }
    } else {
        if (!$('#site-stt').hasClass('hidden')) {
            $('#site-stt').addClass('hidden');
            $('#site-stt').stop(true, true).delay(300).slideUp(300);
        }
    }
}

function checkScrollFirst() {
    if ($(window).scrollTop() > scrollThreshold) {
        $('#site-stt').show();
        $('#site-stt').removeClass('hidden');
    } else {
        $('#site-stt').hide();
        $('#site-stt').addClass('hidden');
    }
}

$(document).ready(function() {

    $('body').append(`<div class="fab-buffer">
        <div class="fab accent tooltip"
            data-nameid="scroll-to-top"
            data-tooltip="Kembali ke Atas"
            data-tooltip-position="left"
            id="site-stt" style="display: none;">
            keyboard_arrow_up</div>
        </div>`);

    checkScrollFirst();

    const $firstFabBuffer = $('.fab-buffer').first();
    
    $('.fab-buffer').slice(1).each(function() {
        $(this).children().appendTo($firstFabBuffer);
        $(this).remove();
    });

    $(document).on('click', '#site-stt', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 150);
    });

    $(document).on('pointerup mouseup touchend', '.fab', function() {
        $(this).siblings('.tooltip-text').fadeOut(150);
    });

    $(window).scroll(function() {
        checkScroll();
    });

});