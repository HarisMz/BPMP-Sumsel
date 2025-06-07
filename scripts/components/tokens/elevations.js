const EventSystem = (function() {
    const events = {};

    function subscribe(eventName, callback) {
        if (!events[eventName]) {
            events[eventName] = [];
        }
        events[eventName].push(callback);
    }

    function publish(eventName, data) {
        if (events[eventName]) {
            events[eventName].forEach(callback => callback(data));
        }
    }

    return {
        subscribe,
        publish
    };
})();

let overlayExists = false;

const createElement = (tag, className, content, attributes = '') => `<${tag} class="${className}" ${attributes}>${content}</${tag}>`;

function createOverlay(persistent=false, blur=true, duration=300) {
	if (overlayExists) return;
	const isPersistent = persistent ? ' persistent' : '';
	const isBlur = blur ? '' : ' no-blur';
	$('body').append(`
		<div class="overlay${isPersistent}${isBlur}">
			<div class="wrapper"></div>
		</div>`);
	$('.overlay').fadeIn(duration).css('display', 'flex');
	setTimeout(function() { $('body').css('overflow', 'hidden'); }, 0);
    hideMenu();
    overlayExists = true;
    EventSystem.publish('overlayOpened');
}

function destroyOverlay(duration=300) {
	$('body').css('overflow', 'auto');
	$('.overlay').fadeOut(duration, function() {
		$('.overlay').off().remove();
        overlayExists = false;
        EventSystem.publish('overlayClosed');
	});
}

function parseButtons(buttonString) {
    if (!buttonString) {
        return [];
    }
    return JSON.parse(buttonString) || [];
}

function parseLinks(linkString) {
    if (!linkString) {
        return [];
    }
    return JSON.parse(linkString) || [];
}

$(document).ready(function() {

	$(document).on('click', '.overlay .wrapper > div', function(event) {
	    event.stopPropagation();
	});

});