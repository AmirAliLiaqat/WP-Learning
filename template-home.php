<?php
/**
 * Display Single page.
 * Template Name: Homepage Template.
 *
 * @package wplearning
*/
get_header();
?>
    <div class="page-custom-header my-3">
        <?php
            $banner_status = get_theme_mod('wplearning_home_banner', 'yes');
        ?>
        <?php if($banner_status == 'yes'): ?>
            <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <img src="<?php echo $img_url; ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
        <?php endif; ?>
    </div><!--page-custom-header-->

    <div class="flex-row mx-0 text-center">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <p><?php the_content(); ?></p>
            <?php  endwhile; ?>
        <?php endif; ?>
    </div><!--flex-row-->

    <div class="home-services row mx-0 mt-5">
        <?php
            $args = array (
                'post_type' => 'service',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
            $tech_posts = new WP_Query($args);
        ?>
        <?php if ( $tech_posts->have_posts() ) : ?>
            <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                <div class="home-service-col col-4">
                    <div class="service-thumb col-12">
                        <?php the_post_thumbnail('medium', array('class' => 'img-circle')); ?>
                    </div><!--post-thumb-->
                    <div class="service-title col-12">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_content(); ?></p>
                    </div><!--post-title-->
                </div><!--home-service-->
            <?php  endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div><!--home-services-->

    <div class="home-carousel row mx-0 mt-5">
        <div class="owl-carousel">
            <?php
                $args = array (
                    'post_type' => 'project',
                    'posts_per_page' => 10,
                    'order' => 'ASC'
                );
                $tech_posts = new WP_Query($args);
            ?>
            <?php if ( $tech_posts->have_posts() ) : ?>
                <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                    <div class="carousel-item-col col-4">
                        <?php the_post_thumbnail('medium')?>
                    </div><!--carousel-item-->
                <?php  endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!--owl-carousel-->
    </div><!--home-carousel-->

    <div class="home-posts row mx-0 mt-5">
        <div class="col">
            <div class="section-head">
                <h3>
                    <?php echo get_theme_mod('wplearning_featured_block_1', 'Latest from Technology'); ?>
                </h3>
            </div><!--section-head-->
            <div class="section-content pt-2">
                <?php
                    $args = array (
                        'cat' => 1,
                        'posts_per_page' => 3
                    );
                    $tech_posts = new WP_Query($args);
                ?>
                <?php if ( $tech_posts->have_posts() ) : ?>
                    <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                        <div class="home-post-row row mx-0 mb-2">
                            <div class="post-thumb col-4 px-0">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                            </div><!--post-thumb-->
                            <div class="post-title col-8">
                                <h5><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div><!--post-title-->
                        </div><!--home-post-->
                    <?php  endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div><!--section-content-->
        </div><!--col-->
        <div class="col">
            <div class="section-head">
                <h3>
                    <?php echo get_theme_mod('wplearning_featured_block_2', 'Latest from Social Media'); ?>
                </h3>
            </div><!--section-head-->
            <div class="section-content pt-2">
                <?php
                    $args = array (
                        'cat' => 3,
                        'posts_per_page' => 3
                    );
                    $tech_posts = new WP_Query($args);
                ?>
                <?php if ( $tech_posts->have_posts() ) : ?>
                    <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
                        <div class="home-post-row row mx-0 mb-2">
                            <div class="post-thumb col-4 px-0">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                            </div><!--post-thumb-->
                            <div class="post-title col-8">
                                <h5><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div><!--post-title-->
                        </div><!--home-post-->
                    <?php  endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div><!--section-content-->
        </div><!--col-->
    </div><!--home-posts-->

<?php
get_footer();
?>
