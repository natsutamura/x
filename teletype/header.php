<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Teletype
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<?php 
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
	?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teletype' ); ?></a>

<header id="masthead" class="site-header" role="banner">
<!-- Navigation -->
      <nav id="main-menu" class="navbar navbar-default navbar-fixed-top">
         <div class="container">

            <div class="navbar-header">
				<?php
				// site branding
				get_template_part( 'template-parts/site', 'branding' );
				?>
            </div>

            <!-- Primary Menu -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php teletype_main_menu(); ?>
            </div>
            <!-- end Primary Menu -->

         </div><!-- .container -->
      </nav>
</header><!-- #masthead -->

<!-- Main content -->
<div id="content" class="site-content">