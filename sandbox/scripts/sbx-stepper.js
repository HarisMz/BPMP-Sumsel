export default {
    customization: [
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Stepper', tooltip: 'Tulisan yang akan ditampilkan di atas Stepper.', span: 2 },
        { type: 'text', name: 'name', label: 'Nama', placeholder: 'Masukkan nama Stepper', tooltip: 'Digunakan untuk identifikasi dan juga agar Stepper langsung terfokus ketika label diklik.' },
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Pilih gaya Stepper',
            options: [
                { value: '', label: 'Biasa', default: true },
                { value: ' small', label: 'Kecil' },
                { value: ' minimal', label: 'Minimal' }
            ]
        },
        { type: 'switch', name: 'value_check', label: 'Nilai Awal', tooltip:'Tentukan apakah Stepper memiliki nilai awal.' },
        { type: 'stepper', name: 'value' },
        { type: 'switch', name: 'min_check', label: 'Nilai Minimum', tooltip:'Tentukan apakah Stepper memiliki nilai minimum.' },
        { type: 'stepper', name: 'min' },
        { type: 'switch', name: 'max_check', label: 'Nilai Maksimum', tooltip:'Tentukan apakah Stepper memiliki nilai maksimum.' },
        { type: 'stepper', name: 'max' }
    ],
    generatePreviewHTML: (options) => `
        <label${options.name ? ` for="${options.name}"` : ''}>${options['label'] || 'Label Stepper'}</label>
        <input type="number" class="stepper${ options['style']}"${options.name ? ` id="${options.name}"` : ''}${options.value && options.value_check ? ` value="${options.value}"` : ''}${options.min && options.min_check ? ` min="${options.min}"` : ''}${options.max && options.max_check ? ` max="${options.max}"` : ''}>`,
    generateHTML: (options) => `
        <label${options.name ? ` for="${options.name}"` : ''}>${options['label'] || '<!-- Label Stepper -->'}</label>
        <input type="number" class="stepper${ options['style']}"${options.name ? ` id="${options.name}"` : ''}${options.value && options.value_check ? ` value="${options.value}"` : ''}${options.min && options.min_check ? ` min="${options.min}"` : ''}${options.max && options.max_check ? ` max="${options.max}"` : ''}>`
}