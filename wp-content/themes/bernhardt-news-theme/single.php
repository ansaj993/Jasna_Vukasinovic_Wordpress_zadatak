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

		<main id="primary" class="site-blog">
			<div class="article-wrap">
				<?php get_sidebar();
				
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; // End of the loop.
				get_sidebar();		
					

				$the_query = new WP_Query(
					array (
						'numberposts' => 3,
						'post__not_in' => array(get_the_ID()) // exclude current post ID
					)
				);				
				;?>
				</div>

				<?php
					if($the_query->have_posts()) {
						echo '<div class="related-posts">';
						echo '<h2>Similar Posts</h2>';
						echo '<ul class="related-posts-list">';
						while($the_query->have_posts()){
							$the_query->the_post();
							echo '<li><a href="' . get_post_permalink() . '" class="related-post">' . 
								'<div class="related-post-thumbnail">' .get_the_post_thumbnail( $post_id, 'custom-post-thumbnail') . '</div>
								<div class="related-post-content">
								<p class="entry-meta">' . get_the_date() . '<span>' . get_the_time() .'</span></p>
								<h4>' . get_the_title() . '</h4>' . 
								'<a href="' . get_post_permalink() . '" class="read-more"> Read more &#8594;</a>
								</a>
								</div></li>';
						}
						echo '</ul>';
						echo '</div>';
					};
				?>
			</main><!-- #main -->
<?php
get_footer();
