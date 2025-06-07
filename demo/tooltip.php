<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Tooltip</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">Tooltip</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Komponen Tooltip.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Interaksi Hover</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-4 items-center gap-3">
		<div class="button primary full tooltip" data-tooltip="Teks isi tooltip dengan posisi di atas." data-tooltip-position="top">Tooltip di Atas</div>
		<div class="button primary full tooltip" data-tooltip="Teks isi tooltip dengan posisi di kanan." data-tooltip-position="right">Tooltip di Kanan</div>
		<div class="button primary full tooltip" data-tooltip="Teks isi tooltip dengan posisi di bawah." data-tooltip-position="bottom">Tooltip di Bawah</div>
		<div class="button primary full tooltip" data-tooltip="Teks isi tooltip dengan posisi di kiri." data-tooltip-position="left">Tooltip di Kiri</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Interaksi Click</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-4 items-center gap-3">
		<div class="button primary full tooltip click" data-tooltip="Teks isi tooltip dengan posisi di atas." data-tooltip-position="top">Tooltip di Atas</div>
		<div class="button primary full tooltip click" data-tooltip="Teks isi tooltip dengan posisi di kanan." data-tooltip-position="right">Tooltip di Kanan</div>
		<div class="button primary full tooltip click" data-tooltip="Teks isi tooltip dengan posisi di bawah." data-tooltip-position="bottom">Tooltip di Bawah</div>
		<div class="button primary full tooltip click" data-tooltip="Teks isi tooltip dengan posisi di kiri." data-tooltip-position="left">Tooltip di Kiri</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Interaksi Click dan Tombol Close</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-4 items-center gap-3">
		<div class="button primary full tooltip click has-close" data-tooltip="Teks isi tooltip dengan posisi di atas." data-tooltip-position="top">Tooltip di Atas</div>
		<div class="button primary full tooltip click has-close" data-tooltip="Teks isi tooltip dengan posisi di kanan." data-tooltip-position="right">Tooltip di Kanan</div>
		<div class="button primary full tooltip click has-close" data-tooltip="Teks isi tooltip dengan posisi di bawah." data-tooltip-position="bottom">Tooltip di Bawah</div>
		<div class="button primary full tooltip click has-close" data-tooltip="Teks isi tooltip dengan posisi di kiri." data-tooltip-position="left">Tooltip di Kiri</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Aneka Warna (Light)</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-5 items-center gap-3">
		<div class="button primary full tooltip" data-tooltip="Teks isi tooltip dengan warna default." data-tooltip-position="top">Tooltip Default</div>
		<div class="button primary full tooltip success" data-tooltip="Teks isi tooltip dengan warna success." data-tooltip-position="top">Tooltip Success</div>
		<div class="button primary full tooltip critical" data-tooltip="Teks isi tooltip dengan warna critical." data-tooltip-position="top">Tooltip Critical</div>
		<div class="button primary full tooltip informational" data-tooltip="Teks isi tooltip dengan warna informational." data-tooltip-position="top">Tooltip Informational</div>
		<div class="button primary full tooltip warning" data-tooltip="Teks isi tooltip dengan warna warning." data-tooltip-position="top">Tooltip Warning</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Aneka Warna (Dark)</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-5 items-center gap-3">
		<div class="button primary full tooltip dark" data-tooltip="Teks isi tooltip dengan warna default." data-tooltip-position="top">Tooltip Default</div>
		<div class="button primary full tooltip dark success" data-tooltip="Teks isi tooltip dengan warna success." data-tooltip-position="top">Tooltip Success</div>
		<div class="button primary full tooltip dark critical" data-tooltip="Teks isi tooltip dengan warna critical." data-tooltip-position="top">Tooltip Critical</div>
		<div class="button primary full tooltip dark informational" data-tooltip="Teks isi tooltip dengan warna informational." data-tooltip-position="top">Tooltip Informational</div>
		<div class="button primary full tooltip dark warning" data-tooltip="Teks isi tooltip dengan warna warning." data-tooltip-position="top">Tooltip Warning</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip tanpa Penunjuk</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-4 items-center gap-3">
		<div class="button primary full tooltip no-arrow" data-tooltip="Teks isi tooltip tanpa penunjuk dengan posisi di atas." data-tooltip-position="top">Tooltip di Atas</div>
		<div class="button primary full tooltip no-arrow" data-tooltip="Teks isi tooltip tanpa penunjuk dengan posisi di kanan." data-tooltip-position="right">Tooltip di Kanan</div>
		<div class="button primary full tooltip no-arrow" data-tooltip="Teks isi tooltip tanpa penunjuk dengan posisi di bawah." data-tooltip-position="bottom">Tooltip di Bawah</div>
		<div class="button primary full tooltip no-arrow" data-tooltip="Teks isi tooltip tanpa penunjuk dengan posisi di kiri." data-tooltip-position="left">Tooltip di Kiri</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Tooltip dengan Posisi</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-5 grid-5-mobile items-center gap-3">

		<div></div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="bottom-end">Bottom End</div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="bottom">Bottom</div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="bottom-start">Bottom Start</div>
		<div></div>

		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="right-end">Right End</div>
		<div></div>
		<div></div>
		<div></div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="left-end">Left End</div>

		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="right">Right</div>
		<div></div>
		<div></div>
		<div></div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="left">Left</div>

		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="right-start">Right Start</div>
		<div></div>
		<div></div>
		<div></div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="left-start">Left Start</div>

		<div></div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="top-end">Top End</div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="top">Top</div>
		<div class="button primary full tooltip click has-close" style="height: 120px;" data-tooltip="Teks isi tooltip." data-tooltip-position="top-start">Top Start</div>
		<div></div>

	</div>

</body>
</html>