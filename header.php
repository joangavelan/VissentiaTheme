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

    <nav class="header__nav">
    <div class="header__logo"><a href="https://www.vissentia.com/" class="header__logo--text">Vissentia</a></div>
    <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
    </label>
    <input type="checkbox" id="btn">
 
    
    <?php
        wp_nav_menu (
    
            array(
                'theme_location' => 'top-menu',
            )
    
        );
        ?>

    </nav>

</header>
<!---->

<div class="mg-hg"></div>

<main class="site-content">


