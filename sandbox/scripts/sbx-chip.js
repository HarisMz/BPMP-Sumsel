export default {
    customization: [
        { type: 'text', name: 'chip-text', label: 'Teks', placeholder: 'Masukkan teks', tooltip: 'Teks yang ditampilkan pada Chip.' },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Pilih ukuran Chip.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Biasa', default: true }
            ]
        },
        { type: 'text', name: 'link-href', label: 'Tautan', placeholder: 'Masukkan tautan', tooltip: 'Tautan yang disematkan pada Chip.' },
        { type: 'switch', name: 'newtab', label: 'Tab Baru', tooltip: 'Buka tautan di tab baru.' },

        { type: 'switch', name: 'chip-disabled', label: 'Nonaktif', tooltip: 'Buat Chip jadi nonaktif.' },
        { type: 'switch', name: 'selected', label: 'Terpilih', tooltip: 'Buat Chip dalam keadaan terpilih.' },
        { type: 'text', name: 'icon', label: 'Icon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
        { type: 'select', name: 'icon-position', label: 'Posisi Icon', tooltip: 'Tentukan posisi ikon pada Chip.',
            options: [
                { value: '', label: 'Kiri' },
                { value: ' right', label: 'Kanan' }
            ],
            dependencies: {
                icon: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
        <a href="${options['link-href'] || '#'}" class="chip${options.size}${options.selected ? ' selected' : ''}${options.icon ? options['icon-position'] : ''}${options['chip-disabled'] ? ' disabled' : ''}"${options.icon ? ` data-icon="${options.icon}"` : ''}${options.newtab ? ` target="_blank"` : ''}>
            ${options['chip-text'] || 'Chip'}
        </a>`,
    generateHTML: (options) => `
        <a href="${options['link-href'] || '#'}" class="chip${options.size}${options.selected ? ' selected' : ''}${options.icon ? options['icon-position'] : ''}${options['chip-disabled'] ? ' disabled' : ''}"${options.icon ? ` data-icon="${options.icon}"` : ''}${options.newtab ? ` target="_blank"` : ''}>
            ${options['chip-text'] || '<!-- Teks Chip -->'}
        </a>`
};