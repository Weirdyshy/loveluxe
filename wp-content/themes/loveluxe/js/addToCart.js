jQuery(".product-cart-ajax").click(function(e) {
	var self = jQuery(this).parent().parent().parent().parent();
	e.preventDefault();
	var id = jQuery(this).attr('alt');
	var qty  = 1;
	jQuery('.cart-dropdown-inner').empty();
	// jQuery('.spinner').css('display','block');
	// jQuery(this).find('.fa-spin').css('display','block');
	// jQuery('.fa-spin').css('display','block');
	// self.addClass('hide-caption');
	// console.log(self);
	// jQuery(this).parent().addClass('hide-text');
	//alert(id);
	var capt = self.find('.image-caption vertical-center');
	var rr = self.find('.fa-spin');
	var addToCartText = self.find('.product-cart-ajax');

	addToCartText.text("Adding to cart...");
	// rr.fadeIn();
	
	capt.css('top','0%');
	
	jQuery.ajax ({
		url: ajax_object.ajax_url,  
		type:'POST',
		data:'action=add_cart_single_ajax&product_id=' + id+ '&quantity=' + qty,
		success:function(results) {
			//jQuery('.fa-spin').css('display','none');
			// 			jQuery(this).parent().renoveClass('hide-text');
			// self.css('top','-100%');
			
			addToCartText.text("Added to cart!");

			jQuery('.cart-dropdown-inner').append(results);
			var cartcount = jQuery('.item-count').html();
			// jQuery('.cart-totals span').html(cartcount);
			jQuery('.single_add_to_cart_button').removeClass('adding-cart');
			jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
			jQuery('.cart-dropdown').addClass('cart-hover');
			setTimeout(function () { 
				jQuery('.cart-dropdown').removeClass('cart-hover');
			}, 5000);

			console.log(results);
		}
	});
	
	
	
});


