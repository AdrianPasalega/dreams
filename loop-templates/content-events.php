<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" class="
	<?php
if (!has_post_thumbnail() ) {
    echo 'no-img-sg-resource';
}
?>
    <?php echo 'box-shadow event' ?>
">
    <div class="evt-image-thumbnail">
        <div class="overlay"></div>
        <?php echo the_post_thumbnail('resource-image'); ?>
        <header class="entry-header col-md-8 ">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class = 'post-date'>Posted on <?php echo the_date('Y.m.d') ?> by <?php echo get_the_author(); ?> </p>

        </header>

    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="event-content">
                <div class="entry-content col-md-9 ">
                    <div class="entry-main ">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="entry-second col-xs-12 col-md-3">
                  <div class="post-details">
                        <ul class="post-event-info" >
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

                    <dl>
                        <?php if (get_post_meta( get_the_ID(), 'Contribution', true )) {
            $a =  get_post_meta( get_the_ID(), 'Contribution', true );
            echo "<dt>$a</dt>" ;
        }
                        ?>

                       <?php if (get_post_meta( get_the_ID(), 'Cost', true )) {
            $a =  get_post_meta( get_the_ID(), 'Cost', true );
            echo "<dd>$a</dd>" ;
        }
    ?>
          </dl>
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

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-content -->
        </div>
    </div>


</article><!-- #post-## -->




