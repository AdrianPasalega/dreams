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


<?php get_template_part('widget-templates/hero'); ?>

<?php get_template_part('widget-templates/statichero'); ?>

<div class=" blog-page" id="wrapper-index">
<div class="back-to-top">
    <a href="#main-header"><i class="fa fa-arrow-circle-up"></i> </a>
</div>
    <div id="content" class="container">

        <div class="row">

            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> col-lg-9 content-area">

                <main id="main" class="site-main" role="main">
                    <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 15 );
                    $loop = new WP_Query( $args ); ?>
                    <?php if ( have_posts() ) : ?>
                        <?php
                        echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="3" transition="fade"]');
                        ?>
                    <?php else : ?>
                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                    <?php endif; ?>
                </main>

            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->
</div>


<?php get_footer(); ?>
