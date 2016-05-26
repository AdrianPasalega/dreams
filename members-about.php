<?php
/**
 * Created by PhpStorm.
 * User: samuelmitra
 * Date: 5/11/2016
 * Time: 1:22 PM
 */
$args = array(
    'post_type' => 'members',
    'orderby' => 'YEAR(Date) DESC, MONTH(Date) DESC, DAY(DATE) DESC'
);




$events = new WP_Query( $args );
while ( $events->have_posts() ) : $events->the_post();
    ?>
    <section class="member">
        <div class="member-detail">
            <div class="member-contacts">
                <?php if (get_post_meta( get_the_ID(), 'member_name', true )) {
                    $a =  get_post_meta( get_the_ID(), 'member_name', true );
                    echo "<h4 class=m-name>$a</h4>" ;} ?>

                <ul class="m-social">

                <?php if (get_post_meta( get_the_ID(), 'member_facebook', true )) {
                    $a =  get_post_meta( get_the_ID(), 'member_facebook', true );
                    echo "<li><a href=$a><i class='fa fa-facebook'></i></a></li>" ;} ?>

                <?php if (get_post_meta( get_the_ID(), 'member_twitter', true )) {
                    $a =  get_post_meta( get_the_ID(), 'member_twitter', true );
                    echo "<li><a href=$a><i class='fa fa-twitter'></i></a></li>" ;} ?>

                <?php if (get_post_meta( get_the_ID(), 'member_insta', true )) {
                    $a =  get_post_meta( get_the_ID(), 'member_insta', true );
                    echo "<li><a href=$a><i class='fa fa-instagram'></i></a></li>" ;} ?>
                </ul>
            </div>
            <?php the_post_thumbnail('member-image'); ?>
        </div>
        <?php the_content();?>
    </section>
<?php endwhile; ?>

