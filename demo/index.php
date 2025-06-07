<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Akur Design System</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="surface-gray-10">

	<section class="container vertical py-10">
		<div class="wrapper">
			<div>
				<h1 class="headline-sm">Akur Design System</h1>
				<div class="spacer-3 vertical"></div>
				<p class="display-sm">Sebuah <i>design system</i> antarmuka yang menawan dan intuitif.</p>
			</div>
		</div>

		<div class="spacer-10 vertical"></div>

		<div class="wrapper">
			<div class="grid grid-4 grid-1-mobile gap-4">
				<div class="surface-default elevation-3 p-5 rounded-12">
					<div class="heading-lg">Tokens</div>
					<div class="spacer-6 vertical"></div>
					<ul class="list bold slim">
						<div class="subheading mb-3">Foundation</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/colors.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="palette"
								data-tooltip-position="top-start"
								data-tooltip="Skema warna untuk tema, status, dan aksen desain.">
								<li>Colors</li>
							</a>
							<a href="/demo/elevations.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="layers"
								data-tooltip-position="top-start"
								data-tooltip="Tingkatan bayangan untuk memberikan efek kedalaman pada elemen.">
								<li>Elevations</li>
							</a>
							<a href="/demo/rounded.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="rounded_corner"
								data-tooltip-position="top-start"
								data-tooltip="Pengaturan sudut membulat pada elemen, seperti tombol atau kartu.">
								<li>Rounded</li>
							</a>
							<a href="/demo/spacings.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="format_letter_spacing"
								data-tooltip-position="top-start"
								data-tooltip="Jarak antara elemen seperti padding, margin, dan gutter untuk tata letak yang rapi.">
								<li>Spacings</li>
							</a>
							<a href="/demo/typography.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="text_fields"
								data-tooltip-position="top-start"
								data-tooltip="Gaya dan hierarki teks, termasuk font, ukuran, dan ketebalan.">
								<li>Typography</li>
							</a>
							<a href="/demo/transitions.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="transition_fade"
								data-tooltip-position="top-start"
								data-tooltip="Efek perubahan halus antar status elemen, misalnya hover atau klik.">
								<li>Transitions</li>
							</a>
							<a href="/demo/animations.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="animation"
								data-tooltip-position="top-start"
								data-tooltip="Efek gerakan yang menambahkan interaktivitas dan kehalusan pada perubahan UI.">
								<li>Animations</li>
							</a>
							<a href="/demo/normalize.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="reset_wrench"
								data-tooltip-position="top-start"
								data-tooltip="Reset default CSS untuk memastikan konsistensi antar browser.">
								<li>Normalize</li>
							</a>
							<a href="/demo/variables.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="tune"
								data-tooltip-position="top-start"
								data-tooltip="Variabel CSS yang digunakan untuk menjaga konsistensi dan mudah dikustomisasi.">
								<li>Variables</li>
							</a>
					</ul>
				</div>
				<div class="surface-default elevation-3 p-5 rounded-12">
					<div class="heading-lg">Atoms</div>
					<div class="spacer-6 vertical"></div>
					<ul class="list bold slim">
						<div class="subheading mb-3">Basic</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/link.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="link"
								data-tooltip-position="top-start"
								data-tooltip="Gaya elemen tautan dengan interaksi seperti hover dan active.">
								<li>Link</li>
							</a>
							<a href="/demo/text.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="subject"
								data-tooltip-position="top-start"
								data-tooltip="Elemen teks dasar yang menerapkan aturan hirarki tipografi.">
								<li>Text</li>
							</a>
							<a href="/demo/separator.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="horizontal_rule"
								data-tooltip-position="top-start"
								data-tooltip="Garis pemisah untuk membedakan bagian konten.">
								<li>Separator</li>
							</a>
							<a href="/demo/icons.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="insert_emoticon"
								data-tooltip-position="top-start"
								data-tooltip="Elemen visual kecil untuk merepresentasikan tindakan atau informasi.">
								<li>Icons</li>
							</a>
							<a href="/demo/image.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="image"
								data-tooltip-position="top-start"
								data-tooltip="Elemen gambar untuk menampilkan foto, ilustrasi, atau grafik di halaman.">
								<li>Image</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Forms</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/button.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="highlight_mouse_cursor"
								data-tooltip-position="top-start"
								data-tooltip="Elemen aksi yang bisa diklik, tersedia dalam berbagai ukuran dan gaya.">
								<li>Button</li>
							</a>
							<a href="/demo/input.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="edit_note"
								data-tooltip-position="top-start"
								data-tooltip="Field untuk memasukkan teks atau data lainnya.">
								<li>Input</li>
							</a>
							<a href="/demo/textarea.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="article"
								data-tooltip-position="top-start"
								data-tooltip="Kotak teks multi-baris untuk masukan lebih panjang.">
								<li>Text Area</li>
							</a>
							<a href="/demo/checkbox.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="check_box"
								data-tooltip-position="top-start"
								data-tooltip="Kotak untuk memilih pilihan tunggal atau beberapa dalam daftar.">
								<li>Checkbox</li>
							</a>
							<a href="/demo/radio.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="radio_button_checked"
								data-tooltip-position="top-start"
								data-tooltip="Elemen pilihan dengan seleksi tunggal dalam satu grup.">
								<li>Radio</li>
							</a>
							<a href="/demo/switch.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="toggle_on"
								data-tooltip-position="top-start"
								data-tooltip="Elemen untuk mengatur pengaktifan atau penonaktifan opsi.">
								<li>Switch</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Data Display</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/avatar.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="account_circle"
								data-tooltip-position="top-start"
								data-tooltip="Gambar profil kecil atau ikon yang mewakili pengguna atau objek.">
								<li>Avatar</li>
							</a>
							<a href="/demo/badge.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="verified"
								data-tooltip-position="top-start"
								data-tooltip="Label kecil yang menunjukkan status atau jumlah.">
								<li>Badge</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Feedback</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/spinner.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="progress_activity"
								data-tooltip-position="top-start"
								data-tooltip="Indikator loading berbentuk putaran.">
								<li>Spinner</li>
							</a>
					</ul>
				</div>
				<div class="surface-default elevation-3 p-5 rounded-12">
					<div class="heading-lg">Molecules</div>
					<div class="spacer-6 vertical"></div>
					<ul class="list bold slim">
						<div class="subheading mb-3">Basic</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/fab.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="add_circle"
								data-tooltip-position="top-start"
								data-tooltip="Floating Action Button, tombol melayang untuk tindakan utama.">
								<li>FAB</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Forms</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/select.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="arrow_drop_down_circle"
								data-tooltip-position="top-start"
								data-tooltip="Dropdown untuk memilih satu atau beberapa opsi.">
								<li>Select</li>
							</a>
							<a href="/demo/stepper.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="exposure"
								data-tooltip-position="top-start"
								data-tooltip="Elemen untuk menaikkan atau menurunkan nilai angka.">
								<li>Stepper</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Data Display</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/list.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="list"
								data-tooltip-position="top-start"
								data-tooltip="Daftar item yang bisa diklik atau diinteraksikan.">
								<li>List</li>
							</a>
							<a href="/demo/chip.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="label"
								data-tooltip-position="top-start"
								data-tooltip="Elemen kecil untuk menampilkan item, kategori, atau tindakan singkat.">
								<li>Chip</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Feedback</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/toast.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="toast"
								data-tooltip-position="top-start"
								data-tooltip="Pesan singkat yang muncul sementara di layar.">
								<li>Toast</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Overlay</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/tooltip.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="tooltip_2"
								data-tooltip-position="top-start"
								data-tooltip="Informasi singkat yang muncul saat elemen di-hover.">
								<li>Tooltip</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Layout</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/flexbox.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="view_stream"
								data-tooltip-position="top-start"
								data-tooltip="Sistem tata letak yang fleksibel untuk elemen berbaris atau bertumpuk.">
								<li>Flexbox</li>
							</a>
							<a href="/demo/grid.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="grid_view"
								data-tooltip-position="top-start"
								data-tooltip="Sistem tata letak berbasis kolom dan baris untuk distribusi konten.">
								<li>Grid</li>
							</a>
					</ul>
				</div>
				<div class="surface-default elevation-3 p-5 rounded-12">
					<div class="heading-lg">Organisms</div>
					<div class="spacer-6 vertical"></div>
					<ul class="list bold slim">
						<div class="subheading mb-3">Forms</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/fileupload.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="upload_file"
								data-tooltip-position="top-start"
								data-tooltip="Elemen input untuk memilih dan mengunggah file.">
								<li>File Upload</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Data Display</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/datatable.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="table_chart"
								data-tooltip-position="top-start"
								data-tooltip="Tabel untuk menampilkan data dalam baris dan kolom dengan fitur sorting dan filtering.">
								<li>Data Table</li>
							</a>
							<a href="/demo/table.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="view_list"
								data-tooltip-position="top-start"
								data-tooltip="Struktur tabel dasar untuk menampilkan data atau informasi.">
								<li>Table</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Feedback</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/banner.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="notifications_active"
								data-tooltip-position="top-start"
								data-tooltip="Elemen notifikasi atau informasi penting di bagian atas layar.">
								<li>Banner</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Overlay</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/menutest.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="web_asset"
								data-tooltip-position="top-start"
								data-tooltip="Kotak modal untuk menampilkan pesan atau interaksi lebih lanjut.">
								<li>Dialog</li>
							</a>
							<a href="/demo/menutest.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="capture"
								data-tooltip-position="top-start"
								data-tooltip="Konten yang muncul di atas elemen saat di-hover atau di-klik.">
								<li>Popup</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Disclosure</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/carousel.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="view_carousel"
								data-tooltip-position="top-start"
								data-tooltip="Elemen slider yang menampilkan beberapa item secara bergantian.">
								<li>Carousel</li>
							</a>
							<a href="/demo/collapsible.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="collapse_content"
								data-tooltip-position="top-start"
								data-tooltip="Elemen yang dapat diperluas atau disembunyikan untuk menampilkan lebih banyak konten.">
								<li>Collapsible</li>
							</a>
							<a href="/demo/expander.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="top_panel_open	"
								data-tooltip-position="top-start"
								data-tooltip="Untuk memperluas atau menyembunyikan bidang yang memuat teks terlalu panjang.">
								<li>Expander</li>
							</a>
							<a href="/demo/tabs.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="tab"
								data-tooltip-position="top-start"
								data-tooltip="Elemen navigasi untuk mengganti konten antar tab.">
								<li>Tabs</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Layout</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/card.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="cards"
								data-tooltip-position="top-start"
								data-tooltip="Elemen berbentuk kotak untuk menampilkan informasi ringkas.">
								<li>Card</li>
							</a>
							<a href="/demo/section.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="view_array"
								data-tooltip-position="top-start"
								data-tooltip="Bagian konten yang terpisah dengan elemen visual yang jelas.">
								<li>Section</li>
							</a>
						<div class="spacer-8 vertical"></div>
						<div class="subheading mb-3">Navigation</div>
						<div class="separator-4 horizontal"></div>
							<a href="/demo/breadcrumbbar.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="more_horiz"
								data-tooltip-position="top-start"
								data-tooltip="Navigasi hierarki yang menunjukkan posisi pengguna dalam struktur halaman.">
								<li>Breadcrumb Bar</li>
							</a>
							<a href="/demo/pagination.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="last_page"
								data-tooltip-position="top-start"
								data-tooltip="Navigasi untuk membagi konten menjadi beberapa halaman.">
								<li>Pagination</li>
							</a>
							<a href="/demo/navbar.php"
								target="_blank"
								class="list-item tooltip dark"
								data-icon="widgets"
								data-tooltip-position="top-start"
								data-tooltip="Navigasi utama yang biasanya terletak di bagian atas layar.">
								<li>Navbar</li>
							</a>
					</ul>
				</div>
			</div>
		</div>
	</section>

</body>
</html>