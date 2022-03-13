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

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">
</head>

<body>

<div class="preloader-area">
    <div class="loader-box">
        <div class="loader"></div>
    </div>
</div>


<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center d-flex">
            <div id="logo">
                <a href="index.html"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class=""><a class="active" href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="menu-has-children"><a href="#">Pages</a>
                        <ul>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="services.html">Service</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                            <li><a href="blog-home.html">Blog Home</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>