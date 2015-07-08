<?php

add_post_type_support('page', 'excerpt');

// mainpaage banner
add_action('init', 'mainpage_banner_register');
function mainpage_banner_register() {
  $labels = array(
      'name' => _x('Mainpage banner', 'post type general name'),
      'singular_name' => _x('Mainpage banner', 'post type singular name'),
      'add_new' => _x('Add mainpage banner', 'rep'),
      'add_new_item' => __('Add mainpage banner'),
      'edit_item' => __('Edit mainpage banner'),
      'new_item' => __('New mainpage banner'),
      'view_item' => __('View mainpage banner'),
      'search_items' => __('Search mainpage banner'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 3,
      'supports'      => array( 'title', 'thumbnail'),
  );
  register_post_type( 'mainpage_banner' , $args );
}

// Product
add_action('init', 'product_register');
function product_register() {
  $labels = array(
      'name' => _x('Product', 'post type general name'),
      'singular_name' => _x('Product', 'post type singular name'),
      'add_new' => _x('Add Product', 'rep'),
      'add_new_item' => __('Add New Product'),
      'edit_item' => __('Edit Product'),
      'new_item' => __('New Product'),
      'view_item' => __('View Product'),
      'search_items' => __('Search Product'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 4,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt','revisions'),
  );
  register_post_type( 'product' , $args );
}

// store
add_action('init', 'store_register');
function store_register() {
  $labels = array(
      'name' => _x('Store', 'post type general name'),
      'singular_name' => _x('Store', 'post type singular name'),
      'add_new' => _x('Add Store', 'rep'),
      'add_new_item' => __('Add New Store'),
      'edit_item' => __('Edit Store'),
      'new_item' => __('New Store'),
      'view_item' => __('View Store'),
      'search_items' => __('Search Store'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 5,
      'supports'      => array( 'title'),
  );
  register_post_type( 'store' , $args );
}

// career
add_action('init', 'career_register');
function career_register() {
  $labels = array(
      'name' => _x('Career', 'post type general name'),
      'singular_name' => _x('Career', 'post type singular name'),
      'add_new' => _x('Add Career', 'rep'),
      'add_new_item' => __('Add New Career'),
      'edit_item' => __('Edit Career'),
      'new_item' => __('New Career'),
      'view_item' => __('View Career'),
      'search_items' => __('Search Career'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 6,
      'supports'      => array( 'title', 'editor'),
  );
  register_post_type( 'career' , $args );
}
?>
