<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 4/20/2016
 * Time: 5:36 PM
 */?>
<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="back-to-top">
    <a href="javascript:"><i class="fa fa-arrow-circle-up"></i> </a>
</div>

        <div id="primary" class=" content-area">
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
                    get_template_part( 'loop-templates/content', 'resources-for-archive' );
                    ?>

                <?php endwhile; ?>

                <?php understrap_paging_nav(); ?>

            <?php else : ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

            <?php endif; ?>


        </div><!-- #primary -->


    </div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
