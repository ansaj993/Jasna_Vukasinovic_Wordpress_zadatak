<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bernhardt_News_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bernhardt-news-theme' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bernhardt-news-theme' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		get_sidebar();		
		

	$the_query = new WP_Query(
		array (
			'numberposts' => 3,
			'post__not_in' => array(get_the_ID()) // exclude current post ID
		)
	);

	if($the_query->have_posts()) {
		echo '<h2>Similar Posts</h2>';
		echo '<ul class="related-posts">';
		while($the_query->have_posts()){
			$the_query->the_post();
			echo '<li><a href="' . get_post_permalink() . '" class="related-post">' . 
				'<div class="related-post-thumbnail">' .get_the_post_thumbnail() . '</div>
				<div class="related-post-content">
				<p class="entry-meta">' . get_the_date() . '<span>' . get_the_time() .'</span></p>
				<h4>' . get_the_title() . '</h4>' . 
				'<a href="' . get_post_permalink() . '" class="read-more"> Read more →</a>
				</a>
				</div></li>';
		}
		echo '</ul>';
	}
	
	;?>
	</main><!-- #main -->

<?php
get_footer();
