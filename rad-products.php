<?php 
/*
Plugin Name: Rad Products
Description: Adds a custom post type for our product catalog
Author: Melissa Cabral
License: GPLv3
Version:0.1
Plugin URI: 
Author URI: http://melissacabral.com
*/

add_action( 'init', 'rad_products_cpt' );
function rad_products_cpt(){
	register_post_type( 'product', array(
		'public' 		=> true,
		'has_archive' 	=> true,
		'label' 		=> 'Products',
		'menu_icon'		=> 'dashicons-cart',
		'menu_position'	=> 5,
		'supports'		=> array('title', 'editor', 'excerpt', 'thumbnail', 
								'custom-fields', 'revisions'),
		'rewrite'		=> array( 'slug' => 'shop' ), //change the url to /shop/
		//These labels are for the Admin panel UI
		'labels' 		=> array(
 			'name' 			=> 'Products',
 			'singular_name' => 'Product',
 			'add_new_item' 	=> 'Add New Product',
 			'not_found'		=> 'No Products Found',
		),
	) );
}