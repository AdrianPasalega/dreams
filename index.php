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
    <a href="javascript:"><i class="fa fa-arrow-circle-up"></i> </a>
</div>
    <div id="content" class="container">

        <div class="row">

            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> col-lg-9 content-area">

                <main id="main" class="site-main" role="main">
                    <?php $args = array( 'post_type' => 'post', 'paged' => $paged);
                    $loop = new WP_Query( $args ); ?>
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( $loop -> have_posts() ) : $loop -> the_post(); ?>

                            <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'loop-templates/content', 'content' );
                            ?>

                        <?php endwhile; ?>



                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                    <?php endif; ?>
                    <?php
                    function pagination_bar() {
                    global $wp_query;

                    $total_pages = $wp_query->max_num_pages - 1;

                    if ($total_pages > 1){
                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    ));
                    }
                    } ?>
                    <div class="pagination-nav">
                   <?php pagination_bar(); ?>
                    </div>
            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->
</div>


<?php get_footer(); ?>
