<?php
$args = array(
'post_type' => 'events',
'posts_per_page' => 1,
'orderby' => 'YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC'
);




$events = new WP_Query( $args );
while ( $events->have_posts() ) : $events->the_post();
    ?>
    <p class="index-tag">Evenimente viitoare</p>
    <article class="aaa">
        <h2><a href=<?php the_permalink(); ?> ><?php echo get_the_title()  ?></a></h2>
        <?php
        if(has_excerpt($post->ID)){
            add_filter('the_excerpt', 'limit_words_30');    the_excerpt(); }  ?>
</p>
<ul class="index-event-info">
            <?php if (get_post_meta( get_the_ID(), 'Date', true )) {
    $a =  get_post_meta( get_the_ID(), 'Date', true );
    echo "<li><i class=\"fa fa-calendar\"></i>$a</li>" ;
}
            ?>
<?php if (get_post_meta( get_the_ID(), 'Time', true )) {
    $a =  get_post_meta( get_the_ID(), 'Time', true );
    echo "<li><i class=\"fa fa-clock-o\"></i>$a</li>" ;
}
?>
<?php if (get_post_meta( get_the_ID(), 'Location', true )) {
    $a =  get_post_meta( get_the_ID(), 'Location', true );
    echo "<li><i class=\"fa fa-map-marker\"></i>$a</li>" ;
}
?>
</ul>
    </article>
    <?php echo the_post_thumbnail('event-index-image'); ?>
   <?php endwhile; ?>

