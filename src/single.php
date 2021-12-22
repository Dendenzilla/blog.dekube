<?php get_header(); ?> 

        <?php
        // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <article>
                    <h1><?php the_title();?></h1>
                    <div class="technos">
                        <?php get_template_part( 'partials/technos' ); ?>
                    </div>
                    <?php the_content(); ?> <!-- Page Content -->
                </article>
        <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

<?php get_footer(); ?>