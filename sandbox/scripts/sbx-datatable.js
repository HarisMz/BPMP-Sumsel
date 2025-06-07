export default {
    customization: [
        { type: 'text', name: 'table-name', label: 'Nama', placeholder: 'Tentukan nama Data Table', tooltip: 'Berikan nama untuk Data Table ini agar dapat diidentifikasi lebih mudah.' },
        { type: 'select', name: 'size', label: 'Ukuran', tooltip: 'Ukuran Data Table.',
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
        { type: 'switch', name: 'borderless', label: 'Tanpa Tepi', tooltip: 'Atur Data Table agar tidak memiliki warna garis tepi.' },
        { type: 'switch', name: 'search', label: 'Kotak Pencarian', tooltip: 'Tambahkan kotak pencarian di bagian atas Data Table.' },
        { type: 'switch', name: 'footer', label: 'Opsi Tabel', tooltip: 'Tampilkan opsi di bagian bawah Data Table. <b>Catatan:</b> jika fungsi ini diaktifkan, data pada Data Table akan dikelompokkan menjadi beberapa halaman.' },
        { type: 'switch', name: 'sort', label: 'Sortir', tooltip: 'Aktifkan fungsi sortir data pada Data Table ini.' },
        { type: 'switch', name: 'round', label: 'Sudut Bundar', tooltip: 'Buat sudut Data Table menjadi bundar.' }
    ],
    generateHTML: (options) => `
    <table class="table datatable${options['size']}${options['style']}${options.search ? ' searchbox' : ''}${options.round ? ' rounded' : ''}${options.borderless ? ' borderless' : ''}${options.footer ? ' has-footer' : ''}" id="" data-table-name="${options['table-name'] || 'Data Table Contoh'}">
        <thead>
            <tr>
                <th data-column="id" data-col-width="3"${options.sort ? ` class="sort-icon unfold"` : ''}>No.</th>
                <th data-column="name" data-col-width="41"${options.sort ? ` class="sort-icon unfold"` : ''}>Nama Lengkap</th>
                <th data-column="age" data-col-width="28"${options.sort ? ` class="sort-icon unfold"` : ''}>Umur</th>
                <th data-column="city" data-col-width="28"${options.sort ? ` class="sort-icon unfold"` : ''}>Kota</th>
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
    <table class="table datatable${options['size']}${options['style']}${options.search ? ' searchbox' : ''}${options.round ? ' rounded' : ''}${options.borderless ? ' borderless' : ''}${options.footer ? ' has-footer' : ''}" id="" data-table-name="${options['table-name'] || 'Data Table Contoh'}">
        <thead>
            <tr>
                <th data-column="id" data-col-width="3"${options.sort ? ` class="sort-icon unfold"` : ''}>No.</th>
                <th data-column="name" data-col-width="41"${options.sort ? ` class="sort-icon unfold"` : ''}>Nama Lengkap</th>
                <th data-column="age" data-col-width="28"${options.sort ? ` class="sort-icon unfold"` : ''}>Umur</th>
                <th data-column="city" data-col-width="28"${options.sort ? ` class="sort-icon unfold"` : ''}>Kota</th>
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
            <tr>
                <td>6</td>
                <td>Dian Suryani</td>
                <td>32</td>
                <td>Semarang</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Indra Kusuma</td>
                <td>45</td>
                <td>Palembang</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Maya Sari</td>
                <td>27</td>
                <td>Makassar</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Rizky Setiawan</td>
                <td>38</td>
                <td>Balikpapan</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Lani Permatasari</td>
                <td>29</td>
                <td>Denpasar</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Ardi Wijaya</td>
                <td>33</td>
                <td>Malang</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Dwi Susanti</td>
                <td>31</td>
                <td>Padang</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Yudi Rahmat</td>
                <td>36</td>
                <td>Pekanbaru</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Nia Wijayanti</td>
                <td>26</td>
                <td>Manado</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Fajar Prasetyo</td>
                <td>42</td>
                <td>Pontianak</td>
            </tr>
        </tbody>
    </table>`
};