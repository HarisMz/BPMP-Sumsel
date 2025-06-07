<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kinerja Organisasi</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="kinerja-organisasi">

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
                            Profil
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Kinerja Organisasi
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container py-8">
        <div class="wrapper flex justify-between">
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
    </section>
    <section class="container py-0">
        <div class="wrapper">
            <div class="tabs vertical pb-10">
                <div class="menu">
                    <a href="#" class="item" id="tab-menu-1">
                        Rencana Strategis
                    </a>
                    <a href="#" class="item" id="tab-menu-2">
                        Program Kerja
                    </a>
                    <a href="#" class="item" id="tab-menu-3">
                        Perjanjian Kinerja
                    </a>
                    <a href="#" class="item" id="tab-menu-4">
                        Lakip
                    </a>
                </div>
                <div class="content">
                    <div class="item" id="tab-content-1">
                        <div class="flex column pt-4">
                            <div class="collapsible card first-open">
                                <div class="collapsible-header">
                                    Rencana Strategis 1
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Rencana Strategis 2
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Rencana Strategis 3
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Rencana Strategis 4
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-2">
                        <div class="flex column pt-4">
                            <div class="collapsible card first-open">
                                <div class="collapsible-header">
                                    Program Kerja 1
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Program Kerja 2
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Program Kerja 3
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Program Kerja 4
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-3">
                        <div class="flex column pt-4">
                            <div class="collapsible card first-open">
                                <div class="collapsible-header">
                                    Perjanjian Kinerja 1
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Perjanjian Kinerja 2
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Perjanjian Kinerja 3
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Perjanjian Kinerja 4
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-4">
                        <div class="flex column pt-4">
                            <div class="collapsible card first-open">
                                <div class="collapsible-header">
                                    Lakip 1
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Lakip 2
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Lakip 3
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsible card">
                                <div class="collapsible-header">
                                    Lakip 4
                                </div>
                                <div class="collapsible-content">
                                    <div class="flex gap-4">
                                        <div>
                                            <img src="/assets/images/pdf.svg" alt="download" style="height: 24px; width: 24px;">
                                        </div>
                                        <p>
                                            Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.
                                        </p>
                                        <div class="flex gap-4">
                                            <a href="#">
                                                <img src="/assets/images/info.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/visibility.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
                                            <a href="#">
                                                <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                            </a>
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
</main>

<?php include './modules/footer.php'; ?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>
</html>