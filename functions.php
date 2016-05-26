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
add_image_size('member-image', 500,410, true);

function limit_words_30($string) {

    $words = explode(' ', $string);

    $w =  implode(' ', array_slice($words, 0, 30));
    $pos = strrpos( $w, '...');
    if ($pos === false)
    {
        return $w;
    }

    return rtrim (substr($w, 0, $pos) );

}


function limit_words_60($string) {

    $words = explode(' ', $string);

    return implode(' ', array_slice($words, 0, 60));

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







function my_add_reviews( $query ) {
    if ( ! is_admin() && $query->is_main_query()) {
        if ($query->is_home() || $query->is_search() ) {
            $query->set( 'post_type', array( 'post', 'events' ) );
        }
    }
}

add_action( 'pre_get_posts', 'my_add_reviews' );

function my_custom_posttypes() {
    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'menu_name'          => 'Events',
        'name_admin_bar'     => 'Event',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'new_item'           => 'New Event',
        'edit_item'          => 'Edit Event',
        'view_item'          => 'View Event',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No events found.',
        'not_found_in_trash' => 'No events found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail','custom-fields','excerpt'),
        'taxonomies'         => array('category')

    );
    register_post_type('events', $args );

    //Testimonials

    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonials',
        'parent_item_colon'  => 'Parent Testimonials:',
        'not_found'          => 'No Testimonials found.',
        'not_found_in_trash' => 'No Testimonials found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-star-half',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail','custom-fields','excerpt'),
        'taxonomies'         => array('category', 'post_tag')
    );
    register_post_type('testimonials', $args );

    //Resources

    $labels = array(
        'name'               => 'Resources',
        'singular_name'      => 'Resource',
        'menu_name'          => 'Resources',
        'name_admin_bar'     => 'Resource',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Resource',
        'new_item'           => 'New Resource',
        'edit_item'          => 'Edit Resource',
        'view_item'          => 'View Resource',
        'all_items'          => 'All Resources',
        'search_items'       => 'Search Resources',
        'parent_item_colon'  => 'Parent Resources:',
        'not_found'          => 'No Resources found.',
        'not_found_in_trash' => 'No Resources found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-carrot',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail','custom-fields','excerpt','author','comments'),
        'taxonomies'         => array('post_tag','category')
    );
    register_post_type('resources', $args );

    //Team Members
    $labels = array(
        'name'               => 'Members',
        'singular_name'      => 'Member',
        'menu_name'          => 'Members',
        'name_admin_bar'     => 'Member',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Member',
        'new_item'           => 'New Member',
        'edit_item'          => 'Edit Mmeber',
        'view_item'          => 'View Member',
        'all_items'          => 'All Members',
        'search_items'       => 'Search Members',
        'parent_item_colon'  => 'Parent Members:',
        'not_found'          => 'No Members found.',
        'not_found_in_trash' => 'No Members found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-groups',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'members' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail','custom-fields','excerpt','author',)
    );
    register_post_type('members', $args );


}

add_action('init', 'my_custom_posttypes');

function my_rewrite_flush() {

    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');

function add_custom_types_tag( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'add_custom_types_tag' );

function add_custom_types_category( $query ) {
    if( is_category() && $query->is_main_query() ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'add_custom_types_category' );





function nav_b(){
       $classes = get_body_class();
       $a = ['home', 'search', 'category', 'tag'];
       $result = array_intersect($classes, $a);
       if(empty($result)){

        $output =   "<div class=breadcrumbs typeof=BreadcrumbList vocab=http://schema.org/>";
               if(function_exists('bcn_display'))
               {
                   bcn_display();
               }
          $output .= "</div>";

        }
}

function custom_comment_form_defaults($defaults){
    $defaults['comment_notes_before'] = '';
    $defaults['title_reply'] = '<h3 id="reply-title" class="comment-reply-title ">' .'<i class="fa fa-comments"></i>'. sprintf( __('Add a comment ') ) . '</h3>';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'custom_comment_form_defaults' );



function comment_reply_link_filter($content){
    return '<div class="container-reply-link"><i class="fa fa-mail-reply fa-rotate-180"></i> ' . $content . '</div>' ;
}
add_filter('comment_reply_link', 'comment_reply_link_filter', 99);



add_filter( 'get_comment_date', 'wpsites_change_comment_date_format' );
function wpsites_change_comment_date_format( $d ) {
    $d = date("m.d.y");
    return $d;
}




function atom_search_where($where){
    global $wpdb;

    if ( is_search() )
        $where .= "OR (t.name LIKE '%".get_search_query() . "%' AND {$wpdb->posts} . post_status = 'publish')";

    return $where;
}

function atom_search_join($join){
    global $wpdb;

    if ( is_search() )
        $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
    return $join;
}

function atom_search_groupby($groupby){
    global $wpdb;

    // we need to group on post ID
    $groupby_id = "{$wpdb->posts} . ID";
    if ( ! is_search() || strpos($groupby, $groupby_id) !== false )
        return $groupby;

    // groupby was empty, use ours
    if ( ! strlen( trim($groupby) ) )
        return $groupby_id;

    // wasn't empty, append ours
    return $groupby . ", " . $groupby_id;
}

add_filter('posts_where', 'atom_search_where');

add_filter('posts_join', 'atom_search_join');
add_filter('posts_groupby', 'atom_search_groupby');

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}