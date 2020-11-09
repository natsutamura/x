<?php
/**
 * The Template for displaying project archives, 
 * including the main showcase page which is a post type archive.
 */
get_header(); ?>

<?php get_template_part( 'template-parts/headline', 'wc' ); ?>

<div id="primary" class="content-area container">
	<div id="wc-page" class="wc-page row">
		<main id="main" class="site-main col-md-<?php if ( false == get_theme_mod( 'sidebar-left' ) && is_active_sidebar( 'sidebar-woocommerce' ) ) { ?>8<?php } ?><?php if ( true == get_theme_mod( 'sidebar-left' ) && is_active_sidebar( 'sidebar-woocommerce' ) ) { ?>8 col-md-push-4<?php } ?><?php if ( !is_active_sidebar( 'sidebar-woocommerce' ) ) { ?>12<?php } ?>" role="main">

		<?php woocommerce_content(); ?>

		</main><!-- #main -->

<?php get_sidebar( 'woocommerce' ); ?>

	</div><!-- #page -->
</div><!-- #primary -->

<?php
get_footer();