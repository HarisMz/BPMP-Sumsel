export default {
    customization: [
        { type: 'select', name: 'types', label: 'Komponen Pemicu', tooltip: 'Menentukan komponen pemicu dari Dialog.',
            options: [
                { value: 'button', label: 'Button', default: true },
                { value: 'link', label: 'Link' }
            ]
        },
        { type: 'select', name: 'btn_style', label: 'Gaya Button', tooltip: 'Menentukan gaya dari Button.',
            options: [
                { value: ' ultimate', label: 'Utama', default: true },
                { value: ' primary', label: 'Primer' },
                { value: ' secondary', label: 'Sekunder' },
                { value: ' quiet', label: 'Minimalis' },
                { value: ' destructive', label: 'Bahaya' }
            ],
            dependencies: {
                types: 'button'
            }
        },
        { type: 'text', name: 'btn_teks', label: 'Teks Button', placeholder: 'Masukkan teks Button', tooltip: 'Menentukan teks dari Button.',
            dependencies: {
                types: 'button'
            }
        },
        { type: 'select', name: 'link_style', label: 'Gaya Link', tooltip: 'Menentukan gaya dari Link.',
            options: [
                { value: '', label: 'Primary', default: true },
                { value: ' secondary', label: 'Secondary' },
                { value: ' inverse', label: 'Inverse' }
            ],
            dependencies: {
                types: 'link'
            }
        },
        { type: 'text', name: 'link_teks', label: 'Teks Link', placeholder: 'Masukkan teks Link', tooltip: 'Menentukan teks dari Link.',
            dependencies: {
                types: 'link'
            }
        },
        { type: 'switch', name: 'noline', label: 'Tanpa Garis', tooltip: 'Menentukan apakah Link menampilkan garis bawah atau tidak.',
            dependencies: {
                types: 'link'
            }
        },


        { type: 'separator', label: 'Tampilan Dialog', batas: '4', span: 2, tooltip: 'Menentukan bagaimana isi dan tampilan dari Dialog.'},


        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari Dialog.',
            options: [
                { value: 'default', label: 'Biasa', default: true },
                { value: 'minimal', label: 'Minimal' }
            ]
        },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Menentukan ukuran dari Dialog.',
            options: [
                { value: 'fit', label: 'Pas', default: true },
                { value: 'medium', label: 'Sedang' },
                { value: 'large', label: 'Besar' },
                { value: 'fill', label: 'Isi' },
                { value: 'screen', label: 'Layar' }
            ]
        },
        { type: 'text', name: 'title', label: 'Judul', default: 'Judul Dialog', placeholder: 'Masukkan judul dialog', tooltip: 'Menentukan judul dari Dialog. Bagian ini boleh kosong jika diinginkan.' },
        { type: 'text', name: 'subtitle', label: 'Subjudul', default: 'Subjudul Dialog', placeholder: 'Masukkan subjudul', tooltip: 'Menentukan apakah Dialog memiliki subjudul atau tidak. Bagian ini boleh kosong jika diinginkan.',
            dependencies: {
                title: true
            }
        },
        { type: 'text', name: 'content', label: 'Isi', default: 'Ini contoh isi Dialog', placeholder: 'Masukkan isi dialog', tooltip: 'Menentukan isi dari Dialog.' },
        { type: 'select', name: 'dialog_button', label: 'Jumlah Dialog Button', tooltip: 'Menentukan berapa banyak Button yang ditampilkan pada dalam Dialog.',
            options: [
                { value: '', label: 'Tidak Ada', default: true },
                { value: 'satu', label: 'Satu' },
                { value: 'dua', label: 'Dua' }
            ],
        },
        { type: 'select', name: 'btn1_style', label: 'Gaya Button 1', tooltip: 'Gaya Button 1 pada Dialog.',
            options: [
                { value: 'ultimate', label: 'Utama', default: true },
                { value: 'primary', label: 'Primer' },
                { value: 'secondary', label: 'Sekunder' },
                { value: 'quiet', label: 'Minimalis' },
                { value: 'destructive', label: 'Bahaya' }
            ],
            dependencies: {
                dialog_button: ['satu', 'dua']
            }
        },
        { type: 'text', name: 'btn1_target', label: 'Tautan Button 1', default: '#', placeholder: 'Masukkan tautan Button', tooltip: 'Tautan yang disematkan pada Button 1 dalam Dialog.',
            dependencies: {
                dialog_button: ['satu', 'dua']
            }
        },
        { type: 'text', name: 'btn1_text', label: 'Teks Button 1', span: 2, placeholder: 'Masukkan teks Button', tooltip: 'Menentukan teks Button 1 pada Dialog.',
            dependencies: {
                dialog_button: ['satu', 'dua']
            }
        },
        { type: 'switch', name: 'btn1_isclose', label: 'Button Tutup 1', tooltip: 'Jadikan Button 1 berfungsi untuk menutup Dialog.',
            dependencies: {
                dialog_button: ['satu', 'dua']
            }
        },
        { type: 'switch', name: 'btn1_newtab', label: 'Button 1 Tab Baru', default: false, tooltip: 'Buka tautan Button 1 di tab baru.',
            dependencies: {
                dialog_button: ['satu', 'dua']
            }
        },
        { type: 'select', name: 'btn2_style', label: 'Gaya Button 2', tooltip: 'Gaya Button 2 pada Dialog.',
            options: [
                { value: 'ultimate', label: 'Utama' },
                { value: 'primary', label: 'Primer' },
                { value: 'secondary', label: 'Sekunder' },
                { value: 'quiet', label: 'Minimalis' },
                { value: 'destructive', label: 'Bahaya', default: true }
            ],
            dependencies: {
                dialog_button: 'dua'
            }
        },
        { type: 'text', name: 'btn2_target', label: 'Tautan Button 2', default: '#', placeholder: 'Masukkan tautan Button', tooltip: 'Tautan yang disematkan pada Button 2 dalam Dialog.',
            dependencies: {
                dialog_button: 'dua'
            }
        },
        { type: 'text', name: 'btn2_text', label: 'Teks Button 2', span: 2, placeholder: 'Masukkan teks Button', tooltip: 'Menentukan teks Button 2 dalam Dialog.',
            dependencies: {
                dialog_button: 'dua'
            }
        },
        { type: 'switch', name: 'btn2_isclose', label: 'Button 2 Tutup', tooltip: 'Jadikan Button 2 berfungsi untuk menutup Dialog.',
            dependencies: {
                dialog_button: 'dua'
            }
        },
        { type: 'switch', name: 'btn2_newtab', label: 'Button 2 Tab Baru', default: false, tooltip: 'Buka tautan Button 2 di tab baru.',
            dependencies: {
                dialog_button: 'dua'
            }
        },
        { type: 'switch', name: 'hasclose', label: 'Icon Tutup', default: true, tooltip: 'Tampilkan Icon tutup (×) pada Dialog.' },
        { type: 'switch', name: 'persistent', label: 'Persisten', tooltip: 'Dialog bersifat persisten, yang hanya bisa ditutup dengan Button atau Icon tutup. Jika tidak bersifat persisten, Dialog bisa ditutup dengan mengklik bidang luar (overlay).',
            dependencies: {
                or: [
                    { btn1_isclose: true },
                    { btn2_isclose: true },
                    { hasclose: true }
                ]
            }
        }
    ],
    generateHTML: (options) => 
    `${options.types === 'button' ? 
        `<a href="#" class="button${options['btn_style']} call-dialog"
            data-dialog='{
                ${options.style == 'default' ? '' : `"style": "${options.style}",`}
                ${options.size == 'fit' ? '' : `"size": "${options.size}",`}
                "title": "${options.title}"
                ${options.subtitle ? `, "subtitle": "${options.subtitle}"` : ''}
                ${options.content ? `, "content": "${options.content}"` : ''}
                ${options.dialog_button === 'satu' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.dialog_button === 'dua' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    },
                    {
                        "label"     : "${options.btn2_text || 'Button 2'}",
                        "class"     : "${options['btn2_style']}",
                        "action"    : "${options.btn2_isclose ? 'close' : ''}"
                        ${options.btn2_isclose ? '' : `, "target": "${options['btn2_target']}"`}
                        ${options['btn2_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.hasclose ? '' : `, "hasclose": false`}
                ${(options.hasclose || options.btn1_isclose || options.btn2_isclose) ? options.persistent ? `, "persistent": true` : '' : ''}
            }'>
            ${options['btn_teks'] || 'Tampilkan Dialog'}
        </a>` :
        `<a href="#" class="link${options['link_style']}${options.noline ? ' noline' : ''} call-dialog"
            data-dialog='{
                ${options.style == 'default' ? '' : `"style": "${options.style}",`}
                ${options.size == 'fit' ? '' : `"size": "${options.size}",`}
                "title": "${options.title}"
                ${options.subtitle ? `, "subtitle": "${options.subtitle}"` : ''}
                ${options.content ? `, "content": "${options.content}"` : ''}
                ${options.dialog_button === 'satu' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.dialog_button === 'dua' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    },
                    {
                        "label"     : "${options.btn2_text || 'Button 2'}",
                        "class"     : "${options['btn2_style']}",
                        "action"    : "${options.btn2_isclose ? 'close' : ''}"
                        ${options.btn2_isclose ? '' : `, "target": "${options['btn2_target']}"`}
                        ${options['btn2_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.hasclose ? '' : `, "hasclose": false`}
                ${(options.hasclose || options.btn1_isclose || options.btn2_isclose) ? options.persistent ? `, "persistent": true` : '' : ''}
            }'>
            ${options['link_teks'] || 'Tampilkan Dialog'}
        </a>`
    }`,
    generatePreviewHTML: (options) => 
    `${options.types === 'button' ? 
        `<a href="#" class="button${options['btn_style']} call-dialog tooltip informational" data-tooltip="Dialog bisa dipanggil dari komponen mana pun.<br><b>Contoh:</b> Ini contoh dialog dipanggil melalui Button." data-tooltip-position="bottom"
            data-dialog='{
                ${options.style == 'default' ? '' : `"style": "${options.style}",`}
                ${options.size == 'fit' ? '' : `"size": "${options.size}",`}
                "title": "${options.title}"
                ${options.subtitle ? `, "subtitle": "${options.subtitle}"` : ''}
                ${options.content ? `, "content": "${options.content}"` : ''}
                ${options.dialog_button === 'satu' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.dialog_button === 'dua' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    },
                    {
                        "label"     : "${options.btn2_text || 'Button 2'}",
                        "class"     : "${options['btn2_style']}",
                        "action"    : "${options.btn2_isclose ? 'close' : ''}"
                        ${options.btn2_isclose ? '' : `, "target": "${options['btn2_target']}"`}
                        ${options['btn2_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.hasclose ? '' : `, "hasclose": false`}
                ${(options.hasclose || options.btn1_isclose || options.btn2_isclose) ? options.persistent ? `, "persistent": true` : '' : ''}
            }'>
            ${options['btn_teks'] || 'Tampilkan Dialog'}
        </a>` :
        `<a href="#" class="link${options['link_style']}${options.noline ? ' noline' : ''} call-dialog tooltip informational" data-tooltip="Dialog bisa dipanggil dari komponen mana pun.<br><b>Contoh:</b> Ini contoh dialog dipanggil melalui Link." data-tooltip-position="bottom"
            data-dialog='{
                ${options.style == 'default' ? '' : `"style": "${options.style}",`}
                ${options.size == 'fit' ? '' : `"size": "${options.size}",`}
                "title": "${options.title}"
                ${options.subtitle ? `, "subtitle": "${options.subtitle}"` : ''}
                ${options.content ? `, "content": "${options.content}"` : ''}
                ${options.dialog_button === 'satu' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.dialog_button === 'dua' ? `,
                    "buttons": [
                    {
                        "label"     : "${options.btn1_text || 'Button 1'}",
                        "class"     : "${options['btn1_style']}",
                        "action"    : "${options.btn1_isclose ? 'close' : ''}"
                        ${options.btn1_isclose ? '' : `, "target": "${options['btn1_target']}"`}
                        ${options['btn1_newtab'] ? `, "newtab": true` : ''}
                    },
                    {
                        "label"     : "${options.btn2_text || 'Button 2'}",
                        "class"     : "${options['btn2_style']}",
                        "action"    : "${options.btn2_isclose ? 'close' : ''}"
                        ${options.btn2_isclose ? '' : `, "target": "${options['btn2_target']}"`}
                        ${options['btn2_newtab'] ? `, "newtab": true` : ''}
                    }
                ]` : ''}
                ${options.hasclose ? '' : `, "hasclose": false`}
                ${(options.hasclose || options.btn1_isclose || options.btn2_isclose) ? options.persistent ? `, "persistent": true` : '' : ''}
            }'>
            ${options['link_teks'] || 'Tampilkan Dialog'}
        </a>`
    }`
};