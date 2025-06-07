export default {
    customization: [
        { type: 'text', name: 'badge-text', label: 'Teks', placeholder: 'Masukkan teks Badge', tooltip: 'Tulisan yang akan ditampilkan pada Badge.', span: 2 },
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Pilih gaya Badge.',
            options: [
                { value: '', label: 'Biasa', default: true },
                { value: ' success', label: 'Sukses' },
                { value: ' critical', label: 'Kritis' },
                { value: ' informational', label: 'Informatif' },
                { value: ' warning', label: 'Waspada' }
            ]
        },
        { type: 'switch', name: 'state', label: 'Gelap', tooltip: 'Gunakan warna gelap untuk Badge.' }
    ],
    generatePreviewHTML: (options) => `<span class="badge${options.state ? ` expressive${options.style}` : options.style}">${options['badge-text'] || 'Teks Badge'}</span>`,
    generateHTML: (options) => `<span class="badge${options.state ? ` expressive${options.style}` : options.style}">${options['badge-text'] || '<!-- Teks Badge -->'}</span>`
}