<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Navbar</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="surface-gray-10">
	<header class="header container">
		<nav class="wrapper">
			<a href="/" class="logo"></a>
			<nav class="mobile-menu bg-contain"></nav>
			<ul class="menu">
				<li class="item"><a href="#">Beranda</a></li>
				<li class="item dropdown">
					Profil
					<div class="dropdown-wrapper">
						<ul class="list surface">
							<li class="list-item"><a href="#">Visi & Misi</a></li>
							<li class="list-item"><a href="#">Tugas & Fungsi</a></li>
							<li class="list-item"><a href="#">Renstra</a></li>
						</ul>
					</div>
				</li>
				<li class="item dropdown">
					Program Prioritas
					<div class="dropdown-wrapper">
						<ul class="list surface">
							<li class="list-item"><a href="#">Program Sekolah Penggerak</a></li>
							<li class="list-item"><a href="#">Dana Alokasi Khusus (DAK)</a></li>
							<li class="list-item"><a href="#">Usaha Kesehatan Sekolah (UKS)</a></li>
							<li class="list-item"><a href="#">Asesmen Nasional</a></li>
							<li class="list-item"><a href="#">Kurikulum Merdeka</a></li>
							<li class="list-item"><a href="#">Merdeka Belajar</a></li>
							<li class="list-item"><a href="#">Bantuan Operasional Sekolah (BOS)</a></li>
							<li class="list-item"><a href="#">Gerakan Sekolah Sehat</a></li>
							<li class="list-item"><a href="#">Rapor Pendidikan</a></li>
							<li class="list-item dropdown">
								Transisi PAUD SD
								<div class="dropdown-wrapper">
									<ul class="list surface">
										<li class="list-item dropdown">
											Berita
											<div class="dropdown-wrapper">
												<ul class="list surface">
													<li class="list-item"><a href="#">Mengejutkan</li></a>
													<li class="list-item"><a href="#">Menarik</li></a>
													<li class="list-item"><a href="#">Membingungkan</li></a>
													<li class="list-item"><a href="#">Mengajak Ribut</li></a>
												</ul>
											</div>
										</li>
										<li class="list-item"><a href="#">Galeri Foto</a></li>
										<li class="list-item"><a href="#">Galeri Video</a></li>
										<li class="list-item"><a href="#">Agenda</a></li>
										<li class="list-item"><a href="#">Drama Korea (?)</a></li>
										<li class="list-item"><a href="#">Harta Karun</a></li>
									</ul>
								</div>
							</li>
							<li class="list-item"><a href="#">Perpustakaan Digital</a></li>
							<li class="list-item"><a href="#">Platform Merdeka Mengajar</a></li>
						</ul>
					</div>
				</li>
				<li class="item dropdown">
					Informasi Publik
					<div class="dropdown-wrapper">
						<ul class="list surface">
							<li class="list-item"><a href="#">Berita</a></li>
							<li class="list-item"><a href="#">Galeri Foto</a></li>
							<li class="list-item"><a href="#">Galeri Video</a></li>
							<li class="list-item"><a href="#">Agenda</a></li>
						</ul>
					</div>
				</li>
				<li class="item dropdown">
					Pustaka
					<div class="dropdown-wrapper">
						<ul class="list surface">
							<li class="list-item"><a href="#">Majalah</a></li>
							<li class="list-item"><a href="#">Laporan</a></li>
							<li class="list-item"><a href="#">SK Standar Pelayanan</a></li>
						</ul>
					</div>
				</li>
				<li class="item button"><a href="#">Hubungi Kami</a></li>
				<li class="item button destructive call-banner"
					data-banner='{
						"style": "default",
						"title": "Informasi Penting",
						"icon": "system_update",
						"content": "Segera <i>update</i> aplikasi Anda untuk tetap menggunakan layanan kami.",
						"buttons": [
							{
								"label"		: "Update sekarang",
								"action"	: "",
								"target"	: "https://google.com",
								"newtab"	: true
							}
						],
						"links": [
							{
								"label"		: "Nanti saja",
								"action"	: "close",
								"target"	: "#",
								"newtab"	: false
							}
						],
						"hasclose": false
					}'>
					<a href="#">Lapor!</a>
				</li>
			</ul>
		</nav>
	</header>
	<main class="surface-blue-80 headline-lg">

	    <section class="container hero darken left" style="background-image: url('/assets/images/hero-img.png');">
	        <div class="wrapper justify-center">
	            <div class="flex column justify-center text-center items-center width-75 text-balance">
	                <h1>Mari Bentuk Peserta Didik yang Cerdas dan Berkarakter</h1>
	                <p>Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.</p>
	                <div class="flex row gap-5">
		                <a href="#" class="button">Selengkapnya</a>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="container hero with-supergraphic">
	        <div class="wrapper">
	            <div class="flex column justify-center text-balance">
	                <h1>Mari Bentuk Peserta Didik yang Cerdas dan Berkarakter</h1>
	                <p>Menyampaikan Informasi: Konten berfungsi sebagai media untuk menyampaikan informasi, baik itu berupa fakta, opini, atau pengetahuan kepada audiens. Konten bisa berupa tulisan, video, gambar, atau suara yang memiliki nilai informatif.</p>
	                <div class="flex row gap-5">
	                    <a href="#" class="button">Selengkapnya</a>
	                </div>
	            </div>
	            <div class="flex column justify-center items-center">
		            <div class="supergraphic">
			            <div class="graphic">
			            	<svg viewBox="0 0 576 512" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M128 64V0C163.346 0 192 28.6538 192 64H128Z" class="color-1"/>
								<path d="M384 0H448C412.654 0 384 28.6538 384 64V0Z" class="color-1"/>
								<path d="M448 64H512V0C476.654 0 448 28.6538 448 64Z" class="color-1"/>
								<path d="M64 64V128C64 92.6538 35.3462 64 0 64H64Z" class="color-1"/>
								<path d="M128 192H64V256H0C0 291.346 28.6538 320 64 320V384C99.3462 384 128 355.346 128 320H64V256C64 220.654 92.6538 192 128 192Z" class="color-1"/>
								<path d="M256 256H192C227.346 256 256 227.346 256 192V256Z" class="color-1"/>
								<path d="M512 192H448V256C448 220.654 476.654 192 512 192Z" class="color-1"/>
								<path d="M256 320H320C284.654 320 256 348.654 256 384V320Z" class="color-1"/>
								<path d="M256 384H320C320 419.346 291.346 448 256 448V384Z" class="color-1"/>
								<path d="M384 320H320C355.346 320 384 348.654 384 384V320Z" class="color-1"/>
								<path d="M384 320C419.346 320 448 348.654 448 384V320H384Z" class="color-1"/>
								<path d="M320 512H256C256 476.654 284.654 448 320 448V512Z" class="color-1"/>
								<path d="M64 0H128C92.6538 0 64 28.6538 64 64V0Z" class="color-3"/>
								<path d="M512 64V0C547.346 0 576 28.6538 576 64C576 99.3462 547.346 128 512 128C476.654 128 448 99.3462 448 64H512Z" class="color-3"/>
								<path d="M448 192C448 156.654 476.654 128 512 128V192H448Z" class="color-3"/>
								<path d="M448 192C448 156.654 419.346 128 384 128H448V192Z" class="color-3"/>
								<path d="M256 64H192V128C192 92.6538 220.654 64 256 64Z" class="color-3"/>
								<path d="M128 128C128 163.346 156.654 192 192 192C156.654 192 128 220.654 128 256V128Z" class="color-3"/>
								<path d="M128 320V256C128 291.346 99.3462 320 64 320H0V384V448C0 483.346 28.6538 512 64 512H128C92.6538 512 64 483.346 64 448H128C128 483.346 156.654 512 192 512C192 476.654 220.654 448 256 448H128C128 412.654 99.3462 384 64 384V448C28.6538 448 0 419.346 0 384C0 348.654 28.6538 320 64 320H128Z" class="color-3"/>
								<path d="M128 320H256C256 355.346 227.346 384 192 384C192 348.654 163.346 320 128 320Z" class="color-3"/>
								<path d="M0 256H64V192C28.6538 192 0 220.654 0 256Z" class="color-3"/>
								<path d="M256 256H320V320H384C348.654 320 320 291.346 320 256V192C320 227.346 291.346 256 256 256Z" class="color-3"/>
								<path d="M448 320V384H512C512 348.654 540.654 320 576 320H512V384C512 348.654 483.346 320 448 320Z" class="color-3"/>
								<path d="M384 384H320V448V512C355.346 512 384 483.346 384 448C419.346 448 448 476.654 448 512V448C483.346 448 512 476.654 512 512V448H448H384H320C320 412.654 348.654 384 384 384Z" class="color-3"/>
								<path d="M64 64H0C0 28.6538 28.6538 0 64 0V64Z" class="color-2"/>
								<path d="M256 64H192C192 28.6538 220.654 0 256 0V64Z" class="color-2"/>
								<path d="M320 64H256C291.346 64 320 92.6538 320 128H256C291.346 128 320 156.654 320 192V128C355.346 128 384 156.654 384 192C384 227.346 355.346 256 320 256H448C412.654 256 384 284.654 384 320H448H512V256C547.346 256 576 284.654 576 320V256V192V128H512C547.346 128 576 156.654 576 192H512C512 227.346 540.654 256 576 256H512C512 291.346 483.346 320 448 320V256C448 220.654 419.346 192 384 192V128C384 92.6538 412.654 64 448 64H384V128C348.654 128 320 99.3462 320 64Z" class="color-2"/>
								<path d="M320 64C320 28.6538 348.654 0 384 0H256C291.346 0 320 28.6538 320 64Z" class="color-2"/>
								<path d="M192 128V64H128C128 99.3462 99.3462 128 64 128H0V192C0 156.654 28.6538 128 64 128C99.3462 128 128 156.654 128 192V64C163.346 64 192 92.6538 192 128Z" class="color-2"/>
								<path d="M192 128C192 163.346 220.654 192 256 192H192V128Z" class="color-2"/>
								<path d="M128 320H192V256C192 291.346 220.654 320 256 320H320C320 284.654 291.346 256 256 256H192C192 291.346 163.346 320 128 320Z" class="color-2"/>
								<path d="M128 384C163.346 384 192 412.654 192 448H256C220.654 448 192 419.346 192 384H128Z" class="color-2"/>
								<path d="M448 384H384V448C419.346 448 448 419.346 448 384Z" class="color-2"/>
								<path d="M512 384C512 419.346 483.346 448 448 448V384H512Z" class="color-2"/>
								<path d="M576 448V384H512C547.346 384 576 412.654 576 448Z" class="color-2"/>
								<path d="M576 448C576 483.346 547.346 512 512 512V448H576Z" class="color-2"/>
							</svg>
						</div>
			            <div class="image">
			            	<img src="/assets/images/hero-img-b.png">
			            </div>
					</div>
	            </div>
	        </div>
	    </section>

		<section class="container">
			<div class="wrapper py-10">
				<div class="full text-white">
					<h1 class="headline-xs">Judul Section</h1>
					<p class="body">Isi paragraf section adalah ini.</p>
				</div>
				<div class="full">
					<img src="" alt="">
				</div>
			</div>
		</section>

	</main>
</body>