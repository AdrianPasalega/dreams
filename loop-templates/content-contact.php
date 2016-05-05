<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 4/18/2016
 * Time: 5:11 PM
 */
?>
<h1><?php the_title() ?></h1>

<div class="contact">

    <?php the_content(); ?>



    <ul class="contact-info">
        <?php if (get_post_meta( get_the_ID(), 'email', true )) {
            $a =  get_post_meta( get_the_ID(), 'email', true );
            echo "<li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>$a </a></li>" ;
        }
        ?>
        <?php if (get_post_meta( get_the_ID(), 'mobile', true )) {
            $a =  get_post_meta( get_the_ID(), 'mobile', true );
            echo "<li><a href=\"#\"><i class=\"fa fa-mobile\"></i>$a </a></li>" ;
        }
        ?>
        <?php if (get_post_meta( get_the_ID(), 'location', true )) {
            $a =  get_post_meta( get_the_ID(), 'location', true );
            echo "<li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>$a </a></li>" ;
        }
        ?>
    </ul>

    <div id="googleMap"></div>

</div>
