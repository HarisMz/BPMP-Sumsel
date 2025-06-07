<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Tabs</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="surface-gray-10">
	
	<h1 class="headline-sm">Tabs</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Elemen navigasi untuk mengganti konten antar tab.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Vertical Tabs</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs vertical">
				<div class="menu">
					<a href="#" class="item" id="tab-menu-1">Tanpa Icon Berisi Text</a>
					<a href="#" class="item" id="tab-menu-2">Tanpa Icon Berisi Accordion</a>
					<a href="#" class="item" id="tab-menu-3">Tanpa Icon Berisi Teks Panjang</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">
						<div class="collapsible card accordion first-open">
							<div class="collapsible-header icon" data-icon="info">
								1 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
						<div class="collapsible card accordion">
							<div class="collapsible-header icon" data-icon="info">
								2 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
						<div class="collapsible card accordion">
							<div class="collapsible-header icon" data-icon="info">
								3 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
					</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Vertical Tabs with Icon</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs vertical">
				<div class="menu">
					<a href="#" class="item icon" data-icon="info" data-linkto="tab-icon-text" id="tab-menu-1">Tab isi text</a>
					<a href="#" class="item icon" data-icon="info" data-linkto="tab-icon-accordion" id="tab-menu-2">Tab isi accordion</a>
					<a href="#" class="item icon" data-icon="info" data-linkto="tab-icon-misc" id="tab-menu-3">Tab Ketiga</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">
						<div class="collapsible card accordion first-open">
							<div class="collapsible-header icon" data-icon="info">
								1 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
						<div class="collapsible card accordion">
							<div class="collapsible-header icon" data-icon="info">
								2 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
						<div class="collapsible card accordion">
							<div class="collapsible-header icon" data-icon="info">
								3 Murid Belum Mengumpulkan
							</div>
							<div class="collapsible-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
							</div>
						</div>
					</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Horizontal Tabs</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs horizontal">
				<div class="menu">
					<a href="#" class="item" id="tab-menu-1">Tab Pertama Hor</a>
					<a href="#" class="item" id="tab-menu-2">Tab Kedua Hor</a>
					<a href="#" class="item" id="tab-menu-3">Tab Ketiga Hor</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Horizontal Tabs with Icon</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs horizontal">
				<div class="menu">
					<a href="#" class="item icon" data-icon="info" id="tab-menu-1">Tab Pertama Horic</a>
					<a href="#" class="item icon" data-icon="info" id="tab-menu-2">Tab Kedua Horic</a>
					<a href="#" class="item icon" data-icon="info" id="tab-menu-3">Tab Ketiga Horic</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Horizontal Tabs Menu Full</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs horizontal full">
				<div class="menu">
					<a href="#" class="item" id="tab-menu-1">Tab Pertama Horful</a>
					<a href="#" class="item" id="tab-menu-2">Tab Kedua Horful</a>
					<a href="#" class="item" id="tab-menu-3">Tab Ketiga Horful</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-4">Horizontal Tabs Menu Full with Icon</p>
	<section class="container">
		<div class="wrapper py-10">
			<div class="tabs horizontal full">
				<div class="menu">
					<a href="#" class="item icon" data-icon="info" id="tab-menu-1">Tab Pertama Horfulic</a>
					<a href="#" class="item icon" data-icon="info" id="tab-menu-2">Tab Kedua Horfulic</a>
					<a href="#" class="item icon" data-icon="info" id="tab-menu-3">Tab Ketiga Horfulic</a>
				</div>
				<div class="content">
					<div class="item" id="tab-content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
					<div class="item" id="tab-content-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>