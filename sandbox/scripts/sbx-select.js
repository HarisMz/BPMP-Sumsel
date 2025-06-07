export default {
    customization: [
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Select', tooltip: 'Teks yang ditampilkan di atas Select.' },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Tentukan ukuran Select.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Biasa', default: true }
            ]
        },
        { type: 'text', name: 'selected-text', label: 'Isian Awal', placeholder: 'Contoh: - Pilih -', tooltip: 'Teks yang pertama kali akan ditampilkan pada Select.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Select ini.',
            dependencies: {
                label: true
            }
        },
        { type: 'array', name: 'options', label: 'Daftar Select', span: 2, itemTemplate: [
                { type: 'text', name: 'text', label: 'Label', default: 'Option', span: 2 }
            ],
            defaultValue: [],
            tooltip: 'Daftar pilihan yang akan ditampilkan pada Select.'
        }
    ],
    generateHTML: (options) => {
        const optionsHTML = options.options && options.options.length > 0
            ? options.options
                .map(opt => `<option value="${opt.text}">${opt.text}</option>`)
                .join('\n')
            : '';
        return `${options.label ? `<label><b>${options.label}</b></label>` : ''}
            <div class="select${options.size}">
                <select name id>
                    <option value disabled selected>${options['selected-text'] || '- Pilih -'}</option>
                    ${optionsHTML}
                </select>
            </div>
            ${options.label ? options.helper ? `<span class="helper">${options.helper}</span>` : '' : ''}`
    }
};