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
                            Inovasi dan Layanan
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Pengaduan
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Pengaduan Masyarakat
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Pengaduan Masyarakat</div>
        </div>
    </section>
    <section class="container py-14 surface-subdued">
        <div class="wrapper p-12 gap-12 surface-default rounded-8">
            <div class="flex column gap-9 width-42">
                <div class="display-md">Tahapan Pengisian Data</div>
                <p class="body">Formulir ini digunakan kepada pengguna layanan (masyarakat) untuk memberikan pengaduan ketidakpuasan atas layanan BPMP Provinsi Sumatera Selatan, data identitas pelapor dijamin kerahasiaannya.</p>
                <div class="flex column gap-9">
                    <div class="step flex gap-5" id="step-1">
                        <div class="step-number body rounded-full connector" data-top="28px" data-height="100px">1</div>
                        <div class="flex column gap-2">
                            <div class="heading-md">Pengisian data personal</div>
                            <div class="body">Isi formulir berupa isian data personal untuk kebutuhan pendataan pengguna layanan dan komunikasi lanjutan</div>
                        </div>
                    </div>
                    <div class="step flex gap-5" id="step-2">
                        <div class="step-number body rounded-full">2</div>
                        <div class="flex column gap-2">
                            <div class="heading-md">Konfirmasi data</div>
                            <div class="body">Konfirmasi kembali data yang telah diisikan</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex column width-58 gap-9">
                <div class="form-step" id="form-step-1">
                    <div class="display-md">Lengkapi Data Berikut</div>
                    <div class="form-group">
                        <label for="nama">
                            Nama
                        </label>
                        <div class="input">
                            <input type="text" id="nama" placeholder="Isikan nama lengkap Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik">
                            NIK
                        </label>
                        <div class="input">
                            <input type="text" id="nik" placeholder="Isikan NIK Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor-kontak">
                            Nomor Kontak
                        </label>
                        <div class="input">
                            <input type="text" id="nomor-kontak" placeholder="Isikan nomor kontak yang aktif"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>
                        <div class="input">
                            <input type="text" id="email" placeholder="Isikan alamat email yang aktif"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instansi/lembaga">
                            Instansi/Lembaga
                        </label>
                        <div class="input">
                            <input type="text" id="instansi-lembaga" placeholder="Isikan nama instansi/lembaga Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">
                            Jabatan
                        </label>
                        <div class="input">
                            <input type="text" id="jabatan" placeholder="Isikan jabatan pada instansi Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">
                            Alamat
                        </label>
                        <div class="input">
                            <input type="text" id="alamat" placeholder="Isikan alamat Anda dengan lengkap"/>
                        </div>
                    </div>
                    <div class="flex column gap-5">
                        <div class="body">Jenis Pengaduan</div>
                        <div class="flex column gap-5 pt-2">
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Pelanggaran kode etik">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Pelanggaran kode etik
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Penyalahgunaan/penyimpangan wewenang">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Penyalahgunaan/penyimpangan wewenang
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Korupsi/Gratifikasi">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Korupsi/Gratifikasi
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Benturan kepentingan">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Benturan kepentingan
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Ketidaksesuaian Prosedur">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Ketidaksesuaian Prosedur
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="jenis-pengaduan" value="Lainnya">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Lainnya
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi-pengaduan">
                            Isi pengaduan
                        </label>
                        <div class="textarea">
                            <textarea id="isi-pengaduan" placeholder="Isikan pengaduan Anda berupa deskripsi" rows="4">
                            </textarea>
                        </div>
                        <div class="helper">
                            <span>
                                Tuliskan kronologis dan deskripsi pengaduan secara lengkap
                            </span>
                        </div>
                    </div>
                    <div class="flex column gap-5">
                        <div class="body">Bukti Pendukung</div>
                        <div class="file-upload multiple" id="bukti-pengaduan" max-size="10000">
                            <div class="file-input-container" id="file-input-container">
                                <input type="file" id="file-input">
                                <span class="file-label">
                                    Pilih File
                                </span>
                            </div>
                            <ul id="file-list">
                            </ul>
                            <a href="#" class="button quiet full" id="addmore-button">
                                Tambah File
                            </a>
                        </div>
                        <p class="helper">Upload maksimum 5 file yang didukung. Maks 10 MB per file.</p>
                    </div>
                    <a href="#" class="button large" onclick="nextStep()">
                        Kirim Data
                    </a>
                </div>
                <div class="form-step" id="form-step-2">
                    <div class="display-md">Konfirmasi Data Berikut</div>
                    
                    <div class="confirmation-table">
                        <div class="confirmation-section heading-md heading-md">Data personal</div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Nama</div>
                            <div class="confirmation-value action" id="conf-nama">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">NIK</div>
                            <div class="confirmation-value action" id="conf-nik">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Nomor Kontak</div>
                            <div class="confirmation-value action" id="conf-nomor">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Email</div>
                            <div class="confirmation-value action" id="conf-email">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Instansi/Lembaga</div>
                            <div class="confirmation-value action" id="conf-instansi">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Jabatan</div>
                            <div class="confirmation-value action" id="conf-jabatan">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Alamat</div>
                            <div class="confirmation-value action" id="conf-alamat">-</div>
                        </div>
                        
                    </div>

                    <div class="confirmation-table">
                        <div class="confirmation-section heading-md">Detail pengaduan</div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Jenis pengaduan</div>
                            <div class="confirmation-value action" id="conf-jenis-pengaduan">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Isi pengaduan</div>
                            <div class="confirmation-value action" id="conf-isi-pengaduan">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Bukti pengaduan</div>
                            <div class="confirmation-value action" id="conf-bukti">
                                <div id="conf-file-list" class="file-preview-list">-</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <a href="#" class="button secondary large" onclick="prevStep()">
                            Kembali
                        </a>
                        <a href="#" class="button large" onclick="nextStep()">
                            Kirim Data
                        </a>
                    </div>
                </div>
                <div class="form-submitted">
                    <div class="flex column gap-5 items-center text-center">
                        <div class="flex surface-green-50 rounded-full justify-center" style="height: 40px; width: 40px;">
                            <img src="/assets/images/checklist.svg" alt="Checklist">
                        </div>
                        <div class="display-md">Data Anda telah kami rekam</div>
                        <div class="body">Selanjutnya Anda akan dihubungi oleh pihak BPMP Provinsi Sumatera Selatan melalui pesan WhatsApp dan email maksimal 2 hari kerja untuk komunikasi lebih lanjut terkait pengajuan Anda.</div>
                    </div>
                    <a href="#" class="button large">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>
<script src="/scripts/pengaduan-masyarakat.js"></script>

</body>
</html>