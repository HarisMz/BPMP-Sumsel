<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Publikasi</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body id="media-sosial" data-slug="publikasi">

<script async defer crossorigin="anonymous" 
  src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0" nonce="abc123">
</script>

<?php include './modules/header.php'; ?>

<main>
    <section class="container py-0 interactive-default">
        <div class="wrapper column gap-4 py-9">
            <nav class="breadcrumb with-background" id="breadcrumb">
                <ul>
                    <li class="item">
                        <a href="/">
                            Beranda
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Publikasi
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            Media Sosial
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="display-lg text-inverse">Media Sosial</div>
        </div>
    </section>
    <section class="container">
        <div class="wrapper">
            <div class="flex column justify-center items-center gap-10 gap-8-mobile">
				<div class="tabs vertical border-color-white no-update">
					<div class="menu full-border">
						<a href="#" class="item" id="tab-menu-1" data-linkto="social-instagram">
                            <div class="flex gap-5 justify-center items-center">
                                <div class="medsos">
                                    <img src="/assets/images/sosmed/instagram.png" alt="Sosial Median Instagram">
                                </div>
                                <div class="heading-md label">
                                    Instagram
                                    <span class="helper">
                                        @bpmp.provsumsel
                                    </span>
                                </div>
                            </div>
                        </a>
						<a href="#" class="item" id="tab-menu-2" data-linkto="social-tiktok">
                            <div class="flex gap-5 justify-center items-center">
                                <div class="medsos">
                                    <img src="/assets/images/sosmed/tiktok.png" alt="Sosial Median Tiktok" style="width: 40px; height: 40px;">
                                </div>
                                <div class="heading-md label">
                                    TikTok
                                    <span class="helper">
                                        @bpmp.provsumsel
                                    </span>
                                </div>
                            </div>
                        </a>
						<a href="#" class="item" id="tab-menu-3" data-linkto="social-facebook">
                            <div class="flex gap-5 justify-center items-center">
                                <div class="medsos">
                                    <img src="/assets/images/sosmed/facebook.png" alt="Sosial Median Facebook" style="width: 48px; height: 48px;">
                                </div>
                                <div class="heading-md label">
                                    Facebook
                                    <span class="helper">
                                        BPMP Provinsi Sumatera Selatan
                                    </span>
                                </div>
                            </div>
                        </a>
						<a href="#" class="item" id="tab-menu-4" data-linkto="social-youtube">
                            <div class="flex gap-5 justify-center items-center">
                                <div class="medsos">
                                    <img src="/assets/images/sosmed/youtube.png" alt="Sosial Median Youtube">
                                </div>
                                <div class="heading-md label">
                                    YouTube
                                    <span class="helper">
                                        @bpmp.provsumsel
                                    </span>
                                </div>
                            </div>
                        </a>
					</div>
					<div class="content">
                        <div class="item" id="tab-content-1">
                            <div class="social-embed">
                                <!-- Ganti link sesuai post Instagram publik -->
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DKeASbfyL87/" data-instgrm-version="14"></blockquote>
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DKaipVGzpdv/" data-instgrm-version="14"></blockquote>
                            </div>
                        </div>
                        <div class="item" id="tab-content-2">
                            <div class="social-embed">
                                <!-- Ganti dengan link TikTok video publik -->
                                <blockquote class="tiktok-embed m-0" cite="https://www.tiktok.com/@bpmp.provsumsel/video/7499775393688292614" data-video-id="7499775393688292614">
                                    <section></section>
                                </blockquote>
                                <blockquote class="tiktok-embed m-0" cite="https://www.tiktok.com/@bpmp.provsumsel/video/7487615445688716562" data-video-id="7487615445688716562">
                                    <section></section>
                                </blockquote>
                            </div>
                        </div>
						<div class="item" id="tab-content-3">
                            <div class="social-embed">
                                <!-- Embed Video Post 1 -->
                                <iframe
                                src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/BPMPProvinsiSumateraSelatan/videos/702698472517731&show_text=false&width=100%25"
                                width="100%"
                                height="750"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                </iframe>

                                <!-- Embed Post 2 -->
                                <iframe
                                src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/BPMPProvinsiSumateraSelatan/posts/pfbid02FaYJLQJ1YvyChkZf1wDSViFeDsEN9YhY3AoxhzptfxSw8bPUWEBAhg7ZK9PHGGaJl&show_text=true&width=100%25"
                                width="100%"
                                height="750"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                </iframe>
                            </div>
                        </div>
						<div class="item" id="tab-content-4">
                            <div class="social-embed">
                                <!-- Ganti VIDEO_ID sesuai video -->
                                <iframe class="rounded-4" width="100%" height="362" src="https://www.youtube.com/embed/HE8gcnIT4uU" frameborder="0" allowfullscreen></iframe>
                                <iframe class="rounded-4" width="100%" height="362" src="https://www.youtube.com/embed/3oAyhA1NS5I" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
					</div>
				</div>
	        </div>
        </div>
    </section>
</main>

<?php include './modules/footer.php'; ?>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script async src="https://www.instagram.com/embed.js"></script>
<script async src="https://www.tiktok.com/embed.js"></script>

</body>
</html>