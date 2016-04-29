<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


    <?php echo the_post_thumbnail('event-image'); ?>

    <div class="post-details">
        <ul class="post-event-info">
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
            <button type="button" class="btn-red-submit">inscrie-te</button>
        </div>
    </div>
<div class="post-content">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_content(); ?>

</div>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
