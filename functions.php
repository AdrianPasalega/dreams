<?php
/**
 * understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load WooCommerce functions.
*/
require get_template_directory() . '/inc/woocommerce.php';

add_image_size('event-index-image', 1100,400, true);
add_image_size('post-index-image', 250,188, true);
add_image_size('event-archive-image', 584,365, true);
add_image_size('event-image', 700,437, true);
add_image_size('post-image', 959,350, true);
add_image_size('resource-image', 1170,400, true);
add_image_size('about-image', 1170,400, true);
add_image_size('resource-archive-image', 400,400, true);

function limit_words_30($string) {

    $words = explode(' ', $string);

    return implode(' ', array_slice($words, 0, 30));

}


function limit_words_90($string) {

    $words = explode(' ', $string);

    return implode(' ', array_slice($words, 0, 90));

}

function limit_words_20($string) {

    $words = explode(' ', $string);

    return implode(' ', array_slice($words, 0, 20));

}


function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}


function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) ) . '...';
}
add_filter('the_excerpt', 'change_excerpt');

function add_dots($string){
    $l = '...';
    if(endsWith($string, $l)){
        return $string;
    }else{
        return $string.$l;
    }
    }

