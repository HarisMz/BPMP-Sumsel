$(document).ready(function() {

updateThemeColor();

function updateThemeColor() {
    const themeColor = getComputedStyle(document.documentElement).getPropertyValue('--site-theme-color').trim();
    $('#themeColorMeta').attr('content', themeColor);
}

});