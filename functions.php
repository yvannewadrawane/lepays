<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function add_theme_scripts() {
   
    wp_enqueue_style( 'style', get_stylesheet_uri("style.css") );
   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/mean.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_style( 'bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', false,null );
    wp_enqueue_script( 'bootstrapjs','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'); 
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

    
  //ajouter une nouvelle zone de menu à mon thème

  function register_my_menu() {
  register_nav_menu('header-menu',__( 'menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  function wpb_init_widgets_custom($id) {
    register_sidebar( array(
      'id' => 'sidebar',
      'name' => 'yolo',
      'before_widget'  => '<div class="site__sidebar__widget %2$s">',
      'after_widget'  => '</div>',
      'before_title' => '<p class="site__sidebar__widget__title">',
      'after_title' => '</p>',
    ) );
}
add_action('widgets_init','wpb_init_widgets_custom');