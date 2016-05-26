<?php

get_header(); ?>


        <div class="support-main">
            <div class="container">
                <div class="box-shadow">
            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'loop-templates/content',  'support' );
                    ?>

                <?php endwhile; ?>



            <?php else : ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

            <?php endif; ?>




                </div>
        </div>
    </div>



<?php get_footer(); ?>