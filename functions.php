<?php

function vbrand_theme_logitech_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'vbrand_theme_logitech_woocommerce_support' );

/**
*   Định nghĩa menu cho themes
*/
function register_logictech_menu() {
    register_nav_menu('primary-logictech-menu', __('Primary Logintech Menu'));
}
add_action('after_setup_theme', 'register_logictech_menu');
 
function vbrand_widget_filter() {
	register_sidebar(array(
    	'name' => 'filter Widget Area',
    	'id' => 'filter-widget-area',
    	'description' => __( 'filter of product'),
    	'before_widget' => '<div class="widget">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3 class="widget-title">',
    	'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'vbrand_widget_filter');


$demo_logintect_imported = get_option('demo_logintect_imported');
if ($demo_logintect_imported !== '1') {  
    require_once get_template_directory() . '/demo-data/import-demo-data.php'; 
    update_option('demo_logintect_imported', '1');
}




function vbrand_theme_logitech_get_categories() {
    $taxonomy     = 'product_cat';
      $orderby      = 'name';  
      $show_count   = 0;      // 1 for yes, 0 for no
      $pad_counts   = 0;      // 1 for yes, 0 for no
      $hierarchical = 1;      // 1 for yes, 0 for no  
      $title        = '';  
      $empty        = 0;

      $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title,
          'hide_empty'   => $empty
      );
      $all_categories = get_categories( $args );

      return $all_categories;
      // var_dump($all_categories[0]->name);
      // foreach ($all_categories as $cat) {
      // 	if($cat->category_parent == 0) {
      // 		$category_id = $cat->term_id;       
      // 		echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

      // 		$args2 = array(
      // 				'taxonomy'     => $taxonomy,
      // 				'child_of'     => 0,
      // 				'parent'       => $category_id,
      // 				'orderby'      => $orderby,
      // 				'show_count'   => $show_count,
      // 				'pad_counts'   => $pad_counts,
      // 				'hierarchical' => $hierarchical,
      // 				'title_li'     => $title,
      // 				'hide_empty'   => $empty
      // 		);
      // 		$sub_cats = get_categories( $args2 );
      // 		if($sub_cats) {
      // 			foreach($sub_cats as $sub_category) {
      // 				echo  $sub_category->name ;
      // 			}   
      // 		}
      // 	}       
      // }
}