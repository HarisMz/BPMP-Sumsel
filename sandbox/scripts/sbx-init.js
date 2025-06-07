// import sbxAnimations from '/sandbox/scripts/sbx-animations.js';
import sbxColors from '/sandbox/scripts/sbx-colors.js';
import sbxElevations from '/sandbox/scripts/sbx-elevations.js';
import sbxIntroduction from '/sandbox/scripts/sbx-introduction.js';
import sbxRounded from '/sandbox/scripts/sbx-rounded.js';
import sbxSpacings from '/sandbox/scripts/sbx-spacings.js';
// import sbxTransitions from '/sandbox/scripts/sbx-transitions.js';
import sbxTypography from '/sandbox/scripts/sbx-typography.js';
// import sbxVariables from '/sandbox/scripts/sbx-variables.js';
import sbxCard from '/sandbox/scripts/sbx-card.js';
import sbxFlexbox from '/sandbox/scripts/sbx-flexbox.js';
import sbxGrid from '/sandbox/scripts/sbx-grid.js';
import sbxSection from '/sandbox/scripts/sbx-section.js';
import sbxButton from '/sandbox/scripts/sbx-button.js';
import sbxCheckbox from '/sandbox/scripts/sbx-checkbox.js';
import sbxFileupload from '/sandbox/scripts/sbx-fileupload.js';
import sbxInput from '/sandbox/scripts/sbx-input.js';
import sbxRadio from '/sandbox/scripts/sbx-radio.js';
import sbxSelect from '/sandbox/scripts/sbx-select.js';
import sbxStepper from '/sandbox/scripts/sbx-stepper.js';
import sbxSwitch from '/sandbox/scripts/sbx-switch.js';
import sbxTextarea from '/sandbox/scripts/sbx-textarea.js';
import sbxBreadcrumbbar from '/sandbox/scripts/sbx-breadcrumbbar.js';
import sbxNavbar from '/sandbox/scripts/sbx-navbar.js';
import sbxPagination from '/sandbox/scripts/sbx-pagination.js';
import sbxCarousel from '/sandbox/scripts/sbx-carousel.js';
import sbxCollapsible from '/sandbox/scripts/sbx-collapsible.js';
import sbxExpander from '/sandbox/scripts/sbx-expander.js';
import sbxTabs from '/sandbox/scripts/sbx-tabs.js';
import sbxAvatar from '/sandbox/scripts/sbx-avatar.js';
import sbxBadge from '/sandbox/scripts/sbx-badge.js';
import sbxChip from '/sandbox/scripts/sbx-chip.js';
import sbxDatatable from '/sandbox/scripts/sbx-datatable.js';
import sbxList from '/sandbox/scripts/sbx-list.js';
import sbxTable from '/sandbox/scripts/sbx-table.js';
import sbxBanner from '/sandbox/scripts/sbx-banner.js';
import sbxSpinner from '/sandbox/scripts/sbx-spinner.js';
import sbxToast from '/sandbox/scripts/sbx-toast.js';
import sbxFab from '/sandbox/scripts/sbx-fab.js';
import sbxIcons from '/sandbox/scripts/sbx-icons.js';
import sbxImage from '/sandbox/scripts/sbx-image.js';
import sbxLink from '/sandbox/scripts/sbx-link.js';
import sbxText from '/sandbox/scripts/sbx-text.js';
import sbxSeparator from '/sandbox/scripts/sbx-separator.js';
import sbxDialog from '/sandbox/scripts/sbx-dialog.js';
import sbxPopup from '/sandbox/scripts/sbx-popup.js';
import sbxTooltip from '/sandbox/scripts/sbx-tooltip.js';

var defaultTitle = '';
var defaultDesc = '';
var defaultHTML = `<div class="flex column justify-center items-center text-center">
                <img src="/assets/images/akur-sandbox.svg" class="width-22 ratio-3-4" style="animation: logoFade 1.4s ease 0.1s forwards; opacity: 0;">
                <div class="spacer-9 vertical"></div>
                <h1 class="headline-sm mb-2 text-informational text-balance" style="animation: fadeSlideDown 0.7s ease 0.6s forwards; opacity: 0;">Selamat Datang di Akur Sandbox</h1>
                <h2 class="heading-lg mb-6 text-subdued text-balance" style="animation: fadeSlideDown 0.7s ease 0.8s forwards; opacity: 0;">Ruang <span id="team-dialog" style="cursor: pointer;">Kreatif</span> untuk Anda Mengubah dan Menguji Komponen UI</h2>
                <p class="body text-balance" style="animation: fadeSlideDown 0.7s ease 1.8s forwards; opacity: 0;">Mulai kustomisasi dengan memilih komponen dari daftar di sisi kiri.</p>
                </div>
                <i data-icon="west" class="arrow-gimmick"></i>`;

