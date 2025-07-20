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
                        <a href="/publikasi/kabar-wong-kito">
                            Kabar Wong Kito
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Semua Artikel
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container py-12">
        <div class="wrapper">
            <div class="flex column gap-12">
                <span class="display-lg">Semua Artikel</span>
                <div class="flex column gap-10">
                    <div class="flex column gap-6">
                        <span class="heading-lg">Filter</span>
                        <div class="flex items-end gap-7">
                            <div class="flex column full">
                                <label class="action text-subdued">Kategori Artikel</label>
                                <div class="select small">
                                    <div class="selector">Pilih</div>
                                    <div class="options">
                                        <div class="option" value="Terbaru">
                                            Terbaru
                                        </div>
                                        <div class="option" value="Terlama">
                                            Terlama
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex column full">
                                <label class="action text-subdued">Bulan</label>
                                <div class="select small">
                                    <div class="selector">Pilih</div>
                                    <div class="options">
                                        <div class="option" value="Terbaru">
                                            Terbaru
                                        </div>
                                        <div class="option" value="Terlama">
                                            Terlama
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex column full">
                                <label class="action text-subdued">Tahun</label>
                                <div class="select small">
                                    <div class="selector">Pilih</div>
                                    <div class="options">
                                        <div class="option" value="Terbaru">
                                            Terbaru
                                        </div>
                                        <div class="option" value="Terlama">
                                            Terlama
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex column full">
                                <label class="action text-subdued">Urut Berdasarkan</label>
                                <div class="select small">
                                    <div class="selector">Pilih</div>
                                    <div class="options">
                                        <div class="option" value="Terbaru">
                                            Terbaru
                                        </div>
                                        <div class="option" value="Terlama">
                                            Terlama
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input small" data-icon="search" style="min-width: 316px;">
                                <input type="text" placeholder="Cari Artikel">
                            </div>
                        </div>
                    </div>
                    <div class="separator-0 vertical border-color-disabled"></div>
                    <div class="grid grid-3 gap-7">
                        <div class="card story border-subdued">
                            <a href="/publikasi/berita/berita-detail"><div class="featured-image" style="background-image: url(/assets/images/berita-4.png);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-3.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-1.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                        <div class="card story border-subdued">
                            <a href="#"><div class="featured-image" style="background-image: url(/assets/images/berita-2.jpg);"></div></a>
                            <div class="details">
                                <a href="#" class="chip small selected">
                                    Dinas Pendidikan
                                </a>
                                <div class="summary">
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
                    <div class="flex justify-center items-center gap-5 pt-7">
                        <div class="info body-sm text-subdued">
                            <span>Menampilkan 1 - 9 dari 90 data</span>
                        </div>
                        <div class="pagination gap-5">
                            <button class="prev-page m-0" disabled="">chevron_left</button>
                            <span class="page-buttons gap-5"><button class="page-num text-subdued m-0 active" data-page="1">1</button><button class="page-num text-subdued m-0" data-page="2">2</button><button class="page-num text-subdued m-0" data-page="3">3</button><button class="page-num text-subdued m-0" data-page="4">4</button><button class="page-num text-subdued m-0" data-page="5">5</button><span class="ellipsis">...</span><button class="page-num text-subdued m-0" data-page="10">10</button></span>
                            <button class="next-page m-0">chevron_right</button>
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