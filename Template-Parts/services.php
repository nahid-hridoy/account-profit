        <section class="service-area">

            <div class="container">

                <div class="row row-padding">

                    



                    <?php

                        global $post;

                        $args = array( 'posts_per_page' => 6, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );

                        $myposts = get_posts( $args );

                        foreach( $myposts as $post ) : setup_postdata($post); 

                    ?>





                    <div class="col-md-4 col-xs-6  no-padding">

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

                            <?php  wpautop( the_excerpt() ); ?>

                        </a>

                    </div>



                    <?php endforeach; wp_reset_query(); ?>





                </div>

            </div>

        </section>

        

        <?php



        $h_s_title = cs_get_option( 'f_s_title' );

        $h_s_desc = cs_get_option( 'f_s_desc' );

        $h_s_f_1 = cs_get_option( 'f_s_1' );

        $h_s_f_2 = cs_get_option( 'f_s_2' );

        $h_s_f_3 = cs_get_option( 'f_s_3' );







        ?>



        <!-- SERVICES INTRO -->

        <section class="about-area section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h3><?php echo $h_s_title; ?></h3>

                        <p class="about-details">

                            <?php echo wpautop( $h_s_desc ); ?>

                        </p>

                    </div>

                    <div class="col-md-6">

                        <div class="about-feature-points">

                            <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt=""><?php echo $h_s_f_1; ?></p>



                            <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt=""><?php echo $h_s_f_2; ?></p>



                            <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt=""><?php echo $h_s_f_3; ?> </p>



                        </div>

                    </div>

                </div>

            </div>

        </section>