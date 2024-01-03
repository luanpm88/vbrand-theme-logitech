<?php

function vbrand_theme_logitech_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'vbrand_theme_logitech_woocommerce_support' );

/**
*   Định nghĩa menu cho themes
*/
function register_logictech_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
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


$demo_logintech_imported = get_option('demo_logintech_imported');
if ($demo_logintech_imported !== '1') {  
    require_once get_template_directory() . '/demo-data/import-demo-data.php'; 
    update_option('demo_logintech_imported', '1');
}

$vbrand_logitech_menu_setup = get_option('vbrand_logitech_menu_setup'); 
if (!$vbrand_logitech_menu_setup){  
    $menu_exists = wp_get_nav_menu_object('Primary Logintech Menu');  
    $menu_id = ''; 
    if (!$menu_exists) {
       
        // Nếu menu chưa tồn tại, hãy tạo nó
        $menu_id = wp_create_nav_menu('Primary Logintech Menu');
    
        // Đăng ký menu với theme
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations); 
    }else {
        // Nếu menu đã tồn tại, lấy ID của nó
        $menu_id = $menu_exists->term_id;
        $locations = get_theme_mod('nav_menu_locations'); 
        $locations['primary-menu'] = $menu_id;  
        set_theme_mod('nav_menu_locations', $locations); 

        $update = get_theme_mod('nav_menu_locations');  echo "<pre>"; print_r($update); echo "</pre>";
         
    }
    update_option('vbrand_logitech_menu_setup', true); 
    update_option('vbrand_one_menu_setup', false);
}else{
    /*
    $menu_exists = wp_get_nav_menu_object('Primary Logintech Menu');   
    if ($menu_exists) {
        $menu_id = $menu_exists->term_id;
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary-menu'] = $menu_id;  
        set_theme_mod('nav_menu_locations', $locations); 

        update_option('vbrand_logitech_menu_setup', true); 
        update_option('vbrand_one_menu_setup', false);
    }
    */
}

 
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



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

function vbrand_logitech_createPageWithTemplate($template)
{
    // Tạo mới 1 page và gắn template vào page đó. Ví dụ: Logitech - About Us, Logitech - News,...
    // Trả về page tương ứng
}

function vbrand_logitech_getPageByTemplate($template)
{
    // Tìm page nào có template là $template. Ví dụ: Logitech - About Us, Logitech - News,...
    // Trả về page đó. Nếu không có trả về null|false
}