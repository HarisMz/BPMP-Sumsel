function initializeTables() {
    const columnWidths = tableCalculateColumnWidths();

    function tableCalculateColumnWidths() {
        const columnWidths = [];
        $(`table thead th`).each(function() {
            const colWidth = $(this).data('col-width') || 'auto';
            columnWidths.push(colWidth);
        });
        return columnWidths;
    }

    function tableApplyColumnWidths() {
        $(`table thead th`).each((index, th) => {
            $(th).css('width', columnWidths[index] === 'auto' ? 'auto' : `${columnWidths[index]}%`);
        });
    }

    $('table').each(function() {
        if(!$(this).hasClass('datatable')) {
            $(this).wrap('<div class="table-wrapper"></div>');
        }
    });

    tableApplyColumnWidths();
}

$(document).ready(function() {
    initializeTables();
});