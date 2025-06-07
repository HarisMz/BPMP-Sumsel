export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari Banner.',
            options: [
                { value: 'default', label: 'Biasa', default: true },
                { value: 'success', label: 'Sukses' },
                { value: 'critical', label: 'Kritis' },
                { value: 'informational', label: 'Informatif' },
                { value: 'warning', label: 'Waspada' }
            ]
        },
        { type: 'text', name: 'title', label: 'Judul', placeholder: 'Masukkan judul Banner', tooltip: 'Menentukan judul dari Banner.' },
        { type: 'text', name: 'content', label: 'Isi', span: 2, placeholder: 'Masukkan isi Banner', tooltip: 'Menentukan isi dari Banner.' },

        { type: 'text', name: 'button_label', label: 'Button', placeholder: 'Masukkan teks Button', tooltip: 'Tambahkan Button pada Banner.' },
        { type: 'switch', name: 'button-isclose', label: 'Button Tutup', tooltip: 'Jadikan Button berfungsi untuk menutup Banner.',
            dependencies: {
                button_label: true
            }
        },
        { type: 'text', name: 'button-target', label: 'Tautan Button', default: '#', placeholder: 'Masukkan tautan Button', tooltip: 'Tautan yang disematkan pada Button.',
            dependencies: {
                button_label: true
            }
        },
        { type: 'switch', name: 'button-newtab', label: 'Tab Baru', default: false, tooltip: 'Buka tautan Button di tab baru.',
            dependencies: {
                button_label: true
            }
        },


        { type: 'text', name: 'link_label', label: 'Link', placeholder: 'Masukkan teks Link', tooltip: 'Tambahkan Link pada Banner.' },
        { type: 'switch', name: 'link-isclose', label: 'Link Tutup', tooltip: 'Jadikan Link berfungsi untuk menutup Banner.',
            dependencies: {
                link_label: true
            }
        },
        { type: 'text', name: 'link-target', label: 'Tautan Link', placeholder: 'Masukkan tautan Link', default: 'https://google.com', tooltip: 'Tautan yang disematkan pada Link.',
            dependencies: {
                link_label: true
            }
        },
        { type: 'switch', name: 'link-newtab', label: 'Tab Baru', default: true, tooltip: 'Buka tautan Link di tab baru.',
            dependencies: {
                link_label: true
            }
        },

        { type: 'text', name: 'icon-name', label: 'Icon Judul', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
        { type: 'switch', name: 'hasclose', label: 'Icon Tutup', default: true, tooltip: 'Tampilkan ikon tutup pada Banner.' }
    ],
    generateHTML: (options) => `
    <div class="button call-banner"
        data-banner='{
            ${options.style == 'default' ? '' : `"style": "${options.style}", `}
            "title": "${options.title || '[JUDUL BANNER]'}",
            "content": "${options.content || '[ISI BANNER]'}"
            ${options['icon-name'] ? `, "icon": "${options['icon-name']}"` : ''}
            ${options.button_label || options['button-link'] ? `,
                "buttons": [
                {
                    "label"     : "${options.button_label || '[LABEL BUTTON]'}",
                    "action"    : "${options['button-isclose'] ? 'close' : ''}"
                    ${options['button-isclose'] ? '' : `, "target": "${options['button-target'] || '[TAUTAN BUTTON]'}"`}
                    ${options['button-newtab'] ? `, "newtab": true` : ''}
                }
            ]` : ''}
            ${options.link_label || options.link ? `,
                "links": [
                {
                    "label"     : "${options.link_label || '[LABEL LINK]'}",
                    "action"    : "${options['link-isclose'] ? 'close' : ''}"
                    ${options['link-isclose'] ? '' : `, "target": "${options['link-target'] || '[TAUTAN LINK]'}"`}
                    ${options['link-newtab'] ? `, "newtab": true` : ''}
                }
            ]` : ''}
            ${options.hasclose ? '' : `, "hasclose": false`}
        }'>Tampilkan Banner
    </div>`,
    generatePreviewHTML: (options) => `
    <div class="button call-banner tooltip informational" data-tooltip="Banner bisa dipanggil dari elemen mana pun.<br><b>Contoh:</b> Banner dipanggil melalui button." data-tooltip-position="bottom"
        data-banner='{
            ${options.style == 'default' ? '' : `"style": "${options.style}", `}
            "title": "${options.title || 'Judul Banner'}",
            "content": "${options.content || 'Ini adalah isi banner.'}"
            ${options['icon-name'] ? `, "icon": "${options['icon-name']}"` : ''}
            ${options.button_label || options['button-link'] ? `,
                "buttons": [
                {
                    "label"     : "${options.button_label}",
                    "action"    : "${options['button-isclose'] ? 'close' : ''}"
                    ${options['button-isclose'] ? '' : `, "target": "${options['button-target']}"`}
                    ${options['button-newtab'] ? `, "newtab": true` : ''}
                }
            ]` : ''}
            ${options.link_label || options.link ? `,
                "links": [
                {
                    "label"     : "${options.link_label}",
                    "action"    : "${options['link-isclose'] ? 'close' : ''}"
                    ${options['link-isclose'] ? '' : `, "target": "${options['link-target']}"`}
                    ${options['link-newtab'] ? `, "newtab": true` : ''}
                }
            ]` : ''}
            ${options.hasclose ? '' : `, "hasclose": false`}
        }'>Tampilkan Banner
    </div>`
};