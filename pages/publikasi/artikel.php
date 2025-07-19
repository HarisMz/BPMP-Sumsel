<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Publikasi</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="publikasi">

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
                            Artikel
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Artikel</div>
        </div>
    </section>
    <section class="container surface-subdued">
        <div class="wrapper">
            <div class="flex column gap-10 gap-6-mobile">
                <h1 class="display-lg full-mobile">Artikel Populer</h1>
	            <div class="grid grid-3 grid-1-mobile gap-7">
	            	<div class="card story">
                        <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                        <div class="details">
                            <div class="summary">
                                <a href="#"><div class="title line-clamp-3">
                                    Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
                                </div></a>
                                <div class="description line-clamp-3">
                                    Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                </div>
                            </div>
                            <div class="meta justify-between">
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
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card story">
                        <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                        <div class="details">
                            <div class="summary">
                                <a href="#"><div class="title line-clamp-3">
                                    Judul Berita Terdiri dari 1 – 3 Baris Tulisan, Jika Lebih Maka Akan Diberikan Tanda Elipsis
                                </div></a>
                                <div class="description line-clamp-3">
                                    Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
                                </div>
                            </div>
                            <div class="meta justify-between">
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
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card story">
                        <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                        <div class="details">
                            <div class="summary">
                                <a href="#"><div class="title line-clamp-3">
                                    Judul Berita Ini Singkat
                                </div></a>
                                <div class="description line-clamp-3">
                                    Deskripsinya pun singkat. Singkat sekali, padat jelas.
                                </div>
                            </div>
                            <div class="meta justify-between">
                                <div class="info">
                                    <a href="#"><div class="authorname">
                                        John Doe
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
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                            </div>
                        </div>
                    </div>
	            </div>
	        </div>
        </div>
    </section>
    <section class="container surface-default">
        <div class="wrapper">
            <div class="flex column gap-7">
                <div class="display-lg">Lihat Artikel Berdasarkan Penulis</div>
                <div class="carousel arrow loop arrow-bordered" data-carousel-visible="5" data-carousel-visible-mobile="1" data-sliding-span="1">
                    <div class="carousel-inner" style="height: 240px;">
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                        <div class="carousel-item column justify-center surface-subdued rounded-8 gap-7">
                            <span class="avatar xxl">
                                <img class="image" src="/assets/images/foto-pimpinan/pimpinan-8.png">
                            </span>
                            <div class="flex column gap-2 text-center">
                                <span class="heading-sm">Aria Ahmad Mangunwibawa</span>
                                <span class="body">5 Artikel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container surface-subdued">
        <div class="wrapper column gap-10">
            <div class="flex justify-between">
                <div class="display-lg">Artikel Terbaru</div>
                <a href="#" class="button">
                    Lihat Artikel Lainnya
                </a>
            </div>
            <div class="input small" data-icon="search">
                <input type="text" placeholder="Cari Artikel">
            </div>
            <div class="flex column gap-7">
                <div class="card digest" style="height: 128px;">
                    <a href="#" class="ratio-1-1">
                        <div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);">
                        </div>
                    </a>
                    <div class="details justify-center py-4 px-7">
                        <div class="summary">
                            <a href="#">
                                <div class="heading-sm line-clamp-3">
                                    Judul Berita Tediri dari 1-3 Baris, jika lebih maka akan diberikan tanda elipsis
                                </div>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="info">
                                <a href="#"><div class="authorname">
                                    Duma Subhatani
                                </div></a>
                                <div class="dateview eyebrow-sm">
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
                <div class="card digest" style="height: 128px;">
                    <a href="#" class="ratio-1-1">
                        <div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);">
                        </div>
                    </a>
                    <div class="details justify-center py-4 px-7">
                        <div class="summary">
                            <a href="#">
                                <div class="heading-sm line-clamp-3">
                                    Judul Berita Tediri dari 1-3 Baris, jika lebih maka akan diberikan tanda elipsis
                                </div>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="info">
                                <a href="#"><div class="authorname">
                                    Duma Subhatani
                                </div></a>
                                <div class="dateview eyebrow-sm">
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
                <div class="card digest" style="height: 128px;">
                    <a href="#" class="ratio-1-1">
                        <div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);">
                        </div>
                    </a>
                    <div class="details justify-center py-4 px-7">
                        <div class="summary">
                            <a href="#">
                                <div class="heading-sm line-clamp-3">
                                    Judul Berita Tediri dari 1-3 Baris, jika lebih maka akan diberikan tanda elipsis
                                </div>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="info">
                                <a href="#"><div class="authorname">
                                    Duma Subhatani
                                </div></a>
                                <div class="dateview eyebrow-sm">
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
                <div class="card digest" style="height: 128px;">
                    <a href="#" class="ratio-1-1">
                        <div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);">
                        </div>
                    </a>
                    <div class="details justify-center py-4 px-7">
                        <div class="summary">
                            <a href="#">
                                <div class="heading-sm line-clamp-3">
                                    Judul Berita Tediri dari 1-3 Baris, jika lebih maka akan diberikan tanda elipsis
                                </div>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="info">
                                <a href="#"><div class="authorname">
                                    Duma Subhatani
                                </div></a>
                                <div class="dateview eyebrow-sm">
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
                <div class="card digest" style="height: 128px;">
                    <a href="#" class="ratio-1-1">
                        <div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);">
                        </div>
                    </a>
                    <div class="details justify-center py-4 px-7">
                        <div class="summary">
                            <a href="#">
                                <div class="heading-sm line-clamp-3">
                                    Judul Berita Tediri dari 1-3 Baris, jika lebih maka akan diberikan tanda elipsis
                                </div>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="info">
                                <a href="#"><div class="authorname">
                                    Duma Subhatani
                                </div></a>
                                <div class="dateview eyebrow-sm">
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
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>

</body>
</html>