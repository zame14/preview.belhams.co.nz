<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2017
 * Time: 8:37 PM
 */

require_once(STYLESHEETPATH . '/includes/wordpress-tweaks.php');
// Load custom visual composer templates
az_loadVCTemplates();
$azAdjustStylesheet = 'storefront-theme';

add_action( 'wp_enqueue_scripts', 'belhams_enqueue_styles');
function belhams_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css?' . filemtime(get_stylesheet_directory() . '/css/bootstrap.min.css'));
    wp_enqueue_style( 'storefront-theme', get_stylesheet_directory_uri() . '/css/child-theme.css?' . filemtime(get_stylesheet_directory() . '/css/child-theme.css'));
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js?' . filemtime(get_stylesheet_directory() . '/js/bootstrap.min.js'), array('jquery'));
}

add_action('init', 'belhams_register_menus');
function belhams_register_menus() {
    register_nav_menus(
        Array(
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_filter( 'vc_load_default_templates', 'belhams_vc_load_default_templates' ); // Hook in
function belhams_vc_load_default_template( $data ) {
    return array();
}

function brands_menu() {
    $html = '
    <ul class="brands-menu">
        <li class="b1"><a href="#" target="_blank"></a></li>
        <li class="b2"><a href="#" target="_blank"></a></li>
        <li class="b3"><a href="#" target="_blank"></a></li>
        <li class="b4"><a href="#" target="_blank"></a></li>
        <li class="b5"><a href="#" target="_blank"></a></li>
        <li class="b6"><a href="#" target="_blank"></a></li>
        <li class="b2"><a href="#" target="_blank"></a></li>
        <li class="b6"><a href="#" target="_blank"></a></li>
        <li class="b4"><a href="#" target="_blank"></a></li>
    </ul>';

    return $html;
}

function social_media_menu() {
    $html = '
    <ul class="social-media-menu">
        <li class="facebook"><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
        <li class="pinterest"><a href="#" target="_blank"><span class="fa fa-pinterest"></span></a></li>
        <li class="instagram"><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
    </ul>';

    return $html;
}