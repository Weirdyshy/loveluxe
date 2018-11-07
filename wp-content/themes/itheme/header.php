<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itheme
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itheme' ); ?></a>






	<header id="masthead" class="site-header">
		<div class="site-branding">

			<div class="site-bag">
				<div class="site-bag-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bag-icon.png" width="60px" height="60px">
				</div>
				<div class="site-bag-content">
					<a style="text-decoration: none;" href="#" id="cart"><p> <?php echo "<b>BAG</b>";?> &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></a></i></p>
					<p style="color:#663690; font-style: italic; font-weight: bolder;"><?php echo "ITEM(S)", wc_cart_totals_order_total_html(); ?>   </p>
				</div>
					<div class="shopping-cart" style="display:none;">
						<div class="shopping-cart-header">
													
						</div> <!--end shopping-cart-header -->	
										    		
						<?php if ( ! WC()->cart->is_empty() ) : ?>
							<ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
								<?php
									do_action( 'woocommerce_before_mini_cart_contents' );

									foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
										$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
										$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

										if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
											$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
											$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
											$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
											$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
											?>
											<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
												<?php
												echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
													'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
													esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
													__( 'Remove this item', 'woocommerce' ),
													esc_attr( $product_id ),
													esc_attr( $cart_item_key ),
													esc_attr( $_product->get_sku() )
												), $cart_item_key );
												?>
												<?php if ( empty( $product_permalink ) ) : ?>
													<?php echo $thumbnail . $product_name . '&nbsp;'; ?>
												<?php else : ?>
													<a href="<?php echo esc_url( $product_permalink ); ?>">
														<?php echo $thumbnail . $product_name . '&nbsp;'; ?>
													</a>
												<?php endif; ?>
												<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>

												<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
											</li>
											<?php
										}
									}

									do_action( 'woocommerce_mini_cart_contents' );
								?>
							</ul>

							<!-- SUB TOTALS / VIEW / CHECK OUT -->
							<p class="woocommerce-mini-cart__total total"><strong><?php _e( 'Subtotal', 'woocommerce' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

							<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

							<p class="woocommerce-mini-cart__buttons buttons"><?php do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?></p>

							<?php else : ?>

							<p class="woocommerce-mini-cart__empty-message"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></p>

							<?php endif; ?>

							<?php do_action( 'woocommerce_after_mini_cart' ); ?>																			  
				 </div> <!--end shopping-cart -->
			</div> <!--.site bag -->

				<div class="site-user">
									<div class="site-user-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/img/user-icon.png" width="60px" height="60px">
									</div>
									<div class="site-user-content">
										 <?php if ( is_user_logged_in() ) { ?>
											<?php $current_user = wp_get_current_user();
											  if ($current_user->user_firstname != '') {
												  $username =  $current_user->user_firstname;
											  } else {
												  $username = $current_user->user_email;
											  }
											?>
										<p style="color:#663690; font-weight: bolder; "><?php echo 'Hello , '. $username. '!</a>'; ?></p>
										<?php } ?>
										<p <?php echo "Hello, Sign in!";?></p>
										<p><a style="text-decoration: none;" href="#" id="account"><?php echo "<b>Your Account</b>";?> &nbsp; <i class="fa fa-caret-down" aria-hidden="true"></a></i></p>

									</div> <!-- user content -->
						<div class="my-account"  style="display:none;">
							<div class="log-out">
								
								 	<li><a href="#"><?php echo "Account" ;?></a></li>
								 	<li><i class="fas fa-sign-out-alt"></i><?php echo "Log out " ;?></li>
							 	
							</div>
						</div>
				</div> <!--.site user -->

				<div class="col">
			      		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">	
						</div> <!--col -->
		</div><!-- .site-branding -->

<hr>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'itheme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
