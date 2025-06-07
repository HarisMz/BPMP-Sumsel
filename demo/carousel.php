<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Carousel</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body class="p-8 white">
	<h1 class="headline-sm">Carousel</h1>
	<div class="spacer-4 vertical"></div>
	<p class="display-sm">Komponen Carousel.</p>

	<div class="spacer-8 vertical"></div>
	<p class="subheading pb-2">Default Carousel with Multi Slide</p>
	<div class="spacer-4 vertical"></div>

 <!--    <div class="carousel arrow multi width-30" data-carousel-visible="2">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div> -->
    
    <div class="spacer-8 vertical"></div>
    <p class="subheading pb-2">Default Carousel with Loop</p>
    <div class="spacer-4 vertical"></div>

    <div class="carousel loop dots width-30">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div>    

    <div class="spacer-8 vertical"></div>
    <p class="subheading pb-2">Auto Play Carousel</p>
    <div class="spacer-4 vertical"></div>

    <div class="carousel loop dots width-30 autoplay">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div>

    <div class="spacer-8 vertical"></div>
    <p class="subheading pb-2">Arrow Carousel</p>
    <div class="spacer-4 vertical"></div>

    <div class="carousel loop arrow width-30">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div>

<!--     <div class="spacer-8 vertical"></div>
    <p class="subheading pb-2">Sneak Peek Carousel</p>
    <div class="spacer-4 vertical"></div>

    <div class="carousel arrow width-30 sneak-peek">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div> -->

    <div class="spacer-8 vertical"></div>
    <p class="subheading pb-2">Sneak Peek Carousel with Loop</p>
    <div class="spacer-4 vertical"></div>

    <div class="carousel loop arrow width-30 sneak-peek">
        <div class="carousel-inner">
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
            <a href="#" class="carousel-item" style="background-image: url(/assets/images/mountain.jpg);"></a>
        </div>
    </div>

</body>
</html>