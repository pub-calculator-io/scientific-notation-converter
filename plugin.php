<?php
/*
Plugin Name: CI Scientific notation converter
Plugin URI: https://www.calculator.io/scientific-notation-converter/
Description: Scientific notation calculator converts numbers to scientific notation, standard form, engineering notation, scientific e-notation, and word form and finds the order of magnitude.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_scientific_notation_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Scientific Notation Converter by Calculator.iO";

function display_ci_scientific_notation_converter(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Scientific Notation Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_scientific_notation_converter_iframe"></iframe></div>';
}

add_shortcode( 'ci_scientific_notation_converter', 'display_ci_scientific_notation_converter' );