<?php
/**
 * Created by PhpStorm.
 * User: yamna
 * Date: 02/03/2019
 * Time: 16:51
 */
get_header(); ?>
<div class="main-post">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) : the_post();
            ?>
                <?php the_content(); ?>
        <?php
        endwhile;
    }
    ?>
</div>
<?php get_sidebar();
      get_footer(); ?>

