<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kinerja Organisasi</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="tentang-kami">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"></script>
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
                            Profil
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Profil</div>
        </div>
    </section>
    <section class="container py-0 surface-subdued">
        <div class="wrapper my-10 surface-default rounded-16">
            <div class="tabs vertical p-9">
                <div class="menu">
                    <a href="#" class="item action" id="tab-menu-1">
                        Visi dan Misi
                    </a>
                    <a href="#" class="item action" id="tab-menu-2">
                        Tugas Pokok dan Fungsi
                    </a>
                    <a href="#" class="item action" id="tab-menu-3">
                        Sejarah
                    </a>
                    <a href="#" class="item action" id="tab-menu-4">
                        Struktur Organisasi
                    </a>
                    <a href="#" class="item action" id="tab-menu-4">
                        Struktur Tim Kerja
                    </a>
                </div>
                <div class="content">
                    <div class="item" id="tab-content-1">
                        <div class="flex column gap-11">
                            <div class="display-lg">Visi dan Misi</div>
                            <div class="flex column gap-10">
                                <div class="flex column gap-6 p-9 surface-blue-5 rounded-12">
                                    <div class="heading-md text-subdued">Visi BPMP Provinsi Sumatera Selatan</div>
                                    <p class="body-lg">Kementerian Pendidikan Dasar dan Menengah mendukung Visi dan Misi Presiden untuk mewujudkan Indonesia Maju yang berdaulat, mandiri, dan berkepribadian melalui terciptanya Pelajar Pancasila yang bernalar kritis, kreatif, mandiri, beriman, bertakwa kepada Tuhan Yang Maha Esa, dan berakhlak mulia, bergotong royong, dan berkebinekaan global.</p>
                                </div>
                                <div>
                                    <div class="flex column gap-3 body">
                                        <p>Untuk mencapai visi yang telah ditetapkan, BPMP Sumatera Selatan menetapkan tiga misi utama berikut.</p>
                                        <ol class="px-7 gap-3">
                                            <li class="mb-3">Mewujudkan pendidikan yang relevan dan berkualitas tinggi, merata dan berkelanjutan, didukung oleh infrastruktur dan teknologi.</li>
                                            <li class="mb-3">Mewujudkan pelestarian dan pemajuan kebudayaan serta pengembangan bahasa dan sastra.</li>
                                            <li class="mb-3">Mengoptimalkan peran serta seluruh pemangku kepentingan untuk mendukung transformasi dan reformasi pengelolaan pendidikan dan kebudayaan.</li>
                                        </ol>
                                        <p>Untuk mengawal dan menyemangati pencapaian visi dan misi di atas, BPMP Provinsi Sumatera Selatan menetapkan motto yakni <b>“Melayani Sepenuh HATI.”</b></p>
                                        <p>Kata <b>“HATI”</b> merupakan akronim dari nilai-nilai yang diharapkan menjadi budaya pegawai yaitu Humanis, Amanah, Tanpa Pamrih, ber-Integritas.</p>
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