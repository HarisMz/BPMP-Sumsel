export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari FAB.',
            options: [
                { value: '', label: 'Default', default: true },
                { value: ' accent', label: 'Accent' }
            ]
        },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Menentukan ukuran dari FAB.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Besar (Default)', default: true }
            ]
        },
        { type: 'text', name: 'tooltip', label: 'Tooltip Teks', span: 2, tooltip: 'Menambahkan teks tooltip pada FAB.'},
        { type: 'text', name: 'icon-name', label: 'Ikon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
        { type: 'switch', name: 'disabled', label: 'Nonaktif', tooltip: 'Menentukan apakah FAB dalam keadaan aktif atau nonaktif.' }
    ],
    generateHTML: (options) => `
        <div class="fab${options.style}${options.size}${options.disabled ? ' disabled' : ''}${options.tooltip ? ` tooltip" data-nameid="${options.tooltip.split(' ').join('-').toLowerCase()}" data-tooltip="${options.tooltip}" data-tooltip-position="left"` : '"'}>${options['icon-name'] || 'question_mark'}</div>
        `
};