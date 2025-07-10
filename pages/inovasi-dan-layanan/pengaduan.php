<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Inovasi dan Layanan</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="inovasi-dan-layanan">

<?php include './modules/header.php'; ?>

<main>
    <section class="container hero py-0 darken left" style="background-image: url('/assets/images/hero-pengaduan.jpg');">
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
                            Inovasi dan Layanan
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Pengaduan
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="flex items-center height-full">
                <div class="flex column gap-7 text-inverse width-50">
                    <span class="headline-sm">Sampaikan Pengaduan Anda untuk Perbaikan Pelayanan Publik</span>
                    <span class="body">Laporkan penyimpangan, pelanggaran, atau keluhan terkait  pelayanan publik yang Anda alami di lingkungan BPMP Provinsi Sumatera Selatan agar kami dapat meningkatkan kualitas layanan kami.</span>
                    <a href="#" class="button large">
                        Pilih Jenis Pengaduan
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-14 surface-subdued">
        <div class="wrapper">
            <div class="flex column items-center gap-11">
                <div class="headline-xs">Jenis Pengaduan</div>
                <div class="grid grid-4 gap-7">
                    <div class="flex column justify-between gap-5 p-7 surface-default rounded-8">
                        <div class="flex column gap-5">
                            <div class="flex gap-5 items-center">
                                <div class="flex justify-center items-center surface-red-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                    <img src="/assets/images/whistle.svg" alt="Manajemen Perubahan">
                                </div>
                                <div class="body-lg"><b>Whistle Blowing System (WBS)</b></div>
                            </div>
                            <span class="body">WBS melaporkan pelanggaran serius seperti korupsi. Identitas pelapor dijamin rahasia.</span>
                        </div>
                        <a href="#" class="button large right" data-icon="open_in_new">
                            Buat Laporan
                        </a>
                    </div>
                    <div class="flex column justify-between gap-5 p-7 surface-default rounded-8">
                        <div class="flex column gap-5">
                            <div class="flex gap-5 items-center">
                                <div class="flex justify-center items-center surface-purple-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                    <img src="/assets/images/span.svg" alt="Manajemen Perubahan">
                                </div>
                                <div class="body-lg"><b>SP4N Lapor</b></div>
                            </div>
                            <span class="body">Platform untuk pengaduan layanan publik yang diteruskan ke instansi terkait.</span>
                        </div>
                        <a href="#" class="button large right" data-icon="open_in_new">
                            Buat Laporan
                        </a>
                    </div>
                    <div class="flex column justify-between gap-5 p-7 surface-default rounded-8">
                        <div class="flex column gap-5">
                            <div class="flex gap-5 items-center">
                                <div class="flex justify-center items-center surface-cyan-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                    <img src="/assets/images/pengaduan.svg" alt="Manajemen Perubahan">
                                </div>
                                <div class="body-lg"><b>Pengaduan Masyarakat</b></div>
                            </div>
                            <span class="body">Saluran untuk melaporkan keluhan layanan BPMP Sumsel, ditindaklanjuti sesuai prosedur.</span>
                        </div>
                        <a href="/inovasi-dan-layanan/pengaduan/pengaduan-masyarakat" class="button large right" data-icon="open_in_new">
                            Buat Laporan
                        </a>
                    </div>
                    <div class="flex column justify-between gap-5 p-7 surface-default rounded-8">
                        <div class="flex column gap-5">
                            <div class="flex gap-5 items-center">
                                <div class="flex justify-center items-center surface-green-50 rounded-8 shrink-0" style="height: 60px; width: 60px;">
                                    <img src="/assets/images/gratifikasi.svg" alt="Manajemen Perubahan">
                                </div>
                                <div class="body-lg"><b>Pelaporan Gratifikasi</b></div>
                            </div>
                            <span class="body">Saluran untuk melaporkan gratifikasi pegawai BPMP Sumsel, baik ditolak atau diterima.</span>
                        </div>
                        <a href="/inovasi-dan-layanan/pengaduan/pelaporan-gratifikasi" class="button large right" data-icon="open_in_new">
                            Buat Laporan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-9 pb-14 surface-default">
        <div class="wrapper">
            <div class="flex column items-center gap-12">
                <div class="headline-xs">Prosedur Penyampaian Pengaduan</div>
                <div class="grid grid-3 gap-11">
                    <div class="flex column items-center gap-5 text-center">
                        <div class="flex justify-center items-center surface-gray-40 rounded-12 shrink-0" style="height: 80px; width: 80px; position: relative;">
                            <img src="/assets/images/data_table.svg" alt="Prosedur Pengaduan 1">
                            <div class="flex justify-center items-center text-inverse heading-lg surface-blue-60 rounded-full" style="position: absolute; height: 32px; width: 32px; top: -16px; left: -16px; box-shadow: 0 0 0 4px white;">1</div>
                        </div>
                        <div class="heading-lg">Pilih Jenis Pengaduan</div>
                        <div class="body">Pastikan Anda mengetahui jenis pengaduan yang tepat untuk menyampaikan laporan Anda, sehingga aduan Anda dapat tersampaikan dan ditangani oleh pihak yang tepat.</div>
                    </div>
                    <div class="flex column items-center gap-5 text-center">
                        <div class="flex justify-center items-center surface-gray-40 rounded-12 shrink-0" style="height: 80px; width: 80px; position: relative;">
                            <img src="/assets/images/rate_review.svg" alt="Prosedur Pengaduan 2">
                            <div class="flex justify-center items-center text-inverse heading-lg surface-blue-60 rounded-full" style="position: absolute; height: 32px; width: 32px; top: -16px; left: -16px; box-shadow: 0 0 0 4px white;">2</div>
                        </div>
                        <div class="heading-lg">Mulai Pengaduan</div>
                        <div class="body">Silakan isi formulir dan laporkan masalah yang Anda temui dengan jelas agar pihak-pihak terkait dapat mempelajari aduan dan melakukan tindak lanjut yang tepat.</div>
                    </div>
                    <div class="flex column items-center gap-5 text-center">
                        <div class="flex justify-center items-center surface-gray-40 rounded-12 shrink-0" style="height: 80px; width: 80px; position: relative;">
                            <img src="/assets/images/eye_tracking.svg" alt="Prosedur Pengaduan 3">
                            <div class="flex justify-center items-center text-inverse heading-lg surface-blue-60 rounded-full" style="position: absolute; height: 32px; width: 32px; top: -16px; left: -16px; box-shadow: 0 0 0 4px white;">3</div>
                        </div>
                        <div class="heading-lg">Pantau Pengaduan</div>
                        <div class="body">Anda dapat memantau perkembangan terbaru dari laporan Anda dengan mengikuti langkah-langkah yang tersedia pada masing-masing saluran pelaporan.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-0 surface-subdued">
        <div class="wrapper py-14">
            <div class="flex gap-11">
                <div class="headline-xs width-42"><b>Soal Sering Ditanya</b></div>
                <div class="flex column width-58">
                    <div class="collapsible list accordion first-open">
                        <div class="collapsible-header">
                            Apakah Identitas pelapor dirahasiakan?
                        </div>
                        <div class="collapsible-content">
                            <p>
                                Ya, identitas pelapor dijamin kerahasiaannya sesuai dengan ketentuan yang berlaku. Anda dapat melaporkan secara anonim melalui saluran resmi seperti Whistle Blowing System jika merasa lebih nyaman tanpa mengungkapkan identitas.
                            </p>
                        </div>
                    </div>
                    <div class="collapsible list accordion">
                        <div class="collapsible-header">
                            Apa saja yang dapat saya laporkan melalui layanan pengaduan ini?
                        </div>
                        <div class="collapsible-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.
                            </p>
                        </div>
                    </div>
                    <div class="collapsible list accordion">
                        <div class="collapsible-header">
                            Bagaimana cara saya menyampaikan pengaduan secara daring?
                        </div>
                        <div class="collapsible-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.
                            </p>
                        </div>
                    </div>
                    <div class="collapsible list accordion">
                        <div class="collapsible-header">
                            Apakah saya akan mendapatkan respons setelah membuat pengaduan?
                        </div>
                        <div class="collapsible-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.
                            </p>
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