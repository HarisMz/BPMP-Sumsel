export default {
    customization: [
        { type: 'select', name: 'style', label: 'Gaya', tooltip: 'Menentukan gaya dari Avatar.',
            options: [
                { value: '', label: 'Bulat', default: true },
                { value: ' square', label: 'Kotak' }
            ]
        },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Menentukan ukuran dari Avatar.',
            options: [
                { value: ' xs', label: 'Ekstra Kecil' },
                { value: ' sm', label: 'Kecil' },
                { value: '', label: 'Sedang', default: true },
                { value: ' lg', label: 'Besar' },
                { value: ' xl', label: 'Ekstra Besar' },
                { value: ' xxl', label: 'Ekstra Ekstra Besar' }
            ]
        },
        { type: 'text', name: 'avatar', label: 'Nama Pengguna atau Tautan', span: 2, placeholder: 'Contoh: Fulan Fulana atau https://tautan-gambar.com/avatar.jpg', tooltip: 'Jika bukan berupa tautan, maka inisial dari nama pengguna akan dijadikan gambar.' }
    ],
    generateHTML: (options) => `<span class="avatar${options['style']}${options['size']}"><img class="image" src="${options.avatar.includes('/') ? options.avatar : options.avatar ? `/modules/initial-avatar.php?name=${options.avatar}` : `/modules/initial-avatar.php`}"></span>`
}