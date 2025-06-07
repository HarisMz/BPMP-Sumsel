<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Text Area</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	
	<h1 class="headline-sm">Text Area</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Digunakan untuk membuat input teks yang memungkinkan pengguna untuk memasukkan teks dalam jumlah besar.</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic</p>
	<div class="flex column">
		<label for="text1">Text Area Input</label>
		<div class="textarea"><textarea id="text1"rows="5" maxlength="10"></textarea></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic Small</p>
	<div class="flex column">
		<label for="text1">Text Area Input</label>
		<div class="textarea small"><textarea id="text1"rows="5" maxlength="10"></textarea></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Placeholder</p>
	<div class="flex column">
		<label for="text2">Text Area Input</label>
		<div class="textarea"><textarea id="text2" placeholder="Ketikkan Teks" rows="5" maxlength="10"></textarea></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Helper</p>
	<div class="flex column">
		<label for="text3">Text Area Input</label>
		<div class="textarea"><textarea id="text3" data-helper="Nama lengkap Anda."rows="5" maxlength="10"></textarea></div>
		<div class="helper"><span>Nama lengkap Anda.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Basic with Placeholder and Helper</p>
	<div class="flex column">
		<label for="text4">Text Area Input</label>
		<div class="textarea"><textarea id="text4" placeholder="Ketikkan Teks" rows="5" maxlength="10"></textarea></div>
		<div class="helper"><span>Nama lengkap Anda.</span></div>
	</div>
	<div class="spacer-8 vertical"></div>

</body>
</html>