<?php
/**
 * @package understrap
 */
$has_no_img = false;
?>

<article id="post-<?php the_ID(); ?>"
         class=" post-article  box-shadow
		 	<?php
         if (!has_post_thumbnail() ) {
             echo 'no-img-blog post-article box-shadow';
             $has_no_img = true;
         }else{
             echo "resource-archive";
         }
         ?>
		 ">
    <div class="single-post-thumbnail">

        <?php echo get_the_post_thumbnail( $post->ID, 'post-image' ); ?>

        <?php
        if ($has_no_img == false){ the_title( '<h2 class="resources-title">', '</h2>' );} else{the_title( '<h2 class="no-resources-img">', '</h2>' );};
        ?>

    </div>
    <div class="post-content">

        <ul class="res-meta">

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
        </ul>
        <header>

        </header><!-- .entry-header -->
        <div class="entry-content">
            <?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink() ?>">Read more</a>

        </div><!-- .entry-content -->
    </div>
    <p class="post-tags"><i class="fa fa-tags"></i><small>Tags:</small> <?php echo get_the_tag_list('',' ','')?></p>


</article><!-- #post-## -->


