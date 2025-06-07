<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Chip</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	
	<h1 class="headline-sm">Chip</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Chip dengan berbagai macam variasi.</p>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Chip:Default</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<a href="#" class="chip icon" data-icon="library_books">Dengan Icon Kiri</a>
		<a href="#" class="chip">Tanpa Icon</a>
		<a href="#" class="chip disabled">Nonaktif</a>
		<a href="#" class="chip icon disabled" data-icon="library_books">Nonaktif Dengan Icon</a>
		<a href="#" class="chip icon row-reverse" data-icon="library_books">Dengan Icon Kanan</a>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Chip:Active</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<a href="#" class="chip active icon" data-icon="library_books">Dengan Icon Kiri</a>
		<a href="#" class="chip active">Tanpa Icon</a>
		<a href="#" class="chip active disabled">Nonaktif</a>
		<a href="#" class="chip active icon disabled" data-icon="library_books">Nonaktif Dengan Icon</a>
		<a href="#" class="chip active icon row-reverse" data-icon="library_books">Dengan Icon Kanan</a>
	</div>
</body>
</html>