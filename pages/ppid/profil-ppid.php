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
    <section class="container py-0 interactive-default" style="height: 390px;">
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
                            Profil PPID
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Profil PPID</div>
        </div>
    </section>
    <section class="container pt-0 surface-subdued" style="overflow: visible;">
        <div class="wrapper column gap-10">
            <div class="grid grid-2 grid-1-tablet py-11 px-12 p-10-mobile rounded-24" style="position: relative; overflow: hidden; background-image: url('/assets/images/ppid-hero.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; transform: translateY(-250px); margin-bottom: -250px;">
                <div style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; background: linear-gradient(270deg, rgba(255, 255, 255, 0) 0%, rgba(38, 38, 38, 0.3) 60.47%), linear-gradient(252.22deg, rgba(255, 255, 255, 0) -2.74%, rgba(38, 38, 38, 0.4) 70.42%); background-blend-mode: multiply; z-index: -1;"></div>
                <div class="flex column gap-7 text-balance text-inverse">
                    <span class="headline-xs">PPID BPMP Provinsi Sumatera Selatan</span>
                    <span class="body">Akses informasi publik secara cepat, mudah, dan transparan sesuai amanat Undang-Undang No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik. BPMP Sumatera Selatan berkomitmen menyajikan layanan informasi yang akuntabel bagi seluruh masyarakat.</span>
                    <a href="#" class="button large body-mobile">Ajukan Permohonan Informasi</a>
                </div>
            </div>
            <div class="tabs no-update vertical p-9 p-0-tablet surface-default rounded-16">
                <div class="menu">
                    <a href="#" class="item action" id="tab-menu-1">
                        Tugas dan Fungsi
                    </a>
                    <a href="#" class="item action" id="tab-menu-2">
                        Visi dan Misi
                    </a>
                    <a href="#" class="item action" id="tab-menu-3">
                        Struktur Organisasi PPID
                    </a>
                </div>
                <div class="content">
                    <div class="item" id="tab-content-1">
                        <div class="flex column gap-11">
                            <div class="display-lg">Tugas dan Fungsi PPID BPMP Sumatera Selatan</div>
                            <div class="flex column gap-7">
                                <span class="body">PPID BPMP Sumatera Selatan berkomitmen untuk keterbukaan informasi yang mudah diakses. Dengan pengelolaan sistematis, prosedur jelas, dan evaluasi, PPID menciptakan layanan informasi yang transparan dan terpercaya.</span>
                                <span class="body">Adapun fungsi PPID BPMP Provinsi Sumatera Selatan adalah sebagai berikut.</span>
                                <div class="grid grid-2 grid-1-mobile p-5 gap-5 surface-subdued rounded-16">
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-1.svg" alt="">
                                            </div>
                                            <span class="action">Pengelolaan dan Keamanan Informasi</span>
                                        </div>
                                        <span class="body">Mengelola penyediaan, penyimpanan, dokumentasi, dan pengamanan seluruh informasi publik.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-2.svg" alt="">
                                            </div>
                                            <span class="action">Pelayanan Sesuai Regulasi</span>
                                        </div>
                                        <span class="body">Memberikan informasi publik berdasarkan peraturan dan ketentuan yang berlaku.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-3.svg" alt="">
                                            </div>
                                            <span class="action">Layanan Cepat dan Sederhana</span>
                                        </div>
                                        <span class="body">Menyediakan informasi secara cepat, tepat sasaran, dan prosedur yang tidak berbelit.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-4.svg" alt="">
                                            </div>
                                            <span class="action">Prosedur Penyebaran Informasi</span>
                                        </div>
                                        <span class="body">Menetapkan mekanisme operasional untuk mendistribusikan informasi publik ke masyarakat.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-5.svg" alt="">
                                            </div>
                                            <span class="action">Uji Konsekuensi Informasi</span>
                                        </div>
                                        <span class="body">Melakukan analisis risiko sebelum membuka informasi yang bersifat strategis atau sensitif.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-6.svg" alt="">
                                            </div>
                                            <span class="action">Klasifikasi dan Perubahan Informasi</span>
                                        </div>
                                        <span class="body">Melakukan pengklasifikasian dan revisi status informasi sesuai perkembangan kebutuhan.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-7.svg" alt="">
                                            </div>
                                            <span class="action">Peninjauan Informasi Dikecualikan</span>
                                        </div>
                                        <span class="body">Membuka akses atas informasi yang sebelumnya dikecualikan setelah masa batas waktunya berakhir.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-8.svg" alt="">
                                            </div>
                                            <span class="action">Pertimbangan Kebijakan Layanan Informasi</span>
                                        </div>
                                        <span class="body">Menyusun pertimbangan tertulis atas setiap kebijakan publik terkait hak atas informasi.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-9.svg" alt="">
                                            </div>
                                            <span class="action">Penyelesaian Sengketa Informasi</span>
                                        </div>
                                        <span class="body">Menangani konflik atau sengketa informasi di tingkat unit organisasi secara adil dan terbuka.</span>
                                    </div>
                                    <div class="flex column p-8 gap-4 surface-default rounded-8">
                                        <div class="flex gap-5 items-center">
                                            <div class="flex justify-center items-center surface-blue-60 rounded-4 shrink-0" style="height: 48px; width: 48px;">
                                                <img src="/assets/images/ppid-icon-10.svg" alt="">
                                            </div>
                                            <span class="action">Evaluasi Kinerja Layanan Informasi</span>
                                        </div>
                                        <span class="body">Melakukan evaluasi rutin terhadap pelaksanaan tugas PPID di unit kerja masing-masing.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-2">
                        <div class="flex column gap-11">
                            <div class="display-lg">Visi dan Misi</div>
                            <div class="flex column gap-10">
                                <div class="flex column gap-6 p-9 surface-blue-5 rounded-12">
                                    <div class="heading-md text-subdued">Visi PPID BPMP Provinsi Sumatera Selatan</div>
                                    <p class="body-lg">Terciptanya pelayanan informasi yang transparan dan akuntabel guna memenuhi hak pemohon informasi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</p>
                                </div>
                                <div>
                                    <div class="flex column gap-3 body">
                                        <p>Untuk mencapai visi yang telah ditetapkan, PPID BPMP Sumatera Selatan menetapkan tiga misi utama berikut.</p>
                                        <ol class="px-7 gap-3">
                                            <li class="mb-3">Mengoptimalkan pelaksanaan Keterbukaan Informasi Publik yang transparan dan, akuntabel, sebagaimana diamanahkan dalam UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik;</li>
                                            <li class="mb-3">Memberikan Pelayanan Informasi yang Komunikatif, Responsif, Proaktif, Terintegratif, dan Informatif terkait kebijakan, program, dan kinerja Kementerian Pendidikan Dasar dan Menengah;</li>
                                            <li class="mb-3">Memfasilitasi pelayanan informasi publik yang ditujukan ke unit kerja pelaksana teknis di lingkungan Kementerian Pendidikan Dasar dan Memengah (online dan non-online).</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-3">
                        <div>
                            <img src="/assets/images/struktur-ppid-2.png" alt="Struktur Tim PPID" style="margin-bottom: -64px; margin-left: -41px;">
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