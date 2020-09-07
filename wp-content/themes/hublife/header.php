<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/src/dist/css/main.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/src/assets/css/owl/owl.carousel.min.css"/>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Hublife - </title>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav class="navbar ">
        <div class="container">
            <div class="navbar-img">
                <img src="<?php bloginfo('template_url');?>/src/assets/img/logo.png" alt="hublife">
            </div>
            <?php
                $args = array(
                    'menu' => 'principal',
                    'container' => false
                );
                wp_nav_menu( $args );
            ?>
            <div class="navbar-button js">
                <a href="#about">Solicite um Orçamento</a>
            </div>
        </div>
    </nav>
</header>