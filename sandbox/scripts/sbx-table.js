export default {
    customization: [
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Ukuran Table.',
            options: [
                { value: ' sm', label: 'Kecil' },
                { value: '', label: 'Sedang', default: true },
                { value: ' lg', label: 'Besar' }
            ]
        },
        { type: 'select', name: 'style', label: 'Warna Berselang', tooltip: 'Pilih tipe warna berselang.',
            options: [
                { value: '', label: 'Tidak Ada', default: true },
                { value: ' striped', label: 'Baris (Horizontal)' },
                { value: ' vertical-striped', label: 'Kolom (Vertikal)' },
            ]
        },
        { type: 'switch', name: 'round', label: 'Sudut Bundar', tooltip: 'Buat sudut Table menjadi bundar.' },
        { type: 'switch', name: 'borderless', label: 'Tanpa Tepi', tooltip: 'Atur Table agar tidak memiliki warna garis tepi.' }
    ],
    generateHTML: (options) => `
    <table class="table${options['size']}${options['style']}${options.round ? ' rounded' : ''}${options.borderless ? ' borderless' : ''}">
        <thead>
            <tr>
                <th data-column="id" data-col-width="3">No.</th>
                <th data-column="id" data-col-width="41">Nama Lengkap</th>
                <th data-column="id" data-col-width="28">Umur</th>
                <th data-column="id" data-col-width="28">Kota</th>
                <!-- Silakan tambah header data tabel Anda di bagian ini. -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ahmad Saputra</td>
                <td>30</td>
                <td>Jakarta</td>
            </tr>
            <!-- Silakan tambah isi data tabel Anda di bagian ini. -->
        </tbody>
    </table>`,
    generatePreviewHTML: (options) => `
    <table class="table${options['size']}${options['style']}${options.round ? ' rounded' : ''}${options.borderless ? ' borderless' : ''}">
        <thead>
            <tr>
                <th data-column="id" data-col-width="3">No.</th>
                <th data-column="id" data-col-width="41">Nama Lengkap</th>
                <th data-column="id" data-col-width="28">Umur</th>
                <th data-column="id" data-col-width="28">Kota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ahmad Saputra</td>
                <td>30</td>
                <td>Jakarta</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rina Santoso</td>
                <td>25</td>
                <td>Bandung</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Budi Pratama</td>
                <td>35</td>
                <td>Surabaya</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Siti Rahmawati</td>
                <td>28</td>
                <td>Yogyakarta</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Agus Wibowo</td>
                <td>40</td>
                <td>Medan</td>
            </tr>
        </tbody>
    </table>`
};