<?php
/**
 * Template Name: Empty No Header
 * Description: YAY
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 */
get_header('no-nav'); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="row content">
        <?php the_content();?>
    </div><!-- .row content -->
</div>
<?php endwhile; // end of the loop. ?>


<?php get_footer('blank'); ?>