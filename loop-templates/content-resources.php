<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
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

       <div class="entry-content col-md-8 ">
            <div class="entry-main ">

                <?php the_content(); ?>
                <div class="post-tags"><i class="fa fa-tags"></i><small>Tags</small><div><?php echo get_the_tag_list('',' ','')?></div></div>


                <div class="social-media">
               <ul>
                   <li><a href="#" class="fb-share"><i class="fa fa-facebook"></i> </a>Share </li>
                   <li><a href="#" class="social-heart"><i class="fa fa-heart"></i> </a>24 people love this</li>
               </ul>
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

               <ul class="res-meta-list">
               <?php if (get_post_meta( get_the_ID(), 'Target', true )) {
                   $a =  get_post_meta( get_the_ID(), 'Target', true );
                   echo "<li><i class=\"fa fa-users\"></i><p>Livrat in format:</p><span>$a</span></li>" ;
               }
               ?>
               <?php if (get_post_meta( get_the_ID(), 'Format', true )) {
                   $a =  get_post_meta( get_the_ID(), 'Format', true );
                   echo "<li><i class=\"fa fa-file\"></i><p>Livrat in format:</p><span>$a</span></li>" ;

               }
               ?>
               <?php if (get_post_meta( get_the_ID(), 'Utility', true )) {
                   $a =  get_post_meta( get_the_ID(), 'Utility', true );
                   echo "<li><i class=\"fa fa-book\"></i><p>Util pentru:</p><span>$a</span></li>" ;
               }
               ?>
               <?php if (get_post_meta( get_the_ID(), 'File', true )) {
                   $a =  get_post_meta( get_the_ID(), 'File', true );
                   echo "<li><i class=\"fa fa-file-pdf-o\"></i><p>Download:</p><span>$a</span></div></li>" ;

               }
               ?>
                   </ul>
               </div>

           </div>

    </div><!-- .entry-content -->
    </div>
    </div>
    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
