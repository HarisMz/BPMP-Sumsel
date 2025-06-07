export default {
    customization: [
        { type: 'switch', name: 'checked', label: 'Tercentang', tooltip: 'Buat Checkbox sudah tercentang dari awal ketika dimuat.' },
        { type: 'switch', name: 'pos', label: 'Tukar Posisi', tooltip: 'Letakkan Checkbox di sebelah kanan.' },
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Checkbox', tooltip: 'Tulisan yang akan ditampilkan di sisi Checkbox.', span: 2 },
        { type: 'text', name: 'name', label: 'Nama', placeholder: 'Masukkan nama Checkbox', tooltip: 'Berikan nama Checkbox agar dapat diidentifikasi lebih mudah.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Checkbox ini.',
            dependencies: {
                label: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
    <label class="checkbox${options.pos ? ' right' : ''}">
        <input type="checkbox"${options.checked ? ' checked' : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || 'Label Checkbox'}${options.label != '' ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`,
    generateHTML: (options) => `
    <label class="checkbox${options.pos ? ' right' : ''}">
        <input type="checkbox"${options.checked ? ' checked' : ''}${options.name ? ` id="checkbox-${options.name}" name="${options.name}"` : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || '<!-- Label Checkbox -->'}${options.label != '' ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`
}