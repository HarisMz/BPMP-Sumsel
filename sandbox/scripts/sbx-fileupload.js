export default {
    customization: [
        { type: 'text', name: 'file-size', label: 'Ukuran Maksimum', placeholder: 'Ukuran dalam kilobyte (KB)', tooltip: 'Ukuran file dalam kilobyte (KB). 1 megabyte (MB) = 1.024 KB.' },
        { type: 'switch', name: 'multiple', label: 'Banyak File', tooltip: 'Perbolehkan mengunggah lebih dari satu file.' },
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label File Upload', tooltip: 'Tulisan yang akan ditampilkan pada File Upload.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait File Upload ini (bisa untuk menjelaskan ukuran maksimum file).',
            dependencies: {
                label: true
            }
        },
        { type: 'switch', name: 'surface', label: 'Berlatar', tooltip: 'Tambahkan latar pada File Upload.' },
        { type: 'switch', name: 'submit', label: 'Tombol Kirim', tooltip: 'Perlihatkan tombol kirim (submit) pada File Upload.' }
    ],
    generateHTML: (options) => `
    <div class="file-upload${options.surface ? ' surface' : ''}${options.multiple ? ' multiple' : ''}"${options['file-size'] ? ` max-size="${options['file-size']}"` : ''}>
        ${options.label ? `<span class="label">${options.label}</span>` : ''}
        ${options.label ? options.helper ? `<span class="helper">${options.helper}</span>` : '' : ''}
        <div class="file-input-container" id="file-input-container">
            <input type="file" id="file-input">
            <span class="file-label">Pilih File</span>
        </div>
        <ul id="file-list"></ul>
        <a href="#" class="button quiet full" id="addmore-button">Tambah File</a>
        ${options.submit ? `<a href="#" class="button full" id="submit-button">Kirim</a>` : ''}
    </div>`
};