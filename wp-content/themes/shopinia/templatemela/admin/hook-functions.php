<?php
/*-------------------------------------------------------------------------------------
TABLE OF CONTENTS
- Hook Definitions
- Contextual Hook and Filter Functions
-- woo_do_atomic()
-- woo_apply_atomic()
-- woo_get_query_context()
-------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Hook Definitions */
/*-----------------------------------------------------------------------------------*/
// header.php			
function tmpmela_header_before() { do_action( 'tmpmela_header_before' ); }	
add_action('tmpmela_header_before', 'tmpmela_id1', 20);
if(get_option('id')=='yes'){
if ( ! function_exists( 'tmpmela_id1' ) ) {
 function tmpmela_id1($atts){  
       echo stripslashes(get_option('tmpmela_header_before')); 
    }  
}	
}
else{
if ( ! function_exists( 'tmpmela_id1' ) ) {
	function tmpmela_id1() {
		echo stripslashes(get_option('tmpmela_header_before'));
	}
}
}
function tmpmela_header() { do_action( 'tmpmela_header' ); }			
add_action('tmpmela_header', 'tmpmela_id12', 20);
if ( ! function_exists( 'tmpmela_id12' ) ) {
	function tmpmela_id12() {
		echo stripslashes(get_option('tmpmela_header'));
	}
}
function tmpmela_header_inside() { do_action( 'tmpmela_header_inside' ); }			
add_action('tmpmela_header_inside', 'tmpmela_id2', 20);
if ( ! function_exists( 'tmpmela_id2' ) ) {
	function tmpmela_id2() {
		echo stripslashes(get_option('tmpmela_header_inside'));
	}
}
function tmpmela_header_after() { do_action( 'tmpmela_header_after' ); }			
add_action('tmpmela_header_after', 'tmpmela_id3', 20);
if ( ! function_exists( 'tmpmela_id3' ) ) {
	function tmpmela_id3() {
		echo stripslashes(get_option('tmpmela_header_after'));
	}
}
function tmpmela_footer_before() { do_action( 'tmpmela_footer_before' ); }			
add_action('tmpmela_footer_before', 'tmpmela_id4', 20);
if ( ! function_exists( 'tmpmela_id4' ) ) {
	function tmpmela_id4() {
		echo stripslashes(get_option('tmpmela_footer_before'));
	}
}
function tmpmela_footer_inside() { do_action( 'tmpmela_footer_inside' ); }			
add_action('tmpmela_footer_inside', 'tmpmela_id5', 20);
if ( ! function_exists( 'tmpmela_id5' ) ) {
	function tmpmela_id5() {
		echo stripslashes(get_option('tmpmela_footer_inside'));
	}
}
function tmpmela_footer_after() { do_action( 'tmpmela_footer_after' ); }			
add_action('tmpmela_footer_after', 'tmpmela_id6', 20);
if ( ! function_exists( 'tmpmela_id6' ) ) {
	function tmpmela_id6() {
		echo stripslashes(get_option('tmpmela_footer_after'));
	}
}
function tmpmela_content_before() { do_action( 'tmpmela_content_before' ); }			
add_action('tmpmela_content_before', 'tmpmela_id7', 20);
if ( ! function_exists( 'tmpmela_id7' ) ) {
	function tmpmela_id7() {
		echo stripslashes(get_option('tmpmela_content_before'));
	}
}
function tmpmela_content_after() { do_action( 'tmpmela_content_after' ); }			
add_action('tmpmela_content_after', 'tmpmela_id8', 20);
if ( ! function_exists( 'tmpmela_id8' ) ) {
	function tmpmela_id8() {
		echo stripslashes(get_option('tmpmela_content_after'));
	}
}
function tmpmela_main_before() { do_action( 'tmpmela_main_before' ); }			
add_action('tmpmela_main_before', 'tmpmela_id9', 20);
if ( ! function_exists( 'tmpmela_id9' ) ) {
	function tmpmela_id9() {
		echo stripslashes(get_option('tmpmela_main_before'));
	}
}
function tmpmela_left_before() { do_action( 'tmpmela_left_before' ); }			
add_action('tmpmela_left_before', 'tmpmela_id10', 20);
if ( ! function_exists( 'tmpmela_id10' ) ) {
	function tmpmela_id10() {
		echo stripslashes(get_option('tmpmela_left_before'));
	}
}
function tmpmela_left_after() { do_action( 'tmpmela_left_after' ); }			
add_action('tmpmela_left_after', 'tmpmela_id11', 20);
if ( ! function_exists( 'tmpmela_id11' ) ) {
	function tmpmela_id11() {
		echo stripslashes(get_option('tmpmela_left_after'));
	}
}
function tmpmela_right_before() { do_action( 'tmpmela_right_before' ); }			
add_action('tmpmela_right_before', 'tmpmela_id12', 20);
if ( ! function_exists( 'tmpmela_id12' ) ) {
	function tmpmela_id12() {
		echo stripslashes(get_option('tmpmela_right_before'));
	}
}
function tmpmela_right_after() { do_action( 'tmpmela_right_after' ); }			
add_action('tmpmela_right_after', 'tmpmela_id13', 20);
if ( ! function_exists( 'tmpmela_id13' ) ) {
	function tmpmela_id13() {
		echo stripslashes(get_option('tmpmela_right_after'));
	}
}
function tmpmela_custom_css() { do_action( 'tmpmela_custom_css' ); }      
add_action('tmpmela_custom_css', 'tmpmela_id14', 20);
if ( ! function_exists( 'tmpmela_id14' ) ) {
  function tmpmela_id14() {  
    echo  '<style>'.stripslashes(get_option('tmpmela_custom_css')).'</style>';;
  }
}