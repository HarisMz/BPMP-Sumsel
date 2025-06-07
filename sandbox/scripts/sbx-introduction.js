export default {
    customization: [],
    generateHTML: (options) => `
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <title>
            <!--
                Tulis judul halaman, misal: Beranda, Profil, dsb.
                Judul ini akan ditampilkan pada tab browser.
            -->
        </title>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
    </head>
    <body>

    <?php include './modules/header.php'; ?>

    <main>

        <!-- Tempatkan isi dari halaman di dalam bagian ini. -->

    </main>

    <?php include './modules/footer.php'; ?>

    </body>
    </html>
    `,
    generatePreviewHTML: (options) => `
    <div class="flex row gap-10 full height-full">
        <div class="flex column full overflow-y-auto">
            <div class="body rounded-8 full height-full border-subdued surface-neutral-subdued text-default flex column justify-center items-center overflow-hidden">
                <div class="flex column full height-full p-0 overflow-y-auto bg-normalize cover" style="background-image: url('/sandbox/assets/akur-montage.png');"></div>
                <div class="flex row full px-6 overflow-y-auto gap-6 justify-between items-center" style="min-height: 80px;">
                    <div class="display-md flex row items-center gap-4">Akur Design System <span class="badge" id="team-dialog" style="cursor: pointer;">v1.1.2</span></div>
                    <a href="/dist/akur-1.1.2-release.zip" class="button large tooltip dark" data-tooltip="akur-1.1.2-release.zip" data-tooltip-position="top" data-icon="download">Unduh</a>
                </div>
            </div>
        </div>
        <div class="flex column full overflow-y-auto">
            <div class="spacer-3 vertical"></div>
            <img src="/assets/images/akur-hrz.svg" class="object-contain" style="width: 196px;">
            <div class="spacer-8 vertical border-color-subdued"></div>
            <div class="flex column gap-4 pr-6 full body">
                <span>
                    Akur Design System menyediakan komponen antarmuka modular yang memudahkan Anda mengembangkan laman web dengan tampilan konsisten. Klik "<b>Unduh</b>" untuk mendapatkan rilis bundel terbaru. Setelah file diunduh, ekstrak dan unggah seluruh isinya ke direktori root di hosting Anda.
                </span>
                <span>
                    Untuk mengaktifkan standar tampilan Akur Design System di setiap halaman, Anda perlu menambahkan kode <i>template</i> di setiap file yang harus disimpan sebagai file PHP (*.php). Hal ini diperlukan agar modul dari Akur Design System dapat dimuat dengan benar. Kode ini juga sudah tertanam di file <b>/pages/index.php</b> dalam bundel yang Anda unduh, yang akan menjadi halaman utama saat laman Anda diakses. Jika Anda memerlukan kode <i>template</i>-nya lagi untuk mendesain halaman lainnya, silakan merujuk kembali ke halaman ini untuk menyalin kodenya.
                </span>
                <span>
                    Selamat mengeksplor berbagai fitur yang ada di Sandbox Akur Design System dan sesuaikan komponen yang tersedia untuk digunakan pada halaman rancangan Anda!
                </span>
            </div>
        </div>
    </div>
    `
};