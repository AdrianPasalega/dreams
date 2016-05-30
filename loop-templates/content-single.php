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
	<div class="sg-post-image">
		<div class="overlay"></div>
		<?php echo the_post_thumbnail('resource-image'); ?>
		<header class="entry-header col-md-8 ">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class = 'post-date'>Posted on <?php echo the_date('Y.m.d') ?> by <?php echo get_the_author(); ?> </p>

		</header>
	</div>



		<div class="post-content">
			<div class="entry-content">
				<p class="post-tags"><i class="fa fa-tags"></i> <small>Tags:</small> <?php echo get_the_tag_list('',' ','')?></p>
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			</div>

	<div class="social-media-p">
		<?php echo do_shortcode("[mashshare]"); ?>
	</div>
</article><!-- #post-## -->

