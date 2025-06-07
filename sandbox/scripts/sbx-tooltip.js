export default {
    customization: [
        { type: 'text', name: 'tooltip', label: 'Isi', span: 2, placeholder: 'Masukkan isi Tooltip', tooltip: 'Menentukan isi dari sebuah Tooltip.' },
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari sebuah Tooltip.',
            options: [
                { value: '', label: 'Biasa', default: true },
                { value: ' success', label: 'Sukses' },
                { value: ' critical', label: 'Kritis' },
                { value: ' informational', label: 'Informatif' },
                { value: ' warning', label: 'Peringatan' }
            ]
        },
        { type: 'select', name: 'pos', label: 'Posisi', tooltip: 'Menentukan di mana posisi Tooltip akan muncul.',
            options: [
                { value: 'top-end', label: 'Atas Kiri' },
                { value: 'top', label: 'Atas', default: true },
                { value: 'top-start', label: 'Atas Kanan' },
                { value: 'bottom-end', label: 'Bawah Kiri' },
                { value: 'bottom', label: 'Bawah' },
                { value: 'bottom-start', label: 'Bawah Kanan' },
                { value: 'right-end', label: 'Kanan Atas' },
                { value: 'right', label: 'Kanan' },
                { value: 'right-start', label: 'Kanan Bawah' },
                { value: 'left-end', label: 'Kiri Atas' },
                { value: 'left', label: 'Kiri' },
                { value: 'left-start', label: 'Kiri Bawah' }
            ]
        },
        { type: 'switch', name: 'dark', label: 'Gelap', tooltip: 'Tooltip akan berwarna gelap.' },
        { type: 'switch', name: 'no-arrow', label: 'Tanpa Panah', tooltip: 'Hilangkan panah penunjuk pada Tooltip.' },
        { type: 'switch', name: 'click', label: 'Klik', tooltip: 'Panggil Tooltip dengan cara mengklik elemen.' },
        { type: 'switch', name: 'has-close', label: 'Tombol Tutup', tooltip: 'Tooltip dihilangkan dengan mengklik tombol tutup yang muncul ketika Tooltip di-hover.',
            dependencies: {
                click: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
    <i data-icon="info" class="tooltip${options.dark ? ' dark' : ''}${options['style']}${options['no-arrow'] ? ' no-arrow' : ''}${options.click ? options['has-close'] ? ' click has-close' : ' click' : ''}" data-tooltip="${options.tooltip || 'Contoh isi Tooltip.'}" data-tooltip-position="${options['pos']}"></i>`,
    generateHTML: (options) => `
    <i data-icon="info" class="tooltip${options.dark ? ' dark' : ''}${options['style']}${options['no-arrow'] ? ' no-arrow' : ''}${options.click ? options['has-close'] ? ' click has-close' : ' click' : ''}" data-tooltip="${options.tooltip || '[ISI TOOLTIP]'}" data-tooltip-position="${options['pos']}"></i>`
};