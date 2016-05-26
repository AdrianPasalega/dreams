<?php
/**
 * @package understrap
 */


?>
<article id="post-<?php the_ID(); ?>" class="
	<?php echo 'box-shadow' ?>
">
	<?php echo get_the_post_thumbnail( $post->ID, 'post-image' ); ?>
<div class="blog-article-content clearfix">
	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<p class = 'post-date'><i class="fa fa-calendar"></i> <?php understrap_posted_on(); ?></p>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->


		<div class="entry-content">

	            <?php
	                the_excerpt();
	            ?>
			<a href ='<?php echo the_permalink()  ?>' class="read-more">Read more</a>
		</div><!-- .entry-content -->

</div>
</article><!-- #post-## -->
