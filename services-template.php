<?php

/*

Template Name: Service-Page Template

*/

    get_header(  );

?>







        



        <!-- ---------- ABOUT AREA START ---------- -->

        <section class="about-area section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-md-push-8 service-area service-page-service-list">



                        <div class="row row-padding">

                            

                            <?php

                                global $post;

                                $args = array( 'posts_per_page' => 6, 'post_type'=> 'service-list', 'orderby' => 'menu_order', 'order' => 'ASC' );

                                $myposts = get_posts( $args );

                                foreach( $myposts as $post ) : setup_postdata($post); 

                            ?>



                            <div class="col-md-12 col-xs-6 no-padding">

                                <a href="<?php echo the_permalink( ); ?>" class="single-service-box">

                                    <?php

                                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                                    ?>

                                    

                                    

                                    <img src="<?php echo $url; ?>" alt="">

                                    <?php  wpautop( the_excerpt(  ) ); ?>

                                </a>

                            </div>



                            <?php endforeach; wp_reset_query(); ?>





                        </div>

                    </div>



                    <div class="col-md-8 col-md-pull-4">

                        <div class="row single-service-row">

                            <div class="col-md-12">

                                <div class="service-page-heading">

                                    <h3>Ведение налогового учета</h3>

                                </div>

                            </div>



                            <?php

                                global $post;

                                $args = array( 'posts_per_page' => 6, 'post_type'=> 'service-post', 'orderby' => 'menu_order', 'order' => 'ASC' );

                                $myposts = get_posts( $args );

                                foreach( $myposts as $post ) : setup_postdata($post); 

                            ?>



                            

                            <!-- SINGLE SERVICE START -->

                            <div class="col-md-12">

                                <h3 class="about-page-heading single-service-heading"><a href="">

                                    <?php the_title(); ?>

                                </a></h3>

                                <p class="about-details single-service-details">

                                    <?php echo wpautop( the_content(  ) ); ?>

                                </p>

                            </div>



                            





                            <div class="col-md-12">



                                <div class="about-feature-points single-service-feature-points">



                                    



                                    

                                    

                                    <?php

                                        $feature_s = cs_get_option('features');

                                        foreach( $feature_s as $feature_x ):

                                    ?>



                                    <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt=""><?php echo $feature_x['f_title']; ?> </p>



                                    <?php endforeach; ?>





                                    

                                   

        

        

                                </div>





                            </div>

                            <div class="col-md-12">

                                <a href="#contact-form" class="ask-question-btn">Задать вопрос</a>

                            </div>

                            <!-- SINGLE SERVICE END -->



                            <?php endforeach; wp_reset_query(); ?>

                            



                            





                           

                        </div>

                    </div>

                    

                </div>

            </div>

        </section>

        <!-- ---------- ABOUT AREA END ---------- -->



        <!-- ---------- FORM AREA START ---------- -->

        <?php get_template_part( 'Template-Parts/form' ); ?>

        <!-- ---------- FORM AREA END ---------- -->







<?php

    get_footer(  );

?>