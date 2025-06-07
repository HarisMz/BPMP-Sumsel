<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Radio</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">

	<h1 class="headline-sm">Radio</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Digunakan untuk menentukan nilai pada sebuah grup pilihan.</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Radio Biasa</p>
	<div class="flex column width-35">
		<label class="radio">
			<input type="radio" id="html" name="pilihan-1" value="Pilihan 1">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-1" value="Pilihan 2">
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-1" value="Pilihan 3" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-1" value="Pilihan 4" disabled checked>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Radio dengan Tombol di Kanan</p>
	<div class="flex column width-35">
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-2" value="Pilihan 1">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-2" value="Pilihan 2">
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-2" value="Pilihan 3" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-2" value="Pilihan 4" disabled checked>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Radio dengan Helper</p>
	<div class="flex column width-35">
		<label class="radio">
			<input type="radio" id="html" name="pilihan-3" value="Pilihan 1">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-3" value="Pilihan 2">
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-3" value="Pilihan 3" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="radio">
			<input type="radio" id="html" name="pilihan-3" value="Pilihan 4" disabled checked>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Radio dengan Helper dan Tombol di Kanan</p>
	<div class="flex column width-35">
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-4" value="Pilihan 1">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-4" value="Pilihan 2">
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-4" value="Pilihan 3" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="radio right">
			<input type="radio" id="html" name="pilihan-4" value="Pilihan 4" disabled checked>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

</body>
</html>