$(document).ready(function() {

    $('link[rel="icon"]').remove();
    $('link[rel="shortcut icon"]').remove();
    $('head').append('<link rel="icon" type="image/svg+xml" href="/assets/images/akur-logo.svg">');
    $('head').append('<link rel="icon" type="image/png" href="/assets/images/akur-logo.png" sizes="32x32">');
    $('head').append('<link rel="icon" type="image/x-icon" href="/assets/images/akur-logo.ico">');
    $('head').append('<link rel="shortcut icon" href="/assets/images/akur-logo.ico">');

    $('.sbx-title').text(defaultTitle);
    $('.sbx-desc').text(defaultDesc);
    $('.sbx-preview').html(defaultHTML);
    
    $('.sbx-options').html('');

    const components = {
        /*animations: {
            ...sbxAnimations,
            title: "Animations",
            description: "Gerakan yang menambah interaktivitas dan membuat transisi UI lebih halus."
        },*/
        colors: {
            ...sbxColors,
            title: "Colors",
            description: "Skema warna untuk tema, status, dan aksen dalam desain."
        },
        elevations: {
            ...sbxElevations,
            title: "Elevations",
            description: "Lapisan bayangan yang memberi kesan kedalaman pada tampilan."
        },
        introduction: {
            ...sbxIntroduction,
            title: "Introduction",
            description: "Memulai menggunakan Akur Design System."
        },
        rounded: {
            ...sbxRounded,
            title: "Rounded",
            description: "Pengaturan sudut membulat pada berbagai elemen visual."
        },
        spacings: {
            ...sbxSpacings,
            title: "Spacings",
            description: "Jarak antar elemen untuk tata letak yang rapi dan terstruktur."
        },
        /*transitions: {
            ...sbxTransitions,
            title: "Transitions",
            description: "Perubahan halus antar status, seperti saat hover atau klik."
        },*/
        typography: {
            ...sbxTypography,
            title: "Typography",
            description: "Gaya dan hierarki teks, mencakup font, ukuran, dan ketebalan."
        },
        /*variables: {
            ...sbxVariables,
            title: "Variables",
            description: "Variabel CSS yang menjaga konsistensi desain dan memudahkan kustomisasi."
        },*/
        card: {
            ...sbxCard,
            title: "Card",
            description: "Kotak untuk menampilkan informasi ringkas dengan tata letak rapi."
        },
        flexbox: {
            ...sbxFlexbox,
            title: "Flexbox",
            description: "Sistem tata letak fleksibel untuk menyusun elemen secara horizontal atau vertikal."
        },
        grid: {
            ...sbxGrid,
            title: "Grid",
            description: "Sistem tata letak berbasis kolom dan baris untuk distribusi konten yang teratur."
        },
        section: {
            ...sbxSection,
            title: "Section",
            description: "Bagian konten yang terpisah dengan batas visual yang jelas."
        },
        button: {
            ...sbxButton,
            title: "Button",
            description: "Tombol klik yang tersedia dalam berbagai ukuran dan gaya untuk tindakan."
        },
        checkbox: {
            ...sbxCheckbox,
            title: "Checkbox",
            description: "Kotak untuk memilih satu atau beberapa opsi dalam daftar."
        },
        fileupload: {
            ...sbxFileupload,
            title: "File Upload",
            description: "Input untuk memilih dan mengunggah file dari perangkat."
        },
        input: {
            ...sbxInput,
            title: "Input",
            description: "Kolom isian untuk memasukkan teks atau data lainnya."
        },
        radio: {
            ...sbxRadio,
            title: "Radio",
            description: "Pilihan seleksi tunggal dari sekelompok opsi."
        },
        select: {
            ...sbxSelect,
            title: "Select",
            description: "Dropdown untuk memilih satu atau beberapa pilihan."
        },
        stepper: {
            ...sbxStepper,
            title: "Stepper",
            description: "Kontrol untuk menaikkan atau menurunkan nilai angka."
        },
        switch: {
            ...sbxSwitch,
            title: "Switch",
            description: "Kontrol untuk mengaktifkan atau menonaktifkan suatu opsi."
        },
        textarea: {
            ...sbxTextarea,
            title: "Text Area",
            description: "Kolom teks multi-baris untuk memasukkan teks panjang."
        },
        breadcrumbbar: {
            ...sbxBreadcrumbbar,
            title: "Breadcrumb Bar",
            description: "Navigasi hierarki yang menunjukkan posisi pengguna dalam struktur halaman."
        },
        navbar: {
            ...sbxNavbar,
            title: "Navbar",
            description: "Navigasi umum untuk menjelajahi situs atau aplikasi."
        },
        pagination: {
            ...sbxPagination,
            title: "Pagination",
            description: "Navigasi untuk memecah konten menjadi beberapa halaman."
        },
        carousel: {
            ...sbxCarousel,
            title: "Carousel",
            description: "Slider yang menampilkan item secara bergantian."
        },
        collapsible: {
            ...sbxCollapsible,
            title: "Collapsible",
            description: "Bisa diperluas atau disembunyikan untuk menampilkan konten tambahan."
        },
        expander: {
            ...sbxExpander,
            title: "Expander",
            description: "Fitur untuk memperluas atau menyembunyikan teks yang terlalu panjang."
        },
        tabs: {
            ...sbxTabs,
            title: "Tabs",
            description: "Navigasi yang menggantikan konten berdasarkan tab yang dipilih."
        },
        avatar: {
            ...sbxAvatar,
            title: "Avatar",
            description: "Gambar profil atau ikon kecil yang mewakili pengguna atau entitas."
        },
        badge: {
            ...sbxBadge,
            title: "Badge",
            description: "Label kecil untuk menandakan status atau jumlah."
        },
        chip: {
            ...sbxChip,
            title: "Chip",
            description: "Label kecil untuk menampilkan kategori, item, atau tindakan singkat."
        },
        datatable: {
            ...sbxDatatable,
            title: "Data Table",
            description: "Tabel data dengan fitur sorting dan filtering."
        },
        list: {
            ...sbxList,
            title: "List",
            description: "Daftar item yang dapat diinteraksikan atau diklik."
        },
        table: {
            ...sbxTable,
            title: "Table",
            description: "Struktur tabel dasar untuk menampilkan data atau informasi."
        },
        banner: {
            ...sbxBanner,
            title: "Banner",
            description: "Notifikasi atau informasi penting di bagian atas layar."
        },
        spinner: {
            ...sbxSpinner,
            title: "Spinner",
            description: "Indikator loading berupa animasi putaran."
        },
        toast: {
            ...sbxToast,
            title: "Toast",
            description: "Pesan sementara yang muncul sebentar di layar."
        },
        fab: {
            ...sbxFab,
            title: "FAB",
            description: "Floating Action Button, tombol melayang untuk tindakan utama."
        },
        icons: {
            ...sbxIcons,
            title: "Icons",
            description: "Simbol visual kecil yang merepresentasikan tindakan atau informasi."
        },
        image: {
            ...sbxImage,
            title: "Image",
            description: "Gambar, foto, atau grafik yang ditampilkan di halaman."
        },
        link: {
            ...sbxLink,
            title: "Link",
            description: "Teks tautan dengan gaya khusus dan interaksi seperti hover dan active."
        },
        text: {
            ...sbxText,
            title: "Text",
            description: "Teks dasar yang mengikuti aturan hierarki tipografi."
        },
        separator: {
            ...sbxSeparator,
            title: "Separator",
            description: "Pemisah berupa garis atau spasi untuk membagi konten atau area."
        },
        dialog: {
            ...sbxDialog,
            title: "Dialog",
            description: "Kotak modal untuk pesan atau interaksi tambahan."
        },
        popup: {
            ...sbxPopup,
            title: "Popup",
            description: "Kotak modal tanpa judul untuk menampilkan konten imersif."
        },
        tooltip: {
            ...sbxTooltip,
            title: "Tooltip",
            description: "Informasi singkat yang muncul saat elemen di-hover."
        }
    };
    function prettifyHtml(html) {
        if (!html) return '';
        
        const options = {
            indent: '    ',
            singleTags: ['input', 'img', 'br', 'hr', 'meta', 'link'],
            newline: '\n'
        };
        
        // Bersihkan html
        html = html.trim()
            .replace(/>\s+</g, '><')
            .replace(/\s+/g, ' ');
        
        let depth = 0;
        let formatted = '';
        
        // Split dengan mempertahankan PHP tags dan komentar
        const tokens = html.split(/(<\?php.*?\?>|<!--.*?-->|<[^>]+>)/g)
            .filter(token => token.trim());
        
        function isPhpTag(token) {
            return token.startsWith('<?php') || token.startsWith('?>');
        }
        
        function isComment(token) {
            return token.startsWith('<!--');
        }
        
        for (let i = 0; i < tokens.length; i++) {
            let token = tokens[i].trim();
            
            if (token.startsWith('<!DOCTYPE')) {
                formatted += token + options.newline;
                continue;
            }
            
            // Handle PHP tags dan komentar tanpa mengubah depth
            if (isPhpTag(token) || isComment(token)) {
                formatted += options.indent.repeat(depth) + token + options.newline;
                continue;
            }
            
            if (token.startsWith('</')) {
                depth--;
                depth = Math.max(0, depth);
                formatted += options.indent.repeat(depth) + token + options.newline;
            }
            else if (token.startsWith('<')) {
                formatted += options.indent.repeat(depth) + token + options.newline;
                
                const isSelfClosing = token.endsWith('/>');
                const tagName = token.match(/<([^\s>]+)/)[1].toLowerCase();
                const isSingleTag = options.singleTags.includes(tagName);
                
                if (!isSelfClosing && !isSingleTag) {
                    depth++;
                }
            }
            else {
                formatted += options.indent.repeat(depth) + token + options.newline;
            }
        }
        
        return formatted.trim();
    }

    function generateCustomizationForm(component) {
        let formHtml = '<div class="grid grid-2 gap-y-4 gap-x-6">';
        const dependencies = {};
        component.customization.forEach(option => {
            const shouldHide = option.dependencies ? 'style="display: none;"' : '';
            
            if (option.dependencies) {
                dependencies[option.name] = {
                    rules: option.dependencies,
                    field: option
                };
            }
            
            if (option.type === 'separator') {
                formHtml += `
                <div class="flex column"${option.span ? ` style="grid-column: span ${option.span};"` : ''}>
                    <div class="spacer-${option.batas} vertical"></div>
                    <label><b>${option.label}</b> ${option.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${option.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>
                    <div class="separator-${option.batas} vertical"></div>`;
            } else {
            formHtml += `
                <div class="flex column justify-end form-field" 
                     ${option.span ? `style="grid-column: span ${option.span};"` : ''} 
                     id="field-${option.name}" 
                     ${shouldHide}>`;
            } 
            
            if (option.type === 'array') {
                formHtml += `
                    <label class="form-section"><b>${option.label || ''}</b> ${option.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${option.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>
                    <div id="${option.name}-container" class="array-container">
                        <div class="array-items">
                            ${generateArrayItems(option, [])}
                        </div>
                        <button type="button" class="button medium full add-array-item" data-icon="add" data-array="${option.name}">
                            Tambah
                        </button>
                    </div>
                `;
            } else {
                if (option.type != 'checkbox' && option.type != 'switch' && option.type != 'separator') {
                    formHtml += `<label for="${option.name}">${option.label || ''} ${option.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${option.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>`;
                }

                if (option.type === 'select') {
                    formHtml += `<div class="select small"><select id="${option.name}" name="${option.name}">`;
                    option.options.forEach(opt => {
                        const selected = opt.default ? ' selected' : '';
                        formHtml += `<option value="${opt.value}"${selected}>${opt.label}</option>`;
                    });
                    formHtml += '</select></div>';
                } else if (option.type === 'switch') {
                    formHtml += `
                        <label class="switch${option.swap ? ' left' : ' right'}" style="height: 42px;">
                            <input type="checkbox" id="${option.name}" name="${option.name}" ${option.default ? 'checked' : '' }>
                            <span class="mark"></span>
                            <span class="label">${option.label || ''} ${option.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${option.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</span>
                        </label>`;
                } else if (option.type === 'checkbox') {
                    formHtml += `
                        <label class="checkbox${option.swap ? ' left' : ' right'}" style="height: 42px;">
                            <input type="checkbox" id="${option.name}" name="${option.name}" ${option.default ? 'checked' : '' }>
                            <span class="mark"></span>
                            <span class="label">${option.label || ''} ${option.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${option.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</span>
                        </label>`;
                } else if (option.type === 'stepper') {
                    formHtml += `
                        <input type="number" class="stepper small" id="${option.name}" name="${option.name}" value="${option.default || '0'}"${option.min ? ` min="${option.min}"` : ''}${option.max ? ` max="${option.max}"` : ''}>`;
                } else if (option.type === 'text') {
                    const placeholder = option.placeholder ? `placeholder="${option.placeholder}"` : '';
                    const value = option.default ? `value="${option.default}"` : '';
                    formHtml += `<div class="input small"><input type="${option.type}" id="${option.name}" name="${option.name}" ${placeholder} ${value}></div>`;
                }
            }
            
            formHtml += '</div>';
        });
        formHtml += '</div>';

        setTimeout(() => {
            Object.keys(dependencies).forEach(dependentField => {
                const rules = dependencies[dependentField].rules;
                const dependentElement = document.getElementById(`field-${dependentField}`);
                
                // Fungsi untuk cek nilai sesuai rule
                const checkValue = (fieldName, expectedValue) => {
                    const field = document.getElementById(fieldName);
                    if (!field) return false;

                    // Jika expectedValue = true, cek apakah field terisi
                    if (expectedValue === true) {
                        return field.type === 'checkbox' ? field.checked : field.value.trim() !== '';
                    }

                    // Jika expectedValue adalah array, cek apakah nilai ada dalam array
                    if (Array.isArray(expectedValue)) {
                        return expectedValue.includes(field.value);
                    }

                    // Jika expectedValue adalah string dengan operator
                    if (typeof expectedValue === 'string' && expectedValue.includes('>')) {
                        const value = Number(field.value);
                        const compareValue = Number(expectedValue.replace('>', '').trim());
                        return value > compareValue;
                    }

                    // Default comparison
                    return field.value === expectedValue;
                };

                // Handler untuk check semua dependencies
                const handleChange = () => {
                    let shouldShow = false;

                    // Cek apakah menggunakan OR logic
                    if (rules.or) {
                        // Jika salah satu rule terpenuhi, tampilkan field
                        shouldShow = rules.or.some(orRule => {
                            return Object.entries(orRule).every(([fieldName, expectedValue]) => {
                                return checkValue(fieldName, expectedValue);
                            });
                        });
                    } else {
                        // Logika AND seperti sebelumnya
                        shouldShow = Object.entries(rules).every(([fieldName, expectedValue]) => {
                            return checkValue(fieldName, expectedValue);
                        });
                    }

                    dependentElement.style.display = shouldShow ? '' : 'none';
                };

                // Setup event listeners untuk semua field yang terkait
                if (rules.or) {
                    rules.or.forEach(orRule => {
                        Object.keys(orRule).forEach(fieldName => {
                            const field = document.getElementById(fieldName);
                            if (field) {
                                ['input', 'change'].forEach(event => {
                                    field.addEventListener(event, handleChange);
                                });
                            }
                        });
                    });
                } else {
                    Object.keys(rules).forEach(fieldName => {
                        const field = document.getElementById(fieldName);
                        if (field) {
                            ['input', 'change'].forEach(event => {
                                field.addEventListener(event, handleChange);
                            });
                        }
                    });
                }

                // Initial check
                handleChange();
            });
        }, 0);

        return formHtml;
    }

    function generateArrayItems(option, values = []) {
        const index = values.index !== undefined ? values.index : values.length;

        // Identifikasi fields yang memiliki dependencies
        const dependentFields = option.itemTemplate.filter(field => field.dependencies);
        
        const html = `
            <div class="array-item gap-x-6" data-index="${index}">
                <div class="separator-7 vertical full border-color-subdued"></div>
                <div class="flex row full gap-6">
                    <div class="grid grid-2 gap-x-6 gap-y-4">
                        ${option.itemTemplate.map((field, fieldIndex) => {
                            const fieldId = `${option.name}-${index}-${field.name}`;
                            const shouldHide = field.dependencies ? 'style="display: none;"' : '';

                            return `
                                <div class="flex column${field.type === 'switch' || field.type === 'checkbox' ? ' justify-end' : ''}"
                                    ${field.span ? ` style="grid-column: span ${field.span};"` : ''}
                                    id="field-${fieldId}"
                                    ${shouldHide}
                                    data-array-item="${index}"
                                >
                                    ${generateFieldHTML(field, option, index, values)}
                                </div>
                            `;
                        }).join('')}
                    </div>
                    <div class="flex justify-center items-end">
                        <button type="button" class="button small destructive only delete-array-item" data-icon="delete" data-index="${index}">
                        </button>
                    </div>
                </div>
            </div>
        `;

        // Setup dependencies setelah render
        setTimeout(() => {
            setupArrayItemDependencies(option, index);
        }, 0);

        return html;
    }

    function generateFieldHTML(field, option, index, values) {
        const fieldId = `${option.name}-${index}-${field.name}`;
        
        if (field.type === 'select') {
            return `
                <label for="${fieldId}">${field.label} ${field.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${field.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>
                <div class="select small">
                    <select 
                        id="${fieldId}" 
                        name="${fieldId}"
                        class="option-field"
                        data-field="${field.name}"
                    >
                        ${field.options.map(opt => `
                            <option value="${opt.value}"${opt.default || values[field.name] === opt.value ? ' selected' : ''}>${opt.label}</option>
                        `).join('')}
                    </select>
                </div>
            `;
        } else if (field.type === 'switch') {
            return `
                <label class="switch${field.swap ? ' left' : ' right'}" style="height: 42px;">
                    <input 
                        type="checkbox" 
                        id="${fieldId}" 
                        name="${fieldId}" 
                        class="option-field"
                        data-field="${field.name}"
                        ${values[field.name] || field.default ? 'checked' : ''}
                    >
                    <span class="mark"></span>
                    <span class="label">${field.label} ${field.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${field.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</span>
                </label>
            `;
        } else if (field.type === 'checkbox') {
            return `
                <label class="checkbox${field.swap ? ' left' : ' right'}" style="height: 42px;">
                    <input 
                        type="checkbox" 
                        id="${fieldId}" 
                        name="${fieldId}" 
                        class="option-field"
                        data-field="${field.name}"
                        ${values[field.name] || field.default ? 'checked' : ''}
                    >
                    <span class="mark"></span>
                    <span class="label">${field.label} ${field.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${field.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</span>
                </label>
            `;
        } else if (field.type === 'stepper') {
            return `
                <label for="${fieldId}">${field.label} ${field.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${field.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>
                <input 
                    type="number" 
                    class="stepper small option-field" 
                    id="${fieldId}" 
                    name="${fieldId}"
                    data-field="${field.name}"
                    value="${values[field.name] || field.default || '0'}"
                    ${field.min !== undefined ? `min="${field.min}"` : ''}
                    ${field.max !== undefined ? `max="${field.max}"` : ''}
                >
            `;
        } else {
            return `
                <label for="${fieldId}">${field.label} ${field.tooltip ? `&nbsp;<i data-icon="info" class="small onbody tooltip dark" data-tooltip="${field.tooltip}" data-tooltip-position="top" style="cursor: help;"></i>` : ''}</label>
                <div class="input small">
                    <input 
                        type="${field.type}" 
                        id="${fieldId}"
                        name="${fieldId}"
                        class="option-field"
                        data-field="${field.name}"
                        value="${values[field.name] || field.default || ''}"
                        ${field.placeholder ? `placeholder="${field.placeholder}"` : ''}
                    >
                </div>
            `;
        }
    }

    function setupArrayItemDependencies(option, itemIndex) {
        option.itemTemplate.forEach(field => {
            if (!field.dependencies) return;

            const fieldId = `${option.name}-${itemIndex}-${field.name}`;
            const dependentElement = document.getElementById(`field-${fieldId}`);
            if (!dependentElement) return;

            const handleDependencyChange = () => {
                let shouldShow = Object.entries(field.dependencies).every(([dependencyField, expectedValue]) => {
                    // Jika mengacu ke parent
                    if (dependencyField.startsWith('parent.')) {
                        const parentFieldName = dependencyField.replace('parent.', '');
                        const parentField = document.getElementById(parentFieldName);
                        if (!parentField) return false;
                        
                        if (parentField.type === 'checkbox' || parentField.type === 'switch') {
                            // Untuk switch/checkbox, bandingkan dengan boolean
                            const currentValue = parentField.checked;
                            return expectedValue === currentValue;
                        }
                        
                        if (expectedValue === true) {
                            return parentField.value.trim() !== '';
                        }
                        return parentField.value === expectedValue;
                    }
                    
                    // Jika mengacu ke field dalam item yang sama
                    const dependencyFieldId = `${option.name}-${itemIndex}-${dependencyField}`;
                    const dependencyElement = document.getElementById(dependencyFieldId);
                    if (!dependencyElement) return false;
                    
                    if (dependencyElement.type === 'checkbox' || dependencyElement.type === 'switch') {
                        // Untuk switch/checkbox, bandingkan dengan boolean
                        const currentValue = dependencyElement.checked;
                        return expectedValue === currentValue;
                    }
                    
                    if (expectedValue === true) {
                        return dependencyElement.value.trim() !== '';
                    }
                    if (Array.isArray(expectedValue)) {
                        return expectedValue.includes(dependencyElement.value);
                    }
                    return dependencyElement.value === expectedValue;
                });

                dependentElement.style.display = shouldShow ? '' : 'none';
            };

            // Setup event listeners untuk setiap dependency field
            Object.keys(field.dependencies).forEach(dependencyField => {
                if (dependencyField.startsWith('parent.')) {
                    const parentFieldName = dependencyField.replace('parent.', '');
                    const parentField = document.getElementById(parentFieldName);
                    if (parentField) {
                        ['input', 'change'].forEach(event => {
                            parentField.addEventListener(event, handleDependencyChange);
                        });
                    }
                } else {
                    const dependencyFieldId = `${option.name}-${itemIndex}-${dependencyField}`;
                    const dependencyElement = document.getElementById(dependencyFieldId);
                    if (dependencyElement) {
                        ['input', 'change'].forEach(event => {
                            dependencyElement.addEventListener(event, handleDependencyChange);
                        });
                    }
                }
            });

            // Initial check
            handleDependencyChange();
        });
    }

    $(document).on('click', '.add-array-item', function(e) {
        e.preventDefault();
        
        const arrayName = $(this).data('array');
        
        const component = components[$('.sbx-component-item.active').data('component')];
        const arrayOption = component.customization.find(opt => opt.name === arrayName);
        
        const $container = $(`#${arrayName}-container .array-items`);
        
        const newIndex = $container.children().length;
        
        const newItemHtml = generateArrayItems(arrayOption, { index: newIndex });
        
        $container.append(newItemHtml);
        
        updatePreview(component);
    });

    $(document).on('click', '.delete-array-item', function(e) {
        e.preventDefault();
        
        const $item = $(this).closest('.array-item');
        const component = components[$('.sbx-component-item.active').data('component')];
        
        $item.remove();
        updatePreview(component);
    });

    $(document).on('input', '.option-field', function() {
        const component = components[$('.sbx-component-item.active').data('component')];
        updatePreview(component);
    });

    function updateUrl(componentName) {
        const currentPath = window.location.pathname;
        const sandboxIndex = currentPath.indexOf('/sandbox/');
        
        let baseUrl;
        if (sandboxIndex !== -1) {
            baseUrl = currentPath.substring(0, sandboxIndex + 9);
        } else {
            baseUrl = '/sandbox/'; 
        }
        
        const newUrl = componentName ? `${baseUrl}${componentName}/` : baseUrl;
        history.pushState(null, '', newUrl);
    }

    function loadComponentFromUrl() {
        const path = window.location.pathname;
        const componentName = path.split('/').filter(Boolean).pop();
        if (componentName && components[componentName]) {
            const $componentItem = $(`.sbx-component-item[data-component="${componentName}"]`);
            if (!$componentItem.hasClass('active')) {
                $componentItem.click();
                $('.sbx-sidebar').removeClass('intro');
                $('.sbx-component-list').scrollTop($componentItem.offset().top - 113);
            }
        } else {
            $('.sbx-component-item.active').removeClass('active selected');
            $('.sbx-title').text(defaultTitle);
            $('.sbx-desc').text(defaultDesc);
            $('.sbx-preview').html(defaultHTML);
            $('.sbx-options').html('');
        }
    }

    $('.logo-link').on('click', function(e) {
        e.preventDefault();
        if ($('.sbx-component-list').find('.selected').length) {
            $('.sbx-component-item').removeClass('active selected');
            $('.sbx-title').text(defaultTitle);
            $('.sbx-desc').text(defaultDesc);
            $('.sbx-preview').html(defaultHTML);
            $('.sbx-options').html('');
            updateUrl('');
        }
    });

    $('.sbx-component-item').on('click', function(e) {
        e.preventDefault();
        const componentName = $(this).data('component');
        const component = components[componentName];
        
        if ($(this).hasClass('active selected')) {
            $(this).removeClass('active selected');
            $('.sbx-title').text(defaultTitle);
            $('.sbx-desc').text(defaultDesc);
            $('.sbx-preview').html(defaultHTML);
            $('.sbx-options').html('');
            updateUrl('');
        } else {
            $(this).siblings().removeClass('active selected');
            $(this).addClass('active selected');
            $('.sbx-title').text(component.title);
            $('.sbx-desc').text(component.description);
            $('.sbx-options').html(generateCustomizationForm(component));
            $('.sbx-options input, .sbx-options select').on('change input', function() {
                updatePreview(component);
            });
            updatePreview(component);
            updateUrl(componentName);
        }
    });

    loadComponentFromUrl();

    window.onpopstate = loadComponentFromUrl;

    function updatePreview(component) {
        const options = {};
        $('.sbx-options input, .sbx-options select').each(function() {
            const $input = $(this);
            const name = $input.attr('name');
            
            if ($input.attr('type') === 'checkbox') {
                options[name] = $input.prop('checked');
            } 
            else {
                options[name] = $input.val();
            }
        });

        options.options = [];
        $('.array-item').each(function(index) {
            const option = {};
            $(this).find('.option-field').each(function() {
                const field = $(this).data('field');
                if ($(this).attr('type') === 'checkbox') {
                    option[field] = $(this).prop('checked');
                } else {
                    option[field] = $(this).val();
                }
            });
            options.options.push(option);
        });
        
        var generatedHTML = typeof component.generatePreviewHTML === 'function' 
            ? component.generatePreviewHTML(options) 
            : component.generateHTML(options);


        $('.sbx-preview').html(generatedHTML);
        updateCode(component, options);

        initializeDatatables();
        initializeTables();
        initFileUpload();
        initStepper();
        initCollapsible();
        initTabs();
        initCarousel();
        initExpander();
        initBreadcrumbbar();
    }

    function updateCode(component, options) {
        const generatedHTML = component.generateHTML(options);
        
        let cleanHTML = generatedHTML
            .replace(/\s+(?:class|data-\w+)=["']\s*["']/g, '')
            .replace(/\s+/g, ' ')
            .replace(/\s+>/g, '>');
        
        const formattedHTML = prettifyHtml(cleanHTML);
        
        $('#codepreview').text(formattedHTML);
        
        Prism.highlightElement($('#codepreview')[0]);
    }

    $('.sbx-code').each(function() {
        function copyCodeToClipboard() {
            const $codeElement = $(this).parent().find('#codepreview');
            const $textArea = $('<textarea>');
            $textArea.val($codeElement.text());
            $('body').append($textArea);
            $textArea.select();
            document.execCommand('copy');
            $textArea.remove();
            createToast({
                content: 'Kode HTML disalin ke <i>clipboard</i>.',
                style: 'success',
                icon: "inventory"
            });
        }

        $(this).find('#copy-code').on('click', copyCodeToClipboard);
    });

    $(document).on('click', '.color-box', function() {
        const $textArea = $('<textarea>');
        $textArea.val($(this).attr('data-color'));
        $('body').append($textArea);
        $textArea.select();
        document.execCommand('copy');
        $textArea.remove();
        createToast({
            content: `Kode Hex warna <b>${$(this).attr('data-color')}</b><br>(${$(this).attr('data-colorname')}${$(this).next().text()})<br>disalin ke <i>clipboard</i>.`,
            style: 'success',
            icon: "inventory"
        });
    });

    $(document).on('click', '#toggle-sidebar', function() {
        $('.sbx-sidebar').toggleClass('hidden');
        if ($('.sbx-sidebar').hasClass('hidden')) {
            $(this).attr('data-icon', 'left_panel_open');
            $(this).attr('data-tooltip', 'Tampilkan <i>sidebar</i>');
        } else {
            $(this).attr('data-icon', 'left_panel_close');
            $(this).attr('data-tooltip', 'Sembunyikan <i>sidebar</i>');
        }
    });

    $(document).on('click', '#team-dialog', function() {
        createDialog({
            style: 'default',
            size: 'medium',
            title: 'Tim Penyeragaman Laman',
            subtitle: '🎵 Oh Penyeragaman Laman, Kami Bersama 🎵',
            content: `
                <div class='grid grid-3 grid-3-mobile full height-full gap-4'>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/ridha.png'>
                            </span>
                            <h2 class='action'>Ridha</h2>
                            <p class='eyebrow-sm'>Muhammad Ridha Ridwan</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/haris.png'>
                            </span>
                            <h2 class='action'>Haris</h2>
                            <p class='eyebrow-sm'>Haris Dhaifullah Mz</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/firdaus.png'>
                            </span>
                            <h2 class='action'>Firdaus</h2>
                            <p class='eyebrow-sm'>Muhamad Firdaus Jubaedi</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/tamik.png'>
                            </span>
                            <h2 class='action'>Tamik</h2>
                            <p class='eyebrow-sm'>Rahmi Syahputri</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/sefiq.png'>
                            </span>
                            <h2 class='action'>Sefiq</h2>
                            <p class='eyebrow-sm'>Sefiqurohman Alfarizi</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/yoga.png'>
                            </span>
                            <h2 class='action'>Yoga</h2>
                            <p class='eyebrow-sm'>Yoga Fauzi Irawan</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/rizky.png'>
                            </span>
                            <h2 class='action'>Rizky</h2>
                            <p class='eyebrow-sm'>Moch Rizky Lutfi</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/taqy.png'>
                            </span>
                            <h2 class='action'>Taqy</h2>
                            <p class='eyebrow-sm'>Taqyudin Amri</p>
                        </a>
                    </div>
                    <div class='card feature surface-subdued py-6 px-2'>
                        <a href='#'>
                            <span class='avatar round lg mb-2'>
                                <img class='image' src='/sandbox/assets/devteam/sofhian.png'>
                            </span>
                            <h2 class='action'>Sofhian</h2>
                            <p class='eyebrow-sm'>Sofhian Fazrin Nasrulloh</p>
                        </a>
                    </div>
                </div>
                <div class='spacer-4 vertical'></div>
                <div>
                    <audio controls autoplay class='full'>
                        <source src='/sandbox/assets/audio/penyeragamanlaman_cut.mp3' type='audio/mpeg'>
                    </audio>
                </div>
            `,
            buttons: [
                {
                    label: 'Tutup',
                    class: 'ultimate full',
                    action: 'close',
                    target: '#',
                    newtab: false
                }
            ],
            hasclose: true,
            persistent: false
        });
    });

    function checkPrevent() {
        if ($(window).width() < 1100) {
            $('body').empty();
            $('body').html(`
                <div class="flex column p-6 justify-center full items-center text-center">
                    <h1 class="width-75 headline-sm mb-5 text-informational text-balance">Aduh, Maaf!</h1>
                    <p class="width-75 body mb-6 text-subdued text-balance" style="max-width: 600px;">Silakan akses <b>Akur Sandbox</b> dengan layar yang lebih besar dan tanpa pembesaran (<i>zoom</i>). Pencegahan ini dilakukan untuk menyajikan pengalaman terbaik bagi pengguna dalam menggunakan <i>tool</i> ini.</p>
                </div>
            `);
        } else if ($('body').children().length === 1) {
            location.reload();
        }
    }

    checkPrevent();

    $(window).on('resize', function() {
        checkPrevent();
    });

    setTimeout(function() {$('.sbx-sidebar').removeClass('intro')}, 3000);
});