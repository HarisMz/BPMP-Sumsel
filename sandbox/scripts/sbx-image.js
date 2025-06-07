export default {
    customization: [
        { type: 'text', name: 'image', label: 'Tautan Image', default: 'https://picsum.photos/id/25/640/360', tooltip: 'Menambahkan Image.' },
        { type: 'select', name: 'fit', label: 'Penyesuaian Image', tooltip: 'Menentukan bagaimana cara menyesuaikan Image dalam suatu objek.',
            options: [
                { value: 'object-contain', label: 'Memuat (Contain)', default: true },
                { value: 'object-cover', label: 'Menutup (Cover)' },
                { value: 'object-fill', label: 'Mengisi (Fill)' }
            ]
        },
        // { type: 'select', name: 'view', label: 'Rasio Tampilan', tooltip: 'Memilih ukuran tampilan Image yang diinginkan',
        //     options: [
        //         { value: '', label: 'Biasa', default: true },
        //         { value: ' ratio-1-1', label: '1:1 (Square)' },
        //         { value: ' ratio-3-2', label: '3:2 (Landscape)' },
        //         { value: ' ratio-4-3', label: '4:3 (Landscape)' },
        //         { value: ' ratio-5-4', label: '5:4 (Landscape)' },
        //         { value: ' ratio-16-9', label: '16:9 (Landscape)' },
        //         { value: ' ratio-16-10', label: '16:10 (Landscape)' },
        //         { value: ' ratio-2-3', label: '2:3 (Portrait)' },
        //         { value: ' ratio-3-4', label: '3:4 (Portrait)' },
        //         { value: ' ratio-4-5', label: '4:5 (Portrait)' },
        //         { value: ' ratio-9-16', label: '9:16 (Portrait)' },
        //         { value: ' ratio-10-16', label: '10:16 (Portrait)' },
        //     ]
        // },
        { type: 'stepper', name: 'height', label: 'Tinggi', min: '0', max: '100', default: '100', tooltip: 'Menentukan berapa persen tinggi dari Image yang ditampilkan.' },
        { type: 'stepper', name: 'width', label: 'Lebar', min: '0', max: '100', default: '100', tooltip: 'Menentukan berapa persen lebar dari Image yang ditampilkan.' }
    ],
    generateHTML: (options) => `
    <img src="${options['image']}" class="${options.fit} height-${options.height} width-${options.width}">`
};