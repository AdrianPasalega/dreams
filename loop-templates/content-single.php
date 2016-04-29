<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-thumbnail">
		<div class="overlay"></div>

		<?php echo get_the_post_thumbnail( $post->ID, 'post-image' ); ?>

	</div>
		<div class="single-post-content">
	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<p class = 'post-date'><i class="fa fa-calendar"></i> <?php understrap_posted_on(); ?></p>
		<div class="entry-meta">

			<p class="post-author"> by <?php echo get_the_author(); ?> </p>
			<p class="post-tags"><small>Tags</small><i class="fa fa-tag"></i> <?php echo get_the_tag_list('',' ','')?></p>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php the_content(); ?>


	</div><!-- .entry-content -->
	<div class="social-media">
	<ul>
		<li><a href="#" class="fb-share"><i class="fa fa-facebook"></i> </a>Share </li>
		<li><a href="#" class="social-heart"><i class="fa fa-heart"></i> </a>24 people love this</li>
	</ul>
	</div>

</article><!-- #post-## -->
