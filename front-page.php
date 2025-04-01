<?php 
get_header();

if (is_front_page()) : ?>
<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $first = true; 
        for ($i = 1; $i <= 5; $i++) :
            $image = get_theme_mod("slider_image_$i");
            $title = get_theme_mod("slider_title_$i");
            $subtitle = get_theme_mod("slider_subtitle_$i");
            $button_text = get_theme_mod("slider_button_text_$i");
            $button_link = get_theme_mod("slider_button_link_$i");

            if (!empty($image)) : ?>
                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                    <img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="Slide <?php echo $i; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <?php if (!empty($title)) : ?>
                            <h5><?php echo esc_html($title); ?></h5>
                        <?php endif; ?>
                        <?php if (!empty($subtitle)) : ?>
                            <p><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>
                        <?php if (!empty($button_text) && !empty($button_link)) : ?>
                            <a href="<?php echo esc_url($button_link); ?>" class="btn btn-primary">
                                <?php echo esc_html($button_text); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
        <?php 
            $first = false;
            endif; 
        endfor; 
        ?>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php endif; ?>

get_sidebar();//loading sidebar.php

get_footer();//loading footer.php

?>
