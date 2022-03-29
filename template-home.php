<?php
/**
 * Display Single page.
 * Template Name: Homepage Template.
 *
 * @package wplearning
*/
get_header();
?>
    <div class="page-custom-header mb-3">
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <img src="<?php echo $img_url; ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
    </div><!--page-custom-header-->

    <div class="row mx-0">
        <div class="home-posts col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                <?php  endwhile; ?>
            <?php endif; ?>
        </div><!--home-posts-->
    </div><!--row-->

<?php
get_footer();
?>
