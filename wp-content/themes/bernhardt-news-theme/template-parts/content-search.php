<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bernhardt_News_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_category();
		the_title( '<h2>', '</h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<p>
					<?php echo get_the_date() . '<span>' . get_the_time() . '</span>';?>
				</p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt();

		echo '<a href="' . get_post_permalink() . '" class="read-more"> Read more &#8594;</a>';?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
