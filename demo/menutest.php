<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Navbar</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body>
	<header class="header container">
	    <nav class="wrapper">
	        <a href="/" class="logo"></a>
	        <nav class="mobile-menu bg-contain"></nav>
	        <ul class="menu">
	            <li class="item dropdown">
	                Contoh Dialog
	                <div class="dropdown-wrapper">
	                    <ul class="list surface">
	                        <li class="list-item dropdown">
	                            Dialog Default
	                            <div class="dropdown-wrapper">
	                                <ul class="list surface">
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "fit",
	                                            "title": "Dialog Fit",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fit dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Default Fit</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "medium",
	                                            "title": "Dialog Medium",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran medium dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Default Medium</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "large",
	                                            "title": "Dialog Large",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran large dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Default Large</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "fill",
	                                            "title": "Dialog Fill",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fill dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Default Fill</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "screen",
	                                            "title": "Dialog Screen",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran screen dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Default Screen</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="list-item dropdown">
	                            Dialog Minimal
	                            <div class="dropdown-wrapper">
	                                <ul class="list surface">
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "minimal",
	                                            "size": "fit",
	                                            "title": "Dialog Fit",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fit dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Minimal Fit</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "minimal",
	                                            "size": "medium",
	                                            "title": "Dialog Medium",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran medium dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Minimal Medium</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "minimal",
	                                            "size": "large",
	                                            "title": "Dialog Large",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran large dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Minimal Large</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "minimal",
	                                            "size": "fill",
	                                            "title": "Dialog Fill",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fill dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Minimal Fill</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "minimal",
	                                            "size": "screen",
	                                            "title": "Dialog Screen",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran screen dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": false
	                                        }'>Dialog Minimal Screen</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="list-item dropdown">
	                            Dialog Persistent
	                            <div class="dropdown-wrapper">
	                                <ul class="list surface">
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "fit",
	                                            "title": "Dialog Fit",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fit dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": true
	                                        }'>Dialog Persistent Fit</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "medium",
	                                            "title": "Dialog Medium",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran medium dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": true
	                                        }'>Dialog Persistent Medium</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "large",
	                                            "title": "Dialog Large",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran large dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": true
	                                        }'>Dialog Persistent Large</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "fill",
	                                            "title": "Dialog Fill",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran fill dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": true
	                                        }'>Dialog Persistent Fill</a>
	                                    </li>
	                                    <li class="list-item">
	                                        <a href="#" class="call-dialog" data-dialog='{
	                                            "style": "default",
	                                            "size": "screen",
	                                            "title": "Dialog Screen",
	                                            "subtitle": "",
	                                            "content": "Dialog ukuran screen dengan tombol close.",
	                                            "buttons": [
	                                                {
	                                                    "label": "OK",
	                                                    "class": "ultimate",
	                                                    "action": "close",
	                                                    "target": "#",
	                                                    "newtab": false
	                                                }
	                                            ],
	                                            "hasclose": true,
	                                            "persistent": true
	                                        }'>Dialog Persistent Screen</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="list-item">
	                            <a href="#" class="call-dialog" data-dialog='{
	                                "style": "minimal",
	                                "size": "medium",
	                                "title": "",
	                                "subtitle": "",
	                                "content": "Dialog tanpa header dengan ukuran medium, terlihat seperti popup.",
	                                "buttons": [],
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Dialog Headerless</a>
	                        </li>
	                    </ul>
	                </div>
	            </li>
	            <li class="item dropdown">
	                Contoh Popup
	                <div class="dropdown-wrapper">
	                    <ul class="list surface">
	                        <li class="list-item">
	                            <a href="#" class="call-popup" data-popup='{
	                                "size": "fit",
	                                "content": "<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>",
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Popup Fit</a>
	                        </li>
	                        <li class="list-item">
	                            <a href="#" class="call-popup" data-popup='{
	                                "size": "medium",
	                                "content": "<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>",
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Popup Medium</a>
	                        </li>
	                        <li class="list-item">
	                            <a href="#" class="call-popup" data-popup='{
	                                "size": "large",
	                                "content": "<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>",
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Popup Large</a>
	                        </li>
	                        <li class="list-item">
	                            <a href="#" class="call-popup" data-popup='{
	                                "size": "fill",
	                                "content": "<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>",
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Popup Fill</a>
	                        </li>
	                        <li class="list-item">
	                            <a href="#" class="call-popup" data-popup='{
	                                "size": "screen",
	                                "content": "<iframe src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=1&fs=0&modestbranding=1&color=white&iv_load_policy=3&autoplay=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>",
	                                "hasclose": true,
	                                "persistent": true
	                            }'>Popup Screen</a>
	                        </li>
	                    </ul>
	                </div>
	            </li>
				<li class="item button">
					<a href="#" class="call-dialog" data-dialog='{
			            "style": "default",
			            "size": "medium",
			            "title": "Tim Penyeragaman Laman",
			            "subtitle": "🎵 Oh Penyeragaman Laman, Kami Bersama 🎵",
			            "content": "<div class=\"grid grid-3 grid-3-mobile full height-full gap-4\"><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/ridha.png\"></span><h2 class=\"action\">Ridha</h2><p class=\"eyebrow-sm\">Muhammad Ridha Ridwan</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/haris.png\"></span><h2 class=\"action\">Haris</h2><p class=\"eyebrow-sm\">Haris Dhaifullah Mz</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/tamik.png\"></span><h2 class=\"action\">Tamik</h2><p class=\"eyebrow-sm\">Rahmi Syahputri</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/firdaus.png\"></span><h2 class=\"action\">Firdaus</h2><p class=\"eyebrow-sm\">Muhamad Firdaus Jubaedi</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/sefiq.png\"></span><h2 class=\"action\">Sefiq</h2><p class=\"eyebrow-sm\">Sefiqurohman Alfarizi</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/yoga.png\"></span><h2 class=\"action\">Yoga</h2><p class=\"eyebrow-sm\">Yoga Fauzi Irawan</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/rizky.png\"></span><h2 class=\"action\">Rizky</h2><p class=\"eyebrow-sm\">Moch Rizky Lutfi</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/sofhian.png\"></span><h2 class=\"action\">Sofhian</h2><p class=\"eyebrow-sm\">Sofhian Fazrin Nasrulloh</p></a></div><div class=\"card feature surface-subdued py-6 px-2\"><a href=\"#\"><span class=\"avatar round lg mb-2\"><img class=\"image\" src=\"/assets/images/devteam/taqy.png\"></span><h2 class=\"action\">Taqy</h2><p class=\"eyebrow-sm\">Taqyudin Amri</p></a></div></div><div class=\"spacer-4 vertical\"></div><div><audio controls autoplay class=\"full\"><source src=\"/assets/audio/penyeragamanlaman_cut.mp3\" type=\"audio/mpeg\"></audio></div>",
			            "buttons": [
			                {
			                    "label": "Tutup",
			                    "class": "ultimate full",
			                    "action": "close",
			                    "target": "#",
			                    "newtab": false
			                }
			            ],
			            "hasclose": true,
			            "persistent": false
			        }'>Tentang Kami</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <div class="carousel draggable full loop arrow dots clear">
				        <div class="carousel-inner">
				            <div class="carousel-item darken left" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 0; ?>);">
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 2; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>
		
		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Default Carousel</p>
				    <div class="carousel draggable loop dots">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 3; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 4; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 5; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>
		
		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Default Carousel Autoplay</p>
				    <div class="carousel draggable arrow autoplay loop dots">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 3; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 4; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 5; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Autoplay Carousel (Not Draggable)</p>
			    	<div class="carousel loop dots autoplay">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 6; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 7; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 8; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Arrow Carousel</p>
				    <div class="carousel draggable loop arrow">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 9; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 10; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 11; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Carousel 3 Slides per View</p>
				    <div class="carousel draggable loop arrow dots" data-carousel-visible="3" data-sliding-span="1" data-autoplay-duration="5000">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 12; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 13; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 14; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 15; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 16; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 17; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 18; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 19; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 20; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Carousel</p>
				    <div class="carousel draggable arrow">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 21; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 22; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 23; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Carousel 2 Slides per View</p>
				    <div class="carousel draggable arrow" data-carousel-visible="2">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 24; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 25; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 26; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 27; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Carousel with Loop</p>
				    <div class="carousel draggable loop arrow">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 28; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 29; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 30; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container">
		    <div class="wrapper">
			    <div class="flex column">
				    <p class="subheading pb-5">Carousel with Loop 2 Slides per View</p>
				    <div class="carousel draggable loop arrow" data-carousel-visible="2">
				        <div class="carousel-inner">
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 31; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 32; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 33; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				            <div class="carousel-item" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 34; ?>);">
				                <a href="https://google.com/" target="_blank"></a>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Feature Card</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="4" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-abid.png" class="width-52">
	                                    <h2 class="action">Akun belajar.id</h2>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-rp.png" class="width-52">
	                                    <h2 class="action">Rapor Pendidikan</h2>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-arkas.png" class="width-52">
	                                    <h2 class="action">ARKAS</h2>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-siplah.png" class="width-52">
	                                    <h2 class="action">SIPLah</h2>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-km.png" class="width-52">
	                                    <h2 class="action">Apadia</h2>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="carousel-item">
	                            <div class="card feature ratio-3-2 ratio-2-3-mobile">
	                                <a href="https://google.com/" target="_blank">
	                                    <img src="/assets/images/logo/logo-gss.png" class="width-52">
	                                    <h2 class="action">Dimana</h2>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Story Card</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="3" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
			            	<div class="carousel-item">
						        <div class="card story">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
			            	<div class="carousel-item">
						        <div class="card story">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
			            	<div class="carousel-item">
						        <div class="card story">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Story Card, No Image</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="3" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
			            	<div class="carousel-item">
						        <div class="card story">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
			            	<div class="carousel-item">
						        <div class="card story">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
			            	<div class="carousel-item">
						        <div class="card story">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                            <div class="description">
				                                Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata. Deskripsi berfungsi untuk memberikan gambaran yang jelas tentang objek, tempat, atau peristiwa melalui kata-kata.
				                            </div>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round medium" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <div class="info">
				                                <a href="#"><div class="authorname">
				                                    Fulan Fulana
				                                </div></a>
				                                <div class="dateview">
				                                    <span class="date">
				                                        1 Oktober 2024
				                                    </span>
				                                     • 
				                                    <span class="viewcount">
				                                        Dibaca 114 kali
				                                    </span>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="buttons">
				                        	<a href="#" class="button full primary first-button">Tombol Pertama</a>
				                        	<a href="#" class="button full secondary second-button">Tombol Kedua</a>
				                        </div>
				                    </div>
						        </div>
			            	</div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Digest Card</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="3" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <a href="#"><div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div></a>
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Digest Card, No Image</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="3" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card digest">
				                    <div class="details">
				                        <div class="summary">
				                            <a href="#"><div class="title">
				                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
				                            </div></a>
				                        </div>
				                        <div class="meta">
				                            <a href="#"><div class="avatar round xs" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div></a>
				                            <a href="#"><div class="authorname">
				                                Fulan Fulana
				                            </div></a>
				                        </div>
				                    </div>
						        </div>
		                    </div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

		<section class="container bg-default pt-10 pb-14">
	        <div class="wrapper">
	            <div class="flex column">
				    <p class="subheading pb-5">Carousel with Immersive Card</p>
	                <div class="carousel draggable loop arrow clear autoplay" data-carousel-visible="3" data-carousel-visible-mobile="1" data-sliding-span="1">
	                    <div class="carousel-inner">
			            	<div class="carousel-item">
						        <div class="card immersive top">
				                    <a href="#">
				                    	<div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div>
					                    <div class="details">
					                        <div class="summary">
					                            <div class="title">
					                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
					                            </div>
					                        </div>
					                        <div class="separator-0"></div>
					                        <div class="meta">
					                            <div class="avatar round sm" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div>
					                            <div class="info">
					                                <div class="authorname">
					                                    Fulan Fulana
					                                </div>
					                            </div>
					                        </div>
					                    </div>
				                    </a>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card immersive">
				                    <a href="#">
				                    	<div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div>
					                    <div class="details">
					                        <div class="summary">
					                            <div class="title">
					                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
					                            </div>
					                        </div>
					                        <div class="separator-0"></div>
					                        <div class="meta">
					                            <div class="avatar round sm" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div>
					                            <div class="info">
					                                <div class="authorname">
					                                    Fulan Fulana
					                                </div>
					                            </div>
					                        </div>
					                    </div>
				                    </a>
						        </div>
		                    </div>
			            	<div class="carousel-item">
						        <div class="card immersive bottom">
				                    <a href="#">
				                    	<div class="featured-image" style="background-image: url(https://picsum.photos/640/360.webp?random=<?php echo time() + 1; ?>);"></div>
					                    <div class="details">
					                        <div class="summary">
					                            <div class="title">
					                                Judul Berita Ini Terpanjang, Bisa Jadi Lebih dari 3 Baris Tulisan, Karena Lebih Maka Akan Diberikan Tanda Elipsis yang Menandakan bahwa Judul Beritanya Terlalu Panjang untuk Dimuat
					                            </div>
					                        </div>
					                        <div class="separator-0"></div>
					                        <div class="meta">
					                            <div class="avatar round sm" style="background-image: url(https://i.pravatar.cc/150?img=1);"></div>
					                            <div class="info">
					                                <div class="authorname">
					                                    Fulan Fulana
					                                </div>
					                            </div>
					                        </div>
					                    </div>
				                    </a>
						        </div>
		                    </div>
	                    </div>
	                </div>
		        </div>
	        </div>
	    </section>

	</main>
</body>