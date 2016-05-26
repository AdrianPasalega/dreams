<?php
/**
 * The template for displaying all single resources.
 *
 * @package understrap
 */

get_header(); ?>
<div  id="resource-post">
    <div class="container">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'loop-templates/content', 'resources' ); ?>

                <?php understrap_post_nav(); ?>




            <?php endwhile; // end of the loop. ?>

</div>



  <!-- .row -->

</div><!-- Container end -->


<?php get_footer(); ?>
