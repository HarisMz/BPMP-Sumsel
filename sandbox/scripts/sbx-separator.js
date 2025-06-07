export default {
    customization: [
        { type: 'select', name: 'direction', label: 'Orientasi', span: 2, tooltip: 'Tentukan orientasi Separator.',
            options: [
                { value: ' vertical', label: 'Vertikal', default: true },
                { value: ' horizontal', label: 'Horizontal' }
            ]
        },
        { type: 'stepper', name: 'separator', label: 'Jarak Spasi', min: '0', max: '14', tooltip: 'Gunakan nilai 0 sampai 14 untuk mengatur jarak spasi.' },
        { type: 'switch', name: 'noline', label: 'Tanpa Garis', tooltip: 'Gunakan Separator tanpa garis.' }
    ],
    generatePreviewHTML: (options) => `
        <div class="flex ${options.direction.trim() == 'vertical' ? 'column' : 'row'}">
            <div class="body">Konten</div>
            <div class="${options.noline ? 'spacer' : 'separator'}-${options.separator}${options.direction}"></div>
            <div class="body">Konten</div>
            <div class="${options.noline ? 'spacer' : 'separator'}-${options.separator}${options.direction}"></div>
            <div class="body">Konten</div>
        </div>`,
    generateHTML: (options) => `<div class="${options.noline ? 'spacer' : 'separator'}-${options.separator}${options.direction}"></div>`
};