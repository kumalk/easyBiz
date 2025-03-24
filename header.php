<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> : <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div id="site-container">
<div id="top-navi-bar" class="d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom bg-light">
    <!-- Logo Section -->
    <div id="top-navi-logo" class="col-2 d-flex justify-content-center align-items-center">
        <img src="https://moodle.metropolia.fi/pluginfile.php/1/theme_maisteriboost/logo/1742379751/metropolia_logo.svg" class="img-fluid" alt="Logo">
    </div>

    <!-- Navigation Menu -->
    <div class="col-10">
        <nav id="top-navi" class="navbar navbar-expand-lg navbar-light">
            <!-- Toggler for Mobile View -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- WordPress Menu Integration -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'top_nav',
                    'menu_class'      => 'navbar-nav ms-auto', // Align menu items to the right
                    'container'       => false,                // Remove unnecessary wrapping container
                    'fallback_cb'     => false,                // Prevent fallback output
                ) );
                ?>
            </div>
        </nav>
    </div>
</div>

    <hr>