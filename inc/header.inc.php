<?php include 'inc/init.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="view/css/base.css">
    <link rel="stylesheet" href="view/css/vendor.css">
    <link rel="stylesheet" href="view/css/main.css">

    <!-- script
    ================================================== -->
    <script src="view/js/modernizr.js"></script>
    <script src="view/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll" href="#works" title="works">Works</a></li>
                    <li><a class="smoothscroll" href="#clients" title="clients">Clients</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                    <?php if (userConnect()) : ?>
                        <li><a class="" href="<?= URL ?>connexion.php?action=deconnexion" title="contact">Deconnexion</a></li>
                    <?php endif; ?>
                </ul>

                <p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->