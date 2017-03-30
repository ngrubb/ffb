<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
/* if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) : */
?>

	<aside class="widget-area" role="complementary">

		<div class="footer-copyright">
				<a href="/" class="footer-logo" ><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"/></a>
				<p class="copyright">&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		</div>
		<?php

		/* if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php } */

		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php /* endif; */ ?>
