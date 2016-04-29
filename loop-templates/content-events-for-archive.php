<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <a href="<?php the_permalink() ?>"><h2  class="headline"><?php echo the_title() ?></h2></a>


    <?php
    if(has_excerpt($post->ID)){
add_filter('the_excerpt', 'limit_words_30'); add_filter('the_excerpt', 'add_dots');   the_excerpt(); }  ?>

        <div class='events-img-details'>
            <div class="btn-container">
                <?php if (get_post_meta( get_the_ID(), 'Expiration Date', true )) {
                    $a =  get_post_meta( get_the_ID(), 'Expiration Date', true );
                    $date = new DateTime($a);
                    $now = new DateTime();
                    if($date < $now) { ?>

                        <a href =<?php the_permalink() ?>><button class='btn-green-details' type='button'>Detalii</button></a>
                    <?php } else { ?>
                        <a href =<?php the_permalink() ?>><button class='btn-red-submit' type='button'>Inscrie-te</button></a>
                    <?php } ?>
                <?php } ?>

            </div>
        <ul class="events-info">
            <?php if (get_post_meta( get_the_ID(), 'Date', true )) {
                $a =  get_post_meta( get_the_ID(), 'Date', true );
                echo "<li><a href=\"#\"><i class=\"fa fa-calendar\"></i>$a </a></li>" ;
            }
            ?>
            <?php if (get_post_meta( get_the_ID(), 'Time', true )) {
                $a =  get_post_meta( get_the_ID(), 'Time', true );
                echo "<li><a href=\"#\"><i class=\"fa fa-clock-o\"></i>$a </a></li>" ;
            }
            ?>
            <?php if (get_post_meta( get_the_ID(), 'Location', true )) {
                $a =  get_post_meta( get_the_ID(), 'Location', true );
                echo "<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>$a </a></li>" ;
            }
            ?>


        </ul>


            <?php echo the_post_thumbnail('event-archive-image'); ?>
</div>
    <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->

