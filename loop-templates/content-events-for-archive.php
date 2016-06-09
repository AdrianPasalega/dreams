<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" class="
        <?php echo 'type-events box-shadow' ?>
" >
    <a href="<?php the_permalink() ?>" class="link-headline"><h2  class="headline"><?php echo the_title() ?></h2></a>


    <?php
    if(has_excerpt($post->ID)){
add_filter('the_excerpt', 'limit_words_30');    the_excerpt(); }  ?>

        <div class='events-img-details'>
            <div class="btn-container">
                <?php if (get_post_meta( get_the_ID(), 'Expiration Date', true )) {
                    $a =  get_post_meta( get_the_ID(), 'Expiration Date', true );
                    $date = new DateTime($a);
                    $now = new DateTime();
                    if($date < $now) { ?>

                    <?php } else {
                        if (get_post_meta( get_the_ID(), 'subscribe_to_event_link', true )) {
                            $b = get_post_meta(get_the_ID(), 'subscribe_to_event_link', true);
                            ?>
                                <a href =<?php echo $b ?> ><button class='btn-blue-submit' type='button'>Inscrie-te</button></a>
                        <?php } else { ?>


                        <?php } ?>
                    <?php } ?>
                <?php } ?>

            </div>
        <ul class="events-info">
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


            <?php echo the_post_thumbnail('event-archive-image'); ?>
</div>
    <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->

