$.easing.easeInOutQuart = function (x, t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t * t * t + b;
    t -= 2;
    return -c / 2 * (t * t * t * t - 2) + b;
};

function formatNumber(number, thousandSeparator, decimalSeparator) {
    var parts = number.toString().split(/[.,]/);
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousandSeparator);
    if (parts.length > 1) {
        return parts[0] + decimalSeparator + parts[1];
    }
    return parts[0];
}

function animateNumberIncrease($element, start, end, duration, thousandSeparator, decimalSeparator) {
    $({count: start}).animate({count: end}, {
        duration: duration || 2000,
        easing: 'easeInOutQuart',
        step: function() {
            var currentValue = this.count.toFixed(0);
            $element.text(formatNumber(currentValue, thousandSeparator, decimalSeparator));
        },
        complete: function() {
            var finalValue = end.toFixed(0);
            $element.text(formatNumber(finalValue, thousandSeparator, decimalSeparator));
        }
    });
}

$(document).ready(function() {
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const $this = $(entry.target);
                var originalText = $this.text().trim();
                var duration = parseInt($this.attr('data-duration'));
                var thousandSeparator = originalText.includes(',') ? ',' : (originalText.includes('.') ? '.' : '');
                var decimalSeparator = (thousandSeparator === ',') ? '.' : (thousandSeparator === '.' ? ',' : '');
                var numberValue = parseFloat(originalText.replace(/[,.]/g, (match) => match === thousandSeparator ? '' : '.'));
                animateNumberIncrease($this, 0, numberValue, duration, thousandSeparator, decimalSeparator);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    $('.number-increase').each(function() {
        observer.observe(this);
    });
});
