<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loveluxe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#285598">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link href="http://aleebox.com/wp-content/themes/aleebox/style.css">
 
  <?php wp_head(); ?>
  <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <header id="masthead" class="site-header">
    <!-- <div class="top-bar row">
      <div style="float: right;">

      </div>
    </div> -->
    <div class="top-bar">
    
        <ul class="top-bar-ul">
          <li><a href="/about-us">About Us</a></li>
          <li><a href="/contact-us">Contact Us</a></li>
      <?php if ( is_user_logged_in() ) { ?>
      <?php $current_user = wp_get_current_user();
        if ($current_user->user_firstname != '') {
          $username =  $current_user->user_firstname;
        } else {
          $username = $current_user->user_email;
        }
      ?>
      <li><?php echo '<a href="/my-account">Hello , '. $username. '!</a>'; ?></li>
      <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
      <?php } else { ?>
<!--      <li><a href="/wp-login.php" title="Members Area Login" rel="home">Sign In</a></li> -->
      <li><a href="http://localhost:1337/wordpress/my-account">Sign In</a></li>
            <li><a href="http://localhost:1337/wordpress/my-account">Create an Account</a></li>
      <?php } ?>
        </ul>
    </div> <!--top bar -->
    <div class="container">
      <div class="row row-eq-height">
        <div class="col-xs-6 col-sm-4 vertical-center hide-mobile-flex">
          <div class="center-block">
            <div class=" search-input-desktop">
              <!-- <input class="form-control" placeholder="Search"></input> -->
              
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 vertical-center hide-mobile-flex">
          <center>
            <img src = "<?php echo get_template_directory_uri(); ?>/img/logo.png" style = "height: 170px; width: 250px; "/>
          </center>
        </div>
        <div class="col-xs-6 col-sm-4 vertical-center hide-mobile-flex">
                <div class="site-user">
              <div class="site-user-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/user-icon.png" width="60px" height="70px"/>
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
              <?php } ?>

                <?php if (is_user_logged_in () ) {  ?>
                  <?php $current_user = wp_get_current_user();
                    echo "<p><b> Hello, </b>", "$username</p>" ;
                 
                      } else {
                      echo " <p><b>Hello, Sign in </b></p>";

                      }
                      ?>

                

                


              
              <p><?php echo "<b>Your Account</b>";?> &nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i></p>
              </div><!-- user content -->
            </div> <!-- site user -->


            <div class="site-bag">
              <div class="site-bag-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bag-icon.png"  width="60px" height="60px"/>
              </div>
             
              <div class="site-bag-content">
                <div class="secondary-cart">


                <p> <?php echo "<b>BAG</b>";?> &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></p>

                <?php
                  $items = WC()->cart->get_cart();
                  global $woocommerce;
                  $item_count = $woocommerce->cart->cart_contents_count;
                  $currency = get_woocommerce_currency_symbol();
                ?>
              <p style="color:#663690; font-style: italic; font-weight: bolder;"><?php echo  $item_count . "<b>&nbsp;ITEM(S)</b>" ;?><a class="cart-totals" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_total(); ?></a></p>
              <div class="cart-dropdown">
                <div class="cart-dropdown-inner">
                  <?php if ($items) { ?>
                  <h4>Cart</h4>
                  <?php
                    foreach($items as $item => $values) { 
                    $_product = $values['data']->post;
                  ?>
                  <div class="dropdown-cart-wrap">
                    <div class="dropdown-cart-left">
                    <?php
                      echo get_the_post_thumbnail( $values['product_id'], 'thumbnail' ); 
                    ?>
                    </div>
                    <div class="dropdown-cart-right">
                      <span><?php echo $_product->post_title; ?></span>
                      <?php
                        global $woocommerce;
                        $currency = get_woocommerce_currency_symbol();
                        $price = get_post_meta( $values['product_id'], '_regular_price', true);
                        $sale = get_post_meta( $values['product_id'], '_sale_price', true);
                        
                        if($sale) {
                      ?>
                      <span ><p class="price"><?php echo $values['quantity']; ?> x <del><?php echo $currency; echo $price; ?></del> <?php echo $currency; echo $sale; ?></span>
                      <?php
                        } elseif($price) {
                      ?>
                      <span ><p class="price"><?php echo $values['quantity']; ?> x <?php echo $currency; echo $price; ?></span>   
                      <?php } ?>   
                  </div> <!-- .dropdown-cart-right -->
                  <div class="clear"></div>
                </div>
                <?php } //if ($items) ?>
                <div class="dropdown-cart-wrap dropdown-cart-subtotal">
                <div class="dropdown-cart-left">
                  <h6>Subtotal</h6>
                </div>
                <div class="dropdown-cart-right">
                  <h6><?php echo WC()->cart->get_cart_total(); ?></h6>
                </div>
                <div class="clear"></div>
              </div> <!-- .cart-dropdown-inner -->
              <?php
                $cart_url = $woocommerce->cart->get_cart_url();
                $checkout_url = $woocommerce->cart->get_checkout_url();
              ?>
              <div class="dropdown-cart-wrap dropdown-cart-links">
                <div class="dropdown-cart-left dropdown-cart-link">
                  <a href="<?php echo $cart_url; ?>">View Cart</a>
                </div>
                <div class="dropdown-cart-right dropdown-checkout-link">
                  <a href="<?php echo $checkout_url; ?>">Checkout</a>
                </div>
                <div class="clear"></div>
              </div>
              <?php } else { ?>
              <h4>Shopping Cart</h4>
              <div class="dropdown-cart-wrap">
                <p>Your cart is empty.</p>
              </div>
              <?php } ?>
            </div>
          </div>
        </div> <!-- end -->
 
              </div> <!--bag content--> 
            </div> <!--site bag -->
        </div>



         
      
      </div> <!-- row -->
    </div> <!--container -->
     
    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false">
        <i class="fa fa-bars"></i>
      </button>
      <div class="mobile-overflow">
        <a class="cart-totals" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;&nbsp;<?php echo WC()->cart->get_cart_total(); ?></a>
      </div>
      <div class="center-block">
      <hr>
        <?php
          wp_nav_menu( array(
            'menu' => 'main',
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>
      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->
  <div id="content" class="site-content">
  <div class="">