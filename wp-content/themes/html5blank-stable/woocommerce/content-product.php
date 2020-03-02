<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li class="col-sm-3"><div class="product-box" <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Get HTML to show product stock.
	 *
	 * @since  3.0.0
	 * @param  WC_Product $product Product Object.
	 * @return string
	 */
	 do_action( 'woocommerce_get_stock_html');

	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );


	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */ do_action( 'woocommerce_before_shop_loop_item_title' );
	?> 
	<div class="card-product-li">
	<?php

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */	


	do_action( 'woocommerce_shop_loop_item_title' );
	/**
    * woocommerce_before_shop_loop hook.
    *
    * @hooked woocommerce_result_count - 20
    * @hooked woocommerce_catalog_ordering - 30
    */
    
    do_action( 'woocommerce_shop_loop_subcategory_titl' );
    ?>
	    <div class="combine">
	    <?php
		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );
		
		?>
		</div>
	</div>
</li>
