<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
?>
<div class="span4">
            <?
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("sidebar-page");
?>

          </div><!-- /.span4 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
