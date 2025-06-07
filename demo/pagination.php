<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Peraga Komponen: Pagination</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
    <section class="container vertical">
        <div class="wrapper py-10">
            <div class="flex column">
                <h1 class="headline-sm">Pagination</h1>
                <div class="spacer-4 vertical"></div>
                <p class="display-sm">Navigasi untuk membagi konten menjadi beberapa halaman.</p>

                <div class="spacer-8 vertical"></div>

                <div class="pagination">
                    <button class="prev-page" disabled>
                        <span>chevron_left</span>
                    </button>
                    <span class="page-buttons"><button class="page-num active">1</button><button class="page-num">2</button><button class="page-num">3</button><span class="ellipsis">...</span><button class="page-num">8</button></span>
                    <button class="next-page">
                        <span>chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>