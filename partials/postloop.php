<!-- start of the post to be included in the loop -->
<div class="post">
    <div class="post__teaser">
        <h2>
        <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer">
        <?php echo wp_html_excerpt( get_the_title(), 45, '...');?>
        </a>
        </h2>
            <?php get_template_part( 'partials/technos' ); ?>
        <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer">
            <p class="post__excerpt"><?php echo wp_html_excerpt( get_the_excerpt(), 155, '...');?></p>
        </a>
    </div>
</div>
<!-- end of the post to be included in the loop -->