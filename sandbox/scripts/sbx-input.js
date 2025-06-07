export default {
    customization: [
        { type: 'text', name: 'label', label: 'Label', placeholder: 'Masukkan label Input', tooltip: 'Tulisan yang akan ditampilkan pada Input.' },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Ukuran dari Input.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Biasa', default: true }
            ]
        },
        { type: 'text', name: 'id', label: 'Nama', placeholder: 'Masukkan nama Input', tooltip: 'Digunakan untuk identifikasi dan juga agar Input langsung terfokus ketika label diklik.' },
        { type: 'text', name: 'tooltip', label: 'Tooltip', placeholder: 'Tooltip', tooltip: 'Tambahkan Tooltip yang bisa ditampilkan dengan meng-hover ikon di samping label.',
            dependencies: {
                label: true
            }
        },
        { type: 'text', name: 'placeholder', label: 'Arahan', placeholder: 'Masukkan teks arahan', tooltip: 'Teks arahan yang ditampilkan dalam kotak Input.' },
        { type: 'text', name: 'helper', label: 'Petunjuk', placeholder: 'Masukkan teks petunjuk', tooltip: 'Teks petunjuk terkait Input ini.',
            dependencies: {
                label: true
            }
        },
        { type: 'text', name: 'icon', label: 'Ikon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
        { type: 'select', name: 'pos', label: 'Posisi Ikon', tooltip: 'Posisi ikon pada Input.',
            options: [
                { value: '', label: 'Kiri', default: true },
                { value: ' right', label: 'Kanan' }
            ],
            dependencies: {
                icon: true
            }
        }
    ],
    generateHTML: (options) => `
    ${options.label ? `<label${options.id ? ` for="${options.id}"` : ''}>${options.label}${options.tooltip ? `&nbsp;<i class="small tooltip dark" data-icon="info" data-tooltip="${options.tooltip}" data-tooltip-position="top"></i>` : ''}</label>` : ''}
    ${options.icon ? `<div class="input${options.size}${options.pos}" data-icon="${options.icon}">` : `<div class="input${options.size}">`}
        <input type="${
            ['cari', 'telusur', 'susur', 'temukan', 'penelusur', 'menelusur', 'menemukan', 'search', 'find'].some(term => 
                (options.label && options.label.toLowerCase().includes(term)) ||
                (options.placeholder && options.placeholder.toLowerCase().includes(term)) ||
                (options.helper && options.helper.toLowerCase().includes(term))
            ) ? 'search' : 'text'
        }"${options.id ? ` id="${options.id}"` : ''}${options.placeholder ? ` placeholder="${options.placeholder}"` : ''}/></div>
    ${options.label ? options.helper ? `<div class="helper"><span>${options.helper}</span></div>` : '' : ''}`

};