<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products" >
		<h2 class="related-h2"><?php esc_html_e( 'RELATED PRODUCTS', 'woocommerce' ); ?></h2>

		<ul class="related-product">
	
			<?php woocommerce_product_loop_start(); ?>
		
				
				
	
		 	
					<?php foreach ( $related_products as $related_product ) : ?>



					<?php
					 	$post_object = get_post( $related_product->get_id() );

						setup_postdata( $GLOBALS['post'] =& $post_object );

						wc_get_template_part( 'content' , 'woocommerce' ); ?>

							<?php
							    global $product;
							    $id = $related_product->get_id();
							    $name = get_the_title();
							    $permalink = get_the_permalink();
							    $thumbnail = woocommerce_get_product_thumbnail();
							    $price = $product->get_price();
							?>
                                <div class="related-product-image"> 
                                <li class="related-product <?php echo $id; ?>">
                                    <?php echo $thumbnail; ?> 
                                    <div class="related-image-border">
                                    	<div class="related-image-caption vertical-center">
                                       
                                         <p class="add-to-cart-caption"><a href="<?php echo $permalink;?>">VIEW PRODUCT</a></p>
                                                <div class="related-product-details">
                                                        <span class="related-product-name" style="color: white;"><?php echo $name; ?></span><br>
                                                         <span class="related-product-price" style=" color:white;">₱<?php echo $price; ?></span>
                                                </div>   
                                        </div> 
                                    </div>
                                </div>
              

				<?php endforeach; ?>
				              </li>

                        
			</ul>

				<?php woocommerce_product_loop_end(); ?>
			</div> <!-- archive pro -->

	</section>

				</div> <!-- col-->


</div> <!--row-->
 



</div> <!-- container -->
<?php endif;

wp_reset_postdata();





