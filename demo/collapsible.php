<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Collapsible</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 surface-gray-10">
	
	<h1 class="headline-sm">Collapsible</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Komponen yang bisa dibuka-tutup.</p>
	<div class="spacer-8 vertical"></div>

	<div class="flex row gap-10">
		<div class="flex column width-30">
			<p class="helper bold">Fungsi toggle membuka-tutup satu komponen yang diklik saja.</p>
			<div class="spacer-8 vertical"></div>
			<p class="subheading pb-2">List dengan Fungsi Toggle</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible list">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>

			<div class="spacer-8 vertical"></div>

			<p class="subheading pb-2">Card dengan Fungsi Toggle</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible card first-open">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>
			<div class="spacer-8 vertical"></div>
			<div style="">
				<div class="collapsible card">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
				<div class="collapsible card">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>

			<div class="spacer-8 vertical"></div>

			<p class="subheading pb-2">List dengan State Disabled</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible list disabled">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>

			<div class="spacer-8 vertical"></div>

			<p class="subheading pb-2">Card dengan State Disabled</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible card disabled">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>

			<div class="spacer-8 vertical"></div>

			<p class="subheading pb-2">List dengan Fungsi Toggle (Tanpa Icon)</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible list">
					<div class="collapsible-header">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>

			<div class="spacer-8 vertical"></div>

			<p class="subheading pb-2">Card dengan Fungsi Toggle (Tanpa Icon)</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible card">
					<div class="collapsible-header">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="flex column width-30">
			<p class="helper bold">Fungsi accordion akan menutup semua komponen dalam grup yang sama kemudian membuka komponen yang diklik.</p>
			<div class="spacer-8 vertical"></div>
			<p class="subheading pb-2">List dengan Fungsi Accordion</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
				<div class="collapsible list accordion first-open">
					<div class="collapsible-header icon" data-icon="info">
						1 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
				<div class="collapsible list accordion">
					<div class="collapsible-header icon" data-icon="info">
						2 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
				<div class="collapsible list accordion">
					<div class="collapsible-header icon" data-icon="info">
						3 Murid Belum Mengumpulkan
					</div>
					<div class="collapsible-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et dignissim tortor, in ultricies augue. Integer metus mauris, bibendum ac mattis in, facilisis sit amet urna. In a eleifend urna. Curabitur non pretium urna. Duis convallis pharetra nisi, in malesuada massa tincidunt sit amet. Phasellus at diam malesuada, luctus nibh eu, laoreet odio. Proin quis enim ac nisi rhoncus sodales a vel sem.</p>
					</div>
				</div>
			</div>
			<div class="spacer-8 vertical"></div>
			<p class="subheading pb-2">Card dengan Fungsi Accordion</p>
			<div class="spacer-4 vertical"></div>
			<div style="">
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
		</div>
	</div>
</body>
</html>