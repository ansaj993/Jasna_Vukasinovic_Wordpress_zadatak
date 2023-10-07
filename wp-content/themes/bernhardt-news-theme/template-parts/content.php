<?php
/**
 * Template part for displaying posts
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

	<div class="entry-content">
		<?php
		if(is_singular()){
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bernhardt-news-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

		} else {
			the_excerpt();
			echo '<a href="' . get_post_permalink() . '" class="read-more"> Read more &#8594;</a>';
		}
		

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bernhardt-news-theme' ),
				'after'  => '</div>',
			)
		);

		if(is_singular()){; ?>
			<div class="author">
				<div class="author-image">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 150); 

					$user_id = get_current_user_id(); // Get the ID of the current user
					$custom_field_value_ld = get_user_meta( $user_id, 'linkedin_field', true ); // 
					?>

					<div class="author-social">
						<p>Stay In Touch:</p>
						<a href="mailto:<?php echo get_the_author_meta('email');?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"><defs><style>.a{fill:white;}</style></defs><g transform="translate(0 -80)"><g transform="translate(13.257 82.712)"><path class="a" d="M339.392,149.8l6.742,4.7v-9.6Z" transform="translate(-339.392 -144.896)"/></g><g transform="translate(0 82.712)"><path class="a" d="M0,144.9v9.6l6.742-4.7Z" transform="translate(0 -144.896)"/></g><g transform="translate(0.037 80)"><g transform="translate(0 0)"><path class="a" d="M19.672,80H2.172A1.283,1.283,0,0,0,.96,81.173l9.962,7.241,9.962-7.241A1.283,1.283,0,0,0,19.672,80Z" transform="translate(-0.96 -80)"/></g></g><g transform="translate(0.04 88.36)"><g transform="translate(0 0)"><path class="a" d="M13.1,277.921l-1.769,1.285a.579.579,0,0,1-.687,0L8.871,277.92,1.024,283.4a1.28,1.28,0,0,0,1.21,1.164h17.5a1.28,1.28,0,0,0,1.21-1.164Z" transform="translate(-1.024 -277.92)"/></g></g></g></svg>
						</a>

						<?php if(! empty( $custom_field_value_ld ) ){?>
							<a href="<?php echo $custom_field_value_ld;?>"><img src="/wp-content/themes/bernhardt-news-theme/img/linkedin.svg"/></a>
						<?php } ;?>
					</div>
				</div>

				<div class="author-bio">
					<h3 class="author-name">
						<?php
						echo get_the_author_meta('first_name');
						echo '<span>' . get_the_author_meta('last_name') . '</span>';?>
					</h3>

					<?php echo '<p class="author-nickname">' . get_the_author_meta('nickname') . '</p>';?>
				
					<?php echo '<p class="author-description">' . get_the_author_meta('description') . '</p>';?>
				</div>
			</div>

			<div class="article-share">
				<label for="share">
					<h3>Share this article:</h3>
					<input type="text" value="https://bernhardt.com/news/press-releases/picture-this" name="share" id="share">
					<img src="/wp-content/themes/bernhardt-news-theme/img/Icon awesome-copy.svg" alt="copy-icon"/>
				</label>
			</div>
		<?php }; ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
