<?php
/*
Plugin Name: Columnizer
Description: Automatically formats content into columns
Version: 3.3.1.150
Author: Tristan Chambers tristan.chambers@gmail.com
*/

// Use this for testing - comment out for release
error_reporting(E_ALL);

function columnizer_scripts_method() {
        wp_enqueue_script('jquery');

        wp_register_script('columnizer', plugins_url('jquery.columnizer.js', __FILE__));
        wp_enqueue_script('columnizer');
        wp_register_script('columnizerinit', plugins_url('columnizer-init.js', __FILE__));
        wp_enqueue_script('columnizerinit');

        wp_register_style('columnizer', plugins_url('columnizer.css', __FILE__));
        wp_enqueue_style('columnizer');
}

add_action('wp_enqueue_scripts', 'columnizer_scripts_method');

//[twocolumns]
function columnizer_two_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-two">' . $content . '</div>';
}
add_shortcode( 'twocolumns', 'columnizer_two_shortcode' );
//[threecolumns]
function columnizer_three_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-three">' . $content . '</div>';
}
add_shortcode( 'threecolumns', 'columnizer_three_shortcode' );
//[fourcolumns]
function columnizer_four_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-four">' . $content . '</div>';
}
add_shortcode( 'fourcolumns', 'columnizer_four_shortcode' );
//[fivecolumns]
function columnizer_five_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-five">' . $content . '</div>';
}
add_shortcode( 'fivecolumns', 'columnizer_five_shortcode' );
//[sixcolumns]
function columnizer_six_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-six">' . $content . '</div>';
}
add_shortcode( 'sixcolumns', 'columnizer_six_shortcode' );
//[sevencolumns]
function columnizer_seven_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-seven">' . $content . '</div>';
}
add_shortcode( 'sevencolumns', 'columnizer_seven_shortcode' );
//[eightcolumns]
function columnizer_eight_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-eight">' . $content . '</div>';
}
add_shortcode( 'eightcolumns', 'columnizer_eight_shortcode' );
//[ninecolumns]
function columnizer_nine_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-nine">' . $content . '</div>';
}
add_shortcode( 'ninecolumns', 'columnizer_nine_shortcode' );
//[tencolumns]
function columnizer_ten_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-ten">' . $content . '</div>';
}
add_shortcode( 'tencolumns', 'columnizer_ten_shortcode' );
//[elevencolumns]
function columnizer_eleven_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-eleven">' . $content . '</div>';
}
add_shortcode( 'elevencolumns', 'columnizer_eleven_shortcode' );
//[twelvecolumns]
function columnizer_twelve_shortcode( $atts, $content = null ) {
   return '<div id="columnizer" class="columnize-twelve">' . $content . '</div>';
}
add_shortcode( 'twelvecolumns', 'columnizer_twelve_shortcode' );

