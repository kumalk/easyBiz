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

            <div class="header-logo-navi-bar">
                <div id="top_bar_logo_box">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo(); } ?>
                </div>
                <div id="top_bar_navi_box">
                <nav id="top-navi">
                    <?php
                        $args=['theme_location'=>'top_nav'];
                        wp_nav_menu($args);
                    ?>
                </nav>
                </div>
            </div>



<hr>