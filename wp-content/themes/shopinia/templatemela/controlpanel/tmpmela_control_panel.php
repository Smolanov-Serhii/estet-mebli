<?php
add_action( 'wp_head', 'tmpmela_customstyle' );
function tmpmela_customstyle() { ?>
<?php
$font_family1 = get_option('tmpmela_bodyfont');
$font_family1 = str_replace(' ', '+', $font_family1);
$font_family2 = get_option('tmpmela_navfont');
$font_family2 = str_replace(' ', '+', $font_family2);
$font_family3 = get_option('tmpmela_h1font');
$font_family3 = str_replace(' ', '+', $font_family3);
$font_family4 = get_option('tmpmela_h2font');
$font_family4 = str_replace(' ', '+', $font_family4);
$font_family5 = get_option('tmpmela_h3font');
$font_family5 = str_replace(' ', '+', $font_family5);
$font_family6 = get_option('tmpmela_h4font');
$font_family6 = str_replace(' ', '+', $font_family6);
$font_family7 = get_option('tmpmela_h5font');
$font_family7 = str_replace(' ', '+', $font_family7);
$font_family8 = get_option('tmpmela_h6font');
$font_family8 = str_replace(' ', '+', $font_family8);
$font_family9 = get_option('tmpmela_footerfont');
$font_family9 = str_replace(' ', '+', $font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8,$font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array= array_unique($fonts_array);
foreach ($fonts_array as $key => $val) {
	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Open+Sans'){ ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo esc_attr($val); ?>' rel='stylesheet' type='text/css' />
	<?php }
}
// end REMOVES DUPLICATE GOOGLE FONT CALL
?>
<style type="text/css">
	<?php if( (get_option('tmpmela_h1font') == "Other+Fonts") || get_option('tmpmela_h1font') == "please-select"){  
	if	(get_option('tmpmela_h1font_other') != ""){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h1font_other'))); ?>', Arial, Helvetica, sans-serif;		
	}	
	<?php } } elseif(get_option('tmpmela_h1font') != "" && get_option('tmpmela_h1font') != "please-select"){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h1font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tmpmela_h1color') != ""){ ?>
	h1 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h1color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h2font') == "Other+Fonts") || get_option('tmpmela_h2font') == "please-select"){  
	if	(get_option('tmpmela_h2font_other') != ""){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h2font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_h2font') != "" && get_option('tmpmela_h2font') != "please-select"){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h2font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tmpmela_h2color') != ""){ ?>
	h2 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h2color')); ?>;	
	}	
	<?php } ?>
	<?php 
	if( (get_option('tmpmela_h3font') == "Other+Fonts") || get_option('tmpmela_h3font') == "please-select"){  
	if	(get_option('tmpmela_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h3font') != "" && get_option('tmpmela_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tmpmela_h3color') != ""){ ?>
	h3 { color:#<?php echo esc_attr(get_option('tmpmela_h3color')); ?>;}
	<?php } ?>
	<?php if( (get_option('tmpmela_h4font') == "Other+Fonts") || get_option('tmpmela_h4font') == "please-select"){  
	if	(get_option('tmpmela_h4font_other') != ""){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h4font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h4font') != "" && get_option('tmpmela_h4font') != "please-select"){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h4font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>	
	<?php if(get_option('tmpmela_h4color') != ""){ ?>
	h4 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h4color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h5font') == "Other+Fonts") || get_option('tmpmela_h5font') == "please-select"){  
	if	(get_option('tmpmela_h5font_other') != ""){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h5font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h5font') != "" && get_option('tmpmela_h5font') != "please-select"){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h5font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tmpmela_h5color') != ""){ ?>
	h5 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h5color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tmpmela_h6font') == "Other+Fonts") || get_option('tmpmela_h6font') == "please-select"){  
	if	(get_option('tmpmela_h6font_other') != ""){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h6font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tmpmela_h6font') != "" && get_option('tmpmela_h6font') != "please-select"){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h6font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php }  ?>	
	<?php 
	if(get_option('tmpmela_h6color') != ""){ ?>
	h6 {	
		color:#<?php echo esc_attr(get_option('tmpmela_h6color')); ?>;	
	}	
	<?php } ?>

	a {
		color:#<?php echo esc_attr(get_option('tmpmela_link_color')); ?>;
	}
	a:hover ,.header-tag-widget .tagcloud a:hover,.woocommerce ul.products li.product .product-name:hover,
	li.product a:hover .product-name, .entry-meta a:hover ,
	.tabs a.current, a.active, .entry-thumbnail .comments-link a:hover,
	.post-detail a:hover ,
	.current-cat > a,.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover,
	.woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover,
	.woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover,
	.woocommerce .entry-summary a.compare.button:hover,
	.woocommerce .entry-summary .compare.button:hover,
	.woocommerce .entry-summary a.compare.button.added:hover,
	.woocommerce .summary .product_meta .posted_in a:hover,
	.woocommerce .summary .product_meta .tagged_as a:hover,
	.brand span a:hover,
	.social a:hover,
	.post-navigation a:hover .fa,
	.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price
	{
		color: #<?php echo esc_attr(get_option('tmpmela_hoverlink_color')); ?>;
	}
	.loadgridlist-wrapper button.woocount, .blog-posts-content .read-more a{
		color: #<?php echo esc_attr(get_option('tmpmela_hoverlink_color')); ?>;
	}
	.loadgridlist-wrapper button.woocount:hover, .blog-posts-content .read-more a:hover{
		color:#<?php echo esc_attr(get_option('tmpmela_link_color')); ?>;
	}
	.loadgridlist-wrapper button.woocount::after, .blog-posts-content .read-more a::after{
		background-color: #<?php echo esc_attr(get_option('tmpmela_link_color')); ?>;
	}
	.cms-banner-item .link-text::after{
		background-color: #<?php echo esc_attr(get_option('tmpmela_hoverlink_color')); ?>;
	}
	.woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before,
	.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover:before,
	.woocommerce .entry-summary .compare.button:hover:before,
	.woocommerce .entry-summary .compare.button:hover::before,
	.woocommerce .entry-summary a.compare.button.added:hover::before,
	.woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover::before{
		color:#<?php echo esc_attr(get_option('tmpmela_hoverlink_color')); ?>;
	}
	.site-footer .widget-title{
		color:#<?php echo esc_attr(get_option('tmpmela_footer_title_color')); ?>; 
	}
	.footer a, .site-footer a, .site-footer, #menu-footer-navigation li .sub-menu li a{
		color:#<?php echo esc_attr(get_option('tmpmela_footerlink_color')); ?>; 
	}
	.footer a:hover, .footer .footer-links li a:hover, .site-footer a:hover, #menu-footer-navigation li .sub-menu li a:hover {
		color:#<?php echo esc_attr(get_option('tmpmela_footerhoverlink_color')); ?>;		 
	}
	.footer-newsletter .theme-container{
		background-color:#<?php echo esc_attr(get_option('tmpmela_footer_newsletter_bkg_color')) ; ?>;
	}
	.site-footer
	{
		background-color:#<?php echo esc_attr(get_option('tmpmela_footer_bkg_color')) ; ?>;
		<?php if(get_option('tmpmela_footer_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_url(get_option('tmpmela_footer_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footer_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('tmpmela_footer_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_footer_back_attachment')); ?>;
		<?php } ?>
	}
	<?php 
	if( (get_option('tmpmela_h3font') == "Other+Fonts") || get_option('tmpmela_h3font') == "please-select"){  
	if	(get_option('tmpmela_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_h3font') != "" && get_option('tmpmela_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_h3font'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	<?php 
	if( (get_option('tmpmela_footerfont') == "Other+Fonts") || get_option('tmpmela_footerfont') == "Please-Select"){  
	if	(get_option('tmpmela_footerfont_other') != ""){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footerfont_other'))); ?>', Arial, Helvetica, sans-serif;
	}
	<?php } } elseif(get_option('tmpmela_footerfont') != "" && get_option('tmpmela_footerfont') != "please-select"){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_footerfont'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>
	.site-footer {
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_footer_bkg_color'))); ?>; 
	}
	.footer-bottom{
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_footer_bottom_bkg_color')),esc_attr(get_option('tmpmela_footer_bottom_bkg_color_opacity'))); ?>;
	}	
	body {
		background-color:#<?php echo esc_attr(get_option('tmpmela_bkg_color')) ; ?> ;
		background-image: url("<?php echo esc_attr(get_option('tmpmela_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_back_position'))); ?>;
		background-repeat:<?php echo get_option('tmpmela_back_repeat'); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_back_attachment')); ?>;		
		color:#<?php echo esc_attr(get_option('tmpmela_bodyfont_color')); ?>;
	} 	
	.topbar-outer{
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_topbar_color')),esc_attr(get_option('tmpmela_topbar_bkg_opacity'))); ?>;
		color:#<?php echo esc_attr(get_option('tmpmela_topbar_text_color')); ?>; 
	}
	.topbar-main a{ color:#<?php echo esc_attr(get_option('tmpmela_topbar_link_color')); ?>; }
	.topbar-main a:hover{ color:#<?php echo esc_attr(get_option('tmpmela_topbar_link_hover_color')); ?>; }
	
	.mega-menu ul li a{color:#<?php echo esc_attr(get_option('tmpmela_top_menu_text_color')); ?>; }
	.mega-menu ul li a:hover{
		color:#<?php echo esc_attr(get_option('tmpmela_top_menu_texthover_color')); ?>;
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_menu_tag_background_color'))); ?>;
	}
	
	.mega-menu ul li .sub a{color:#<?php echo esc_attr(get_option('tmpmela_sub_menu_text_color')); ?>; }
	.mega-menu ul li .sub a:hover{color:#<?php echo esc_attr(get_option('tmpmela_sub_menu_texthover_color')); ?>; }
	
	.mega-menu ul li .sub {background-color:#<?php echo esc_attr(get_option('tmpmela_sub_menu_bkg_color')) ; ?> ;	}
	.home .site-header:hover,.sticky-menu .header-style, .home.blog .site-header,
	.site-header{
		background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_header_top_bkg_color'))); ?>;
		<?php if(get_option('tmpmela_header_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('tmpmela_header_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_header_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('tmpmela_header_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tmpmela_header_back_attachment')); ?>;
		<?php } ?>	
	} 
	.header-bottom .theme-container{ background-color:#<?php echo (esc_attr(get_option('tmpmela_header_bottom_bkg_color'))); ?>; }
	<?php 
	if( (get_option('tmpmela_bodyfont') == "Other+Fonts") || get_option('tmpmela_bodyfont') == "please-select"){  
	if	(get_option('tmpmela_bodyfont_other') != ""){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_bodyfont_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tmpmela_bodyfont') != "" && get_option('tmpmela_bodyfont') != "please-select"){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_bodyfont'))); ?>', Arial, Helvetica, sans-serif;	
	}
	.normal-title::before, .upsells.products > h2::before, .related.products h2::before, .cross-sells > h2::before, .resp-tabs-list .main-title::before, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce .onsale::before,
	.site-footer .widget-title::before,.woocommerce-tabs ul.tabs > li a::before{
		background:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
	}
	.count-down.product-count-down{
		border-color: <?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
	}
	
.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled, .woocommerce.single-product .single_add_to_cart_button:hover , .woocommerce.single-product div.product form.cart .button:hover,
.woocommerce ul.products li.product .product_type_simple,
.woocommerce-page ul.products li.product .product_type_simple,
.woocommerce ul.products li.product .product_type_grouped,
.woocommerce-page ul.products li.product .product_type_grouped,
.woocommerce ul.products li.product .product_type_external,
.woocommerce-page ul.products li.product .product_type_external,
.woocommerce ul.products li.product .product_type_variable,
.entry-summary .yith-wcwl-wishlistexistsbrowse > a,
.woocommerce a.compare.button, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist,
.woocommerce ul.products li.product .yith-wcwl-wishlistexistsbrowse a,
.woocommerce-page ul.products li.product .yith-wcwl-wishlistexistsbrowse a,
.woocommerce ul.products li.product .yith-wcwl-wishlistaddedbrowse a,
.woocommerce-page ul.products li.product .yith-wcwl-wishlistaddedbrowse a,
.woocommerce ul.products li .container-inner .compare-button a,
.woocommerce-page ul.products li .container-inner .compare-button a,
.woocommerce-page ul.products li.product .product_type_variable,
.woocommerce .button.yith-wcqv-button,
.woocommerce-page ul.products li.product .yith-wcqv-button,
.yith-wcwl-add-to-wishlist a, .links .icon, .gallery-zoom .icon, .gallery-redirect .icon, .blog-posts-content .block_hover .icon,
.previous-image:hover, .next-image:hover,
.woocommerce .cart-collaterals .cart_totals a.button.alt, .woocommerce-page .cart-collaterals .cart_totals a.button.alt,
.post-date, .soldout, .paging-navigation a:hover, .paging-navigation .page-numbers.current, .woocommerce-pagination span.current, .woocommerce-pagination a:hover,.product .wcmp_fpm_buttons
{
	background-color: <?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
	color:#<?php echo esc_attr(get_option('tmpmela_button_text_color')); ?>;
	<?php  if(get_option('tmpmela_button_font_family') != "" && get_option('tmpmela_button_font_family') != "please-select"){ ?>
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tmpmela_button_font_family'))); ?>', Arial, Helvetica, sans-serif;
	<?php } ?>
}
.resp-tabs-list li:hover .tab-title, .resp-tab-item.resp-tab-active .tab-title{
	background-color: <?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
	color:#<?php echo esc_attr(get_option('tmpmela_button_text_color')); ?>;
}
.dokan-pagination-container .dokan-pagination li.active a, .dokan-pagination-container .dokan-pagination li a:hover{
	background-color: <?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
	border-color: <?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_color'))); ?>;
}
.widget input[type="button"]:hover, .widget input[type="button"]:focus, 
.widget input[type="reset"]:hover, .widget input[type="reset"]:focus, 
.widget input[type="submit"]:hover, .widget input[type="submit"]:focus, 
a.button:hover, a.button:focus, button:hover, button:focus, 
.contributor-posts-link:hover, input[type="button"]:hover, 
input[type="button"]:focus, input[type="reset"]:hover, 
input[type="reset"]:focus, input[type="submit"]:hover, 
input[type="submit"]:focus, .button_content_inner a:hover, 
.button_content_inner a:focus, .woocommerce #content input.button:hover, 
.woocommerce #respond input#submit:hover, .woocommerce button.button:hover, 
.woocommerce input.button:hover, .woocommerce-page #content input.button:hover, 
.woocommerce-page #respond input#submit:hover, .woocommerce-page button.button:hover, 
.woocommerce #content table.cart .checkout-button:hover, 
#primary .entry-summary .single_add_to_cart_button:hover, 
.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
.woocommerce ul.products li.product .product_type_simple:hover,
.woocommerce-page ul.products li.product .product_type_simple:hover, 
.woocommerce ul.products li.product .product_type_grouped:hover, 
.woocommerce-page ul.products li.product .product_type_grouped:hover, 
.woocommerce ul.products li.product .product_type_external:hover, 
.woocommerce-page ul.products li.product .product_type_external:hover,
.woocommerce ul.products li.product:hover .product_type_variable:hover,
.woocommerce-page ul.products li.product .product_type_variable:hover,
.entry-summary .yith-wcwl-wishlistexistsbrowse > a:hover, .woocommerce a.compare.button:hover, 
.woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover, 
.woocommerce ul.products li.product .yith-wcwl-wishlistexistsbrowse a:hover, 
.woocommerce-page ul.products li.product .yith-wcwl-wishlistexistsbrowse a:hover, 
.woocommerce ul.products li.product .yith-wcwl-wishlistaddedbrowse a:hover, 
.woocommerce-page ul.products li.product .yith-wcwl-wishlistaddedbrowse a:hover, 
.woocommerce ul.products li .container-inner .compare-button a:hover, 
.woocommerce-page ul.products li .container-inner .compare-button a:hover, 
.woocommerce .button.yith-wcqv-button:hover, 
.woocommerce-page ul.products li.product .yith-wcqv-button:hover, 
.yith-wcwl-add-to-wishlist a:hover,
.yith-wcwl-add-to-wishlist a:hover, .woocommerce a.compare.button:hover, .woocommerce ul.products li .container-inner .compare-button a:hover,.single-banner-link,.links a.icon:hover, .gallery-zoom .icon:hover, .gallery-redirect .icon:hover, .blog-posts-content .block_hover .icon:hover,.previous-image, .next-image,
.woocommerce-page a.button:hover,.woocommerce .wishlist_table td.product-add-to-cart a:hover,
.woocommerce .cart-collaterals .cart_totals a.button.alt:hover, .woocommerce-page .cart-collaterals .cart_totals a.button.alt:hover,
.paging-navigation .page-numbers, .woocommerce-pagination span, .woocommerce-pagination a
{
	background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_button_hover_color'))); ?>;
	color: #<?php echo esc_attr(get_option('tmpmela_button_hover_text_color')); ?>;
}

.woocommerce .product-block-inner .button.yith-wcqv-button, .woocommerce-page ul.products li.product .yith-wcqv-button, .woocommerce ul.products li.product .product-block-inner .yith-wcwl-wishlistexistsbrowse a, .woocommerce .product-block-inner a.compare.button, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist, .yith-wcwl-add-to-wishlist a, .woocommerce ul.products li .container-inner .product-block-inner .compare-button a, .woocommerce ul.products li.product .yith-wcwl-wishlistaddedbrowse a,
.product .wcmp_fpm_buttons{
	background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_product_button_bkg_color'))); ?>;
}
.woocommerce .product-block-inner .button.yith-wcqv-button:hover, .woocommerce-page ul.products li.product .yith-wcqv-button:hover, .woocommerce ul.products li.product .product-block-inner .yith-wcwl-wishlistexistsbrowse a:hover, .woocommerce .product-block-inner a.compare.button:hover, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover, .yith-wcwl-add-to-wishlist a:hover, .woocommerce ul.products li .container-inner .product-block-inner .compare-button a:hover,
.woocommerce ul.products li.product .yith-wcwl-wishlistaddedbrowse a:hover, .product .wcmp_fpm_buttons:hover{
	background-color:<?php echo tmpmela_hex_to_rgba(esc_attr(get_option('tmpmela_product_button_bkg_hover_color'))); ?>;
}


	<?php }  ?>		
}
</style>
<?php } ?>