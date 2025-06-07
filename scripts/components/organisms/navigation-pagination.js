function updatePage($paginationEl, options = {}) {
    const settings = $.extend({
        currentPage: 1,
        totalItems: 0,
        itemsPerPage: 10,
        maxVisiblePages: 3,
        onPageClick: null
    }, options);

    const totalPages = Math.ceil(settings.totalItems / settings.itemsPerPage);
    
    if (totalPages <= 1 || settings.totalItems === 0) {
        $paginationEl.hide();
        return;
    }

    $paginationEl.show();
    const $pageButtons = $paginationEl.find('.page-buttons');
    $pageButtons.empty();

    let startPage = Math.max(1, settings.currentPage - Math.floor(settings.maxVisiblePages / 2));
    let endPage = Math.min(totalPages, startPage + settings.maxVisiblePages - 1);
    
    if (endPage - startPage + 1 < settings.maxVisiblePages) {
        startPage = Math.max(1, endPage - settings.maxVisiblePages + 1);
    }

    if (startPage > 1) {
        $pageButtons.append(`<button class="page-num" data-page="1">1</button>`);
        if (startPage > 2) {
            $pageButtons.append(`<span class="ellipsis">...</span>`);
        }
    }

    for (let i = startPage; i <= endPage; i++) {
        $pageButtons.append(
            `<button class="page-num${i === settings.currentPage ? ' active' : ''}" 
             data-page="${i}">${i}</button>`
        );
    }

    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            $pageButtons.append(`<span class="ellipsis">...</span>`);
        }
        $pageButtons.append(`<button class="page-num" data-page="${totalPages}">${totalPages}</button>`);
    }

    const $prevBtn = $paginationEl.find('.prev-page');
    const $nextBtn = $paginationEl.find('.next-page');
    
    $prevBtn.prop('disabled', settings.currentPage <= 1);
    $nextBtn.prop('disabled', settings.currentPage >= totalPages);

    // Hapus handler yang ada
    $paginationEl.find('.page-num, .prev-page, .next-page').off('click');

    // Tambahkan handler baru
    if (settings.onPageClick) {
        // Handler untuk tombol nomor halaman
        $paginationEl.find('.page-num').on('click', function() {
            const newPage = parseInt($(this).data('page'));
            if (newPage !== settings.currentPage) {
                settings.onPageClick(newPage);
            }
        });

        // Handler untuk tombol prev
        $prevBtn.on('click', function() {
            const newPage = settings.currentPage - 1;
            if (!$(this).prop('disabled') && newPage >= 1) {
                settings.onPageClick(newPage);
            }
        });

        // Handler untuk tombol next
        $nextBtn.on('click', function() {
            const newPage = settings.currentPage + 1;
            if (!$(this).prop('disabled') && newPage <= totalPages) {
                settings.onPageClick(newPage);
            }
        });
    }
}