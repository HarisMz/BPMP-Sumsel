<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Link</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8">
	
	<h1 class="headline-sm">Link</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm"><i>Styling</i> untuk tag &lt;a&gt; atau elemen lainnya yang digunakan untuk menambahkan tautan.</p>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Link Primary</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<a href="#1" class="link">Link</a>
		<a href="#2" class="link disabled">Link</a>
		<a href="#3" class="link noline">Link</a>
		<a href="#4" class="link disabled noline">Link</a>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Link Secondary</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<a href="#1" class="link secondary">Link</a>
		<a href="#2" class="link disabled">Link</a>
		<a href="#3" class="link secondary noline">Link</a>
		<a href="#4" class="link disabled noline">Link</a>
	</div>
	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Link Inverse</p>
	<div class="spacer-4 vertical"></div>
	<div class="flex row gap-8">
		<a href="#1" class="link inverse">Link</a>
		<a href="#2" class="link disabled">Link</a>
		<a href="#3" class="link inverse noline">Link</a>
		<a href="#4" class="link disabled noline">Link</a>
	</div>
</body>
</html>