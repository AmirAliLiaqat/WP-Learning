<?php
/**
 * Footer Template.
 *
 * @package wplearning
*/
?>

    <footer class="site-footer">
        <div class="row mx-0 footer-widgets">
            <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php dynamic_sidebar('footer-1'); ?>
            </div><!--widget-->
            <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php dynamic_sidebar('footer-2'); ?>
            </div><!--widget-->
            <div class="widget-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php dynamic_sidebar('footer-3'); ?>
            </div><!--widget-->
        </div><!--footer-widgets-->
    </footer>
</div><!--container-->

<?php wp_footer(); ?>

</body>
</html>