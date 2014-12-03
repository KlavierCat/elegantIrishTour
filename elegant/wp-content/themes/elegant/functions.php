<?php
/**
 * Elegant functions and definitions
 *
 * @package elegant
 * @since elegant 1.0
 */

add_action('init', 'elegant_register_post_type');
  function elegant_register_post_type() {

    register_post_type('about', array(
      'label' => 'About',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'about', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'About',
        'singular_name' => 'About',
        'menu_name' => 'About',
        'add_new' => 'Add About',
        'add_new_item' => 'Add New About',
        'edit' => 'Edit',
        'edit_item' => 'Edit About',
        'new_item' => 'New About',
        'view' => 'View About',
        'view_item' => 'View About',
        'search_items' => 'Search About',
        'not_found' => 'No About Found',
        'not_found_in_trash' => 'No About Found in Trash',
        'parent' => 'Parent About',
        )
      )
    );

    register_post_type('fleet', array(
      'label' => 'Fleet',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'fleet', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'Fleet',
        'singular_name' => 'Fleet',
        'menu_name' => 'Fleet',
        'add_new' => 'Add Fleet',
        'add_new_item' => 'Add New Fleet',
        'edit' => 'Edit',
        'edit_item' => 'Edit Fleet',
        'new_item' => 'New Fleet',
        'view' => 'View Fleet',
        'view_item' => 'View Fleet',
        'search_items' => 'Search Fleet',
        'not_found' => 'No Fleet Found',
        'not_found_in_trash' => 'No Fleet Found in Trash',
        'parent' => 'Parent Fleet',
        )
      )
    );

    register_post_type('day_tours', array(
      'label' => 'Day Tours',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'day_tours', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'Day Tours',
        'singular_name' => 'Day Tour',
        'menu_name' => 'Day Tours',
        'add_new' => 'Add Day Tour',
        'add_new_item' => 'Add New Day Tour',
        'edit' => 'Edit',
        'edit_item' => 'Edit Day Tour',
        'new_item' => 'New Day Tour',
        'view' => 'View Day Tour',
        'view_item' => 'View Day Tour',
        'search_items' => 'Search Day Tours',
        'not_found' => 'No Day Tours Found',
        'not_found_in_trash' => 'No Day Tours Found in Trash',
        'parent' => 'Parent Day Tour',
        )
      )
    );

    register_post_type('multiple_day_tours', array(
      'label' => 'Multiple Day Tours',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'multiple_day_tours', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'Multiple Day Tours',
        'singular_name' => 'Multiple Day Tour',
        'menu_name' => 'Multiple Day Tours',
        'add_new' => 'Add Multiple Day Tour',
        'add_new_item' => 'Add New Multiple Day Tour',
        'edit' => 'Edit',
        'edit_item' => 'Edit Multiple Day Tour',
        'new_item' => 'New Multiple Day Tour',
        'view' => 'View Multiple Day Tour',
        'view_item' => 'View Multiple Day Tour',
        'search_items' => 'Search Multiple Day Tours',
        'not_found' => 'No Multiple Day Tours Found',
        'not_found_in_trash' => 'No Multiple Day Tours Found in Trash',
        'parent' => 'Parent Multiple Day Tour',
        )
      )
    );

    register_post_type('speciality_tours', array(
      'label' => 'Speciality Tours',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'speciality_tours', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'Speciality Tours',
        'singular_name' => 'Speciality Tour',
        'menu_name' => 'Speciality Tours',
        'add_new' => 'Add Speciality Tour',
        'add_new_item' => 'Add New Speciality Tour',
        'edit' => 'Edit',
        'edit_item' => 'Edit Speciality Tour',
        'new_item' => 'New Speciality Tour',
        'view' => 'View Speciality Tour',
        'view_item' => 'View Speciality Tour',
        'search_items' => 'Search Speciality Tours',
        'not_found' => 'No Speciality Tours Found',
        'not_found_in_trash' => 'No Speciality Tours Found in Trash',
        'parent' => 'Parent Speciality Tour',
        )
      )
    );

    register_post_type('advert', array(
      'label' => 'Adverts Gallery',
      'description' => '',
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'rewrite' => array('slug' => 'advert', 'with_front' => true),
      'query_var' => true,
      'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
      'labels' => array (
        'name' => 'Adverts Gallery',
        'singular_name' => 'Advert',
        'menu_name' => 'Adverts Gallery',
        'add_new' => 'Add Advert',
        'add_new_item' => 'Add New Advert',
        'edit' => 'Edit',
        'edit_item' => 'Edit Advert',
        'new_item' => 'New Advert',
        'view' => 'View Advert',
        'view_item' => 'View Advert',
        'search_items' => 'Search Adverts Gallery',
        'not_found' => 'No Adverts Gallery Found',
        'not_found_in_trash' => 'No Adverts Gallery Found in Trash',
        'parent' => 'Parent Advert',
        )
      )
    );
 }
