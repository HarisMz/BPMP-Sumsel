<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: FAB</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">FAB</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Floating Action Button, tombol melayang untuk tindakan utama.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">FAB</p>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-4 grid-2-mobile gap-6">
		<div class="flex column gap-4">
			<p class="helper pb-2">FAB Default</p>
			<div class="fab tooltip" data-nameid="my-location" data-tooltip="My Location" data-tooltip-position="bottom-start" id="">my_location</div>
		</div>
		<div class="flex column gap-4">
			<p class="helper pb-2">FAB Accent</p>
			<div class="fab accent tooltip" data-nameid="scroll-to-top" data-tooltip="Scroll to Top" data-tooltip-position="bottom-start" id="">keyboard_arrow_up</div>
		</div>
		<div class="flex column gap-4">
			<p class="helper pb-2">FAB Disabled</p>
			<div class="fab disabled tooltip" data-nameid="add-element" data-tooltip="Add Element" data-tooltip-position="bottom-start" id="">add</div>
		</div>
		<div class="flex column gap-4">
			<p class="helper pb-2">FAB Accent Disabled</p>
			<div class="fab accent disabled tooltip" data-nameid="emoji" data-tooltip="Emoji" data-tooltip-position="bottom-start" id="">mood</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>
	<div class="flex column gap-4">
		<a href="#" id="tambah-fab-kecil" class="button ultimate">Tambah FAB Kecil</a>
		<a href="#" id="tambah-fab-besar" class="button ultimate">Tambah FAB Besar</a>
		<a href="#" id="hapus-fab-kecil" class="button destructive">Hapus FAB Kecil</a>
		<a href="#" id="hapus-fab-besar" class="button destructive">Hapus FAB Besar</a>
	</div>

	<div class="fab-buffer">
		<div class="fab small tooltip" data-nameid="my-location" data-tooltip="My Location" data-tooltip-position="left" id="">my_location</div>
		<div class="fab accent tooltip" data-nameid="scroll-to-top" data-tooltip="Scroll to Top" data-tooltip-position="left" id="site-stt">keyboard_arrow_up</div>
		<div class="fab disabled tooltip" data-nameid="add-element" data-tooltip="Add Element" data-tooltip-position="left" id="">add</div>
		<div class="fab accent disabled tooltip" data-nameid="emoji" data-tooltip="Emoji" data-tooltip-position="left" id="">mood</div>
	</div>
	
</body>
</html>