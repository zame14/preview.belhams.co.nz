<?php
vc_map( array(
    "name" => __("Home Banner"),
    "base" => "belhams_home_banner",
    "category" => __('Content'),
    'icon' => 'icon-wpb-single-image',
    'description' => 'Banner for the home page',
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __("Banner Image"),
            "param_name" => "banner",
        ),
    )
));
add_shortcode('belhams_home_banner', 'homeBanner');
function homeBanner($atts) {
    $args = shortcode_atts( array(
        'banner' => '',
    ), $atts);
    $banner = intval($args['banner']);
    $bannerImage = '';
    if($banner) {
        $bannerImage = wp_get_attachment_image($banner, 'home_banner');
    }
    $html = '
    <div class="banner-wrapper">
        ' . $bannerImage . '
    </div>';
    return $html;
}