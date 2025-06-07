<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Banner</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	<h1 class="headline-sm">Banner</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Elemen notifikasi atau informasi penting di bagian atas layar.</p>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Berbagai Gaya</p>
	<span class="helper pb-2">Banner ditampilkan pada kanan atas layar.</span>
	<div class="spacer-4 vertical"></div>

	<div class="grid grid-5 grid-1-mobile items-center gap-3">
		<div class="button primary full call-banner"
			data-banner='{
				"style": "default",
				"title": "Banner Default",
				"icon": "",
				"content": "Banner ini ditampilkan dengan warna default.",
				"buttons": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"links": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"hasclose": true
			}'>Banner Default</div>
		<div class="button primary full call-banner"
			data-banner='{
				"style": "success",
				"title": "Banner Success",
				"icon": "",
				"content": "Banner ini ditampilkan dengan warna success.",
				"buttons": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"links": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"hasclose": true
			}'>Banner Success</div>
		<div class="button primary full call-banner"
			data-banner='{
				"style": "critical",
				"title": "Banner Critical",
				"icon": "",
				"content": "Banner ini ditampilkan dengan warna critical.",
				"buttons": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"links": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"hasclose": true
			}'>Banner Critical</div>
		<div class="button primary full call-banner"
			data-banner='{
				"style": "informational",
				"title": "Banner Informational",
				"icon": "",
				"content": "Banner ini ditampilkan dengan warna informational.",
				"buttons": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"links": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"hasclose": true
			}'>Banner Informational</div>
		<div class="button primary full call-banner"
			data-banner='{
				"style": "warning",
				"title": "Banner Warning",
				"icon": "",
				"content": "Banner ini ditampilkan dengan warna warning.",
				"buttons": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"links": [
					{
						"label"		: "Buka Google",
						"action"	: "",
						"target"	: "https://google.com",
						"newtab"	: true
					},
					{
						"label"		: "Tutup",
						"action"	: "close",
						"target"	: "#",
						"newtab"	: false
					}
				],
				"hasclose": true
			}'>Banner Warning</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner tanpa Tombol Close</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small" id="pemberitahuan">Aksi</a>
				<a href="#" class="link secondary noline" id="banner-war">Link</a>
			</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Custom Icon</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active custom-icon">
		<div class="banner-head">
			<div class="title" data-icon="new_releases">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small">Aksi</a>
				<a href="#" class="link secondary noline">Link</a>
			</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner tanpa Action</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Warna Success</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active success">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small">Aksi</a>
				<a href="#" class="link secondary noline">Link</a>
			</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Warna Critical</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active critical">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small">Aksi</a>
				<a href="#" class="link secondary noline">Link</a>
			</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Warna Informational</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active informational">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small">Aksi</a>
				<a href="#" class="link secondary noline">Link</a>
			</div>
		</div>
	</div>

	<div class="spacer-8 vertical"></div>

	<p class="subheading pb-2">Banner dengan Warna Warning</p>
	<div class="spacer-4 vertical"></div>
	<div class="banner full active warning">
		<div class="banner-head">
			<div class="title">Judul Banner</div>
			<div class="close" title="Close banner"></div>
		</div>
		<div class="banner-body">
			<div class="description">Memberikan pesan umpan balik kontekstual untuk tindakan pengguna biasa.</div>
			<div class="action">
				<a href="#" class="button secondary small">Aksi</a>
				<a href="#" class="link secondary noline">Link</a>
			</div>
		</div>
	</div>

</body>
</html>