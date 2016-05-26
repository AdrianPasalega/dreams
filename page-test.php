<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 5/18/2016
 * Time: 2:39 PM
 */?>
<?php get_header();?>

<div id =content class=container>
<?php
echo do_shortcode("[ajax_load_more post_type='post']")?>
</div>
<?php get_footer(); ?>
