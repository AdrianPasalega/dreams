<?php
/************* COMMENT LAYOUT *********************/
// Comment Form


add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
    <textarea class="form-control" id="comment" name="comment" placeholder="Comment" cols="45" rows="8" aria-required="true"></textarea>
    </div>';
    $args['class_submit'] = 'btn-blue-submit'; // since WP 4.1
    return $args;
}
    add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
    function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5 = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    $fields = array(
    'author' => '<div class="form-group comment-form-author">' .
    '<input class="form-control" placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
    'email' => '<div class="form-group comment-form-email">' .
    '<input class="form-control" id="email" placeholder="Email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',

    );
    return $fields;
    }

