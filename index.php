<?php

get_header();//loading header.php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_the_date(); ?></p>
            <div><?php the_content(); ?></div>
            <button class="btn btn-primary">Test</button>
        </article>
        <?php
    }
} else {
    echo '<p>No posts found</p>';
}

get_sidebar();//loading sidebar.php

get_footer();//loading footer.php
?>
