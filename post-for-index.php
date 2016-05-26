<?php
$args_t = array(
    'post_type' => 'post',
    'category_name' => 'Blog',
    'posts_per_page' => 2,
    'orderby' => 'YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC'

);
$t = new WP_Query( $args_t );
while ( $t->have_posts() ) : $t->the_post();;

    ?>

    <article
             <?php
             if (!has_post_thumbnail() ) {
                 echo 'class = no-img-post';
             }
             ?>

        >
        <?php echo the_post_thumbnail('post-index-image'); ?>
            <div class="blog-content">
        <h2><?php echo get_the_title()  ?></h2>
      <?php add_filter('the_excerpt', 'limit_words_20'); add_filter('the_excerpt', 'add_dots'); the_excerpt(); ?>
                <a href="<?php the_permalink() ?>">More</a>


            </div>
    </article>

<?php  endwhile; ?>



