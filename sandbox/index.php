<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Akur Sandbox | Akur Design System</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/sandbox/modules/loadlist.php'); ?>
    <link href="/sandbox/styles/prism-ghcolors.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>
</head>

<body class="sbx-body">
    <aside class="sbx-sidebar intro">
        <div class="flex column">
            <a href="/sandbox/" class="logo-link"><div class="logo" title="Akur Design System"></div></a>
        </div>
        <ul class="sbx-component-list list slim">
            <div class="subheading text-subdued mb-4 mt-2">Foundation</div>
            <a href="/sandbox/introduction/" class="sbx-component-item list-item introduction" data-component="introduction" data-icon="rocket_launch"><li>Introduction</li></a>
            <!-- <a href="/sandbox/animations/" class="sbx-component-item list-item explanatory" data-component="animations" data-icon="animation"><li>Animations</li></a> -->
            <a href="/sandbox/colors/" class="sbx-component-item list-item explanatory" data-component="colors" data-icon="palette"><li>Colors</li></a>
            <a href="/sandbox/elevations/" class="sbx-component-item list-item explanatory" data-component="elevations" data-icon="layers"><li>Elevations</li></a>
            <a href="/sandbox/rounded/" class="sbx-component-item list-item explanatory" data-component="rounded" data-icon="rounded_corner"><li>Rounded</li></a>
            <a href="/sandbox/spacings/" class="sbx-component-item list-item explanatory" data-component="spacings" data-icon="format_letter_spacing"><li>Spacings</li></a>
            <!-- <a href="/sandbox/transitions/" class="sbx-component-item list-item explanatory" data-component="transitions" data-icon="transition_fade"><li>Transitions</li></a> -->
            <a href="/sandbox/typography/" class="sbx-component-item list-item explanatory" data-component="typography" data-icon="text_fields"><li>Typography</li></a>
            <!-- <a href="/sandbox/variables/" class="sbx-component-item list-item explanatory" data-component="variables" data-icon="tune"><li>Variables</li></a> -->
            <div class="subheading text-subdued mb-4 mt-7">Layout</div>
            <a href="/sandbox/section/" class="sbx-component-item list-item section" data-component="section" data-icon="view_array"><li>Section</li></a>
            <a href="/sandbox/flexbox/" class="sbx-component-item list-item" data-component="flexbox" data-icon="view_stream"><li>Flexbox</li></a>
            <a href="/sandbox/grid/" class="sbx-component-item list-item" data-component="grid" data-icon="grid_view"><li>Grid</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Forms</div>
            <a href="/sandbox/button/" class="sbx-component-item list-item" data-component="button" data-icon="highlight_mouse_cursor"><li>Button</li></a>
            <a href="/sandbox/checkbox/" class="sbx-component-item list-item" data-component="checkbox" data-icon="check_box"><li>Checkbox</li></a>
            <a href="/sandbox/fileupload/" class="sbx-component-item list-item" data-component="fileupload" data-icon="upload_file"><li>File Upload</li></a>
            <a href="/sandbox/input/" class="sbx-component-item list-item" data-component="input" data-icon="edit_note"><li>Input</li></a>
            <a href="/sandbox/radio/" class="sbx-component-item list-item" data-component="radio" data-icon="radio_button_checked"><li>Radio</li></a>
            <a href="/sandbox/select/" class="sbx-component-item list-item" data-component="select" data-icon="arrow_drop_down_circle"><li>Select</li></a>
            <a href="/sandbox/stepper/" class="sbx-component-item list-item" data-component="stepper" data-icon="exposure"><li>Stepper</li></a>
            <a href="/sandbox/switch/" class="sbx-component-item list-item" data-component="switch" data-icon="toggle_on"><li>Switch</li></a>
            <a href="/sandbox/textarea/" class="sbx-component-item list-item" data-component="textarea" data-icon="article"><li>Text Area</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Navigation</div>
            <a href="/sandbox/breadcrumbbar/" class="sbx-component-item list-item" data-component="breadcrumbbar" data-icon="more_horiz"><li>Breadcrumb Bar</li></a>
            <a href="/sandbox/navbar/" class="sbx-component-item list-item" data-component="navbar" data-icon="widgets"><li>Navbar</li></a>
            <a href="/sandbox/pagination/" class="sbx-component-item list-item" data-component="pagination" data-icon="last_page"><li>Pagination</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Disclosure</div>
            <a href="/sandbox/carousel/" class="sbx-component-item list-item" data-component="carousel" data-icon="view_carousel"><li>Carousel</li></a>
            <a href="/sandbox/collapsible/" class="sbx-component-item list-item" data-component="collapsible" data-icon="collapse_content"><li>Collapsible</li></a>
            <a href="/sandbox/expander/" class="sbx-component-item list-item" data-component="expander" data-icon="top_panel_open"><li>Expander</li></a>
            <a href="/sandbox/tabs/" class="sbx-component-item list-item" data-component="tabs" data-icon="tab"><li>Tabs</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Data Display</div>
            <a href="/sandbox/avatar/" class="sbx-component-item list-item" data-component="avatar" data-icon="account_circle"><li>Avatar</li></a>
            <a href="/sandbox/badge/" class="sbx-component-item list-item" data-component="badge" data-icon="verified"><li>Badge</li></a>
            <a href="/sandbox/chip/" class="sbx-component-item list-item" data-component="chip" data-icon="label"><li>Chip</li></a>
            <a href="/sandbox/list/" class="sbx-component-item list-item" data-component="list" data-icon="list"><li>List</li></a>
            <a href="/sandbox/table/" class="sbx-component-item list-item" data-component="table" data-icon="view_list"><li>Table</li></a>
            <a href="/sandbox/datatable/" class="sbx-component-item list-item" data-component="datatable" data-icon="table_chart"><li>Data Table</li></a>
            <a href="/sandbox/card/" class="sbx-component-item list-item" data-component="card" data-icon="cards"><li>Card</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Feedback</div>
            <a href="/sandbox/banner/" class="sbx-component-item list-item" data-component="banner" data-icon="notifications_active"><li>Banner</li></a>
            <a href="/sandbox/spinner/" class="sbx-component-item list-item" data-component="spinner" data-icon="progress_activity"><li>Spinner</li></a>
            <a href="/sandbox/toast/" class="sbx-component-item list-item" data-component="toast" data-icon="toast"><li>Toast</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Basic</div>
            <a href="/sandbox/fab/" class="sbx-component-item list-item" data-component="fab" data-icon="add_circle"><li>FAB</li></a>
            <a href="/sandbox/icons/" class="sbx-component-item list-item" data-component="icons" data-icon="insert_emoticon"><li>Icons</li></a>
            <a href="/sandbox/image/" class="sbx-component-item list-item" data-component="image" data-icon="image"><li>Image</li></a>
            <a href="/sandbox/link/" class="sbx-component-item list-item" data-component="link" data-icon="link"><li>Link</li></a>
            <a href="/sandbox/text/" class="sbx-component-item list-item" data-component="text" data-icon="subject"><li>Text</li></a>
            <a href="/sandbox/separator/" class="sbx-component-item list-item" data-component="separator" data-icon="horizontal_rule"><li>Separator</li></a>
            <div class="subheading text-subdued mb-4 mt-7">Overlay</div>
            <a href="/sandbox/dialog/" class="sbx-component-item list-item" data-component="dialog" data-icon="web_asset"><li>Dialog</li></a>
            <a href="/sandbox/popup/" class="sbx-component-item list-item" data-component="popup" data-icon="capture"><li>Popup</li></a>
            <a href="/sandbox/tooltip/" class="sbx-component-item list-item" data-component="tooltip" data-icon="tooltip_2"><li>Tooltip</li></a>
        </ul>
    </aside>
    <main class="sbx-main">
        <div class="sbx-header">
             <i id="toggle-sidebar" data-icon="left_panel_close" class="tooltip dark" data-tooltip="Sembunyikan <i>sidebar</i>" data-tooltip-position="right"></i>
            <div class="sbx-info">
                <div class="sbx-title display-md line-clamp-1"></div>
                <div class="sbx-desc body bold line-clamp-1"></div>
            </div>
            <div class="sbx-menu"></div>
        </div>
        <div class="sbx-preview-wrapper">
            <div class="sbx-preview"></div>
        </div>
        <div class="sbx-panel">
            <div class="sbx-customize">
                <span class="subheading">Kustomisasi</span>
                <div class="sbx-options"></div>
            </div>
            <div class="sbx-code">
                <span class="subheading">Kode HTML</span>
                <pre class="sbx-codepreview language-html" tabindex="0"><code class="language-html" id="codepreview"></code></pre>
                <a href="#" class="button ultimate icon only tooltip dark" data-icon="content_copy" data-tooltip="Salin Kode" data-tooltip-position="left" id="copy-code"></a>
            </div>
        </div>
    </main>
</body>

</html>