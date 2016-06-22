<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="hero">
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'loop-templates/content', 'index-hero' );
                            ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="content main-evt box-shadow">

                    <?php get_template_part('event-for-index'); ?>
                </div>

                <div class="content articles box-shadow">
                    <p class="index-tag">De Blog</p>

                    <?php get_template_part('post-for-index'); ?>
                </div>

                <div class="content box-shadow">
                    <p class="index-tag">Testimoniale</p>
                    <div class="testimonials">

                        <?php get_template_part('testimonials-for-index'); ?>
                    </div>
                </div>
            </div>
        </div>

</main>

</div>
<?php get_footer(); ?>
