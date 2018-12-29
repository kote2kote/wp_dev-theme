<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_dev_theme
 */

if (is_singular('menu') || in_category('menu_east')): 
	get_template_part( 'template-parts/single/origin-menu-detail' );

 else :
	get_template_part( 'template-parts/single/standard' );

endif;
?>
