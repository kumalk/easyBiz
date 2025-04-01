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
            <!-- top navigation and logo bar -->
            <div class="header-logo-navi-bar">
                <!-- custom logo as the header logo -->
                <div id="top_bar_logo_box">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo(); } ?>
                </div>

                <!-- Hamburger menu button to use in mobile screens -->
                <!-- <button id="mobile-menu-toggle" class="mobile-menu-btn">
                ☰
                </button> -->

                <!-- Navigation menu in the top bar -->
                <div id="top_bar_navi_box">
                <nav id="top-navi">
                    <?php
                        $args=['theme_location'=>'top_nav'];
                        wp_nav_menu($args);
                    ?>
                </nav>
                </div>
            </div>

