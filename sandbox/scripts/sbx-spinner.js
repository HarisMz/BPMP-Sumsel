export default {
    customization: [
        { type: 'select', name: 'size', label: 'Ukuran', span: 2, tooltip: 'Menentukan ukuran dari Spinner.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Sedang', default: true },
                { value: ' large', label: 'Besar' }
            ]
        }
    ],
    generateHTML: (options) => `<div class="spinner${options['size']}"></div>`
}