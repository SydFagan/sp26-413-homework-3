<?php

function child_enqueue_styles(){

wp_enqueue_style(
'parent-style',
get_template_directory_uri() . '/style.css'
);

wp_enqueue_style(
'child-style',
get_stylesheet_uri(),
array('parent-style')
);

}

add_action('wp_enqueue_scripts','child_enqueue_styles');

add_filter('excerpt_length', function($length){
return 18;
});


function child_sidebar(){

register_sidebar(array(
'name' => 'Child Theme Sidebar',
'id' => 'child-sidebar',
'before_widget' => '<div class="child-sidebar">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

}

add_action('widgets_init','child_sidebar');