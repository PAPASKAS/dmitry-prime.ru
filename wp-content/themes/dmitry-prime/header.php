<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dmitry-prime
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="keywords" content="">
    <meta name="author" content="Papaska">
    <meta charset="UTF-8">
    <title><?php bloginfo('name') ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">
</head>

<body>

<div class="d-none" id="scrollCheck"></div>

<div class="preloader-area">
    <div class="loader-box">
        <div class="loader"></div>
    </div>
</div>


<header class="header header-scrolled back-top-animation">
    <div class="container">
        <div class="d-flex justify-content-end">
            <nav id="nav-menu-container my-auto">
                <ul class="nav-menu">
                    <li>
                        <a href="<?php the_field('whatsapp_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/whatsapp_48dp.svg" alt="whatsapp"></a>
                    </li>
                    <li>
                        <a href="<?php the_field('vk_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/vk_48dp.svg" alt="vk"></a>
                    </li>
                    <li>
                        <a href="<?php the_field('viber_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/viber_48dp.svg" alt="viber"></a>
                    </li>
                    <li>
                        <a href="<?php the_field('telegram_link') ?>" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/icons/telegram_48dp.svg" alt="telegram"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
