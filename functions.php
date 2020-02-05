<?php 
//Add Theme Support 
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Load in our CSS
function hranalytics_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    wp_enqueue_style( 'nucleo-css', get_stylesheet_directory_uri() . '/assets/vendor/nucleo/css/nucleo.css', [], time(), 'all' );
    wp_enqueue_style( 'font-awesome-css', get_stylesheet_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', [], time(), 'all' );
    wp_enqueue_style( 'argon-css', get_stylesheet_directory_uri() . '/assets/css/argon.css', [], time(), 'all' );
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', [], time(), 'all' );

  }
  add_action( 'wp_enqueue_scripts', 'hranalytics_enqueue_styles' );

  //load in our javascript 
  function hranalytics_enqueue_scripts() {
   
    wp_enqueue_script( 'popper-js', get_stylesheet_directory_uri() . '/assets/vendor/popper/popper.min.js', ['jquery'], time(), 'true' );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/bootstrap.min.js', ['jquery'], time(), 'true' );
    wp_enqueue_script( 'argon-js', get_stylesheet_directory_uri() . '/assets/js/argon.js', [], time(), 'true' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', [], time(), 'true' );

  }
  add_action( 'wp_enqueue_scripts', 'hranalytics_enqueue_scripts' );


  //remove the error showing jquery migrater 
  function remove_jquery_migrate_notice() {
    $m= $GLOBALS['wp_scripts']->registered['jquery-migrate'];
    $m->extra['before'][]='temp_jm_logconsole = window.console.log; window.console.log=null;';
    $m->extra['after'][]='window.console.log=temp_jm_logconsole;';
  }
  add_action( 'init', 'remove_jquery_migrate_notice', 5 );










  

?>