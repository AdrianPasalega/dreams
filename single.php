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

            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> col-lg-9 content-area page-for-post box-shadow">

                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'single' ); ?>


                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>
                    <?php
                    global $post;
                    $post_slug=$post->post_name;
                    ?>
                </main><!-- #main -->

            </div><!-- #primary -->

        <?php get_template_part('sidebar'); ?>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
