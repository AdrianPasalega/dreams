<?php
/**
 * The template for the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); ?>



                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content events">
                                        <p class="tag">Evenimente viitoare</p>

                                        <article>

                                            <h2>One morning, when Gregor Samsa woke</h2>
                                            <p>He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-calendar"></i> 8-9 Septembrie</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> De la 0900 la 12.30</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker"></i>Cluj-Napoca</a></li>
                                            </ul>
                                        </article>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/pic2.jpg" class="main-menu-logo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content articles">
                                        <p class="tag">De blog</p>
                                        <article>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/dreams_new_design.jpg" class="main-menu-logo" />

                                            <h2>One morning, when Gregor Samsa woke from troubled </h2>
                                            <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him,</p>
                                            <a href="#">Citeste mai mult</a>
                                        </article>

                                        <article>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/dreams_new_design.jpg" class="main-menu-logo" />

                                            <h2>One morning, when Gregor Samsa woke from troubled</h2>
                                            <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him,</p>
                                            <a href="#">Citeste mai mult</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content testimonials">
                                        <p class="tag">Testimoniale</p>
                                        <aside>
                                            <i class="fa fa-quote-right fa-5x"></i>
                                            <blockquote>

                                                <p>
                                                    One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a
                                                </p>
                                                <cite>Author author</cite>
                                            </blockquote>
                                        </aside>

                                        <aside>
                                            <i class="fa fa-quote-right fa-5x"></i>
                                            <blockquote>
                                                <p>
                                                    The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox .
                                                </p>
                                                <cite>Author author</cite>
                                            </blockquote>
                                        </aside>

                                        <aside>
                                            <i class="fa fa-quote-right fa-5x"></i>
                                            <blockquote>

                                                <p>
                                                    Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox.
                                                </p>
                                                <cite>Author author</cite>
                                            </blockquote>
                                        </aside>

                                        <aside>
                                            <i class="fa fa-quote-right fa-5x"></i>
                                            <blockquote>
                                                <p>
                                                    Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft
                                                </p>
                                                <cite>Author author</cite>
                                            </blockquote>
                                        </aside>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </main>



                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
