<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bernhardt_News_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-wrap">
			<div class="footer-top">
				<div class="footer-top-content">
					<h3>Join Our Email List</h3>
					<p>We're so glad you visited our Web site! And we'd like to stay in touch with you.</p>
				</div>

				<div class="footer-top-buttons">
					<button>Consumer</button>
					<button>to the trade</button>
				</div>
			</div>

			<div class="footer-logo">
				<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' );?>
			</div>

			<div class="footer-columns">
				<?php dynamic_sidebar('footer-col-1');?>
				<?php dynamic_sidebar('footer-col-2');?>
				<?php dynamic_sidebar('footer-col-3');?>
				<?php dynamic_sidebar('footer-col-4');?>
				<?php dynamic_sidebar('footer-col-5');?>
				<?php dynamic_sidebar('footer-col-6');?>
			</div>

			<div class="footer-bottom">
				<p>
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Copyright © 2020 Bernhardt Furniture Company. All Rights Reserved.', 'bernhardt-news-theme' ), 'WordPress' );
					?>
				</p>

				<?php dynamic_sidebar('footer-bottom');?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
