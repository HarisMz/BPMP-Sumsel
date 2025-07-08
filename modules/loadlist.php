<?php

include($_SERVER['DOCUMENT_ROOT'] . '/modules/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/modules/define.php');

$listThemes = [
    'tokens/variables'
];
$listStyles = [
    'form.css'
];
$listCompStyles = [
    'tokens/colors.css',
    'tokens/elevations.css',
    'tokens/normalize.css',
    'tokens/rounded.css',
    'tokens/spacings.css',
    'tokens/transitions.css',
    'tokens/animations.css',
    'tokens/typography.css',
    'atoms/basic-link.css',
    'atoms/basic-text.css',
    'atoms/basic-separator.css',
    'atoms/basic-icons.css',
    'atoms/basic-image.css',
    'atoms/forms-button.css',
    'atoms/forms-input.css',
    'atoms/forms-textarea.css', 
    'atoms/forms-checkbox.css',
    'atoms/forms-radio.css',
    'atoms/forms-switch.css',
    'atoms/datadisplay-avatar.css',
    'atoms/datadisplay-badge.css',
    'atoms/feedback-spinner.css',
    'molecules/basic-fab.css',
    'molecules/forms-select.css',
    'molecules/forms-stepper.css',
    'molecules/datadisplay-list.css',
    'molecules/datadisplay-chip.css',
    'molecules/feedback-toast.css',
    'molecules/overlay-tooltip.css',
    'molecules/layout-flexbox.css',
    'molecules/layout-grid.css',
    'organisms/forms-fileupload.css',
    'organisms/datadisplay-datatable.css',
    'organisms/datadisplay-table.css',
    'organisms/feedback-banner.css',
    'organisms/overlay-dialog.css',
    'organisms/overlay-popup.css',
    'organisms/disclosure-carousel.css',
    'organisms/disclosure-collapsible.css',
    'organisms/disclosure-expander.css',
    'organisms/disclosure-tabs.css',
    'organisms/layout-card.css',
    'organisms/layout-section.css',
    'organisms/navigation-breadcrumbbar.css',
    'organisms/navigation-pagination.css',
    'organisms/navigation-navbar.css'
];
$listScripts = [
    'jquery-3.6.1.min.js',
    'click-events.js',
    'custombutton.js',
    'connector.js',
    'form.js'
];
$listCompScripts = [
    'tokens/colors.js',
    'tokens/elevations.js',
    'tokens/normalize.js',
    'tokens/rounded.js',
    'tokens/spacings.js',
    'tokens/transitions.js',
    'tokens/animations.js',
    'tokens/typography.js',
    'atoms/basic-link.js',
    'atoms/basic-text.js',
    'atoms/basic-separator.js',
    'atoms/basic-icons.js',
    'atoms/basic-image.js',
    'atoms/forms-button.js',
    'atoms/forms-input.js',
    'atoms/forms-textarea.js',
    'atoms/forms-checkbox.js',
    'atoms/forms-radio.js',
    'atoms/forms-switch.js',
    'atoms/datadisplay-avatar.js',
    'atoms/datadisplay-badge.js',
    'atoms/feedback-spinner.js',
    'molecules/basic-fab.js',
    'molecules/forms-select.js',
    'molecules/forms-stepper.js',
    'molecules/datadisplay-list.js',
    'molecules/datadisplay-chip.js',
    'molecules/feedback-toast.js',
    'molecules/overlay-tooltip.js',
    'molecules/layout-flexbox.js',
    'molecules/layout-grid.js',
    'organisms/forms-fileupload.js',
    'organisms/datadisplay-datatable.js',
    'organisms/datadisplay-table.js',
    'organisms/feedback-banner.js',
    'organisms/overlay-dialog.js',
    'organisms/overlay-popup.js',
    'organisms/disclosure-carousel.js',
    'organisms/disclosure-collapsible.js',
    'organisms/disclosure-expander.js',
    'organisms/disclosure-tabs.js',
    'organisms/layout-card.js',
    'organisms/layout-section.js',
    'organisms/navigation-breadcrumbbar.js',
    'organisms/navigation-pagination.js',
    'organisms/navigation-navbar.js'
];
$listLinks = [
    '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />'
];

function loadThemes($file, $deviceTypes = ['desktop'], $theme) {
    $theme = ($theme != '') ? '-' . $theme : '';
    foreach ($deviceTypes as $type) {
        $filePath = "/styles/components/$type/$file$theme.css";
        $filePathFallback = "/styles/components/$type/$file.css";
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
            echo "<link rel='stylesheet' href='$filePath'>\n";
        } else {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePathFallback)) {
                echo "<link rel='stylesheet' href='$filePathFallback'>\n";
            }
        }
    }
}
function loadStyles($file) {
    $filePath = "/styles/$file";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
        echo "<link rel='stylesheet' href='$filePath'>\n";
    }
}
function loadCompStyles($file, $deviceTypes = ['desktop']) {
    foreach ($deviceTypes as $type) {
        $filePath = "/styles/components/$type/$file";
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
            echo "<link rel='stylesheet' href='$filePath'>\n";
        }
    }
}
function loadScripts($file) {
    $filePath = "/scripts/$file";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
        echo "<script src='$filePath'></script>\n";
    }
}
function loadCompScripts($file) {
    $filePath = "/scripts/components/$file";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filePath)) {
        echo "<script src='$filePath'></script>\n";
    }
}
function loadLinks($file) {
    echo "$file\n";
}

foreach ($listThemes as $file) {
    loadThemes($file, ['desktop', 'tablet', 'mobile'], $theme);
}
foreach ($listStyles as $file) {
    loadStyles($file);
}
foreach ($listCompStyles as $file) {
    loadCompStyles($file, ['desktop', 'tablet', 'mobile']);
}
foreach ($listScripts as $file) {
    loadScripts($file);
}
foreach ($listCompScripts as $file) {
    loadCompScripts($file);
}
foreach ($listLinks as $file) {
    loadLinks($file);
}

?>