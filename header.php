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
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- END SWIPER -->
    <link rel="icon" href="">
    <title>Martin Adriaensen's Portfolio</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <span><a href="<?php echo get_home_url();?>">Home</a></span>
            <span><a href="<?php echo get_page_link(9) ?>">Event</a></span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mirano-logo.svg" alt="" class="mirano_logo">
            <span><a href="<?php echo get_page_link(58) ?>">Corporate</a></span>
            <span><a href="#">Contact</a></span>
        </nav>
    </header>
    <!-- FIN HEADER -->
    <!-- DEBUT MAIN CONT -->
    <div class="">
        <div class="content">