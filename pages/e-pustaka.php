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
                        <a href="#">
                            E-Pustaka
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Perpustakaan Elektronik</div>
        </div>
    </section>
    <section class="container">
        <div class="wrapper">
            <div class="flex column justify-center items-center gap-10 gap-6-mobile">
	            <div class="flex row justify-between items-center text-center gap-9 full">
	                <h1 class="display-md full-mobile">Dokumen Populer</h1>
	                <a href="/e-pustaka/semua-dokumen" class="button hide-mobile">Lihat Semua Dokumen</a>
	            </div>
	            <div class="grid grid-4 grid-1-mobile gap-12">
	            	<a href="/e-pustaka/dokumen-detail" class="dokumen">
                        <div style="height:365px">
                            <img class="rounded-8" src="/assets/images/pustaka-1.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="flex column gap-4">
                            <span class="badge critical">
                                Panduan
                            </span>
                            <div class="heading-md text-default">Panduan Pendidikan Literasi Finansial</div>
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
                    </a>
                    <a href="/e-pustaka/dokumen-detail" class="dokumen">
                        <div style="height:365px">
                            <img class="rounded-8" src="/assets/images/pustaka-2.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="flex column gap-4">
                            <span class="badge critical">
                                Panduan
                            </span>
                            <div class="heading-md text-default">Panduan Penyelenggaraan Mata Pelajaran Pilihan</div>
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
                    </a>
                    <a href="/e-pustaka/dokumen-detail" class="dokumen">
                        <div style="height:365px">
                            <img class="rounded-8" src="/assets/images/pustaka-3.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="flex column gap-4">
                            <span class="badge critical">
                                Panduan
                            </span>
                            <div class="heading-md text-default">Panduan Pemilihan Mata Pelajaran Pilihan</div>
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
                    </a>
                    <a href="/e-pustaka/dokumen-detail" class="dokumen">
                        <div style="height:365px">
                            <img class="rounded-8" src="/assets/images/pustaka-4.png" alt="Buku Pustaka" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="flex column gap-4">
                            <span class="badge critical">
                                Panduan
                            </span>
                            <div class="heading-md text-default">Panduan Pendidikan Perubahan Iklim</div>
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
                    </a>
                    <div class="flex row justify-center items-center text-center gap-9 full hide-desktop hide-tablet">
                        <a href="/e-pustaka/semua-dokumen" class="button">
                            Lihat Dokumen Lainnya
                        </a>
                    </div>
	            </div>
	        </div>
        </div>
    </section>
    <section class="container surface-subdued">
        <div class="wrapper">
            <div class="flex column gap-10">
                <div class="display-md">Kategori Dokumen</div>
                <div class="grid grid-3 gap-7">
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-red-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/description.svg" alt="Dokumen Kebijakan">
                            </div>
                            <div class="body-lg"><b>Dokumen Kebijakan</b></div>
                        </div>
                        <span class="body">Kumpulan peraturan & kebijakan terkini dari Kemdikbudristek maupun daerah.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-purple-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/groups.svg" alt="Materi Bimtek dan Pelatihan">
                            </div>
                            <div class="body-lg"><b>Materi Bimtek dan Pelatihan</b></div>
                        </div>
                        <span class="body">Materi pelatihan dan bimtek bagi pendidik dan tenaga kependidikan.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-cyan-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/image.svg" alt="Infografis dan Publikasi">
                            </div>
                            <div class="body-lg"><b>Infografis dan Publikasi</b></div>
                        </div>
                        <span class="body">Infografis, ringkasan kebijakan, dan publikasi informasi pendidikan.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-green-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/menu_book.svg" alt="Panduan dan Modul Pembelajaran">
                            </div>
                            <div class="body-lg"><b>Panduan dan Modul Pembelajaran</b></div>
                        </div>
                        <span class="body">Panduan teknis dan modul ajar untuk mendukung pelaksanaan kurikulum.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-orange-40 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/analytics.svg" alt="Hasil Penelitian dan Kajian">
                            </div>
                            <div class="body-lg"><b>Hasil Penelitian dan Kajian</b></div>
                        </div>
                        <span class="body">Laporan penelitian dan kajian terkait standar, mutu, dan kebijakan pendidikan.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-9 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-yellow-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/star.svg" alt="Dokumen Program Prioritas">
                            </div>
                            <div class="body-lg"><b>Dokumen Program Prioritas</b></div>
                        </div>
                        <span class="body">Dokumen terkait 6 program prioritas Kemendidasmen.</span>
                        <a href="/e-pustaka/semua-dokumen" class="button secondary small">
                            Lihat Semua
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="wrapper">
            <div class="flex column gap-10">
                <span class="display-md">Pranala Luar</span>
                <div class="grid grid-3 gap-5">
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">Sistem Informasi Kurikulum Nasional</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">Sisitem Informasi Perbukuan Indonesia</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">Pusat Standar dan Kebijakan Pendidikan</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">JDIH Kemendikdasmen</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">Ruang GTK</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                    <div class="flex gap-3 items-center">
                        <a href="#" class="link secondary">Rumah Pendidikan</a>
                        <img src="/assets/images/open_in_new.svg" alt="Open" style="height: 16px; width: 16px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>

</body>
</html>