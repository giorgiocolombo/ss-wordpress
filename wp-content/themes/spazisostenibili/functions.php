<?php
    /**
     * functions.php is the file where you can control all the logics behind your website.
     * You can even change how Wordpress works because this file is called very early in the process of building the pages
     *   
     * @since 1.0.0
     * @version 1.0.0
    */

    function ss_setup(){
        /**
         *  i want to add_theme_support for thumbtahils
         * 
         * @see http:developer.wordpress.org/reference/functions/add_theme_
         */
        add_theme_support( "post-thumbnails" );
    }
    
    add_action('after_setup_theme', 'ss_setup');
    
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

    // i want to remove the support (because it's heavy) to emoticons

    remove_action('wp_head','print_emoji_detection_script', 7);