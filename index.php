<?php get_header(); ?> 

        <?php
        // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_title();?>
                <p>index</p>
                <?php the_content(); ?> <!-- Page Content -->
        <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

<?php get_footer(); ?>