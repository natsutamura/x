<?php
/**
 * Template part for displaying site branding
 *
 * @package Teletype
 */
?>

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>

	<?php if ( ! is_front_page() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<?php endif; ?>

	<div class="navbar-brand">

		<?php
			$logo = '';
			if ( function_exists( 'the_custom_logo' ) && get_theme_mod( 'custom_logo' ) ) {
				$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
				$logo = esc_url( $image[0] );
			} else {
				$logo = esc_url( get_theme_mod( 'logo' ) );
			}
			if ( $logo ) { ?>
				<img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="alignleft" />
		<?php
			}
			if ( 1 != get_theme_mod( 'disable-site-title', 0 ) ) { ?>
				<span class="site-title"><?php bloginfo( 'name' ); ?></span>
		<?php
			}
			?>

	</div>

	<?php if ( ! is_front_page() ) : ?>
		</a>
	<?php endif; ?>

		<?php
			if ( 1 != get_theme_mod( 'disable-site-tagline', 0 ) ) {
			?>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
		<?php
			}
			?>