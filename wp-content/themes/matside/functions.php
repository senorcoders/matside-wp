<?php
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_post_type_support( 'post', 'excerpt' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'mytheme' ),
    ) );


    add_action( 'wp_enqueue_scripts', 'add_style' );
  function add_style(){
    

    //<!-- Bootstrap core CSS -->    
   
    wp_enqueue_style( 'stylesCustomTheme', get_template_directory_uri(). '/styles/screen.css' );
    // wp_enqueue_style( 'print', get_template_directory_uri(). '/styles/print.css' );
    wp_enqueue_style( 'styleTheme', get_template_directory_uri(). '/style.css' );
		
  }



  add_action( 'wp_enqueue_scripts', 'add_script' );
  function add_script(){
    wp_enqueue_script( 'headJS',get_template_directory_uri(). '/js/head.js' , array( 'jquery' ) );
    wp_enqueue_script( 'jquery',get_template_directory_uri(). '/js/jquery.js' , array( 'jquery' ) );
    wp_enqueue_script( 'tf',get_template_directory_uri(). '/js/tf.js' , array( 'jquery' ) );
    wp_enqueue_script( 'scripts',get_template_directory_uri(). '/js/scripts.js' , array( 'jquery' ) );
    wp_enqueue_script( 'mobile',get_template_directory_uri(). '/js/mobile.js' , array( 'jquery' ) );

  }