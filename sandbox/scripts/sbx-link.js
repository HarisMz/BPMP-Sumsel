export default {
    customization: [
        { type: 'text', name: 'text', label: 'Teks Tautan', span: 2, tooltip: 'Menentukan teks dari sebuah Link.' },
        { type: 'text', name: 'link-href', label: 'Tautan', tooltip: 'Menentukan url atau tautan dari sebuah Link.' },
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari sebuah Link.',
            options: [
                { value: '', label: 'Primary', default: true },
                { value: ' secondary', label: 'Secondary' },
                { value: ' inverse', label: 'Inverse' }
            ]
        },
        { type: 'switch', name: 'disabled', label: 'Nonaktif', tooltip: 'Menentukan apakah sebuah Link dalam keadaan aktif atau nonaktif.' },
        { type: 'switch', name: 'noline', label: 'Tanpa Garis', tooltip: 'Menentukan apakah sebuah Link menampilkan garis bawah atau tidak.' }
    ],
    generateHTML: (options) => `
    <a href="${options['link-href'] || '#'}" class="link${options['style']}${options.disabled ? ' disabled' : ''}${options.noline ? ' noline' : ''}">${options.text || 'Link'}</a>`
};