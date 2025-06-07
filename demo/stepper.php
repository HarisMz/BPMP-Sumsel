<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Stepper</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">Stepper</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Elemen kontrol dengan tombol plus/minus atau angka untuk menambah/mengurangi nilai.</p>

	<div class="spacer-8 vertical"></div>

	<div class="grid grid-5 grid-1-mobile gap-8">
		<div class="flex column">
			<p class="subheading mb-4">Stepper Boleh Negatif</p>
			<label for="stepper">Stepper - Boleh Negatif</label>
			<input type="number" class="stepper" id="stepper" value="0">
			<div class="spacer-8"></div>
			<label for="stepper-small">Stepper Kecil - Boleh Negatif</label>
			<input type="number" class="stepper small" id="stepper-small" value="0">
			<div class="spacer-8"></div>
			<label for="stepper-minimal">Stepper Minimal - Boleh Negatif</label>
			<input type="number" class="stepper minimal" id="stepper-minimal" value="0">
		</div>
		<div class="flex column">
			<p class="subheading mb-4">Stepper Harus Positif</p>
			<label for="pos-stepper">Stepper - Harus Positif</label>
			<input type="number" class="stepper" id="pos-stepper" value="0" min="0">
			<div class="spacer-8"></div>
			<label for="pos-stepper-small">Stepper Kecil - Harus Positif</label>
			<input type="number" class="stepper small" id="pos-stepper-small" value="0" min="0">
			<div class="spacer-8"></div>
			<label for="pos-stepper-minimal">Stepper Minimal - Harus Positif</label>
			<input type="number" class="stepper minimal" id="pos-stepper-minimal" value="0" min="0">
		</div>
		<div class="flex column">
			<p class="subheading mb-4">Stepper dengan Nilai Maksimum 50</p>
			<label for="max-stepper">Stepper - Nilai Maksimum 50</label>
			<input type="number" class="stepper" id="max-stepper" value="0" min="0" max="50">
			<div class="spacer-8"></div>
			<label for="max-stepper-small">Stepper Kecil - Nilai Maksimum 50</label>
			<input type="number" class="stepper small" id="max-stepper-small" value="0" min="0" max="50">
			<div class="spacer-8"></div>
			<label for="max-stepper-minimal">Stepper Minimal - Nilai Maksimum 50</label>
			<input type="number" class="stepper minimal" id="max-stepper-minimal" value="0" min="0" max="50">
		</div>
		<div class="flex column">
			<p class="subheading mb-4">Stepper dengan Nilai Minimum 10</p>
			<label for="min-stepper">Stepper - Nilai Minimum 10</label>
			<input type="number" class="stepper" id="min-stepper" min="10">
			<div class="spacer-8"></div>
			<label for="min-stepper-small">Stepper Kecil - Nilai Minimum 10</label>
			<input type="number" class="stepper small" id="min-stepper-small" min="10">
			<div class="spacer-8"></div>
			<label for="min-stepper-minimal">Stepper Minimal - Nilai Minimum 10</label>
			<input type="number" class="stepper minimal" id="min-stepper-minimal" min="10">
		</div>
		<div class="flex column">
			<p class="subheading mb-4">Stepper dengan State Disabled</p>
			<label for="dis-stepper">Stepper - Disabled</label>
			<input type="number" class="stepper" id="dis-stepper" value="25" disabled>
			<div class="spacer-8"></div>
			<label for="dis-stepper-small">Stepper Kecil - Disabled</label>
			<input type="number" class="stepper small" id="dis-stepper-small" value="25" disabled>
			<div class="spacer-8"></div>
			<label for="dis-stepper-minimal">Stepper Minimal - Disabled</label>
			<input type="number" class="stepper minimal" id="dis-stepper-minimal" value="25" disabled>
		</div>
	</div>

</body>
</html>