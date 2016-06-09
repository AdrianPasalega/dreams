<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package understrap
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php comment_form(); ?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<p class="comment-count-title"><?php comments_number( 'Niciun comentariu', 'Un comentariu', '% comentarii' ); ?></p>
		<ol class="comment-list">

			<?php
			$a = "";
			echo do_shortcode('[ajax_load_more comments="true" comments_post_id="'.get_the_ID().'"  pause="true"  button_label="Incarca comentarii" button_loading_label="Se incarca comentarii..."]');

			?>
		</ol><!-- .comment-list -->



	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'understrap' ); ?></p>
	<?php endif; ?>

 <?php
        /* Loads the comment-form.php template
        /* get_template_part('comment-form');

        */
    ?>


</div><!-- #comments -->
