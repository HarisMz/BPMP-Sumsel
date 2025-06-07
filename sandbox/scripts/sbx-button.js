export default {
    customization: [
        { type: 'text', name: 'button-text', label: 'Teks', span: 2, placeholder: 'Masukkan teks', tooltip: 'Teks yang ditampilkan pada Button.' },
        { type: 'text', name: 'link-href', label: 'Tautan', placeholder: 'Masukkan tautan', tooltip: 'Tautan yang disematkan pada Button.' },
        { type: 'switch', name: 'newtab', label: 'Tab Baru', tooltip: 'Buka tautan di tab baru.' },
        { type: 'select', name: 'button-style', label: 'Gaya', tooltip: 'Pilih gaya Button.',
            options: [
                { value: '', label: 'Utama (Ultimate)' },
                { value: ' primary', label: 'Primer (Primary)' },
                { value: ' secondary', label: 'Sekunder (Secondary)' },
                { value: ' quiet', label: 'Minimalis (Quiet)' },
                { value: ' destructive', label: 'Bahaya (Destructive)' }
            ]
        },
        { type: 'select', name: 'button-size', label: 'Ukuran', tooltip: 'Pilih ukuran Button.',
            options: [
                { value: ' small', label: 'Kecil' },
                { value: '', label: 'Sedang', default: true },
                { value: ' large', label: 'Besar' }
            ]
        },
        { type: 'switch', name: 'button-disabled', label: 'Nonaktif', tooltip: 'Buat Button jadi nonaktif.' },
        { type: 'switch', name: 'button-full', label: 'Lebar Penuh', tooltip: 'Regangkan lebar Button.' },
        { type: 'text', name: 'icon', label: 'Ikon', placeholder: 'Misal: home, search', tooltip: 'Nama ikon yang digunakan. Lihat komponen <b>Icons</b>.' },
        { type: 'select', name: 'icon-position', label: 'Posisi Ikon', tooltip: 'Tentukan posisi ikon pada Button.',
            options: [
                { value: '', label: 'Kiri' },
                { value: ' right', label: 'Kanan' }
            ],
            dependencies: {
                icon: true
            }
        }
    ],
    generatePreviewHTML: (options) => `
        <a href="${options['link-href'] || '#'}" class="button${options['button-style']}${options['button-size']}${options['button-disabled'] ? ' disabled' : ''}${options['button-full'] ? ' full' : ''}${options.icon ? `${options['icon-position']}" data-icon="${options.icon}"` : '"'}${options.newtab ? ` target="_blank"` : ''}>
            ${options['button-text'] || 'Button'}
        </a>`,
    generateHTML: (options) => `
        <a href="${options['link-href'] || '#'}" class="button${options['button-style']}${options['button-size']}${options['button-disabled'] ? ' disabled' : ''}${options['button-full'] ? ' full' : ''}${options.icon ? `${options['icon-position']}" data-icon="${options.icon}"` : '"'}${options.newtab ? ` target="_blank"` : ''}>
            ${options['button-text'] || '<!-- Teks Button -->'}
        </a>`
};