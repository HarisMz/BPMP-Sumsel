<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="beranda">

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
                            Profil Organisasi
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="container py-4">
        <div class="wrapper justify-center">
            <img src="/assets/images/giat-sd.png" alt="Giat SD" style="height: 128px; width: 388px;">
        </div>
    </section>
    <section class="container py-0">
        <div class="wrapper">
            <div class="tabs horizontal">
                <div class="menu">
                    <a href="#visi-dan-misi" class="item" id="tab-menu-1">
                        Visi dan Misi
                    </a>
                    <a href="#tugas-dan-fungsi" class="item" id="tab-menu-2">
                        Tugas dan Fungsi
                    </a>
                    <a href="#struktur-organisasi" class="item" id="tab-menu-3">
                        Struktur Organisasi
                    </a>
                    <a href="#direktur-dari-masa-ke-masa" class="item" id="tab-menu-4">
                        Direktur dari Masa ke Masa
                    </a>
                    <a href="#logo-unit" class="item" id="tab-menu-5">
                        Logo Unit
                    </a>
                </div>
                <div class="content">
                    <div class="item" id="tab-content-1">
                        <div class="flex column gap-9 pt-10">
                            <div class="headline-xs">
                                Visi
                            </div>
                            <div class="flex column gap-8">
                                <p>Sebagai kementerian yang mengemban amanat pembangunan sumber daya manusia melalui ikhtiar bersama untuk meningkatkan mutu pendidikan, kebudayaan, ilmu pengetahuan, dan teknologi, maka visi Kemendikbudristek tahun 2020-2024 adalah:</p>
                                <p>“Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi mendukung Visi dan Misi Presiden dan Wakil Presiden untuk mewujudkan Indonesia maju yang berdaulat, mandiri, dan berkepribadian berlandaskan gotong royong melalui terciptanya pelajar Pancasila yang beriman, bertakwa kepada Tuhan YME, dan berakhlak mulia, berkebinekaan global, bergotong royong, mandiri, bernalar kritis, dan kreatif.”</p>
                                <p>Dalam rangka mewujudkan visi tersebut, Kemendikbudristek berkomitmen untuk melaksanakan tugas dan kewenangan secara konsisten, bertanggung jawab, dapat dipercaya, dengan mengedepankan profesionalitas dan integritas. Oleh karena itu, perumusan kebijakan dan pelaksanaan pembangunan bidang pendidikan, kebudayaan, ilmu pengetahuan, dan teknologi akan mengedepankan inovasi guna mencapai kemajuan dan kemandirian Indonesia. Sesuai dengan kepribadian bangsa yang berlandaskan gotong royong, Kemendikbudristek dan seluruh pemangku kepentingan terkait bekerja bersama untuk memajukan pendidikan, kebudayaan, ilmu pengetahuan, dan teknologi sesuai dengan visi dan misi presiden.</p>
                            </div>
                        </div>
                        <div class="flex column gap-9 py-10">
                            <div class="headline-xs">
                                Misi
                            </div>
                            <div class="flex column gap-8">
                                <p>Sesuai tugas dan kewenangannya, Kemendikbudristek melaksanakan misi Presiden dengan penjabaran misi terkait peningkatan kualitas manusia Indonesia, kemajuan budaya yang mencerminkan kepribadian bangsa, dan pengelolaan pemerintahan yang bersih, efektif, dan terpercaya. Adapun dukungan Kemendikbudristek dalam melaksanakan misi tersebut adalah sebagai berikut:</p>
                                <div class="flex column gap-4">
                                    <p>1. Mewujudkan pendidikan yang relevan dan berkualitas tinggi, merata, dan berkelanjutan, didukung oleh infrastruktur dan teknologi;</p>
                                    <p>2. Mewujudkan pelestarian dan pemajuan kebudayaan serta pengembangan bahasa dan sastra; dan</p>
                                    <p>3. Mengoptimalkan peran serta seluruh pemangku kepentingan untuk mendukung transformasi dan reformasi pengelolaan pendidikan, kebudayaan, ilmu pengetahuan, dan teknologi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-2">
                        <div class="flex column gap-9 pt-10">
                            <div class="headline-xs">
                                Tugas
                            </div>
                            <div class="flex column gap-8">
                                <p>Dalam rangka menjalankan visi misi Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi, maka Direktorat Sekolah Dasar menjalankan tugas dan fungsi sebagaimana Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Tekologi Nomor 28 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi. Adapun tugas dan fungsi Direktorat Sekolah Dasar adalah sebagai berikut:</p>
                                <p>Tugas Direktorat Sekolah Dasar menurut Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Nomor 28 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi adalah melaksanakan perumusan dan pelaksanaan kebijakan di bidang sekolah dasar dan pendidikan layanan khusus pada sekolah dasar.</p>
                            </div>
                        </div>
                        <div class="flex column gap-9 py-10">
                            <div class="headline-xs">
                                Fungsi
                            </div>
                            <div class="flex column gap-8">
                                <p>Fungsi Direktorat Sekolah Dasar menurut Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Nomor 28 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi, meliputi:</p>
                                <div class="flex column gap-4">
                                    <p>1. Penyiapan perumusan kebijakan di bidang peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>2. Penyusunan norma, prosedur, dan kriteria di bidang peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>3. Pelaksanaan kebijakan penjaminan mutu di bidang peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>4. Pelaksanaan kebijakan di bidang standar peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>5. Fasilitasi penyelenggaraan di bidang peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>6. Pemberian bimbingan teknis dan supervisi di bidang peserta didik, pembelajaran, sarana prasarana, tata kelola, dan penilaian pada sekolah dasar dan pendidikan layanan khusus pada sekolah dasar;</p>
                                    <p>7. Penyiapan perumusan pemberian izin penyelenggaraan sekolah dasar yang diselenggarakan perwakilan negara asing atau sekolah dasar kerja sama yang diselenggarakan oleh lembaga pendidikan asing dengan lembaga pendidikan Indonesia;</p>
                                    <p>8. Pemantauan, evaluasi, dan pelaporan di bidang sekolah dasar; dan</p>
                                    <p>9. Pelaksanaan urusan ketatausahaan Direktorat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="tab-content-3">
                        <div class="flex justify-center items-center py-14 px-12">
                            <img src="" alt="Struktur Organisasi" class="full" style="height: 640px;">
                        </div>
                    </div>
                    <div class="item" id="tab-content-4">
                        <div class="flex justify-center items-center py-14 px-12">
                            <img src="" alt="Sejarah Direktur" class="full" style="height: 640px;">
                        </div>
                    </div>
                    <div class="item" id="tab-content-5">
                        <div class="flex gap-14 grid-mobile grid-1-mobile">
                            <div class="flex justify-center items-center">
                                <img src="/assets/images/giat-sd.png" alt="Giat SD" style="width: 448px; height: 240px; object-fit: contain;">
                            </div>
                            <div class="flex column gap-0">
                                <div class="flex gap-8 p-4">
                                    <div class="rounded-12" style="height: 72px; min-width: 68px; background: #FBAD48;"></div>
                                    <p class="body" style="width: 508px;">Melambangkan kreativitas, semangat, dan kehangatan. Warna ini merepresentasikan semangat anak-anak untuk belajar dan berinovasi.</p>
                                </div>
                                <div class="flex gap-8 p-4">
                                    <div class="rounded-12" style="height: 72px; min-width: 68px; background: #FDDC00;"></div>
                                    <p class="body" style="width: 508px;">Menggambarkan keceriaan, kebahagiaan, dan optimisme. Warna kuning dalam logo ini bisa menunjukkan harapan untuk masa depan yang cerah bagi siswa.</p>
                                </div>
                                <div class="flex gap-8 p-4">
                                    <div class="rounded-12" style="height: 72px; min-width: 68px; background: #73C15D;"></div>
                                    <p class="body" style="width: 508px;">Melambangkan pertumbuhan, pembaruan, dan keseimbangan. Hijau merupakan warna alam yang menunjukkan perkembangan dan kesehatan.</p>
                                </div>
                                <div class="flex gap-8 p-4">
                                    <div class="rounded-12" style="height: 72px; min-width: 68px; background: #00A3D3;"></div>
                                    <p class="body" style="width: 508px;">Melambangkan kepercayaan, ketenangan, dan kedalaman. Biru memberikan kesan tenang dan fokus, yang penting dalam lingkungan belajar.</p>
                                </div>
                                <div class="flex gap-8 p-4">
                                    <div class="rounded-12" style="height: 72px; min-width: 68px; background: #CB4D3F;"></div>
                                    <p class="body" style="width: 508px;">Menggambarkan semangat, keberanian, dan energi. Warna merah dalam logo bisa berarti dorongan untuk mencapai prestasi dan semangat juang.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex column gap-9 py-10">
                            <div class="headline-xs">
                                Makna Logo
                            </div>
                            <div class="flex column gap-8">
                                <p>Logo ini melambangkan komitmen Direktorat Pendidikan Sekolah Dasar dalam menciptakan lingkungan belajar yang kreatif, ceria, dan seimbang, yang mendukung perkembangan siswa secara holistik. Warna-warna cerah dan beragam merepresentasikan semangat belajar yang penuh energi, kehangatan dalam interaksi, serta harapan akan masa depan yang cerah.</p>
                            </div>
                        </div>
                        <div class="flex column py-7 gap-4">
                            <div class="heading-lg">
                                Download Logo
                            </div>
                            <div class="flex column gap-4">
                                <div class="flex items-center gap-4">
                                    <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                    <a class="link noline" href="#">Download Logo Format (AI)</a>
                                </div>
                                <div class="flex items-center gap-4">
                                    <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                    <a class="link noline" href="#">Download Logo Format (PDF)</a>
                                </div>
                                <div class="flex items-center gap-4">
                                    <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                    <a class="link noline" href="#">Download Logo Format (PNG)</a>
                                </div>
                                <div class="flex items-center gap-4">
                                    <img src="/assets/images/download_2.svg" alt="download" style="height: 24px; width: 24px;">
                                    <a class="link noline" href="#">Download Logo Format (SVG)</a>
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