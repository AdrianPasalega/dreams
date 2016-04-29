<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="archive-res-thumbnail">
        <div class="overlay"></div>
    <?php echo the_post_thumbnail('resource-archive-image'); ?>
</div>
<div class="c">
    <a href="<?php the_permalink() ?>" class="resources-headline"><h2><?php echo the_title() ?></h2></a>

    <div class="archive-res-content">
        <?php add_filter('the_excerpt', 'limit_words_90'); add_filter('the_excerpt', 'add_dots'); the_excerpt()  ?>

         <div class="read-more"><a href="<?php the_permalink() ?>">Read more</a></div>

         <div class="post-tags"><i class="fa fa-tags"></i><small>Tags:</small><?php echo get_the_tag_list('',' ','')?></div>

    </div>
</div>


    </footer><!-- .entry-footer -->

</article><!-- #post-## -->

