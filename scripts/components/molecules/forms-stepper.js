function initStepper() {

    $('input[type="number"].stepper').each(function() {
        const input = $(this);
        
        if (!input.parent().hasClass('stepper-wrapper')) {
            input.wrap('<div class="stepper-wrapper"></div>');
        }
        
        if (input.siblings('#stepper-plus').length === 0) {
            input.parent().append('<button class="stepper-button" id="stepper-plus"></button>');
        }
        
        if (input.siblings('#stepper-minus').length === 0) {
            input.parent().prepend('<button class="stepper-button" id="stepper-minus"></button>');
        }

        let value = parseFloat(input.val());
        let min = input.attr('min') ? parseFloat(input.attr('min')) : null;
        let max = input.attr('max') ? parseFloat(input.attr('max')) : null;

        if (min !== null && value < min) {
            input.val(min);
        } else if (max !== null && value > max) {
            input.val(max);
        }

        if (!value) {
            if (input.attr('min')) {
                input.val(parseInt(input.attr('min')));
            } else {
                input.val(0);
            }
        }

        if (input.hasClass('small')) {
            input.parent().addClass('small');
            input.removeClass('small');
        }
        if (input.prop('disabled')) {
            input.siblings('#stepper-plus').addClass('disabled');
            input.siblings('#stepper-minus').addClass('disabled');
            return;
        }
        if (input.attr('min') && parseInt(input.val()) <= parseInt(input.attr('min'))) {
            input.siblings('#stepper-minus').addClass('disabled');
        }
        if (input.attr('max') && parseInt(input.val()) >= parseInt(input.attr('max'))) {
            input.siblings('#stepper-plus').addClass('disabled');
        }
    });

    $('input[type="number"].stepper.minimal').each(function() {
        const labelFor = $(this).attr('id');
        $(this).parent().siblings(`label[for="${labelFor}"]`).on('click', function(event) {
            event.preventDefault();
        });
    });
    
    $(document).off('click', '#stepper-plus');
    $(document).off('click', '#stepper-minus');
    $(document).off('change', 'input[type="number"].stepper');

    function getStepValue(event) {
        if (event.shiftKey) return 10;
        if (event.ctrlKey) return 100;
        if (event.altKey) return 0.1;
        return 1;
    }

    function updateValue(inputNumber, increment) {
        let value = parseFloat(inputNumber.val()) || 0;
        let newValue = value + increment;

        newValue = Math.round(newValue * 10) / 10;

        let min = inputNumber.attr('min') ? parseFloat(inputNumber.attr('min')) : null;
        let max = inputNumber.attr('max') ? parseFloat(inputNumber.attr('max')) : null;

        if (min !== null && newValue < min) newValue = min;
        if (max !== null && newValue > max) newValue = max;

        inputNumber.val(newValue);
        inputNumber.trigger('change');
        inputNumber.trigger('input');

        updateButtonState(inputNumber);
    }
    
    function updateButtonState(inputNumber) {
        let value = parseFloat(inputNumber.val()) || 0;
        let min = inputNumber.attr('min') ? parseFloat(inputNumber.attr('min')) : null;
        let max = inputNumber.attr('max') ? parseFloat(inputNumber.attr('max')) : null;

        if (min !== null && value <= min) {
            inputNumber.siblings('#stepper-minus').addClass('disabled');
        } else {
            inputNumber.siblings('#stepper-minus').removeClass('disabled');
        }

        if (max !== null && value >= max) {
            inputNumber.siblings('#stepper-plus').addClass('disabled');
        } else {
            inputNumber.siblings('#stepper-plus').removeClass('disabled');
        }
    }

    $(document).on('click', '#stepper-plus', function(event) {
        event.preventDefault();
        const inputNumber = $(this).siblings('input[type="number"].stepper');
        if (inputNumber.prop('disabled')) return;
        
        let stepValue = getStepValue(event);
        updateValue(inputNumber, stepValue);
    });

    $(document).on('click', '#stepper-minus', function(event) {
        event.preventDefault();
        const inputNumber = $(this).siblings('input[type="number"].stepper');
        if (inputNumber.prop('disabled')) return;

        let stepValue = getStepValue(event);
        updateValue(inputNumber, -stepValue);
    });

    $(document).on('change', 'input[type="number"].stepper', function() {
        updateButtonState($(this));
    });

}

$(document).ready(function() {

    initStepper();

});