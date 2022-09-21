<?php 
    function dhitltdlms_setup(){
        // dynamic page title
        add_theme_support('title-tag');
    }
    // hoock for title
    add_action('after_setup_theme','dhitltdlms_setup');

        
    // linking assets 
    function dhitltdlms_assets(){
        wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('bootstrap-icons', get_template_directory_uri() .'/assets/fonts/bootstrap-icons.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('mapbox', get_template_directory_uri() .'/assets/css/mapbox-gl.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('style', get_template_directory_uri() .'/assets/css/style.css', array(), '1.0.0', 'all' );
        // load main stylesheet
        wp_enqueue_style('mainStyle', get_stylesheet_uri() );

        // lining the scripts file
        wp_enqueue_script('jsBootstrap', get_template_directory_uri() .'/assets/js/bootstrap.js', 
        array('jquery'), '1.0.0', true );
        wp_enqueue_script('jsMapbox-gl', get_template_directory_uri() .'/assets/js/mapbox-gl.js', 
        array('jquery'), '1.0.0', true );
        wp_enqueue_script('jsMapbox', get_template_directory_uri() .'/assets/js/mapbox.js', 
        array('jquery'), '1.0.0', true );
    }
    add_action('wp_enqueue_scripts','dhitltdlms_assets');


    // custom post type 
//     function is_wp_error( $thing ) {
//         $is_wp_error = ( $thing instanceof WP_Error );
    
//         if ( $is_wp_error ) {
//             /**
//              * Fires when `is_wp_error()` is called and its parameter is an instance of `WP_Error`.
//              *
//              * @since 5.6.0
//              *
//              * @param WP_Error $thing The error object passed to `is_wp_error()`.
//              */
//             do_action( 'is_wp_error_instance', $thing );
//         }
    
//         return $is_wp_error;
//     }
    
// ?>