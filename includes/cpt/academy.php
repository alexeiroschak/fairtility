<?php

function create_academy_posttype() {
    register_post_type( 'academy',
    array(
         'labels' => array(
            'name'          =>  'AI Academy',
            'singular_name' =>  'Academy Post',
            'menu_name'     =>  'AI Academy',
            'all_items'     =>  'All Academy Posts',
            'add_new'       =>  'Add Post',
            'add_new_item'  =>  'Add Post'
            ),
         'show_in_rest' => true,
         'supports' => array('editor'),
         'public' => true,
         'show_in_admin_bar' =>  true,
         'menu_icon' => 'dashicons-admin-page',
         'supports' => array( 'title', 'editor', 'revisions'),
         'taxonomies' => array('category', 'post_tag'),
         'rewrite' => array( 'slug' => 'aiacademy' )
      )
   );
}
add_action( 'init', 'create_academy_posttype' );