<?php
/* 
Template Name: Archives
*/
?>
<?php get_header(); ?> 
<main>
        <h2 style="text-align:center">
            <?php if (is_category(6)){
                ;?>Read all <span class="emphasis tidbit">Code Tidbit</span><?php 
                } elseif (is_category(7)){
                ;?>Read all <span class="emphasis article">Article</span><?php 
                } else{
                ;?>All <span class="emphasis <?php single_cat_title();?>"><?php single_cat_title();?></span> related posts<?php
            }
            ;?>
        </h2>
        <section class="search-results">
        <div class="display--switch">
    <i class="fas fa-list selected"></i>
    <i class="fas fa-th"></i>
</div>
    <div class="posts">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- POST STRUCTURE -->
                <?php get_template_part( 'partials/postloop' ); ?>
                <!-- END OF POST -->
            <?php endwhile;?>
        <?php else : ?>
            <p>sry no posts</p>
        <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>