<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); ?>
<div class="main-content <?php echo esc_attr(tmpmela_page_layout()); ?>">
<?php if ((get_option('tmpmela_shop_sidebar') == 'yes') && (!is_active_sidebar('single-product-side-widget-area'))) : ?>
    <div class="single-product-sidebar">
<?php elseif (is_active_sidebar('single-product-side-widget-area') && (get_option('tmpmela_shop_sidebar') == 'no')) : ?>
    <div class="single-product-side-widget-area">
<?php elseif ((is_active_sidebar('single-product-side-widget-area')) && (get_option('tmpmela_shop_sidebar') == 'yes')) :  ?>
    <div class="single-product-sidebar single-product-side-widget-area">
<?php else: ?>
    <div class="main-content-inner-full single-product-full">
<?php endif; ?>
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
	<?php while ( have_posts() ) : the_post(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<?php if (is_active_sidebar('single-product-side-widget-area')) : ?>
			<div class="singleproduct-sidebar">
	        	<div class="single-product-side-widget-area">
	                <?php dynamic_sidebar('single-product-side-widget-area'); ?>
	            </div>
			</div>
      		<?php endif; ?>
		<?php endwhile; // end of the loop. ?>
		
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
	<?php if (get_option('tmpmela_shop_sidebar') == 'yes') : ?>
	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>	
	<?php endif; ?>
	</div>
</div>
<?php get_footer( 'shop' ); ?>