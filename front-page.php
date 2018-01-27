<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */


get_header();


$sections_order_first_section = get_theme_mod( 'illdy_general_sections_order_first_section', 1 );
$sections_order_second_section = get_theme_mod( 'illdy_general_sections_order_second_section', 2 );
$sections_order_third_section = get_theme_mod( 'illdy_general_sections_order_third_section', 3 );
$sections_order_fourth_section = get_theme_mod( 'illdy_general_sections_order_fourth_section', 4 );
$sections_order_fifth_section = get_theme_mod( 'illdy_general_sections_order_fifth_section', 5 );
$sections_order_sixth_section = get_theme_mod( 'illdy_general_sections_order_sixth_section', 6 );
$sections_order_seventh_section = get_theme_mod( 'illdy_general_sections_order_seventh_section', 7 );
$sections_order_eighth_section = get_theme_mod( 'illdy_general_sections_order_eighth_section', 8 );
	


illdy_sections();



get_footer(); ?>