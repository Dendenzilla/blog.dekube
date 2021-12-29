<?php 
/*
Template Name: Homepage
*/
get_header(); ?>
<!-- POSTS LOOP -->
<div class="display--switch">
    <i class="fas fa-list selected"></i>
    <i class="fas fa-th"></i>
</div>
<div class="posts">
    <?php 
    if ( get_query_var('paged') ) {
        $paged = get_query_var('paged');
    } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
        $paged = get_query_var('page');
    } else {
        $paged = 1;
    }
    $args_query = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'paged' => $paged
    );
        $query = new WP_Query( $args_query ); ?>
            <?php if ($query-> have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <!-- POST STRUCTURE -->
                <?php get_template_part( 'partials/postloop' ); ?>
            <!-- END OF POST -->
            <?php endwhile; ?>
            <?php if ($query->max_num_pages > 1) : // custom pagination  ?>
        <?php
        $orig_query = $wp_query; // fix for pagination to work
        $wp_query = $query;
        ?>
        
        <?php
        $wp_query = $orig_query; // fix for pagination to work
        ?>
    <?php endif; ?>

<?php
    wp_reset_postdata(); // reset the query 
else:
    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>
</div>
<nav class="prev-next-posts">
            <div class="next-posts-link"><?php echo get_previous_posts_link( 'Newer Entries' ); ?></div>
            <div class="prev-posts-link"><?php echo get_next_posts_link( 'Older Entries', $query->max_num_pages ); ?></div>
            
        </nav>
<?php get_footer(); ?>