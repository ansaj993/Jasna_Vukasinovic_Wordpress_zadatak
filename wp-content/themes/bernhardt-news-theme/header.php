<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bernhardt_News_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bernhardt-news-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<?php if(is_single()){
			bernhardt_news_theme_post_thumbnail();
		} ;?>
	
		<nav id="site-navigation" class="main-navigation">
			<div class="nav-container">
				<div class="nav-left">
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					}
					else {
						?>
						<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
						<?php
					}

					$bernhardt_news_theme_description = get_bloginfo( 'description', 'display' );
					if ( $bernhardt_news_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $bernhardt_news_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>

				</div><!-- .site-branding -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#8801;</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>
			
			<div class="nav-right">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					)
				);

				dynamic_sidebar('header-sidebar');
				?>
			</div>
			</div>
		</nav><!-- #site-navigation -->

		<?php if(is_single()){
			the_title( '<h1 class="entry-title">', '</h1>' );
		};?>
	</header><!-- #masthead -->
