$(document).ready(function() {
    // Ketika checkbox diubah
    $('.checkbox input[type="checkbox"]').on('change', function() {
        var $checkbox = $(this);
        var isChecked = $checkbox.is(':checked');
        var isIndeterminate = $checkbox.prop('indeterminate');
        updateCheckboxClass($checkbox, isChecked, isIndeterminate);
        updateChildCheckboxes($checkbox);
        updateParentCheckboxes($checkbox);
    });

    // Fungsi untuk memperbarui status checkbox anak-anak
    function updateChildCheckboxes($checkbox) {
        var isChecked = $checkbox.prop('checked');
        // Cari semua checkbox anak di dalam <ul> berikutnya
        var $childCheckboxes = $checkbox.closest('li').find('ul input[type="checkbox"]');
        $childCheckboxes.prop('checked', isChecked);
        $childCheckboxes.prop('indeterminate', false);
    }

    // Fungsi untuk memperbarui class checkbox
    function updateCheckboxClass($checkbox, isChecked, isIndeterminate) {
        $checkbox.removeClass('checked indeterminate');

        if (isChecked) {
            $checkbox.addClass('checked');
            $checkbox.prop('checked', true);
            $checkbox.prop('indeterminate', false);
        } else if (isIndeterminate) {
            $checkbox.addClass('indeterminate');
            $checkbox.prop('checked', false); // Indeterminate tidak boleh checked
            $checkbox.prop('indeterminate', true);
        } else {
            $checkbox.prop('checked', false);
            $checkbox.prop('indeterminate', false);
        }
    }

    // Fungsi untuk memperbarui status checkbox induk
    function updateParentCheckboxes($checkbox) {
        var $parentLi = $checkbox.closest('ul').closest('li'); // Cari induk terdekat
        while ($parentLi.length > 0) {
            var $parentCheckbox = $parentLi.find('> .checkbox > input[type="checkbox"]');
            var $childCheckboxes = $parentLi.find('> ul input[type="checkbox"]');

            var total = $childCheckboxes.length;
            var checked = $childCheckboxes.filter(':checked').length;
            var indeterminate = $childCheckboxes.filter(function() {
                return $(this).prop('indeterminate');
            }).length;

            $parentCheckbox.removeClass('checked indeterminate');
            // Set status checkbox induk berdasarkan kondisi anak-anaknya
            if (checked === total) {
                $parentCheckbox.addClass('checked');
                $parentCheckbox.prop('checked', true);
                $parentCheckbox.prop('indeterminate', false);
            } else if (checked === 0 && indeterminate === 0) {
                $parentCheckbox.prop('checked', false);
                $parentCheckbox.prop('indeterminate', false);
            } else {
                $parentCheckbox.addClass('indeterminate');
                $parentCheckbox.prop('checked', false);
                $parentCheckbox.prop('indeterminate', true);
            }

            // Cek induk yang lebih atas lagi
            $parentLi = $parentCheckbox.closest('ul').closest('li');
        }
    }

    // Inisialisasi status awal, cek status semua checkbox
    $('.checkbox input[type="checkbox"]').each(function() {
        var $checkbox = $(this);
        updateParentCheckboxes($checkbox); // Mulai dari setiap checkbox
    });
});
