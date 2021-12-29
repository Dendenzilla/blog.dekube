<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Blog dekube front-end front end developer web development">
    <script src="https://kit.fontawesome.com/f9ed3dede8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,900;1,400;1,500&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/css/style.min.css'); ?>" type="text/css" media="screen" />
    <link rel="icon" href="">
    <title>Dekube's blog</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="header__container">
            <div class="navigation">
                <a href="<?php echo site_url();?>"><img src="<?php echo get_bloginfo('template_directory') ;?>/img/dkb_blog_logo.png" alt=""></a>
                <!-- <a href="<?php echo site_url();?>"><i class="fas fa-home"></i></a> -->
            </div>
            <div class="settings">
                <?php get_search_form(); ?>
                <p id="theme-switcher">
                    <i class="fa-lightbulb far"></i>
                </p>
            </div>
        </div>
    </div>
    <!-- FIN HEADER -->
    <!-- DEBUT MAIN CONT -->
    <div class="container">
        <div class="content">
        <!-- LOADER -->
        <div class="loader_container">
            <svg class="loader" width="10vh" height="10vh" viewBox="0 0 400 800">
                <path d="M 200 600 L 0 500 L 0 200 L 200 100 L 400 200 L 400 500 L 200 600 L 200 300 L 0 200"
                fill="none" stroke-width="6" />
                <path d="M 200 600 L 0 500 L 0 200 L 200 100 L 400 200 L 400 500 L 200 600 L 200 300 L 400 200"
                fill="none"  stroke-width="6" />
            </svg>
        </div>