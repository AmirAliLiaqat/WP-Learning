<?php
/**
 * Header Template.
 *
 * @package wplearning
*/
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style type="text/css">
        body{
            background: <?php echo get_theme_mod('wplearning_body_bg_color', '#fff'); ?>;
        }
        .site-navigation{
            background: <?php echo get_theme_mod('wplearning_nav_bg_color', '#2ca358'); ?>;
        }
    </style>
</head>
<body>

    <div class="site-main container">
        <header class="site-header">
            <div class="site-branding">
                <?php the_custom_logo(); ?>
            </div><!--site-branding-->
        </header>

        <div class="site-navigation">
            <?php 
                wp_nav_menu( array (
                    'theme_location' => 'primary'
                ) ); 
            ?>
        </div><!--site-navigation-->