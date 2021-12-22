<!-- IF ELSE TO SHOW ICON OF THE POST'S CATEGORIES -->
<?php if (has_category('codetidbit')){;?>
    <a href="<?php echo get_category_link(6);?>"><span class="tidbit">Code tidbit</span></a>
<?php } if (has_category('article')){;?>
    <a href="<?php echo get_category_link(7);?>"><span class="article">Article</span></a>
<?php } if (has_category('css')){;?>
    <a href="<?php echo get_category_link(2);?>"><i class="fab fa-css3-alt css" alt="css"></i></a>
<?php } if (has_category('html')){;?>
    <a href="<?php echo get_category_link(3);?>"><i class="fab fa-html5 html"></i></a>
<?php } if (has_category('js')){;?>
    <a href="<?php echo get_category_link(4);?>"><i class="fab fa-js js"></i></a>
<?php } if (has_category('wordpress')){;?>
    <a href="<?php echo get_category_link(5);?>"><i class="fab fa-wordpress-simple wordpress"></i></a>
<?php } ?>
</div>
<!-- END OF POST'S CAT IF ELSE -->