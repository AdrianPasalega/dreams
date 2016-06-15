<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>



<div class="wrapper-for-post" id="single-wrapper">
    <div  id="content" class="container">
        <div id="weglot_here"></div>
        <div class="row">

            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> col-lg-9 content-area page-for-post">

                <main id="main" class="site-main  box-shadow" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'single-stc' ); ?>




                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

            <?php get_template_part('sidebar'); ?>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
