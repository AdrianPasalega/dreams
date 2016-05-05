<?php
/* Template Name: Media resources */

get_header(); ?>

    <div class="container">
        <div class="contact-main">
<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'loop-templates/content',  'contact' );
        ?>

    <?php endwhile; ?>



<?php else : ?>

    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

<?php endif; ?>





        </div>
    </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js"></script>

<?php get_footer(); ?>