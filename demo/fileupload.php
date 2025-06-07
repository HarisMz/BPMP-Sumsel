<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: File Upload</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 white">
	<h1 class="headline-sm">File Upload</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Komponen File Upload.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Default File Upload</p>
	<div class="spacer-4 vertical"></div>

    <div class="file-upload" max-size="1024">
        <span class="label">Unggah bukti Aksi Nyata Anda</span>
        <span class="helper">Ukuran maksimal 1 MB</span>
        <div class="file-input-container" id="file-input-container">
            <input type="file" id="file-input">
            <span class="file-label">Pilih File</span>
        </div>
        <ul id="file-list"></ul>
        <a href="#" class="button rounded quiet medium full" id="addmore-button">Tambah File</a>
        <a href="#" class="button rounded ultimate medium full" id="submit-button">Submit</a>
    </div>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Multiple File Upload</p>
	<div class="spacer-4 vertical"></div>

    <div class="file-upload multiple">
        <span class="label">Unggah bukti Aksi Nyata Anda</span>
        <div class="file-input-container" id="file-input-container">
            <input type="file" id="file-input">
            <span class="file-label">Pilih File</span>
        </div>
        <ul id="file-list"></ul>
        <a href="#" class="button rounded quiet medium full" id="addmore-button">Tambah File</a>
        <a href="#" class="button rounded ultimate medium full" id="submit-button">Submit</a>
    </div>

</body>
</html>