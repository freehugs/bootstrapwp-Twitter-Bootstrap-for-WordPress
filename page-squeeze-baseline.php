<?php
/**
 * Template Name: Squeeze Baseline
 * Description: A squeeze fo-sheezy.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 */

get_header('no-nav'); ?>

<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
        <div class="row content">
            <div class="span12" style="height: 25px;">&nbsp;</div>
            <div class="span5 hidden-phone">
                <?php echo get_post_meta($post->ID, 'feature-image', true); ?>
            </div>
            <div class="span5" style="height: 100%; min-height: 100%; margin-bottom: 0px;">
                <div class="blue-feature">
                    <?php the_content();?>
                </div>
            </div>
        </div><!-- .row content -->
   </div>
<?php endwhile; // end of the loop. ?>




<?php get_footer('blank'); ?>