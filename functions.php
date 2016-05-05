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

function filter_search($query) {
    if ($query->is_search) {
        $query->set('post_type', array('post', 'resources', 'events'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');

function my_smart_search( $search, &$wp_query ) {
    global $wpdb;

    if ( empty( $search ))
        return $search;

    $terms = $wp_query->query_vars[ 's' ];
    $exploded = explode( ' ', $terms );
    if( $exploded === FALSE || count( $exploded ) == 0 )
        $exploded = array( 0 => $terms );

    $search = '';
    foreach( $exploded as $tag ) {
        $search .= " AND (
            (wp_posts.post_title LIKE '%$tag%')
            OR (wp_posts.post_content LIKE '%$tag%')
            OR EXISTS
            (
                SELECT * FROM wp_comments
                WHERE comment_post_ID = wp_posts.ID
                    AND comment_content LIKE '%$tag%'
            )
            OR EXISTS
            (
                SELECT * FROM wp_terms
                INNER JOIN wp_term_taxonomy
                    ON wp_term_taxonomy.term_id = wp_terms.term_id
                INNER JOIN wp_term_relationships
                    ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
                WHERE taxonomy = 'post_tag'
                    AND object_id = wp_posts.ID
                    AND wp_terms.name LIKE '%$tag%'
            )
        )";
    }

    return $search;
}

add_filter( 'posts_search', 'my_smart_search', 500, 2 );


function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );


/**
 * Include posts from authors in the search results where
 * either their display name or user login matches the query string
 *
 * @author danielbachhuber
 */
