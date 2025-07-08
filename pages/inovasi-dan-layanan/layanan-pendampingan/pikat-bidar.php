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
                            Layanan Pendampingan
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Pikat Bidar
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Pikat Bidar</div>
        </div>
    </section>
    <section class="container py-14 surface-subdued">
        <div class="wrapper p-12 gap-12 surface-default rounded-8">
            <div class="flex column gap-9 width-42">
                <div class="display-md">Tahapan Pengisian Data</div>
                <div class="flex column gap-9">
                    <div class="step flex gap-5" id="step-1">
                        <div class="step-number body rounded-full connector" data-top="28px" data-height="100px">1</div>
                        <div class="flex column gap-2">
                            <div class="heading-md">Pengisian data personal</div>
                            <div class="body">Isi formulir berupa isian data personal untuk kebutuhan pendataan pengguna layanan dan komunikasi lanjutan</div>
                        </div>
                    </div>
                    <div class="step flex gap-5" id="step-2">
                        <div class="step-number body rounded-full connector" data-top="28px" data-height="76px">2</div>
                        <div class="flex column gap-2">
                            <div class="heading-md">Pengisian detail pendampingan</div>
                            <div class="body">Berupa data pendampingan untuk selanjutnya dapat dilakukan analisis kebutuhan pendampingan</div>
                        </div>
                    </div>
                    <div class="step flex gap-5" id="step-3">
                        <div class="step-number body rounded-full">3</div>
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
                        <label for="jabatan">
                            Jabatan
                        </label>
                        <div class="input">
                            <input type="text" id="jabatan" placeholder="Isikan jabatan pada instansi Anda"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nip">
                            NIP
                        </label>
                        <div class="input">
                            <input type="text" id="nip" placeholder="Isikan NIP jika ada"/>
                        </div>
                        <div class="helper">
                            <span>
                                Jika ada
                            </span>
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
                        <label for="wilayah">
                            Wilayah
                        </label>
                        <div class="input">
                            <input type="text" id="wilayah" placeholder="Isikan nama wilayah (kab./kota) Anda"/>
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
                    <a href="#" class="button large" onclick="nextStep()">
                        Kirim Data
                    </a>
                </div>
                <div class="form-step" id="form-step-2">
                    <div class="display-md">Lengkapi Data Berikut</div>
                    <div class="form-group">
                        <label>Tema Pendampingan</label>
                        <div class="select">
                            <select name id>
                                <option value disabled selected>
                                    - Pilih -
                                </option>
                                <option value="Penjaminan Mutu Pendidikan">
                                    Penjaminan Mutu Pendidikan
                                </option>
                                <option value="Digitalisasi Pembelajaran">
                                    Digitalisasi Pembelajaran
                                </option>
                                <option value="Penguatan Pendidikan Karakter">
                                    Penguatan Pendidikan Karakter
                                </option>
                                <option value="Revitalisasi Sekolah">
                                    Revitalisasi Sekolah
                                </option>
                            </select>
                        </div>
                        <div class="helper">
                            <span>
                                Pilih tema yang sesuai dengan isu yang Anda hadapi
                            </span>
                        </div>
                    </div>
                    <div class="flex column gap-5">
                        <div class="body">Mode Pendampingan</div>
                        <div class="grid grid-2 gap-9">
                            <label class="radio">
                                <input type="radio" name="mode-pendampingan" value="Daring">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Dalam Jaringan (Daring)
                                </span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="mode-pendampingan" value="Luring">
                                <span class="mark">
                                </span>
                                <span class="label">
                                    Luar Jaringan (Luring)
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah-peserta">
                            Jumlah Peserta
                        </label>
                        <div class="input">
                            <input type="text" id="jumlah-peserta" placeholder="Isikan jumlah peserta"/>
                        </div>
                    </div>
                    <div class="grid grid-2 gap-9">
                        <div class="flex column gap-1">
                            <label for="usulan_tanggal">Usulan Tanggal</label>
                            <input type="date" id="usulan_tanggal">
                        </div>
                        <div class="flex column gap-1">
                            <label for="jam">Jam</label>
                            <input type="time" id="jam">
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
                <div class="form-step" id="form-step-3">
                    <div class="display-md">Konfirmasi Data Berikut</div>
                    
                    <div class="confirmation-table">
                        <div class="confirmation-section heading-md heading-md">Data personal</div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Nama</div>
                            <div class="confirmation-value action" id="conf-nama">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Jabatan</div>
                            <div class="confirmation-value action" id="conf-jabatan">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">NIP</div>
                            <div class="confirmation-value action" id="conf-nip">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Instansi/Lembaga</div>
                            <div class="confirmation-value action" id="conf-instansi">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Wilayah</div>
                            <div class="confirmation-value action" id="conf-wilayah">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Nomor Kontak</div>
                            <div class="confirmation-value action" id="conf-nomor">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Email</div>
                            <div class="confirmation-value action" id="conf-email">-</div>
                        </div>
                    </div>

                    <div class="confirmation-table">
                        <div class="confirmation-section heading-md">Detail pendampingan</div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Tema</div>
                            <div class="confirmation-value action" id="conf-tema">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Mode</div>
                            <div class="confirmation-value action" id="conf-mode">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Jumlah Peserta</div>
                            <div class="confirmation-value action" id="conf-jumlah">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Usulan Tanggal</div>
                            <div class="confirmation-value action" id="conf-tanggal">-</div>
                        </div>
                        <div class="confirmation-row">
                            <div class="confirmation-label body">Jam</div>
                            <div class="confirmation-value action" id="conf-jam">-</div>
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

</body>
</html>