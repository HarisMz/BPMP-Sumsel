<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Switch</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">

	<h1 class="headline-sm">Switch</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Checkbox dengan tampilan yang lebih keren, untuk pilihan yang bernilai "Ya" atau "Tidak".</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Switch Biasa</p>
	<div class="flex column width-35">
		<label class="switch">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="switch">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="switch">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="switch">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Switch dengan Sakelar di Kanan</p>
	<div class="flex column width-35">
		<label class="switch right">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1</span>
		</label>
		<label class="switch right">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2</span>
		</label>
		<label class="switch right">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3</span>
		</label>
		<label class="switch right">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Switch dengan Helper</p>
	<div class="flex column width-35">
		<label class="switch">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="switch">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="switch">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="switch">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Switch dengan Helper dan Sakelar di Kanan</p>
	<div class="flex column width-35">
		<label class="switch right">
			<input type="checkbox">
			<span class="mark"></span>
			<span class="label">Pilihan 1
				<span class="helper">Ini adalah pilihan 1</span>
			</span>
		</label>
		<label class="switch right">
			<input type="checkbox" checked>
			<span class="mark"></span>
			<span class="label">Pilihan 2
				<span class="helper">Ini adalah pilihan 2</span>
			</span>
		</label>
		<label class="switch right">
			<input type="checkbox" disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 3
				<span class="helper">Ini adalah pilihan 3</span>
			</span>
		</label>
		<label class="switch right">
			<input type="checkbox" checked disabled>
			<span class="mark"></span>
			<span class="label">Pilihan 4
				<span class="helper">Ini adalah pilihan 4</span>
			</span>
		</label>
	</div>

</body>
</html>