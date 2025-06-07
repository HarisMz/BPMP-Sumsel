function initializeDatatables() {
    $('table.datatable').each(function() {
        let tableName = ` ${$(this).data('table-name')}` || '';
        let searchboxHTML = $(this).hasClass('searchbox') ?
            `<div class="input datatable-search small" data-icon="search">
                <input type="text" placeholder="Cari${tableName}">
            </div>` : '';
        let footerHTML = $(this).hasClass('has-footer') ?
            `<div class="datatable-footer">
                <div class="info">
                    <span class="results"></span>
                    <div class="lengthmenu">
                        <div class="select small">
                            <select>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <span>per halaman</span>
                </div>
                <div class="pagination">
                    <button class="prev-page">chevron_left</button>
                    <span class="page-buttons"></span>
                    <button class="next-page">chevron_right</button>
                </div>
            </div>` : '';
        $(this).wrap('<div class="datatable-wrapper"></div>');
        let $wrapper = $(this).parent();
        $wrapper.prepend(searchboxHTML);
        $wrapper.append(footerHTML);
        
        initializeTable(this);
    });

    function initializeTable(table) {
        let $table = $(table);
        let $wrapper = $table.closest('.datatable-wrapper');
        let tableData;
        let currentPage = 1;
        let rowsPerPage = 5;
        let filteredData = [];
        let originalData = [];
        let sortColumn = null;
        let sortOrder = 'asc';
        let sortCount = 0;

        // Inisialisasi data
        const tbodyData = $table.find('tbody tr').map(function() {
            const row = {};
            $(this).find('td').each(function(index) {
                const header = $table.find('thead th').eq(index).data('column');
                row[header] = $(this).text();
            });
            return row;
        }).get();

        tableData = tbodyData.length > 0 ? tbodyData : [];
        originalData = [...tableData];
        filteredData = [...tableData];

        function renderDatatable() {
            const maxPage = Math.ceil(filteredData.length / rowsPerPage);
            currentPage = Math.max(1, Math.min(currentPage, maxPage));

            const startIndex = (currentPage - 1) * rowsPerPage;
            const paginatedData = $table.hasClass('has-footer') ? 
                filteredData.slice(startIndex, startIndex + rowsPerPage) : 
                filteredData;

            $table.find('tbody').empty();
            
            if (paginatedData.length > 0) {
                paginatedData.forEach(item => {
                    let rowHTML = '<tr>';
                    Object.keys(item).forEach((key) => {
                        rowHTML += `<td>${item[key]}</td>`;
                    });
                    rowHTML += '</tr>';
                    $table.find('tbody').append(rowHTML);
                });
            } else {
                $table.find('tbody').append('<tr><td colspan="100%" class="text-center">Tidak ada data</td></tr>');
            }

            if ($table.hasClass('has-footer')) {
                updateDataInfo();
                updateDataTablePagination();
            }
            
            applyColumnWidths();
        }

        const columnWidths = calculateColumnWidths();

        function calculateColumnWidths() {
            const columnWidths = [];
            $table.find('thead th').each(function() {
                const colWidth = $(this).data('col-width') || 'auto';
                columnWidths.push(colWidth);
            });
            return columnWidths;
        }

        function applyColumnWidths() {
            $table.find('thead th').each((index, th) => {
                $(th).css('width', columnWidths[index] === 'auto' ? 'auto' : `${columnWidths[index]}%`);
            });
        }

        function updateDataInfo() {
            const totalPages = Math.ceil(filteredData.length / rowsPerPage);
            const startRecord = (currentPage - 1) * rowsPerPage + 1;
            const endRecord = Math.min(currentPage * rowsPerPage, filteredData.length);
            $wrapper.find('.datatable-footer .results').text(`Menampilkan ${startRecord} - ${endRecord} dari ${filteredData.length} data`);
        }

        function updateDataTablePagination() {
            updatePage($wrapper.find('.pagination'), {
                currentPage: currentPage,
                totalItems: filteredData.length,
                itemsPerPage: rowsPerPage,
                onPageClick: function(newPage) {
                    if (newPage !== currentPage) {
                        currentPage = newPage;
                        renderDatatable();
                    }
                }
            });
        }

        function sortData() {
            if (sortCount === 2) {
                filteredData = [...originalData];
                sortColumn = null;
                sortOrder = null;
                sortCount = 0;
            } else {
                filteredData.sort((a, b) => {
                    const valA = a[sortColumn];
                    const valB = b[sortColumn];

                    const isNumeric = !isNaN(valA) && !isNaN(valB);

                    if (isNumeric) {
                        return sortOrder === 'asc' ? valA - valB : valB - valA;
                    } else {
                        if (valA < valB) return sortOrder === 'asc' ? -1 : 1;
                        if (valA > valB) return sortOrder === 'asc' ? 1 : -1;
                        return 0;
                    }
                });
            }
            currentPage = 1;
            renderDatatable();
            updateSortIcon();
        }

        function updateSortIcon() {
            $table.find('th').removeClass('asc desc').addClass('unfold');
            if (sortColumn) {
                const th = $table.find(`th[data-column="${sortColumn}"]`);
                th.removeClass('unfold').addClass(sortOrder);
            }
        }

        $table.find('th').click(function() {
            const column = $(this).data('column');
            if (sortColumn === column) {
                sortCount++;
                if (sortCount === 1) {
                    sortOrder = 'desc';
                } else if (sortCount === 2) {
                } else {
                    sortCount = 0;
                    sortOrder = 'asc';
                }
            } else {
                sortColumn = column;
                sortOrder = 'asc';
                sortCount = 0;
            }
            sortData();
        });

        $wrapper.find('.datatable-search input').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            filteredData = tableData.filter(item => 
                Object.values(item).some(value => 
                    value.toString().toLowerCase().includes(searchTerm)
                )
            );
            currentPage = 1;
            renderDatatable();
        });

        $wrapper.find('.datatable-footer .lengthmenu select').change(function() {
            rowsPerPage = parseInt($(this).val());
            currentPage = 1;
            renderDatatable();
        });

        renderDatatable();
    }

    $('table').wrap('<div class="table-safewrap"></div>');
}

// Document ready only calls the global function
$(document).ready(function() {
    initializeDatatables();
});