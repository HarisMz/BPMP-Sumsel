$(document).ready(function() {

    $(document).on('click', '.card a, a:has(.card)', function(e) {
        const href = $(this).attr('href');
        if (href && href !== '#') {
            return true;
        } else {
            e.preventDefault();
        }
    });

});