<?php

add_action( 'init', 'create_product_taxonomies', 0 );
function create_product_taxonomies() {
  register_taxonomy(
      'collection',
      'product',
      array(
          'labels' => array(
              'name' => 'Collection',
              'add_new_item' => 'Add Collection',
              'new_item_name' => 'New Collection'
          ),
          'show_ui' => true,
          'show_tagcloud' => false,
          'hierarchical' => true
      )
  );
}

add_action( 'init', 'create_store_taxonomies', 0 );
function create_store_taxonomies() {
  register_taxonomy(
      'store_category',
      'store',
      array(
          'labels' => array(
              'name' => 'Clinic Category',
              'add_new_item' => 'Add Clinic Category',
              'new_item_name' => 'New Clinic Category'
          ),
          'show_ui' => true,
          'show_tagcloud' => false,
          'hierarchical' => true
      )
  );
}

// in case the templates pop out
// global $wp_taxonomies;
// $taxonomy = 'year';
// unset( $wp_taxonomies[$taxonomy]);
// flush_rewrite_rules();
