<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Portfolio dekube front-end front end developer web development">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/css/style.min.css'); ?>"
        type="text/css" media="screen" />
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mulish:wght@300;400;700&family=Oswald:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="icon" href="">
    <title>Martin Adriaensen's Portfolio</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Event</a>
            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 470.8 75.8" xml:space="preserve"
                class="mirano_logo">
                <path class="st0" d="M66.4,33.3c0-10.3,8.4-18.7,18.7-18.8c5.6,0,9.7,1.6,12.5,4.4c2.8,2.8,4.2,6.7,4.2,11.6v42.5h15.4V24.4
	c0-8.4-3.3-14.6-8.3-18.6c-5-4-11.6-6-18.3-6c-10.1,0-19.3,5-26.8,13.3C62,9.6,59.3,6.4,55.6,4c-4-2.6-9.3-4.2-15.7-4.2
	c-9.9,0-16.5,3.4-22.1,8.8C17.5,8.9,17.2,9,16.9,9c-0.3,0-0.7-0.1-0.9-0.4c-0.2-0.2-0.4-0.5-0.4-0.9V2.5H0.2v70.6h15.4V33.5
	c0-10.4,8.4-18.9,18.8-18.9c5.6,0,9.7,1.6,12.5,4.4c2.8,2.8,4.2,6.7,4.2,11.6v42.5h15.4V33.3z"></path>
                <path class="st0" d="M149.5,2.5 134.1,2.5 134.1,3.2 134.1,73.1 149.5,73.1z"></path>
                <path class="st0" d="M181.8,35c0-5.3,1.5-10.5,4.3-14.3c2.9-3.8,7.1-6.3,12.7-6.3c1,0,1.9,0.1,3,0.2c3.4,0.5,6.4,1.9,9,3.6L219.7,5
	c-1.1-0.8-7.6-5.2-16-5.2c-9.4,0-16.1,4.2-19.8,7.4c-0.3,0.2-0.5,0.3-0.8,0.3c-0.3,0-0.7-0.1-0.9-0.4c-0.2-0.2-0.4-0.5-0.4-0.9V2.5
	h-15.4v0.7v69.9h15.4V35z"></path>
                <path class="st0" d="M295.9,2.5h-15.6v3.4c0,1.7-1.9,2.6-3.3,1.5c-2.2-1.9-4.7-3.4-7.4-4.7c-4.1-1.9-8.6-2.9-13.4-2.9
	c-10.1,0-18.7,3.6-25.7,10.8c-7,7.2-10.5,16.1-10.5,26.8c0,10.8,3.4,19.8,10.2,26.9c6.8,7.1,15.3,10.7,25.5,10.7c4.9,0,9.4-1,13.7-3
	c2.8-1.3,5.4-2.6,7.7-4.3c1.3-1,3.2,0,3.2,1.6v3.8h15.6V2.5z M273.8,53.8c-4.2,4.4-9.4,6.6-15.6,6.6c-6.1,0-11.4-2.2-15.6-6.7
	c-4.3-4.4-6.4-9.9-6.4-16.3s2.1-11.9,6.4-16.3c4.3-4.4,9.5-6.7,15.6-6.7c6.2,0,11.5,2.2,15.6,6.6c4.2,4.4,6.5,9.8,6.5,16.4
	C280.4,43.9,278,49.4,273.8,53.8z"></path>
                <path class="st0" d="M353.7-0.2c-9.1,0-16.8,3.5-23.4,9.2c-0.3,0.2-0.5,0.3-0.8,0.3c-0.3,0-0.7-0.1-0.9-0.4
	c-0.2-0.2-0.4-0.5-0.4-0.9V2.5h-15.4v70.6h15.4V36.3c0-6,2.2-11.4,5.8-15.4c3.6-3.9,8.7-6.4,14.7-6.4c5.6,0,10.3,1.6,13.6,4.4
	c3.3,2.8,5.2,6.7,5.2,11.5v42.5h15.4V24.4c0-8.4-4-14.7-9.6-18.7C367.7,1.7,360.4-0.2,353.7-0.2z"></path>
                <path class="st0" d="M432.8-0.2c-10.7,0-19.7,3.6-27.1,10.8c-7.3,7.2-11,16.1-11,26.8c0,10.6,3.7,19.6,11,26.8
	C413,71.4,422,75,432.8,75c10.7,0,19.7-3.6,27.1-10.8c7.3-7.2,11-16.1,11-26.8c0-10.6-3.7-19.5-11-26.8
	C452.5,3.4,443.5-0.2,432.8-0.2z M417.2,53.6c-4.2-4.4-6.4-9.8-6.4-16.2s2.1-11.8,6.4-16.2c4.2-4.4,9.4-6.6,15.6-6.6
	c6,0,11.2,2.2,15.5,6.7c4.3,4.4,6.4,9.8,6.4,16.2c0,6.3-2.1,11.7-6.4,16.2c-4.3,4.4-9.5,6.7-15.5,6.7
	C426.6,60.2,421.4,58,417.2,53.6z"></path>
            </svg>
            <a href="#">Corporate</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <!-- FIN HEADER -->
    <!-- DEBUT MAIN CONT -->
    <div class="">
        <div class="content">