<?php

/*

Template Name: Service Template

*/

    get_header(  );

?>









        <!-- ---------- ABOUT AREA START ---------- -->

        <section class="about-area section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-md-push-8 service-area service-page-service-list">



                        <!-- SERVICE CATEGORY LIST START -->

                        <div class="row row-padding">

                            

                            <?php

                                global $post;

                                $args = array( 'posts_per_page' => 6, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );

                                $myposts = get_posts( $args );

                                foreach( $myposts as $post ) : setup_postdata($post); 

                            ?>



                            <div class="col-md-12 col-xs-6 no-padding">

                                <a href="<?php the_permalink(  ); ?>" class="single-service-box">

                                    <?php

                                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                                    ?>

                                    <?php

                                        $service_meta = get_post_meta(get_the_ID(), '_service_icon_meta', true);

                                        if(array_key_exists('service_color_icon', $service_meta)){
                                            $service_color_icon = $service_meta['service_color_icon'];
                                        }else {
                                            $service_color_icon = '';
                                        }

                                        if (!empty($service_color_icon)) {

                                            $c_url = wp_get_attachment_url($service_color_icon, 'large' );

                                            /*echo '<pre> ';
                                            echo var_dump($c_url);
                                            echo ' </pre>';*/
                                            /*$c_url = $c_url[0];*/
                                            /*echo $c_url;*/

                                        }else {
                                            $c_url = '';
                                        }

                                    ?>

                                    <input type="hidden" value="<?php echo $url; ?>" class="service_featured_icon">
                                    <input type="hidden" value="<?php echo $c_url; ?>" class="service_colored_icon">

                                    

                                    <img src="<?php echo $url; ?>" alt="">

                                    <?php  wpautop( the_excerpt(  ) ); ?>

                                </a>

                            </div>



                            <?php endforeach; wp_reset_query(); ?>





                        </div>



                        <!-- SERVICE CATEGORY LIST END -->

                    </div>



                    <div class="col-md-8 col-md-pull-4">

                        <div class="row single-service-row">

                            <div class="col-md-12">

                                <div class="service-page-heading">

                                    <h3>Ведение налогового учета</h3>

                                </div>

                            </div>



                            <!-- SERVICE POST LIST START -->



                            <?php

                                global $post;

                                $args = array( 'posts_per_page' => 6, 'post_type'=> 'service-post', 'orderby' => 'menu_order', 'order' => 'ASC' );

                                $myposts = get_posts( $args );

                                foreach( $myposts as $post ) : setup_postdata($post); 





                            ?>

                            <!-- <pre>

                                <?php echo var_dump($post); ?>

                            </pre> -->

                            

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

                                       /* $f_values = rwmb_meta( 'feature' );

                                        if ( ! empty( $f_values ) ) {

                                            foreach ( $f_values as $f_value ) {

                                                $value = isset( $f_value[$feature_name] ) ? $f_value[$feature_name] : '';

                                                echo $value; 

                                            }

                                        }*/



                                        $service_post_meta = get_post_meta(get_the_ID(), '_servicepost_meta', true);



                                        if(array_key_exists('features', $service_post_meta)){

                                            $features = $service_post_meta['features'];

                                        }else {

                                            $features = array();

                                        }

                                    ?>

                                   

                                    <?php if(!empty($features)): foreach($features as $feature): ?>



                                    <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt="">

                                        

                                        <?php echo $feature['title']; ?> 

                                    </p>



                                    <?php endforeach; endif; ?>









                                    

                                   

        

        

                                </div>





                            </div>

                            <div class="col-md-12">

                                <a href="#contact-form" class="ask-question-btn">Задать вопрос</a>

                            </div>

                            <!-- SINGLE SERVICE END -->



                            <?php endforeach; wp_reset_query(); ?>





                            <!-- SERVICE POST LIST END -->





                            





                           

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