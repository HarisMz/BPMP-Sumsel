export default {
    customization: [
        { type: 'switch', name: 'checked', label: 'Terpilih', tooltip: 'Buat Radio sudah terpilih dari awal ketika dimuat.' },
        { type: 'switch', name: 'pos', label: 'Tukar Posisi', tooltip: 'Letakkan Radio di sebelah kanan.' },
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Radio', tooltip: 'Tulisan yang akan ditampilkan di sisi Radio.', span: 2 },
        { type: 'text', name: 'group', label: 'Nama Grup', placeholder: 'Masukkan nama grup Radio', tooltip: 'Nama grup untuk Radio ini. <b>Catatan:</b> Berikan nama grup yang sama pada setiap Radio agar pilihan hanya bisa dipilih satu dalam grup tersebut.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Radio ini.',
            dependencies: {
                label: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
    <label class="radio${options.pos ? ' right' : ''}">
        <input type="radio"${options.checked ? ' checked' : ''}${options.group != '' ? ` name="${options.group}"` : ''} ${options.label ? `value="${options.label}"` : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || 'Label Radio'} ${options.label ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`,
    generateHTML: (options) => `
    <label class="radio${options.pos ? ' right' : ''}">
        <input type="radio"${options.checked ? ' checked' : ''}${options.group != '' ? ` name="${options.group}"` : ''} ${options.label ? `value="${options.label}"` : ''}>
        <span class="mark"></span>
        <span class="label">${options.label || '<!-- Label Radio -->'} ${options.label ? options.helper ? `
            <span class="helper">${options.helper}</span>` : '' : ''}
        </span>
    </label>`
}