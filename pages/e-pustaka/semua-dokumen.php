<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>E-Pustaka</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="e-pustaka">

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
                        <a href="/e-pustaka">
                            E-Pustaka
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Semua Dokumen
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container py-12">
        <div class="wrapper">
            <div class="flex column gap-12">
                <div class="flex column gap-5">
                    <span class="display-lg">Semua Dokumen</span>
                    <span class="body">Beragam dokumen pendidikan untuk mendukung implementasi kebijakan dan peningkatan mutu layanan.</span>
                </div>
                <div class="flex gap-12">
                    <div class="flex column gap-10 shrink-0" style="width: 256px;">
                        <span class="heading-lg">Filter</span>
                        <div class="flex column gap-7">
                            <div class="collapsible card mt-0">
                                <div class="collapsible-header py-3">
                                    Kategori Dokumen
                                </div>
                                <div class="collapsible-content">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Kebijakan
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Bimtek
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Pelatihan
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Infografis
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Publikasi
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Panduan
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Modul Pembelajaran
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Penelitian
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Kajian
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Program Prioritas
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="collapsible card mt-0">
                                <div class="collapsible-header py-3">
                                    Sasaran Pengguna
                                </div>
                                <div class="collapsible-content">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Siswa
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Guru
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Wali Murid
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Kepala Sekolah
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="collapsible card mt-0">
                                <div class="collapsible-header py-3">
                                    Jenjang
                                </div>
                                <div class="collapsible-content">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            SD
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            SMP
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            SMA
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="collapsible card mt-0">
                                <div class="collapsible-header py-3">
                                    Tahun Terbit
                                </div>
                                <div class="collapsible-content">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            2022
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            2023
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            2024
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            2025
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="collapsible card mt-0">
                                <div class="collapsible-header py-3">
                                    Sumber Dokumen
                                </div>
                                <div class="collapsible-content">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Daerah
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Provinsi
                                        </span>
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="mark">
                                        </span>
                                        <span class="label">
                                            Pusat
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex justify-between gap-3">
                                <a href="#" class="button ultimate">
                                    Terapkan
                                </a>
                                <a href="#" class="button secondary">
                                    Hapus Semua
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex column gap-10">
                        <div class="flex gap-5 justify-end">
                            <div class="input small" data-icon="search" style="width: 400px;">
                                <input type="text" placeholder="Cari Artikel">
                            </div>
                            <div class="select small">
                                <div class="selector"></div>
                                <div class="options">
                                    <div class="option selected" value="Terbaru">
                                        Terbaru
                                    </div>
                                    <div class="option" value="Terlama">
                                        Terlama
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kotak-filtering">
                            <div class="flex column gap-5">
                                <div class="flex wrap gap-4 items-center">
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">Panduan</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">Modul Pembelajaran</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">SMP</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">Guru</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">2024</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">2025</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <div class="filter-terpilih">
                                        <div class="flex py-3 px-5 gap-5 items-center rounded-4 surface-gray-5 border-subdued">
                                            <span class="body">Pusat</span>
                                            <img class="close" src="/assets/images/cancel.svg" alt="Cancel Icon" style="cursor: pointer;">
                                        </div>
                                    </div>
                                    <a href="#" class="link secondary">
                                        Hapus Semua
                                    </a>
                                </div>
                                <!-- <a href="#" class="link secondary">
                                    Hapus Semua
                                </a> -->
                                <div class="separator-0 vertical border-color-subdued"></div>
                            </div>
                        </div>
                        <div class="grid grid-3 gap-12">
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dokumen">
                                <div class="flex column gap-7">
                                    <div style="height:365px">
                                        <img class="rounded-4" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                    <div class="flex column gap-4">
                                        <span class="badge critical">
                                            Panduan
                                        </span>
                                        <div class="heading-md">Panduan Pendidikan Literasi Finansial</div>
                                        <div class="meta">
                                            <div class="info">
                                                <div class="dateview text-subdued body-sm ">
                                                    <span class="date">
                                                        11 Juni 2024
                                                    </span>
                                                        • 
                                                    <span class="time">
                                                        10.00 WIB
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center pt-7">
                            <div class="pagination gap-5">
                                <button class="prev-page m-0" disabled="">chevron_left</button>
                                <span class="page-buttons gap-5"><button class="page-num text-subdued m-0 active" data-page="1">1</button><button class="page-num text-subdued m-0" data-page="2">2</button><button class="page-num text-subdued m-0" data-page="3">3</button><button class="page-num text-subdued m-0" data-page="4">4</button><button class="page-num text-subdued m-0" data-page="5">5</button><span class="ellipsis">...</span><button class="page-num text-subdued m-0" data-page="10">10</button></span>
                                <button class="next-page m-0">chevron_right</button>
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