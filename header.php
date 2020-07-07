<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vissentia</title>
    <script src="https://kit.fontawesome.com/542ea1a396.js" crossorigin="anonymous"></script>
    
    <?php wp_head(); ?>

</head>
<body>


<!--HEADER-->
<header class="header">
    <div class="header__logo-container">
            <div class="header__logo-box">
                <span class="header__logo"></span>
                <h2 class="header__title">Vissentia</h2>
            </div>
    </div>
    
    <div class="toggle">
        <i class="fas fa-bars"></i>
    </div>
    <?php
    wp_nav_menu (
    
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar-menu'
        )
    
    );
    ?>

</header>
<!---->

<div class="mg-md"></div>

<main class="site-content">


