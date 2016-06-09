<?php
$args_t = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 4,


);
$t = new WP_Query( $args_t );
while ( $t->have_posts() ) : $t->the_post();;

    ?>
    <aside>
    <i class="fa fa-quote-right fa-5x"></i>
  <blockquote>
      <?php the_content(); ?>
      </blockquote>
        <p class="author"> <?php if (get_post_meta( get_the_ID(), 'Author', true )) {
            $a =  get_post_meta( get_the_ID(), 'Author', true );
            echo $a ;
        }
        ?>
        </p>
        </aside>
<?php  endwhile; ?>



