function initExpander() {
    $('.expander-content').each(function() {
        if ($(this).attr('line-clamp')) {
            const lineValue = parseInt($(this).attr('line-clamp'));
            const lineHeight = parseInt($(this).css('line-height'));
            const maxHeight = lineValue * lineHeight;
            
            if ($(this)[0].scrollHeight > maxHeight) {
                $(this).css({
                    'max-height': maxHeight + 'px',
                    'overflow': 'hidden'
                });
                $(this).data('fullHeight', $(this)[0].scrollHeight);
                
                $(this).siblings('.expander-trigger').show();
            } else {
                $(this).siblings('.expander-trigger').remove();
                $(this).addClass('noclamp');
            }
        } 
    });
    
    const $text = $('.expander-trigger').html();

    $('.expander-trigger').click(function(event) {
        event.preventDefault();
        const $parent = $(this).parent();
        const $content = $parent.find('.expander-content');
        const fullHeight = $content.data('fullHeight');
        if ($parent.hasClass('open')) {
            $content.css('max-height', $content.attr('line-clamp') * parseInt($content.css('line-height')) + 'px');
            $parent.removeClass('open');
            $(this).html($text);
        } else {
            $content.css('max-height', fullHeight + 'px');
            $parent.addClass('open');
            $(this).html($(this).attr('data-close-text') || 'Sembunyikan');
        }
    });
}

$(document).ready(function() {
    initExpander();
});