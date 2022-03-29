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
    <title><?php the_title(); ?> | <?php bloginfo('name')?></title>   
    <?php wp_head(); ?>
</head>
<body>

    <div class="site-main container">
        <header class="site-header">
            <div class="site-branding">
                <?php the_custom_logo(); ?>
            </div><!--site-branding-->
        </header>

        <div class="site-navigation pt-3">
            <?php 
                wp_nav_menu( array (
                    'theme_location' => 'primary'
                ) ); 
            ?>
        </div><!--site-navigation-->