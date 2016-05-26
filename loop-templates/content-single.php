<?php
/**
 * @package understrap
 */
?>
<article id="post-<?php the_ID(); ?>"
		 class=" post-article
		 	<?php
			 	if (!has_post_thumbnail() ) {
					echo 'no-img-blog';
			 	}
		 	?>
		 ">
	<div class="single-post-thumbnail">
		<div class="overlay"></div>

		<?php echo get_the_post_thumbnail( $post->ID, 'post-image' ); ?>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<p class = 'post-date'><i class="fa fa-calendar"></i> <?php understrap_posted_on(); ?></p>


	</div>
		<div class="post-content">
			<header class="entry-header">
				<div class="entry-meta">
					<p class="post-author"> by <?php echo get_the_author(); ?> </p>
					<p class="post-tags"><small>Tags</small><i class="fa fa-tag"></i> <?php echo get_the_tag_list('',' ','')?></p>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			</div>

	<div class="social-media-p">
		<?php echo do_shortcode("[mashshare]"); ?>
	</div>
</article><!-- #post-## -->
