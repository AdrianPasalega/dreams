<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */


get_header(); ?>
<div class="back-to-top">
    <a href="javascript:"><i class="fa fa-arrow-circle-up"></i> </a>
</div>
    <div class="wrapper search-result" id="search-wrapper">

        <div  id="content" class="container">

            <div class="row">
 <?php global $wp_query;
$search_nr =  $wp_query->found_posts; ?>
                <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area col-lg-9">
                <div class="page-header">
                <?php if ( have_posts() ) :?>
				<h1 class="page-title"><?php echo $search_nr ?> <?php printf( __( 'search results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
				<?php else : ?>
								<h1 class="page-title"><?php printf( __( 'No search results found' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php endif ?>
				</div>
                    <main id="main" class="site-main" role="main">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'loop-templates/content', 'search-custom' ); ?>



                        <?php endwhile; // end of the loop. ?>

                    </main><!-- #main -->

                </div><!-- #primary -->

                <?php get_sidebar(); ?>

            </div><!-- .row -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->
</div>

<?php get_footer(); ?>