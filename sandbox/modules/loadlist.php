<?php

$sandboxListStyles = [
    'sbx-init.css',
    'sbx-variables.css',
    'sbx-colors.css',
    'sbx-elevations.css',
    'sbx-introduction.css',
    'sbx-rounded.css',
    'sbx-spacings.css',
    'sbx-transitions.css',
    'sbx-animations.css',
    'sbx-typography.css',
    'sbx-link.css',
    'sbx-text.css',
    'sbx-separator.css',
    'sbx-icons.css',
    'sbx-image.css',
    'sbx-button.css',
    'sbx-input.css',
    'sbx-textarea.css',
    'sbx-checkbox.css',
    'sbx-radio.css',
    'sbx-switch.css',
    'sbx-avatar.css',
    'sbx-badge.css',
    'sbx-spinner.css',
    'sbx-fab.css',
    'sbx-select.css',
    'sbx-stepper.css',
    'sbx-list.css',
    'sbx-chip.css',
    'sbx-toast.css',
    'sbx-tooltip.css',
    'sbx-flexbox.css',
    'sbx-grid.css',
    'sbx-fileupload.css',
    'sbx-datatable.css',
    'sbx-table.css',
    'sbx-banner.css',
    'sbx-dialog.css',
    'sbx-popup.css',
    'sbx-carousel.css',
    'sbx-collapsible.css',
    'sbx-expander.css',
    'sbx-tabs.css',
    'sbx-card.css',
    'sbx-section.css',
    'sbx-breadcrumbbar.css',
    'sbx-pagination.css',
    'sbx-navbar.css'
];
$sandboxListScripts = [
    'sbx-init.js',
    'sbx-variables.js',
    'sbx-colors.js',
    'sbx-elevations.js',
    'sbx-introduction.js',
    'sbx-rounded.js',
    'sbx-spacings.js',
    'sbx-transitions.js',
    'sbx-animations.js',
    'sbx-typography.js',
    'sbx-link.js',
    'sbx-text.js',
    'sbx-separator.js',
    'sbx-icons.js',
    'sbx-image.js',
    'sbx-button.js',
    'sbx-input.js',
    'sbx-textarea.js',
    'sbx-checkbox.js',
    'sbx-radio.js',
    'sbx-switch.js',
    'sbx-avatar.js',
    'sbx-badge.js',
    'sbx-spinner.js',
    'sbx-fab.js',
    'sbx-select.js',
    'sbx-stepper.js',
    'sbx-list.js',
    'sbx-chip.js',
    'sbx-toast.js',
    'sbx-tooltip.js',
    'sbx-flexbox.js',
    'sbx-grid.js',
    'sbx-fileupload.js',
    'sbx-datatable.js',
    'sbx-table.js',
    'sbx-banner.js',
    'sbx-dialog.js',
    'sbx-popup.js',
    'sbx-carousel.js',
    'sbx-collapsible.js',
    'sbx-expander.js',
    'sbx-tabs.js',
    'sbx-card.js',
    'sbx-section.js',
    'sbx-breadcrumbbar.js',
    'sbx-pagination.js',
    'sbx-navbar.js'
];
$sandboxListLinks = [];

function sandboxLoadStyles($file) {
    $filePath = "/sandbox/styles/$file";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
        echo "<link rel='stylesheet' href='$filePath'>\n";
    }
}
function sandboxLoadScripts($file) {
    $filePath = "/sandbox/scripts/$file";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
        echo "<script type='module' src='$filePath'></script>\n";
    }
}
function sandboxLoadLinks($file) {
    echo "$file\n";
}

foreach ($sandboxListStyles as $file) {
    sandboxLoadStyles($file);
}
foreach ($sandboxListScripts as $file) {
    sandboxLoadScripts($file);
}
foreach ($sandboxListLinks as $file) {
    sandboxLoadLinks($file);
}

?>