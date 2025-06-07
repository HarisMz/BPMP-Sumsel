$(document).ready(function() {

    $(document).on('click', '.button', function(e) {
        if ($(this).is('a')) {
            const href = $(this).attr('href');
            if (href && href !== '#') {
                return true;
            } else {
                e.preventDefault();
            }
        }
    });

});