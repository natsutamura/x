jQuery( document ).ready(

		/**
		 * Woocomerce form field compatibility issue
		 */
		function($) {
			$( 'select[name="orderby"]').addClass( 'form-control' );
			$( 'input[name="account_first_name"]').addClass( 'form-control' );
			$( 'input[name="account_last_name"]').addClass( 'form-control' );
			$( 'input[name="account_display_name"]').addClass( 'form-control' );
			$( 'input[name="account_email"]').addClass( 'form-control' );
			$( 'input[name="coupon_code"]').addClass( 'form-control' );
			$( 'input[type="password"]').addClass( 'form-control' );
			$( 'input[type="number"]').addClass( 'form-control form-control-sm' );
			$( '.woocommerce-MyAccount-navigation ul').addClass( 'list-group' );
			$( 'li.woocommerce-MyAccount-navigation-link').addClass( 'list-group-item' );
		}
		
( jQuery ) );
