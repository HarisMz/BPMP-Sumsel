<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Input</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">

	<h1 class="headline-sm">Input</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Digunakan untuk membuat input teks yang dapat dikustomisasi dengan berbagai properti.</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic</p>
	<div class="flex column">
		<label for="text1">Text Input&nbsp;<i class="small tooltip dark" data-icon="info" data-tooltip="Teks Basico Ha!" data-tooltip-position="top"></i></label>
		<div class="input"><input type="text" id="text1"/></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic Small</p>
	<div class="flex column">
		<label for="text1">Text Input</label>
		<div class="input small"><input type="text" id="text1"/></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Placeholder</p>
	<div class="flex column">
		<label for="text2">Text Input</label>
		<div class="input"><input type="text" id="text2" placeholder="Ketikkan Teks" /></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Helper</p>
	<div class="flex column">
		<label for="text3">Text Input</label>
		<div class="input"><input type="text" id="text3" placeholder="Ketikkan Teks" data-helper="Nama lengkap Anda."/></div>
		<div class="helper"><span>Nama lengkap Anda.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Placeholder and Helper</p>
	<div class="flex column">
		<label for="text4">Text Input</label>
		<div class="input"><input type="text" id="text4" placeholder="Ketikkan Teks"/></div>
		<div class="helper"><span>Nama lengkap Anda.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">With Icon</p>
	<div class="flex column">
		<label for="text5">Text Input</label>
		<div class="input small" data-icon="download"><input type="text" id="text5" placeholder="Dengan Icon"/></div>
		<div class="helper"><span>Ada iconnya.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">With Icon on Left</p>
	<div class="flex column">
		<label for="text6">Text Input</label>
		<div class="input left" data-icon="search"><input type="text" id="text6" placeholder="Icon di Kiri"/></div>
		<div class="helper"><span>Iconnya di Kiri.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">With Icon on Right</p>
	<div class="flex column">
		<label for="text7">Text Input</label>
		<div class="input right" data-icon="search"><input type="text" id="text7" placeholder="Icon di Kanan"/></div>
		<div class="helper"><span>Iconnya di Kanan.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Search Box with Placeholder and Helper</p>
	<div class="flex column">
		<label for="search">Text Input</label>
		<div class="input icon" data-icon="search"><input type="search" id="search" placeholder="Cari Sesuatu"/></div>
		<div class="helper"><span>Pencarian Anda.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

</body>
</html>