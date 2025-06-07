<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Separator</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	
	<h1 class="headline-sm">Separator</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Digunakan untuk memisahkan konten dalam antarmuka pengguna.</p>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Vertikal Tanpa Separator</p>
	<div class="flex column">
		<div class="body">Konten satu.</div>
		<div class="body">Konten dua.</div>
		<div class="body">Konten tiga.</div>
	</div>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Vertikal dengan Separator</p>
	<div class="flex column">
		<div class="body">Konten satu.</div>
		<div class="separator-4"></div>
		<div class="body">Konten dua.</div>
		<div class="separator-4"></div>
		<div class="body">Konten tiga.</div>
	</div>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Vertikal dengan Spacer</p>
	<div class="flex column">
		<div class="body">Konten satu.</div>
		<div class="spacer-4"></div>
		<div class="body">Konten dua.</div>
		<div class="spacer-4"></div>
		<div class="body">Konten tiga.</div>
	</div>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Horizontal Tanpa Separator</p>
	<div class="flex row">
		<div class="body">Konten satu.</div>
		<div class="body">Konten dua.</div>
		<div class="body">Konten tiga.</div>
	</div>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Horizontal dengan Separator</p>
	<div class="flex row">
		<div class="body">Konten satu.</div>
		<div class="separator-4"></div>
		<div class="body">Konten dua.</div>
		<div class="separator-4"></div>
		<div class="body">Konten tiga.</div>
	</div>
	
	<div class="spacer-8 vertical"></div>

	<p class="subheading mb-4">Konten Horizontal dengan Spacer</p>
	<div class="flex row">
		<div class="body">Konten satu.</div>
		<div class="spacer-4"></div>
		<div class="body">Konten dua.</div>
		<div class="spacer-4"></div>
		<div class="body">Konten tiga.</div>
	</div>
</body>
</html>