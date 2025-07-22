<?php
/*
Plugin Name: Random Footer Quotes
Description: Displays a random quote in the footer on each page load.
Version: 1.0
Author: Manideep
*/

function rfq_get_random_quote() {
    $quotes = array(
        "Stay hungry, stay foolish. - Steve Jobs",
        "Code is like humor. When you have to explain it, it's bad. - Cory House",
        "First, solve the problem. Then, write the code. - John Johnson",
        "Make it work, make it right, make it fast. - Kent Beck"
    );

    $random_index = array_rand($quotes);
    return $quotes[$random_index];
}

function rfq_display_quote() {
    echo '<p style="text-align:center; padding:10px; font-style:italic;">' . rfq_get_random_quote() . '</p>';
}

add_action('wp_footer', 'rfq_display_quote');