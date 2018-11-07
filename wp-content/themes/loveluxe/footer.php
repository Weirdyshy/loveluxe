<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loveluxe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
      	<div class="site-info">
      		<div class="row" style="padding:0px; padding-top: 30px; margin:auto; text-align: center; padding-bottom: 30px;">
      			<div id="footer-connect-div1" class="col-6 col-md-4 col-sm-4 footer-connect-div">
      				<h4 class="footer-connect-text"> CONNECT WITH US </h4>
      					<ul class="footer-ul">
      						<li>
      							<i class="fa fa-facebook footer-link" aria-hidden="true"></i>
      							<a class="footer-link" a href="#"> &nbsp; &nbsp; Facebook</a>
      						</li>
      						<li>
      							<i class="fa fa-instagram footer-link" aria-hidden="true"></i>
      							<a class="footer-link" a href="#"> &nbsp; &nbsp; Instagram</a>
      						</li>
      						<li>
      							<i class="fa fa-twitter footer-link" aria-hidden="true"></i>
      							<a class="footer-link" a href="#"> &nbsp; &nbsp; Twitter</a>
      						</li>
      						<li>
      							<i class="fa fa-phone footer-link" aria-hidden="true"></i>
      							<a class="footer-link" a href="#"> &nbsp; &nbsp; VIBER/WHATSAPP</a>
      							
      						</li>
      						<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +63920.973.3159</li>
      					</ul>
      			</div>

      			

	      		<div class="col-6 col-md-4 col-sm-4"style="text-align:center !important; margin-top:10px;">
	      			<h4 class="footer-connect-text" style="text-align:center;"> STAY IN TOUCH</h4>
	      				<hr style="width: 50%;">
	      				<div class="tnp tnp-subscription" style="margin-top:24px; ">
							<form action="..." method="post" style="display:inline-flex; width: auto;">
							  <div class="tnp-field tnp-field-email">
							    
							    <input type="email" class="tnp-email" name="ne" value="" required placeholder="Email Address" required style="height:40px; border:2px solid #b1adc6;">
							  </div>
							  <div class="tnp-field tnp-field-submit" style="margin-left: 12px;">
							    <input style="background-color: #673691;" class="tnp-submit" type="submit" value="Submit">
							  </div>
							</form>
						</div>
				</div>



				<div class="col-6 col-md-4 col-sm-4 footer-connect-div">
				      				<h4 class="footer-connect-text"> CUSTOMER CARE </h4>

				      				<div class="col-6">
				      					<ul class="footer-ul">
				      						<li>
				      							<a href="http://localhost:1337/wordpress/about-us/"> About Us </a>
				      						</li>
				      						<li>
				      							<a href="http://localhost:1337/wordpress/contact-us/"> Contact Us </a>
				      						</li>
				      						<li>
				      							<a href="/shop"> How to Order </a>
				      						</li>
				      						<li>
				      							<a href="http://localhost:1337/wordpress/shipping-and-delivery/"> Shipping & Delivery </a>
				      						</li>
				      					</ul>
				      				</div>

				      				<div class="col-6">
					      				<ul class="footer-ul">
					      					<li>
					      						<a href="http://localhost:1337/wordpress/returns-exchange-policy/"> Return & Exchange Policy </a>
					      					</li>
					      					<li>
					      						<a href="http://localhost:1337/wordpress/terms-and-conditions/"> Terms and Conditions</a>
					      					</li>
					      					<li>
					      						<a href="http://localhost:1337/wordpress/privacy-policy/"> Privacy Policy </a>
					      					</li>
					      					
					      				</ul>
					      			</div>
					      		</div>
			</div> <!-- ROW -->

			<div class="row" style="text-align: center; margin-top: 20px;">
				<div class="bank-icon">
					<span>
						<img src="<?php echo get_template_directory_uri(); ?>/img/bpi.png">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/bdo.png">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/paypal.png">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/visa.png">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/master-card.png">

					</span>
				</div>
			</div>

			
				<hr style="width: 50%;">
				<p style="text-align: center; margin-bottom: 0px !important;"> &copy;LOVELUXBAGS TRADING INC. | ALL RIGHTS RESERVED | DESIGNED AND DEVELOPED BY: PSD CREATIVE DESIGN </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<script>
			 jQuery(document).ready(function() {

			   /* $('#SlideCarousel').carousel({
			    interval: 99999
			    });*/
				 //$(".dropdown-toggle").dropdown();

				 //  $('#product-thumbnail-img-div img a').removeAttr('style');
				// var length_mo = $(".ms-slide");
				// alert(length_mo.length);

				//$('.ms-slide').removeAttr('data-fill-mode');
				//$('.ms-slide').attr("data-fill-mode", 'stretch');

					

			  });

				 jQuery('.secondary-cart').hover(function() {
					jQuery('.cart-dropdown').addClass('cart-hover');
				  }, function() {
					jQuery('.cart-dropdown').removeClass('cart-hover');
				  })	




		</script>
		
		
		<script>jQuery.noConflict(true);</script>
<script>
// code for slick js
	
			  // slick ini

			  jQuery('.slick-sl').slick({
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
  {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 4,

      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,

      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,

      }
    },
     {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

</script>

<?php wp_footer(); ?>

</body>
</html>
