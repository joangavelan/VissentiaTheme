<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vissentia</title>
    <script data-ad-client="ca-pub-7997794586711401" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php wp_head(); ?>
</head>
<body>

    <header class="header">
        <div class="container">

            <!-- logo -->
            <div class="logo__container">
                <a href="<?=site_url();?>"><h1>Vitae<span>Essentia</span></h1></a>
            </div>

            <!-- burger -->
            <button class="hamburger">
                    <i class="fas fa-bars"></i>
            </button>

            <!-- nav -->
            <nav class="header__navigation">
                <?php
                    wp_nav_menu (
                        array(
                        'theme_location' => 'top-menu',
                        )
                    );
                ?>
            </nav>

        </div>
    </header>

<main class="site-content">


