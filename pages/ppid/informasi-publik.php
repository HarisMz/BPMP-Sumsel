<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>PPID</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="ppid">

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
                            PPID
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Informasi Publik
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Informasi Publik</div>
        </div>
    </section>
    <section class="container surface-subdued">
        <div class="wrapper">
            <div class="flex column gap-13">
                <div class="grid grid-2 gap-12">
                    <span class="headline-xs">Dapatkan Akses Menuju Informasi Publik BPMP Provinsi Sumatera Selatan</span>
                    <span class="body">Pejabat Pengelola Informasi dan Dokumentasi (PPID) hadir sebagai jembatan antara lembaga dan masyarakat dalam mewujudkan keterbukaan informasi. informasi publik mencakup data, kegiatan, kinerja, hingga laporan keuangan yang dihasilkan dan dikelola oleh badan publik. Dengan memahami informasi ini, Anda turut serta dalam memastikan transparansi dan akuntabilitas lembaga. Manfaatkan hak Anda untuk memperoleh informasi yang terbuka, terpercaya, dan mudah diakses.</span>
                </div>
                <div class="grid grid-2 gap-7">
                    <div class="flex column justify-between gap-4 p-7 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-red-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/description.svg" alt="Informasi Berkala">
                            </div>
                            <div class="body-lg"><b>Informasi Berkala</b></div>
                        </div>
                        <span class="body">Informasi yang diperbaharui kemudian disediakaan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</span>
                        <a href="/ppid/informasi-publik/berkala" class="button secondary small">
                            Selengkapnya
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-7 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-purple-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/groups.svg" alt="Informasi Serta Merta">
                            </div>
                            <div class="body-lg"><b>Informasi Serta Merta</b></div>
                        </div>
                        <span class="body">Informasi yang berkaitan dengan hajat hidup orang banyak dan ketertiban umum dan wajib diumumkan secara serta merta tanpa penundaan.</span>
                        <a href="/ppid/informasi-publik/serta-merta" class="button secondary small">
                            Selengkapnya
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-7 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-cyan-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/image.svg" alt="Informasi Setiap Saat">
                            </div>
                            <div class="body-lg"><b>Informasi Setiap Saat</b></div>
                        </div>
                        <span class="body">Informasi yang harus disediakan oleh Badan Publik dan siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonanterhadap Informasi Publik tersebut.</span>
                        <a href="/ppid/informasi-publik/setiap-saat" class="button secondary small">
                            Selengkapnya
                        </a>
                    </div>
                    <div class="flex column justify-between gap-4 p-7 surface-default rounded-8">
                        <div class="flex gap-5 items-center">
                            <div class="flex justify-center items-center surface-green-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                <img src="/assets/images/menu_book.svg" alt="Informasi Dikecualikan">
                            </div>
                            <div class="body-lg"><b>Informasi Dikecualikan</b></div>
                        </div>
                        <span class="body">Informasi yang tidak dapat diakses oleh Pemohon Informasi Publik sebagaimana dimaksud dalam Undang-undang No 14 Tahun 2008 tentang keterbukaan Informasi Publik.</span>
                        <a href="/ppid/informasi-publik/dikecualikan" class="button secondary small">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>

</body>
</html>