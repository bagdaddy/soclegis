<?php
const VERSION = '5.4.7';

/**
 * Created by PhpStorm.
 * User: mbagdonas
 * Date: 24/04/2020
 * Time: 16:16
 */
function soclegis_scripts(){
    wp_enqueue_style( 'soclegis-bootstrap', get_theme_file_uri( '/css/bootstrap.css' ), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style('soclegis-stack-interface', get_theme_file_uri('/css/stack-interface.css'), wp_get_theme()->get('Version'),'all');
    wp_enqueue_style('soclegis-socicon', get_theme_file_uri('/css/socicon.css'), wp_get_theme()->get('Version'),'all');
    wp_enqueue_style('soclegis-lightbox', get_theme_file_uri('/css/lightbox.min.css'), wp_get_theme()->get('Version'),'all');
    wp_enqueue_style('soclegis-flickity', get_theme_file_uri('/css/flickity.css'),wp_get_theme()->get('Version'),'all');
    wp_enqueue_style('soclegis-iconsmind', get_theme_file_uri('/css/iconsmind.css'));
    wp_enqueue_style('soclegis-jquery-steps', get_theme_file_uri('/css/jquery.steps.css'));
    wp_enqueue_style('soclegis-theme', get_theme_file_uri('/css/theme.css'), '', VERSION);
    wp_enqueue_style('soclegis-custom', get_theme_file_uri('/css/custom.css'),'', VERSION);
    wp_enqueue_style('infinite-slider', get_theme_file_uri('/css/infinite-slider.css'), wp_get_theme()->get('Version'));

    wp_enqueue_script('soclegis-jquery', get_template_directory_uri().'/js/jquery-3.1.1.min.js', array(), false, true );
    wp_enqueue_script('soclegis-flickity-js', get_template_directory_uri().'/js/flickity.min.js',  array(), false, true );
    wp_enqueue_script('soclegis-easypiechart', get_template_directory_uri().'/js/easypiechart.min.js',  array(), false, true );
    wp_enqueue_script('soclegis-parallax', get_template_directory_uri().'/js/parallax.js',  array(), false,true );
    wp_enqueue_script('soclegis-scripts', get_template_directory_uri().'/js/scripts.js',  array(), false,true );
    wp_enqueue_script('soclegis-smooth-scroll', get_template_directory_uri().'/js/smooth-scroll.min.js',  array(), false,true );
    wp_enqueue_script('soclegis-jquery-steps-js', get_template_directory_uri().'/js/jquery.steps.min.js',  array(), false,true );
    wp_enqueue_script('soclegis-isotope', get_template_directory_uri().'/js/isotope.min.js',  array(), false,true );
    wp_enqueue_script('soclegis-lightbox-js', get_template_directory_uri().'/js/lightbox.min.js',  array(), false,true );
    wp_enqueue_script('soclegis-granim', get_template_directory_uri().'/js/granim.min.js',  array(), false,true );
    wp_enqueue_script('soclegis-spectragram', get_template_directory_uri().'/js/spectragram.min.js', array(), false,true );
    wp_enqueue_script('soclegis-custom', get_template_directory_uri().'/js/app.js');
}

add_action('wp_enqueue_scripts', 'soclegis_scripts');

function soclegis_custom_new_menu() {
    register_nav_menus(
        array(
            'main_menu' => __( 'Main menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'secondary_menu' => __('Secondary Menu')
        )
    );
}
add_action( 'init', 'soclegis_custom_new_menu' );

function soclegis_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'soclegis_custom_logo_setup' );

function cptui_register_client_cpts() {

    /**
     * Post Type: Clients.
     */

    $labels = [
        "name" => __( "Clients", "soclegis" ),
        "singular_name" => __( "Client", "soclegis" ),
    ];

    $args = [
        "label" => __( "Clients", "soclegis" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "client", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
    ];

    register_post_type( "client", $args );
}

add_action( 'init', 'cptui_register_client_cpts' );

function cptui_register_news_cpt(){

    /**
     * Post Type: News.
     */

    $labels = [
        "name" => __( "News", "soclegis" ),
        "singular_name" => __( "News article", "soclegis" ),
    ];

    $args = [
        "label" => __( "News", "soclegis" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "article", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
    ];

    register_post_type( "article", $args );
}

add_action('init', 'cptui_register_news_cpt');


function my_mime_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_mime_types', 1, 1);
