<?php
       add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
       function enqueue_parent_theme_style() {
             wp_enqueue_style( 'parent-style',    get_template_directory_uri().'/style.css' );
       }

  register_post_type('panels-home', array(
  'label' => 'Panels-home',
  'public' => true,
  'show_ui' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'rewrite' => array('slug' => 'panels-home'),
  'query_var' => true,
  'supports' => array(
  'title',
  'editor',
  'excerpt',
  'trackbacks',
  'custom-fields',
  'comments',
  'revisions',
  'thumbnail',
  'author',
  'page-attributes',)
  ) );

  register_post_type('module-collection', array(
    'label' => 'Module-Collection',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'module-collection'),
    'query_var' => true,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'trackbacks',
    'custom-fields',
    'comments',
    'revisions',
    'thumbnail',
    'author',
    'page-attributes',)
    ) );
  ?>
