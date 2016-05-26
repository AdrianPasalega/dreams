<?php
/**
 * The template for displaying 404 pages (not found).
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="404-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="container">

                <main id="main" class=" row site-main" role="main">

                    <section class="col-xs-12 error-404 not-found">

                        <header class="page-header">

                            <h1 class="page-title"><?php _e( 'Oops! Looks like the internet fell trough.', 'understrap' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">

                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'understrap' ); ?></p>



                        </div><!-- .page-content -->

                    </section><!-- .error-404 -->

                </main><!-- #main -->

            </div><!-- #primary -->

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->
</div>
<?php get_footer(); ?>
