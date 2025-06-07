<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Toast</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">Toast</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Pesan singkat yang muncul sementara di layar.</p>
	<div class="spacer-4 vertical"></div>
	<span class="helper pb-2">Toast ditampilkan pada tengah bawah layar.</span>
	<div class="spacer-4 vertical"></div>

	<div class="flex column">
		<p class="subheading pt-4 pb-2">Default</p>
		<div class="grid grid-3 grid-1-mobile items-center gap-3">
			<div class="button primary full call-toast"
				data-toast='{
					"style": "default",
					"content": "Ini adalah contoh Toast!",
					"icon": "",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Regular</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "default",
					"content": "Ini adalah contoh Toast!",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Icon</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "default",
					"content": "Ini adalah contoh toast dengan pesan yang cukup panjang, dirancang untuk memberikan informasi yang sangat rinci kepada pengguna. Pesan seperti ini sangat berguna ketika hal yang harus disampaikan lumayan panjang, namun jika terlalu panjang, akan dipotong hingga maksimal 3 baris.",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Long</div>
		</div>
	</div>

	<div class="flex column">
		<p class="subheading pt-4 pb-2">Success</p>
		<div class="grid grid-3 grid-1-mobile items-center gap-3">
			<div class="button primary full call-toast"
				data-toast='{
					"style": "success",
					"content": "Ini adalah contoh Toast!",
					"icon": "",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Regular</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "success",
					"content": "Ini adalah contoh Toast!",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Icon</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "success",
					"content": "Ini adalah contoh toast dengan pesan yang cukup panjang, dirancang untuk memberikan informasi yang sangat rinci kepada pengguna. Pesan seperti ini sangat berguna ketika hal yang harus disampaikan lumayan panjang, namun jika terlalu panjang, akan dipotong hingga maksimal 3 baris.",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Long</div>
		</div>
	</div>

	<div class="flex column">
		<p class="subheading pt-4 pb-2">Critical</p>
		<div class="grid grid-3 grid-1-mobile items-center gap-3">
			<div class="button primary full call-toast"
				data-toast='{
					"style": "critical",
					"content": "Ini adalah contoh Toast!",
					"icon": "",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Regular</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "critical",
					"content": "Ini adalah contoh Toast!",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Icon</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "critical",
					"content": "Ini adalah contoh toast dengan pesan yang cukup panjang, dirancang untuk memberikan informasi yang sangat rinci kepada pengguna. Pesan seperti ini sangat berguna ketika hal yang harus disampaikan lumayan panjang, namun jika terlalu panjang, akan dipotong hingga maksimal 3 baris.",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Long</div>
		</div>
	</div>

	<div class="flex column">
		<p class="subheading pt-4 pb-2">Informational</p>
		<div class="grid grid-3 grid-1-mobile items-center gap-3">
			<div class="button primary full call-toast"
				data-toast='{
					"style": "informational",
					"content": "Ini adalah contoh Toast!",
					"icon": "",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Regular</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "informational",
					"content": "Ini adalah contoh Toast!",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Icon</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "informational",
					"content": "Ini adalah contoh toast dengan pesan yang cukup panjang, dirancang untuk memberikan informasi yang sangat rinci kepada pengguna. Pesan seperti ini sangat berguna ketika hal yang harus disampaikan lumayan panjang, namun jika terlalu panjang, akan dipotong hingga maksimal 3 baris.",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Long</div>
		</div>
	</div>

	<div class="flex column">
		<p class="subheading pt-4 pb-2">Warning</p>
		<div class="grid grid-3 grid-1-mobile items-center gap-3">
			<div class="button primary full call-toast"
				data-toast='{
					"style": "warning",
					"content": "Ini adalah contoh Toast!",
					"icon": "",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Regular</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "warning",
					"content": "Ini adalah contoh Toast!",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Icon</div>
			<div class="button primary full call-toast"
				data-toast='{
					"style": "warning",
					"content": "Ini adalah contoh toast dengan pesan yang cukup panjang, dirancang untuk memberikan informasi yang sangat rinci kepada pengguna. Pesan seperti ini sangat berguna ketika hal yang harus disampaikan lumayan panjang, namun jika terlalu panjang, akan dipotong hingga maksimal 3 baris.",
					"icon": "terminal",
					"links": [
						{
							"label"		: "Lihat",
							"action"	: "",
							"target"	: "https://google.com",
							"newtab"	: true
						}
					],
					"truncated": false
				}'>Long</div>
		</div>
	</div>

</body>
</html>