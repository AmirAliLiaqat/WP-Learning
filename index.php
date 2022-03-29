<?php
/**
 * Main template file!
 *
 * @package wplearning
*/
get_header();   
?>

    <div class="home-main">
        <div class="row mx-0">
            <div class="home-posts col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    <?php  endwhile; ?>
                <?php endif; ?>
            </div><!--home-posts-->

            <div class="home-sidebar col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                <?php get_sidebar(); ?>
            </div><!--home-sidebar-->
        </div><!--row-->
    </div><!--home-main-->

<?php
get_sidebar();
get_footer();
?>
    