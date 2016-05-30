<?php
/**
 * The template for displaying all single resources.
 *
 * @package understrap
 */

get_header(); ?>
<div  id="event-post">
    <div id ="event-container" class="container single-event">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'loop-templates/content', 'events' ); ?>

            <?php understrap_post_nav(); ?>




        <?php endwhile; // end of the loop. ?>

    </div>



    <!-- .row -->

</div><!-- Container end -->


<?php get_footer(); ?>
