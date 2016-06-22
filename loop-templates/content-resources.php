<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" class="
	<?php
if (!has_post_thumbnail() ) {
    echo 'no-img-sg-resource';
}
?>
    <?php echo 'box-shadow resources' ?>
">
    <div class="res-image-thumbnail">
        <div class="overlay"></div>
        <?php echo the_post_thumbnail('resource-image'); ?>
    </div>

<div class="row">
    <div class="col-xs-12">

    <div class="resource-content">

        <header class="entry-header col-md-8 ">
       <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class = 'post-date'>Posted on <?php echo the_date('Y.m.d') ?> by <?php echo get_the_author(); ?> </p>

            </header>

       <div class="entry-content col-md-9 ">
            <div class="entry-main ">

                <?php the_content(); ?>
                <p class="post-tags"><i class="fa fa-tags"></i><small>Tags:</small><?php echo get_the_tag_list('',' ','')?></p>



                <div class="social-media">
                    <?php echo do_shortcode("[mashshare]"); ?>

                </div>
           </div>
           <?php
           // If comments are open or we have at least one comment, load up the comment template
           if ( comments_open() || get_comments_number() ) :
               comments_template();
           endif;
           ?>

            </div>




           <div class="entry-second col-xs-12 col-md-3">


               <ul class="res-meta" id="resource-list">

                   <?php if (get_post_meta( get_the_ID(), 'objective', true )) {
                       $a =  get_post_meta( get_the_ID(), 'objective', true );
                       echo "<li><i class=\"fa fa-bullseye\"></i><div class=meta-c><p>Aims & Objectives</p><span>$a</span></div></li>" ;

                   }
                   ?>

                   <?php if (get_post_meta( get_the_ID(), 'main_theme', true )) {
                       $a =  get_post_meta( get_the_ID(), 'main_theme', true );
                       echo "<li><i class=\"fa fa-pencil-square-o \"></i><div class='meta-c'><p>Main Theme</p><span>$a</span></div></li>" ;

                   }
                   ?>
                   <?php if (get_post_meta( get_the_ID(), 'methodology', true )) {
                       $a =  get_post_meta( get_the_ID(), 'methodology', true );
                       echo "<li><i class=\"fa fa-book\"></i><div class='meta-c'><p>Methodology</p><span>$a</span></div></li>" ;

                   }
                   ?>
                   <?php if (get_post_meta( get_the_ID(), 'nr_participants', true )) {
                       $a =  get_post_meta( get_the_ID(), 'nr_participants', true );
                       echo "<li><i class=\"fa fa-users\"></i><div class='meta-c'><p>Nr. of participants</p><span>$a</span></div></li>" ;

                   }
                   ?>
                   <?php if (get_post_meta( get_the_ID(), 'duration', true )) {
                       $a =  get_post_meta( get_the_ID(), 'duration', true );
                       echo "<li><i class=\"fa fa-clock-o\"></i><div class='meta-c'><p>Duration</p><span>$a</span></div></li>" ;

                   }
                   ?>
                   <?php if (get_post_meta( get_the_ID(), 'download_link', true )) {
                       $a =  get_post_meta( get_the_ID(), 'download_link', true );
                       echo "<li><i class=\"fa fa-download\"></i><div class='meta-c'><p>Download</p><span>$a</span></div></li>" ;

                   }
                   ?>
               </ul>
               </div>

           </div>

    </div><!-- .entry-content -->
    </div>
    </div>
    <footer class="entry-footer">


    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
