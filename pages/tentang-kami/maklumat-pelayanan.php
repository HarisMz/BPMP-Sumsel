<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tentang Kami</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="tentang-kami">

<?php include './modules/header.php'; ?>

<main>
    <section class="container py-0 interactive-default">
        <div class="wrapper column gap-4 py-9">
            <nav class="breadcrumb with-background" id="breadcrumb" style="height: 44px;">
                <ul>
                    <li class="item">
                        <a href="#">
                            Beranda
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Maklumat Pelayanan
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Maklumat Pelayanan</div>
        </div>
    </section>
    <section class="container py-0 surface-subdued">
        <div class="wrapper my-10 p-9 surface-default rounded-16">
            <div class="flex gap-10">
                <div class="flex column gap-11 width-70">
                    <div class="flex column gap-6 surface-selected-default rounded-12">
                        <img src="/assets/images/site-logo/logo-maklumat.svg" alt="Logo Maklumat">
                        <div class="flex column justify-center gap-3">
                            <div class="display-md">Maklumat Pelayanan</div>
                            <span class="body">Dengan ini, kami menyatakan sanggup menyelenggarakan pelayanan sesuai dengan standar pelayanan yang telah di tetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai dengan peraturan perundangan-undangan berlaku.</span>
                            <span class="body">
                                Indralaya, 2 Januari 2025<br>
                                Kepala BPMP Provinsi Sumatera Selatan,
                            </span>
                            <div>
                                <span class="body">
                                    <b>Aria Ahmad Mangunwibawa, S.Psi., M.Si.</b><br>
                                    NIP 19751125 200501 1 002
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button secondary right" data-icon="download">
                        Lihat Dokumen Asli
                    </a>
                </div>
                <div class="flex column gap-7">
                    <div class="heading-lg">Lihat Maklumat Lainnya</div>
                    <div class="flex column gap-3">
                        <a href="#" class="link secondary">
                            Maklumat Pelayanan
                        </a>
                        <a href="#" class="link secondary">
                            Maklumat Keterbukaan Informasi Publik
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