$(document).ready(function () {

    function createTooltip(element) {
        const text = $(element).attr('data-tooltip');
        const position = $(element).attr('data-tooltip-position');
        const tooltext = $('<div class="tooltip-text ' + position + '"><span>' + text + '</span></div>');
        const arrow = $(element).hasClass('no-arrow') ? '' : $('<div class="tooltip-arrow"></div>');

        const additionalClasses = ['success', 'critical', 'informational', 'warning', 'dark']
            .filter(className => $(element).hasClass(className))
            .join(' ');

        tooltext.addClass(additionalClasses);
        tooltext.append(arrow);

        if ($(element).hasClass('has-close')) {
            const closeButton = $('<div id="tooltip-close"></div>');
            tooltext.append(closeButton);
        }

        return tooltext;
    }

    function positionTooltip(element, tooltip) {
        const position = $(element).attr('data-tooltip-position') || 'top';
        const $element = $(element);
        if (!$element.length) {
            return;
        }
        const $fabBuffer = $element.closest('.fab-buffer');
        const isParentFixed = $fabBuffer.length > 0 && $fabBuffer.css('position') === 'fixed';
        
        var offset;

        if($element.hasClass('onbody')) {
            offset = $element.offset();
        } else {
            offset = $element.position();
        }
        if (!offset) {
            return;
        }
        const height = $element.outerHeight();
        const width = $element.outerWidth();
        const tooltipHeight = $(tooltip).outerHeight();
        const tooltipWidth = $(tooltip).outerWidth();
        const elemOffset = 10;

        let top = offset.top, left = offset.left;
        let arrowTop, arrowLeft;

        switch (position) {

            case 'top-start':
                top = offset.top - tooltipHeight - elemOffset;
                left = offset.left - 6;
                arrowTop = '100%';
                arrowLeft = (width < tooltipWidth) ? (width / 2) + 6 : 28;
                break;
            case 'top':
                top = offset.top - tooltipHeight - elemOffset;
                left = offset.left + (width / 2) - (tooltipWidth / 2);
                arrowTop = '100%';
                arrowLeft = '50%';
                break;
            case 'top-end':
                top = offset.top - tooltipHeight - elemOffset;
                left = offset.left + width - tooltipWidth + 6;
                arrowTop = '100%';
                arrowLeft = (width < tooltipWidth) ? tooltipWidth - (width / 2) - 6 : tooltipWidth - 28;
                break;

            case 'right-start':
                top = offset.top - 6;
                left = offset.left + width + elemOffset;
                arrowTop = (height < tooltipHeight) ? (height / 2) + 6 : 19;
                arrowLeft = '0';
                break;
            case 'right':
                top = offset.top + (height / 2) - (tooltipHeight / 2);
                left = offset.left + width + elemOffset;
                arrowTop = '50%';
                arrowLeft = '0';
                break;
            case 'right-end':
                top = offset.top + height - tooltipHeight + 6;
                left = offset.left + width + elemOffset;
                arrowTop = (height < tooltipHeight) ? tooltipHeight - (height / 2) - 6 : tooltipHeight - 19;
                arrowLeft = '0';
                break;

            case 'bottom-start':
                top = offset.top + height + elemOffset;
                left = offset.left - 6;
                arrowTop = '0';
                arrowLeft = (width < tooltipWidth) ? (width / 2) + 6 : 28;
                break;
            case 'bottom':
                top = offset.top + height + elemOffset;
                left = offset.left + (width / 2) - (tooltipWidth / 2);
                arrowTop = '0';
                arrowLeft = '50%';
                break;
            case 'bottom-end':
                top = offset.top + height + elemOffset;
                left = offset.left + width - tooltipWidth + 6;
                arrowTop = '0';
                arrowLeft = (width < tooltipWidth) ? tooltipWidth - (width / 2) - 6 : tooltipWidth - 28;
                break;

            case 'left-start':
                top = offset.top - 6;
                left = offset.left - tooltipWidth - elemOffset;
                arrowTop = (height < tooltipHeight) ? (height / 2) + 6 : 19;
                arrowLeft = '100%';
                break;
            case 'left':
                top = offset.top + (height / 2) - (tooltipHeight / 2);
                left = offset.left - tooltipWidth - elemOffset;
                arrowTop = '50%';
                arrowLeft = '100%';
                break;
            case 'left-end':
                top = offset.top + height - tooltipHeight + 6;
                left = offset.left - tooltipWidth - elemOffset;
                arrowTop = (height < tooltipHeight) ? tooltipHeight - (height / 2) - 6 : tooltipHeight - 19;
                arrowLeft = '100%';
                break;
        }

        if (isParentFixed) {
            $(tooltip).css({
                position: 'fixed',
                top: top + 'px',
                left: left + 'px'
            });
        } else {
            $(tooltip).css({
                position: 'absolute',
                top: top + 'px',
                left: left + 'px'
            });
        }

        const arrow = $(tooltip).find('.tooltip-arrow');
        if (arrowTop !== undefined && arrowLeft !== undefined) {
            arrow.css({
                top: arrowTop,
                left: arrowLeft
            });
        } else {
            arrow.hide();
        }
    }

    function tooltipHover() {
        if (!$(this).hasClass('click') && !$(this).hasClass('has-close') && $(this).next('.tooltip-text').length === 0) {
            const tooltext = createTooltip(this);
            if ($(this).hasClass('onbody')) {
                $('body').append(tooltext);
                positionTooltip(this, tooltext);
                tooltext.fadeIn(100).css('display', 'flex');
            } else {
                $(this).after(tooltext); 
                positionTooltip(this, tooltext);
                $(this).next('.tooltip-text').fadeIn(100).css('display', 'flex');
            }
            clickableCheck.call(this);
        }
    }

    function tooltipClick() {
        const existingTooltip = $(this).next('.tooltip-text');

        if (existingTooltip.length === 0) {
            $('.tooltip.click').not('.has-close').each(function() {
                $(this).next('.tooltip-text').stop(true, true).fadeOut(100, function() {
                    $(this).remove();
                });
            });

            const tooltext = createTooltip(this);
            $(this).after(tooltext);
            positionTooltip(this, tooltext);
            clickableCheck.call(this);
            $(this).next('.tooltip-text').fadeIn(100).css('display', 'flex');
        } else if (!$(this).hasClass('has-close')) {
            existingTooltip.stop(true, true).fadeOut(100, function() {
                $(this).remove();
            });
        }
    }

    function tooltipDestroy() {
        if (!$(this).hasClass('has-close') && !$(this).hasClass('click')) {
            $(this).next('.tooltip-text').fadeOut(100, function() {
                $(this).remove();
            });
            $('body').find('.tooltip-text').fadeOut(100, function() {
                $(this).remove();
            });
        }
    }

    function tooltipClose() {
        $(this).closest('.tooltip-text').fadeOut(100, function() {
            $(this).remove();
        });
    }

    function clickableCheck() {
        if ($(this).hasClass('has-close')) {
            $(this).next('.tooltip-text').css('pointer-events', 'auto');
            $(this).next('.tooltip-text').css('text-wrap', 'unset');
        }
    }

    function updateAllTooltips() {
        $('.tooltip-text').each(function () {
            const tooltipElement = $(this);
            const triggerElement = tooltipElement.prev('.tooltip')[0];
            positionTooltip(triggerElement, tooltipElement[0]);
        });
    }

    $(window).on('scroll resize', updateAllTooltips);

    $(document).on('mouseenter', '.tooltip:not(.click):not(.has-close)', function () {
        tooltipHover.call(this);
    });

    $(document).on('mouseleave', '.tooltip:not(.click):not(.has-close)', function () {
        tooltipDestroy.call(this);
    });

    $(document).on('touchstart', '.tooltip:not(.click):not(.has-close)', function () {
        tooltipHover.call(this);
    });

    $(document).on('touchend', '.tooltip:not(.click):not(.has-close)', function () {
        tooltipDestroy.call(this);
    });

    $(document).on('click', '.tooltip.click', function (event) {
        event.stopPropagation();
        tooltipClick.call(this);
    });

    $(document).on('click', '#tooltip-close', function (event) {
        event.preventDefault();
        event.stopPropagation();
        tooltipClose.call(this);
    });

    $(document).on('click', function (event) {
        $('.tooltip.click').not('.has-close').each(function() {
            $(this).next('.tooltip-text').fadeOut(100, function() {
                $(this).remove();
            });
        });
    });

});
