<?php
/**
 * Display Single Post.
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
                        <article class="home-post">
                            <div class="post-header">
                                <div class="row post-thumbnail">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                </div><!--row-->
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            </div><!--post-header-->
                            <div class="post-description">
                                <?php the_content(); ?>
                            </div><!--post-description-->
                            <div class="post-footer row mx-0 my-2">
                                <div class="post-meta">
                                    <strong>Author: </strong> <?php the_author(); ?>
                                </div><!--post-meta-->
                                <div class="post-meta">
                                    <strong>Posted on: </strong> <?php the_time(); ?>
                                </div><!--post-meta-->
                            </div><!--post-footer-->
                        </article>
                    <?php  endwhile; ?>
                <?php endif; ?>
            </div><!--home-posts-->

            <div class="home-sidebar col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                <?php get_sidebar(); ?>
            </div><!--home-sidebar-->

        </div><!--row-->
    </div><!--home-main-->

<?php
get_footer();
?>