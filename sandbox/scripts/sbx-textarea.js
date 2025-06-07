export default {
    customization: [
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Text Area', tooltip: 'Tulisan yang akan ditampilkan pada Text Area.' },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Ukuran dari Text Area.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Biasa', default: true }
            ]
        },
        { type: 'text', name: 'id', label: 'Nama', placeholder: 'Masukkan nama Text Area', tooltip: 'Digunakan untuk identifikasi dan juga agar Text Area langsung terfokus ketika label diklik.' },
        { type: 'text', name: 'tooltip', label: 'Tooltip', placeholder: 'Tooltip', tooltip: 'Tambahkan Tooltip yang bisa ditampilkan dengan meng-hover ikon di samping label.',
            dependencies: {
                label: true
            }
        },
        { type: 'text', name: 'placeholder', label: 'Arahan', placeholder: 'Masukkan teks arahan', tooltip: 'Teks arahan yang ditampilkan dalam kotak Text Area.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Text Area ini.',
            dependencies: {
                label: true
            }
        },
        { type: 'stepper', name: 'row', label: 'Jumlah Baris', min: '2', max: '14', tooltip: 'Jumlah baris teks yang terlihat di Text Area.' },
        { type: 'stepper', name: 'length', label: 'Jumlah Karakter', min: '0', max: '1000', tooltip: 'Jumlah karakter maksimum yang dapat diketikkan di dalam Text Area. Atur jadi &quot;0&quot; untuk menghilangkan batas jumlah karakter.' }
    ],
    generateHTML: (options) => `
        ${options.label ? `
        <label ${options.id ? `for="${options.id}"` : ''}>${options.label}${options.label ? options.tooltip ? `&nbsp;<i class="small tooltip dark" data-icon="info" data-tooltip="${options.tooltip}" data-tooltip-position="top"></i>` : '' : ''}</label>
        ` : ''}
        <div class="textarea${options.size}"><textarea${options.id ? ` id="${options.id}"` : ''}${options.placeholder ? ` placeholder="${options.placeholder}"` : ''}${options.row > 2 ? ` rows="${options.row}"` : ''}${options.length > 0 ? ` maxlength="${options.length}"` : ''}></textarea></div>
        ${options.label ? options.helper ? `<div class="helper"><span>${options.helper}</span></div>` : '' : ''}`
};