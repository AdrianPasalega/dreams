<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 5/4/2016
 * Time: 12:57 PM
/**
 * @package understrap
 */


?>
<article id="post-<?php the_ID(); ?>" class="
    <?php echo 'box-shadow' ?>
">
    <?php echo get_the_post_thumbnail( $post->ID, 'post-image' ); ?>
    <div class="search-article-content clearfix ">
        <header class="entry-header">
            <?php add_filter('the_title', 'highlight_search_term'); the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


                <div class="entry-meta">
                    <p class = 'post-date'><i class="fa fa-calendar"></i> <?php the_time(' F jS, Y') ?></p>

                </div><!-- .entry-meta -->

        </header><!-- .entry-header -->


        <div class=" entry-content">
            <?php if(has_excerpt($post->ID)) {
                add_filter('the_excerpt', 'highlight_search_term'); the_excerpt();
            }
            ?>
            <a href ='<?php echo the_permalink()  ?>' class="read-more">Read more</a>


        </div><!-- .entry-content -->

    </div>
</article><!-- #post-## -->
