<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="beranda">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"></script>
<?php include './modules/header.php'; ?>

<main>
    <section class="container py-0 surface-default">
        <div class="wrapper">
            <nav class="breadcrumb" id="breadcrumb" style="height: 44px;">
                <ul>
                    <li class="item">
                        <a href="#">
                            Berita
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container py-0">
        <div class="wrapper">
            <div class="tabs horizontal">
                <div class="menu">
                    <a href="#" class="item" id="tab-menu-1">
                        Rilis
                    </a>
                    <a href="#" class="item" id="tab-menu-2">
                        Artikel
                    </a>
                    <a href="#" class="item" id="tab-menu-3">
                        Agenda
                    </a>
                    <a href="#" class="item" id="tab-menu-4">
                        Pengumuman
                    </a>
                </div>
                <div class="content">
                    <div class="item" id="tab-content-1">
                        <div class="flex justify-between pt-3 pb-8">
                            <div class="input small" data-icon="search" style="max-width: 340px;">
                                <input type="search" placeholder="Cari Dokumen"/>
                            </div>
                            <div class="flex gap-3 items-center" style="max-width: 270px;">
                                <div class="body-sm bold">URUTKAN</div>
                                <div class="select small">
                                    <select name id>
                                        <option value disabled selected>
                                            Terbaru
                                        </option>
                                        <option value="A ~ Z">
                                            A ~ Z
                                        </option>
                                        <option value="Z ~ A">
                                            Z ~ A
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="separator-0 vertical"></div>
                        <div class="grid grid-3 gap-7 py-9">
                            <div class="card story">
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Pendidikan Dasar yang Inklusif dan Berkarakter
                                            </div>
                                        </a>
                                        <div class="description">
                                            Menyediakan akses pendidikan yang adil dan merata bagi semua anak untuk mendukung pembentukan karakter bangsa.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-2.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Membangun Generasi Muda Melalui Pembelajaran Kreatif
                                            </div>
                                        </a>
                                        <div class="description">
                                            Mengintegrasikan metode belajar yang inovatif untuk meningkatkan kreativitas dan minat belajar siswa sejak dini.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-3.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Pelatihan Guru: Memajukan Kualitas Pendidikan Dasar
                                            </div>
                                        </a>
                                        <div class="description">
                                            Meningkatkan kapasitas guru melalui pelatihan intensif agar lebih efektif dalam mendidik dan membimbing siswa.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-4.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Program Lingkungan Sekolah Hijau untuk Siswa SD
                                            </div>
                                        </a>
                                        <div class="description">
                                            Mendorong sekolah untuk menerapkan praktik ramah lingkungan, membentuk siswa yang peduli terhadap alam.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-5.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Pengenalan Literasi Digital di Pendidikan Dasar
                                            </div>
                                        </a>
                                        <div class="description">
                                            Membekali siswa dengan keterampilan digital untuk menghadapi tantangan dunia yang semakin modern.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-6.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Peran Pendidikan Karakter dalam Pembelajaran Sekolah Dasar
                                            </div>
                                        </a>
                                        <div class="description">
                                            Menekankan pentingnya karakter positif sebagai landasan bagi pembentukan kepribadian siswa.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-7.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Mengoptimalkan Peran Orang Tua dalam Pendidikan Dasar
                                            </div>
                                        </a>
                                        <div class="description">
                                            Membina hubungan erat dengan orang tua untuk meningkatkan dukungan terhadap kemajuan belajar siswa.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-8.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Mendorong Minat Baca di Kalangan Siswa Sekolah Dasar
                                            </div>
                                        </a>
                                        <div class="description">
                                            Mengimplementasikan program membaca untuk memperluas wawasan dan meningkatkan keterampilan literasi siswa.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/rilis-9.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Mewujudkan Pendidikan Dasar yang Ramah Anak
                                            </div>
                                        </a>
                                        <div class="description">
                                            Menghadirkan lingkungan belajar yang inklusif agar anak berkebutuhan khusus dapat berkembang dan berprestasi secara optimal.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a href="#">
                                            <div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <a href="#">
                                                <div class="authorname">
                                                    Fulan Fulana
                                                </div>
                                            </a>
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
                        <div class="flex justify-center items-center gap-5 py-4">
                            <div class="info">
                                <span class="results">Menampilkan 1 - 9 dari 90 data</span>
                            </div>
                            <div class="pagination">
                                <button class="prev-page" disabled="">chevron_left</button>
                                <span class="page-buttons"><button class="page-num active" data-page="1">1</button><button class="page-num" data-page="2">2</button><button class="page-num" data-page="3">3</button><span class="ellipsis">...</span><button class="page-num" data-page="10">10</button></span>
                                <button class="next-page">chevron_right</button>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-2">
                        <div class="flex justify-between pt-3 pb-8">
                            <div class="input small" data-icon="search" style="max-width: 340px;">
                                <input type="search" placeholder="Cari Dokumen"/>
                            </div>
                            <div class="flex gap-3 items-center" style="max-width: 270px;">
                                <div class="body-sm bold">URUTKAN</div>
                                <div class="select small">
                                    <select name id>
                                        <option value disabled selected>
                                            Terbaru
                                        </option>
                                        <option value="A ~ Z">
                                            A ~ Z
                                        </option>
                                        <option value="Z ~ A">
                                            Z ~ A
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="separator-0 vertical"></div>
                        <div class="grid grid-3 gap-7 py-9">
                            <div class="card story">
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Tips Menerapkan Pola Hidup Sehat Pada Anak
                                            </div>
                                        </a>
                                        <div class="description">
                                            Menerapkan pola hidup sehat pada anak-anak tidak hanya mendukung pertumbuhan fisik mereka tetapi juga kesehatan mental dan emosional.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-2.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Dampak Pola Hidup Modern Terhadap Kesehatan Anak
                                            </div>
                                        </a>
                                        <div class="description">
                                            Berikut adalah beberapa dampak pola hidup modern terhadap kesehatan anak-anak yang perlu diperhatikan oleh orang tua dan pendidik.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-3.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Pembelajaran Berbasis Pemecahan Masalah Sekolah Dasar di Kelas Tinggi
                                            </div>
                                        </a>
                                        <div class="description">
                                            Untuk menerapkan strategi pembelajaran ini ada beberapa langkah yang perlu Sahabat Sekolah Dasar lakukan.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-4.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Stop Memaksakan Calistung sebagai Masuk SD pada Anak
                                            </div>
                                        </a>
                                        <div class="description">
                                            Sebagai orang tua kadang kita merasa khawatir saat anak belum bisa calistung.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-5.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                3 Rekomendasi Senam untuk Anak SD
                                            </div>
                                        </a>
                                        <div class="description">
                                            Senam dapat menjadi salah satu kegiatan yang menyenangkan dilakukan oleh anak sekolah dasar.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-6.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Kemendikbudristek Selenggarakan Imunisasi Gerakan Sekolah 
                                            </div>
                                        </a>
                                        <div class="description">
                                            Kegiatan ini bertujuan untuk meningkatkan status kesehatan sekolah dan peserta didik, serta mensukseskan pelaksanaan Bulan Imunisasi Anak.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-7.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Pentingnya Penuhi Kebutuhan Air Harian
                                            </div>
                                        </a>
                                        <div class="description">
                                            Kementerian kesehatan menyarankan agar masyarakat mengonsumsi air mineral sebanyak 1000-2.500 mL air atau setara dengan 6-8 gelas per hari.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-8.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Empat Manfaat Aktivitas Fisik Bagi Anak
                                            </div>
                                        </a>
                                        <div class="description">
                                            Tahukan sahabat sekolah dasar kalau aktivitas fisik baik dalam bentuk permainan ataupun olahraga memiliki banyak manfaat lho.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                                <a href="#">
                                    <div class="featured-image" style="background-image: url(/assets/images/thumbnail/artikel-9.png);">
                                    </div>
                                </a>
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title">
                                                Manfaat Membawa Bekal ke Sekolah
                                            </div>
                                        </a>
                                        <div class="description">
                                            Ternyata membawakan bekal anak itu punya segudang manfaat di tengah maraknya makanan instan yang mengandung banyak zat berbahaya.
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <div class="info">
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
                        <div class="flex justify-center items-center gap-5 py-4">
                            <div class="info">
                                <span class="results">Menampilkan 1 - 9 dari 90 data</span>
                            </div>
                            <div class="pagination">
                                <button class="prev-page" disabled="">chevron_left</button>
                                <span class="page-buttons"><button class="page-num active" data-page="1">1</button><button class="page-num" data-page="2">2</button><button class="page-num" data-page="3">3</button><span class="ellipsis">...</span><button class="page-num" data-page="10">10</button></span>
                                <button class="next-page">chevron_right</button>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-3">
                    </div>
                    <div class="item" id="tab-content-4">
                        <div class="flex column gap-4 pb-4">
                            <div class="card digest p-7">
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title heading-md">
                                                Bantuan Pemerintah Program Kejar Mutu Sekolah Dasar Pendampingan Kampanye Sekolah Sehat (KSS) Di Daerah Afirmasi Tahun 2024
                                            </div>
                                        </a>
                                        <div class="description body-sm">
                                            Program tersebut akan dilaksanakan melalui mekanisme bantuan pemerintah kepada Perguruan Tinggi/Lembaga/Yayasan/Organisasi.
                                        </div>
                                    </div>
                                    <div class="meta body-sm">
                                        <div class="info">
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
                            <div class="card digest p-7">
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title heading-md">
                                                Jadwal Pengisian Survei Lingkungan Belajar Tahun 2024
                                            </div>
                                        </a>
                                        <div class="description body-sm">
                                            Berikut ini Jadwal Pengisian Survei Lingkungan Belajar Tahun 2024.
                                        </div>
                                    </div>
                                    <div class="meta body-sm">
                                        <div class="info">
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
                            <div class="card digest p-7">
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title heading-md">
                                                Kelengkapan Data AN
                                            </div>
                                        </a>
                                        <div class="description body-sm">
                                            Pengumuman Kelengkapan Data Asesmen Nasional 2024.
                                        </div>
                                    </div>
                                    <div class="meta body-sm">
                                        <div class="info">
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
                            <div class="card digest p-7">
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title heading-md">
                                                Angket Uji Keterbacaan Modul Pelaksanaan Literasi Dasar di Sekolah Dasar
                                            </div>
                                        </a>
                                        <div class="description body-sm">
                                            Atas kesediaan Bapak/Ibu/Sdr untuk meluangkan waktu dan mecurahkan energi serta pemikirannya, kami ucapkan terima kasih.
                                        </div>
                                    </div>
                                    <div class="meta body-sm">
                                        <div class="info">
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
                            <div class="card digest p-7">
                                <div class="details">
                                    <div class="summary">
                                        <a href="#">
                                            <div class="title heading-md">
                                                Survei Uji Keterbacaan Modul Bimtek Pencegahan Penyalahgunaan Narkoba dan Penanggulangan Tindak Kekerasan di Sekolah Dasar
                                            </div>
                                        </a>
                                        <div class="description body-sm">
                                            Atas kesediaan Bapak/Ibu/Sdr untuk meluangkan waktu dan mecurahkan energi serta pemikirannya, kami ucapkan terima kasih.
                                        </div>
                                    </div>
                                    <div class="meta body-sm">
                                        <div class="info">
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
                        <div class="flex justify-center items-center gap-5 py-4">
                            <div class="info">
                                <span class="results">Menampilkan 1 - 5 dari 50 data</span>
                            </div>
                            <div class="pagination">
                                <button class="prev-page" disabled="">chevron_left</button>
                                <span class="page-buttons"><button class="page-num active" data-page="1">1</button><button class="page-num" data-page="2">2</button><button class="page-num" data-page="3">3</button><span class="ellipsis">...</span><button class="page-num" data-page="10">10</button></span>
                                <button class="next-page">chevron_right</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>
</html>