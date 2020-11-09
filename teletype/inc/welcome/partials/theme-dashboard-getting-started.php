<?php

/**
 * This file is used to markup the "Getting Started" section on the dashboard page.
 *
 * @package Teletype
 */

// Links that are used on this page.
$getting_started_links = array(
    'demo' => 'http://demos.dinevthemes.com/teletype/',
    'docs' => 'http://docs.dinevthemes.com/teletype-plus/',
	'premium' => 'http://dinevthemes.com/wordpress-themes/teletype-plus/',
	'wpforms' => 'https://wordpress.org/plugins/wpforms-lite/'
);

?>

<div class="tab-section">
    <h3 class="section-title"><?php esc_html_e( 'Recommended plugins', 'teletype' ); ?></h3>
	
<ul>
	<li>
	<?php
        // Display link to plugin page.
        printf( '<a href="%1$s" target="_blank">%2$s</a>', esc_url( $getting_started_links['wpforms'] ), esc_html__( 'Contact Form by WPForms', 'teletype' ) );
    ?>
	</li>
</ul>

</div><!-- .tab-section -->

<div class="tab-section">
    <h3 class="section-title"><?php esc_html_e( 'Front Page Setup', 'teletype' ); ?></h3>

    <p><?php esc_html_e( 'If you want to make a static page with sortable sections as the main page of your site , then first of all create a new page with the default template by going to Pages > Add New. Then in the same way create a blank page for the Posts Page.', 'teletype' ); ?></p>
	<p><?php esc_html_e( 'Now you can go to Appearance > Customize > Static Front Page and choose your new created Pages as your Front Page and Posts Page.', 'teletype' ); ?></p>
	<p><?php esc_html_e( 'Next you can set the visibility and order of the Front-page sections in the Customizer section called Frontpage Sorting.', 'teletype' ); ?></p>

</div><!-- .tab-section -->

<div class="tab-section">
    <h3 class="section-title"><?php esc_html_e( 'Theme Options', 'teletype' ); ?></h3>

    <p><?php esc_html_e( 'You can use of the Customizer to provide you with the theme options. Press the button below to open the Customizer and start making changes.', 'teletype' ); ?></p>

    <p><a href="<?php echo wp_customize_url(); // WPCS: XSS OK. ?>" class="button" target="_blank"><?php esc_html_e( 'Customize Theme', 'teletype' ); ?></a></p>
</div><!-- .tab-section -->
