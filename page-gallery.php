<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 5/10/2016
 * Time: 12:28 PM
 */

get_header(); ?>
    <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'loop-templates/content', 'gallery' );
                            ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

                        </div>
                    </div>
                 </div>
                </div>
<?php get_footer(); ?>
