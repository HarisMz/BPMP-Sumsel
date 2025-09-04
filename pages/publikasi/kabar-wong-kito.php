<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Publikasi</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="kabar-wong-kito" data-slug="publikasi">

<?php include './modules/header.php'; ?>

<main>
    <section class="container py-0 interactive-default">
        <div class="wrapper column gap-4 py-9">
            <nav class="breadcrumb with-background" id="breadcrumb">
                <ul>
                    <li class="item">
                        <a href="/">
                            Beranda
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Publikasi
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Kabar Wong Kito
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Kabar Wong Kito</div>
        </div>
    </section>
    <section class="container surface-default py-10">
        <div class="wrapper">
            <div class="flex column gap-9">
                <span class="display-lg">Topik Pilihan</span>
                <div class="flex gap-10">
                    <div class="flex items-end p-10 rounded-16 width-64" style="background-image: url('/assets/images/wong-kito-1.png'); background-position: center; background-size: cover; background-repeat: no-repeat; position: relative;">
                        <div class="flex column gap-7 text-white text-balance" style="z-index: 1;">
                            <a href="/publikasi/kabar-wong-kito/artikel-detail" class="display-lg text-white" style="text-decoration: none;">Sistem Penerimaan Murid Baru (SPMB) dalam rangka Persiapan Hasil Perhitungan Daya Tampung dan Penetapan Wilayah Provinsi Sumatera Selatan Tahun 2025</a>
                            <div class="flex gap-4 items-center">
                                <span class="badge critical">
                                    Dinas Pendidikan
                                </span>
                                <div class="body-sm">
                                    21 Maret 2025 | 9.56 WIB
                                </div>
                            </div>
                        </div>
                        <div style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 47.99%, rgba(0, 0, 0, 0.8) 100%); position: absolute; top: 0; left: 0; height: 100%; width: 100%; border-radius: 16px;"></div>
                    </div>
                    <div class="flex column gap-9 width-36" style="max-width: 408px;">
                        <div class="flex column">
                            <a href="#" class="flex flex-start gap-5" style="text-decoration: none;">
                                <img src="/assets/images/wong-kito-2.png" alt="" style="object-fit: cover; aspect-ratio: 1 / 1; height: 136px; border-radius: 4px; ">
                                <div class="flex column gap-3">
                                    <span class="badge warning">
                                        Komunitas
                                    </span>
                                    <span class="heading-md line-clamp-3 text-default">Pembinaan Kelembagaan dan Manajemen Sekolah Non Formal/Kesetaraan melalui sebuah</span>
                                    <span class="body-sm text-subdued">Dedi Kasmarun</span>
                                </div>
                            </a>
                            <div class="separator-9 vertical border-color-disabled"></div>
                            <a href="#" class="flex flex-start gap-5" style="text-decoration: none;">
                                <img src="/assets/images/wong-kito-3.png" alt="" style="object-fit: cover; aspect-ratio: 1 / 1; height: 136px; border-radius: 4px; ">
                                <div class="flex column gap-3">
                                    <span class="badge success">
                                        Peserta Didik
                                    </span>
                                    <span class="heading-md line-clamp-3 text-default">Dorong Kepedulian pada Peserta Didik Down Syndrome, Kemendikbudristek Peringatan Hari</span>
                                    <span class="body-sm text-subdued">Halim Hermawan</span>
                                </div>
                            </a>
                            <div class="separator-9 vertical border-color-disabled"></div>
                            <a href="#" class="flex flex-start gap-5" style="text-decoration: none;">
                                <img src="/assets/images/wong-kito-4.png" alt="" style="object-fit: cover; aspect-ratio: 1 / 1; height: 136px; border-radius: 4px; ">
                                <div class="flex column gap-3">
                                    <span class="badge critical">
                                        Dinas Pendidikan
                                    </span>
                                    <span class="heading-md line-clamp-3 text-default">BPMP Sumsel Gelar Musda dan Plantikan PD Awi Sumsel 2024-2029</span>
                                    <span class="body-sm text-subdued">Alex Jumitoha</span>
                                </div>
                            </a>
                        </div>
                        <a href="/publikasi/kabar-wong-kito/semua-artikel" class="button full">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container p-0">
        <div class="wrapper justify-center" style="max-width: 100%;">
            <div class="tabs no-update horizontal gap-0">
                <div class="flex justify-center">
                    <div class="menu items-center surface-default" style="min-width: 1200px; border-bottom: none;">
                        <a href="#" class="item action" id="tab-menu-1">
                            Dinas Pendidikan
                        </a>
                        <a href="#" class="item action" id="tab-menu-2">
                            Kepala Sekolah/Guru
                        </a>
                        <a href="#" class="item action" id="tab-menu-3">
                            Peserta Didik
                        </a>
                        <a href="#" class="item action" id="tab-menu-4">
                            Komunitas
                        </a>
                    </div>
                </div>
                <div class="content items-center surface-subdued py-10">
                    <div class="item" id="tab-content-1" style="max-width: 1200px;">
                        <div class="flex justify-between">
                            <span class="display-lg">Artikel Terbaru</span>
                            <a href="/publikasi/kabar-wong-kito/semua-artikel" class="button">
                                Lihat Semua Artikel
                            </a>
                        </div>
                        <div class="grid grid-3 gap-7 py-10">
                            <div class="card story">
                                <a href="/publikasi/berita/berita-detail"><div class="featured-image" style="background-image: url(/assets/images/berita-4.png);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="/publikasi/berita/berita-detail"><div class="title line-clamp-3">
                                            Upaya Membangun Iklim Pembelajaran yang Inklusif, Aman, Nyaman, dan Menggembirakan
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) dan Pimpinan Pusat Aisyiyah berkomitmen untuk memperkuat pendidikan karakter di Indonesia.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Duma Subhatani
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    16 Januari 2025
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dilihat 473 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge critical">
                                            Dinas Pendidikan
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-2" style="max-width: 1200px;">
                        <div class="flex justify-between">
                            <span class="display-lg">Artikel Terbaru</span>
                            <a href="/publikasi/kabar-wong-kito/semua-artikel" class="button">
                                Lihat Semua Artikel
                            </a>
                        </div>
                        <div class="grid grid-3 gap-7 py-10">
                            <div class="card story">
                                <a href="/publikasi/berita/berita-detail"><div class="featured-image" style="background-image: url(/assets/images/berita-4.png);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="/publikasi/berita/berita-detail"><div class="title line-clamp-3">
                                            Upaya Membangun Iklim Pembelajaran yang Inklusif, Aman, Nyaman, dan Menggembirakan
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) dan Pimpinan Pusat Aisyiyah berkomitmen untuk memperkuat pendidikan karakter di Indonesia.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Duma Subhatani
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    16 Januari 2025
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dilihat 473 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge informational">
                                            Kepala Sekolah
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-3" style="max-width: 1200px;">
                        <div class="flex justify-between">
                            <span class="display-lg">Artikel Terbaru</span>
                            <a href="/publikasi/kabar-wong-kito/semua-artikel" class="button">
                                Lihat Semua Artikel
                            </a>
                        </div>
                        <div class="grid grid-3 gap-7 py-10">
                            <div class="card story">
                                <a href="/publikasi/berita/berita-detail"><div class="featured-image" style="background-image: url(/assets/images/berita-4.png);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="/publikasi/berita/berita-detail"><div class="title line-clamp-3">
                                            Upaya Membangun Iklim Pembelajaran yang Inklusif, Aman, Nyaman, dan Menggembirakan
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) dan Pimpinan Pusat Aisyiyah berkomitmen untuk memperkuat pendidikan karakter di Indonesia.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Duma Subhatani
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    16 Januari 2025
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dilihat 473 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge success">
                                            Peserta Didik
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-4" style="max-width: 1200px;">
                        <div class="flex justify-between">
                            <span class="display-lg">Artikel Terbaru</span>
                            <a href="/publikasi/kabar-wong-kito/semua-artikel" class="button">
                                Lihat Semua Artikel
                            </a>
                        </div>
                        <div class="grid grid-3 gap-7 py-10">
                            <div class="card story">
                                <a href="/publikasi/berita/berita-detail"><div class="featured-image" style="background-image: url(/assets/images/berita-4.png);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="/publikasi/berita/berita-detail"><div class="title line-clamp-3">
                                            Upaya Membangun Iklim Pembelajaran yang Inklusif, Aman, Nyaman, dan Menggembirakan
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) dan Pimpinan Pusat Aisyiyah berkomitmen untuk memperkuat pendidikan karakter di Indonesia.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Duma Subhatani
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    16 Januari 2025
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dilihat 473 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card story">
                                <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                                <div class="details">
                                    <div class="summary">
                                        <span class="badge warning">
                                            Komunitas
                                        </span>
                                        <a href="#"><div class="title line-clamp-3">
                                            Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                        </div></a>
                                        <div class="description line-clamp-3">
                                            Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
                                            <a href="#"><div class="authorname">
                                                Fulan Fulana
                                            </div></a>
                                            <div class="dateview">
                                                <span class="date">
                                                    1 Oktober 2024
                                                </span>
                                                • 
                                                <span class="viewcount">
                                                    Dibaca 114 kali
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container surface-subdued pt-0">
        <div class="wrapper">
            <div class="grid grid-3 text-white rounded-24" style="background: linear-gradient(225.54deg, #41C3FF 0.93%, #0468CC 74.77%);">
                <div class="flex column gap-7 p-10" style="grid-column: span 2;">
                    <span class="display-md">Saatnya Insan Pendidikan Provinsi Sumatera Selatan Berbagi dalam tulisan opini.</span>
                    <p class="body">Publikasikan Karya Anda pada Laman BPMP Provinsi Sumatera Selatan sebagai Kontribusi dalam Peningkatan Mutu Pendidikan, Karya terpilih akan dipublikasikan pada Halaman Wong Kito</p>
                    <a href="#" class="button primary text-black surface-white border-color-white">
                        Hubungi Admin
                    </a>
                </div>
                <img class="pt-7" src="/assets/images/wong-kito-ilustrasi.svg" alt="">
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>

</body>
</html>