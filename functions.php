<?php
function bilalcode_enqueue_styles()
{
    wp_enqueue_style('shaherbano_style', get_stylesheet_uri());
    wp_enqueue_style('custom-css', get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css"); // Corrected path
    wp_enqueue_style('responsive', get_template_directory_uri() . "/assets/css/responsive.css");
    wp_enqueue_style('font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css"); // Corrected handle
    wp_enqueue_style('bootsnav', get_template_directory_uri() . "/assets/css/bootsnav.css");
    wp_enqueue_style('flat-icon', get_template_directory_uri() . "/assets/css/flaticon.css");
    wp_enqueue_style('linear-icons', get_template_directory_uri() . "/assets/css/linearicons.css"); // Corrected handle
    wp_enqueue_style('slick-theme', get_template_directory_uri() . "/assets/css/slick-theme.css");
    wp_enqueue_style('slick', get_template_directory_uri() . "/assets/css/slick.css");
    wp_enqueue_style('animate', get_template_directory_uri() . "/assets/css/animate.css");
}

function littletheme_enqueue_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array('jquery'), null, true);
    wp_enqueue_script('bootsnav-js', get_template_directory_uri() . "/assets/js/bootsnav.js", array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . "/assets/js/custom.js", array('jquery'), null, true);
    wp_enqueue_script('feather-js', get_template_directory_uri() . "/assets/js/feather.min.js", array('jquery'), null, true);
    wp_enqueue_script('jquery-js', get_template_directory_uri() . "/assets/js/jquery.js", array(), null, true);
    wp_enqueue_script('jquery-counter-js', get_template_directory_uri() . "/assets/js/jquery.counterup.min.js", array(), null, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . "/assets/js/slick.min.js", array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'bilalcode_enqueue_styles');
add_action('wp_enqueue_scripts', 'littletheme_enqueue_scripts');
?>