<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
if ( !is_active_sidebar( 'first-footer-widget-area'  )
	&& ! is_active_sidebar( 'second-footer-widget-area' )
	&& ! is_active_sidebar( 'third-footer-widget-area'  )
	&& ! is_active_sidebar( 'fourth-footer-widget-area' )
)
{
	return;
}
?>
<div class="footer-top">
	 <div class="theme-container">
<div id="footer-widget-area">
	  <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
		  <div id="first" class="first-widget footer-widget">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		  </div>
	  <?php endif; ?>
	  <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
		  <div id="second" class="second-widget footer-widget">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		  </div>
	  <?php endif; ?>
	  <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
		  <div id="third" class="third-widget footer-widget">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		  </div>
	   <?php endif; ?>
	  
	    <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
		  <div id="fourth" class="fourth-widget footer-widget">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		  </div>
	  <?php endif; ?>
</div></div></div>