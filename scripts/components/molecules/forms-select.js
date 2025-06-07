$(document).ready(function() {

	$('.select .selector').click(function() {
		event.stopPropagation();
		if(!$(this).parent().hasClass('disabled')) {
			$(this).siblings('.options').slideToggle(300);
			$(this).parent().toggleClass('open');
		}
	});

	$('.select .option').click(function() {
		if(!$(this).hasClass('disabled')) {
			const value = $(this).attr('data-value');
			const valueHTML = $(this).html();
			$(this).parent().siblings('.selector').html(valueHTML);
			$(this).parent().siblings('.selector').attr('data-value', value);
	        $(this).siblings().removeClass('selected');
	        $(this).addClass('selected');
			$(this).parent().slideToggle(300);
			$(this).parent().parent().toggleClass('open');
		}
	});

	$('.select .option.selected').each(function() {
		const value = $(this).attr('data-value');
		const valueHTML = $(this).html();
		$(this).parent().siblings('.selector').html(valueHTML);
		$(this).parent().siblings('.selector').attr('data-value', value);
        $(this).siblings().removeClass('selected');
        $(this).addClass('selected');
	});

	$(document).on('click', function(event) {
        if (!$(event.target).closest('.select').length) {
            $('.select.open .options').slideUp(300);
            $('.select').removeClass('open');
        }
    });

});