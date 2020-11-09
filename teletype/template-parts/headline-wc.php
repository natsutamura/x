<?php
/**
 * Template part for displaying Portfolio single headline section.
 *
 * @package Teletype
 */
?>

<?php
	if( is_product() && !is_active_sidebar( 'sidebar-woocommerce' ) ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center"<?php teletype_header_bg(); ?>>
         		<div class="head-content container">
		            <?php
						the_title( '<h1>', '</h1><hr>' );
						if ( has_excerpt() ) :
							the_excerpt();
						endif;
					?>
         		</div>
		<span class="overlay-white"></span>
      	</section>
<?php
	endif; ?>


<?php
	if( is_product() && is_active_sidebar( 'sidebar-woocommerce' ) ) : ?>

	<!-- Headline Section -->
	<section id="headline"<?php teletype_header_bg(); ?>>

		<div class="container caption-wrapper">
			<div class="single-caption">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
	            <?php
					if ( has_excerpt() ) :
						the_excerpt();
					endif;
				?>
         </div>
		 <span class="overlay-white"></span>
      	</section>
<?php
	endif; ?>
	
<?php
	if( is_product_category() || is_product_tag() ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center"<?php teletype_header_bg(); ?>>
        <div class="head-content container">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<p>', '</p>' );
				?>
        </div>
		<span class="overlay-white"></span>
    </section>
<?php
	endif; ?>

<?php
	if( is_shop() ) : ?>

	<!-- Headline Section -->
	<section id="headline" class="text-center"<?php teletype_header_bg(); ?>>
        <div class="head-content container">
			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
        </div>
		<span class="overlay-white"></span>
    </section>
<?php
	endif; ?>