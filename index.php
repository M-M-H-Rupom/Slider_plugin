<?php
/**
 * Plugin Name: Slider plugin
 * Author: Rupom
 * Version: 1.0
 * Description: Slider plugin
 */
function slider_script_enqueue() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('slider_slider_js','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slider_main_js', plugin_dir_url( __FILE__ ) .'assets/main.js', array('jquery', 'slider_slider_js'), '1.0', true);
    wp_enqueue_style('slider_css', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');
}
add_action('wp_enqueue_scripts', 'slider_script_enqueue');

function callback_for_slider() {
    $slide = <<<EOD
    <div class="slider">
        <div><img src="https://placehold.co/500x400" alt=""></div>
        <div><img src="https://placehold.co/500x400" alt=""></div>
    </div>
    EOD;
    return $slide;  
}
add_shortcode('slider', 'callback_for_slider');


?>