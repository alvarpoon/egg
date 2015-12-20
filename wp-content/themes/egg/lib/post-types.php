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

// eGG* mainpaage banner
add_action('init', 'eggstar_mainpage_banner_register');
function eggstar_mainpage_banner_register() {
  $labels = array(
      'name' => _x('eGG* Mainpage banner', 'post type general name'),
      'singular_name' => _x('eGG* Mainpage banner', 'post type singular name'),
      'add_new' => _x('Add eGG* Mainpage banner', 'rep'),
      'add_new_item' => __('Add eGG* Mainpage banner'),
      'edit_item' => __('Edit eGG* Mainpage banner'),
      'new_item' => __('New eGG* Mainpage banner'),
      'view_item' => __('View eGG* Mainpage banner'),
      'search_items' => __('Search eGG* Mainpage banner'),
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
  register_post_type( 'eggstar_mainpage_banner' , $args );
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

// eGG* Product
add_action('init', 'eggstar_product_register');
function eggstar_product_register() {
  $labels = array(
      'name' => _x('eGG* Product', 'post type general name'),
      'singular_name' => _x('eGG* Product', 'post type singular name'),
      'add_new' => _x('Add eGG* Product', 'rep'),
      'add_new_item' => __('Add New eGG* Product'),
      'edit_item' => __('Edit eGG* Product'),
      'new_item' => __('New eGG* Product'),
      'view_item' => __('View eGG* Product'),
      'search_items' => __('Search eGG* Product'),
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
  register_post_type( 'eggstar_product' , $args );
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
      'supports'      => array( 'title', 'editor', 'thumbnail'),
  );
  register_post_type( 'store' , $args );
}

// Shop opening
add_action('init', 'career_register');
function career_register() {
  $labels = array(
      'name' => _x('Shop Opening', 'post type general name'),
      'singular_name' => _x('Shop Opening', 'post type singular name'),
      'add_new' => _x('Add Shop Opening', 'rep'),
      'add_new_item' => __('Add New Shop Opening'),
      'edit_item' => __('Edit Shop Opening'),
      'new_item' => __('New Shop Opening'),
      'view_item' => __('View Shop Opening'),
      'search_items' => __('Search Shop Opening'),
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

// office opening
add_action('init', 'career_office_register');
function career_office_register() {
  $labels = array(
      'name' => _x('Office Opening', 'post type general name'),
      'singular_name' => _x('Office Opening', 'post type singular name'),
      'add_new' => _x('Add Office Opening', 'rep'),
      'add_new_item' => __('Add New Office Opening'),
      'edit_item' => __('Edit Office Opening'),
      'new_item' => __('New Office Opening'),
      'view_item' => __('View Office Opening'),
      'search_items' => __('Search Office Opening'),
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
      'menu_position' => 7,
      'supports'      => array( 'title', 'editor'),
  );
  register_post_type( 'career_office' , $args );
}
?>
