<?php
/*
  Plugin Name: Is Logged in
  Plugin URI: https://github.com/Trifoia/is-logged-in
  description: Adds shortcodes that only display content when the user is logged in / out
  Version: 1.0
  Author: Trifoia
  Author URI: https://trifoia.com
  License: MIT
*/

/**
 * Used to only show content users who are logged in
 * 
 * Ex: `[logged_in]User is logged in.[/logged_in]`
 */
function logged_in_shortcode($atts, $content = null) {
  if (is_user_logged_in() && !is_null($content) && !is_feed()) {
    return do_shortcode($content);
  }
}
add_shortcode('logged_in', 'logged_in_shortcode');

/**
 * Used to only show content users who are not logged in
 * 
 * Ex: `[not_logged_in]User is logged in.[/not_logged_in]`
 */
function not_logged_in_shortcode($atts, $content = null) {
  if (!is_user_logged_in() && !is_null($content) && !is_feed()) {
    return do_shortcode($content);
  }
}
add_shortcode('not_logged_in', 'not_logged_in_shortcode');
