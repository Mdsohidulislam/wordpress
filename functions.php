<?php 
// theme title start
    add_theme_support('title-tag');
// theme title end

// Theme css and jquery file calling start 
    function dear__css__and__js__file__calling (){  
            wp_register_style( 'dear__bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.22', 'all');
            wp_register_style( 'dear__custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
            wp_enqueue_style('dear__bootstrap');
            wp_enqueue_style('dear__custom');
            wp_enqueue_style('dear__style', get_stylesheet_uri(  ));

            // jquery
            // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
            wp_enqueue_script('query');
            wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.2.2', 'true');
            wp_enqueue_script('dear__main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
    };

    add_action('wp_enqueue_scripts', 'dear__css__and__js__file__calling');
// Theme css and jquery file calling end
?>