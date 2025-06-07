export default {
    customization: [
        { type: 'switch', name: 'checked', label: 'Aktif', tooltip: 'Buat Switch sudah aktif dari awal ketika dimuat.' },
        { type: 'switch', name: 'pos', label: 'Tukar Posisi', tooltip: 'Letakkan Switch di sebelah kanan.' },
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Switch', tooltip: 'Tulisan yang akan ditampilkan di sisi Switch.', span: 2 },
        { type: 'text', name: 'name', label: 'Nama', placeholder: 'Masukkan nama Switch', tooltip: 'Berikan nama Switch agar dapat diidentifikasi lebih mudah.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Switch ini.',
            dependencies: {
                label: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
    <label class="switch${options.pos ? ' right' : ''}">
        <input type="checkbox"${options.checked ? ' checked' : ''}${options.name ? ` id="switch-${options.name}" name="${options.name}"` : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || 'Label Switch'}${options.label != '' ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`,
    generateHTML: (options) => `
    <label class="switch${options.pos ? ' right' : ''}">
        <input type="checkbox"${options.checked ? ' checked' : ''}${options.name ? ` id="switch-${options.name}" name="${options.name}"` : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || '<!-- Label Switch -->'}${options.label != '' ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`
}