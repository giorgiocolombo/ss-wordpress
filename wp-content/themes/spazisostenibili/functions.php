<?php
    /**
     * functions.php is the file where you can control all the logics behind your website.
     * You can even change how Wordpress works because this file is called very early in the process of building the pages
     *   
     * @since 1.0.0
     * @version 1.0.0
    */
    
    define( 'SS_IS_ADMIN', current_user_can('edit_others_posts') );

    function ss_setup(){
        /**
         *  i want to add_theme_support for thumbtahils
         * 
         * @see http:developer.wordpress.org/reference/functions/add_theme_
         */
        add_theme_support( "post-thumbnails" );
        add_theme_support( "title-tag" );
        add_theme_support( "wp-block-styles" );
        add_theme_support( "align-wide" );
        register_nav_menus(['main_menu' => 'Menu Principale']);
    }
    add_action('after_setup_theme', 'ss_setup');

    function ss_widget_area_registration(){
        register_sidebar([
            'name' => 'Footer',
            'id' => 'footer',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);
    }
    add_action ('widgets_init','ss_widget_area_registration');
    
    // Galleria custom post type function
    function create_gallerie() {
    
        register_post_type( 'gallerie',
            array(
                'labels' => array(
                    'name' => __( 'Gallerie' ),
                    'singular_name' => __( 'Galleria' )
                ),
                'public' => true,
                // 'has_archive' => true,
                'rewrite' => array('slug' => 'gallerie'),
                'supports' => array( 'title', 'excerpt', 'custom-fields' , 'thumbnail')
            )
        );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_gallerie' );

    function ss_styles(){
        wp_enqueue_style( 'ss_reset', get_stylesheet_directory_uri().'/style.css' , array() , '1.0.0' , 'all'  );
        wp_enqueue_style( 'ss_style', SS_INCLUDES.'css/style.css' , array('ss_reset') , '1.0.0' , 'all');        
        wp_enqueue_style( 'ss_animation', SS_INCLUDES.'css/aos.css' , array('ss_style') , null , 'all');
    }
    add_action('wp_enqueue_scripts', 'ss_styles');
    function ss_scripts(){
        wp_enqueue_script( 'ss_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , array() , null , 'all'  );
        wp_enqueue_script( 'ss_hammer', 'https://ajax.googleapis.com/ajax/libs/hammerjs/2.0.8/hammer.min.js' , array('ss_jquery') , null , 'all');        
        wp_enqueue_script( 'ss_animation', SS_INCLUDES.'js/aos.js' , array('ss_hammer') , null , 'all');   
        wp_enqueue_script( 'ss_imagesloaded',  SS_INCLUDES.'js/imagesloaded.js' , array('ss_animation') , null , 'all');
        wp_enqueue_script( 'ss_script', SS_INCLUDES.'js/script.js' , array('ss_imagesloaded') , '1.0.0' , 'all');     
    }
    add_action('wp_enqueue_scripts', 'ss_scripts');

    // remove_action('wp_head','print_emoji_detection_script', 7);