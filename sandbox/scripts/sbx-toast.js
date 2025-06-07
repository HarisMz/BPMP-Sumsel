export default {
    customization: [
        { type: 'text', name: 'content', label: 'Isi', span: 2, placeholder: 'Masukkan isi Toast', tooltip: 'Menentukan isi dari Toast.' },
        { type: 'text', name: 'link_label', label: 'Label Link', span: 2, placeholder: 'Masukkan teks Link', tooltip: 'Tambahkan Link pada Toast.' },
        { type: 'text', name: 'link-target', label: 'Tautan Link', default: 'https://google.com', placeholder: 'Masukkan tautan Link', tooltip: 'Tautan yang disematkan pada Link.',
            dependencies: {
                link_label: true
            }
        },
        { type: 'switch', name: 'link-newtab', label: 'Tab Baru', default: true, tooltip: 'Buka tautan Link di tab baru.',
            dependencies: {
                link_label: true
            }
        },
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari Toast.',
            options: [
                { value: 'default', label: 'Biasa', default: true },
                { value: 'success', label: 'Sukses' },
                { value: 'critical', label: 'Kritis' },
                { value: 'informational', label: 'Informatif' },
                { value: 'warning', label: 'Waspada' },
            ]
        },
        { type: 'text', name: 'icon-name', label: 'Icon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' }
    ],
    generateHTML: (options) => `
    <div class="button call-toast
        data-toast='{
            ${options.style == 'default' ? '' : `"style": "${options.style}", `}
            "content": "${options.content || '[ISI TOAST]'}"
            ${options['icon-name'] ? `, "icon": "${options['icon-name']}"` : ''}
            ${options.link_label || options.link ? `,
                "links": [
                {
                    "label"     : "${options.link_label || '[LABEL LINK]'}",
                    "target": "${options['link-target']}"
                    ${options['link-newtab'] ? `, "newtab": true` : ''}
                }
            ]` : ''}
        }'>Tampilkan Toast
    </div>`,
    generatePreviewHTML: (options) => {
        return `
            <div class="button call-toast tooltip informational" data-tooltip="Toast bisa dipanggil dari elemen mana pun.<br><b>Contoh:</b> Toast dipanggil melalui button." data-tooltip-position="bottom"
                data-toast='{
                    ${options.style == 'default' ? '' : `"style": "${options.style}", `}
                    "content": "${options.content || 'Ini adalah isi toast.'}"
                    ${options['icon-name'] ? `, "icon": "${options['icon-name']}"` : ''}
                    ${options.link_label || options.link ? `,
                        "links": [
                        {
                            "label"     : "${options.link_label}",
                            "target": "${options['link-target']}"
                            ${options['link-newtab'] ? `, "newtab": true` : ''}
                        }
                    ]` : ''}
                }'>Tampilkan Toast
            </div>`;
    }
};