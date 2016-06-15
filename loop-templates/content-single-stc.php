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

        </header>
    </div>



    <div class="post-content">
        <div class="entry-content">
            <?php the_content(); ?>

        </div><!-- .entry-content -->
    </div>


</article><!-- #post-## -->

