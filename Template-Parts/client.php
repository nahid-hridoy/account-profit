

        <!-- ---------- CLIENT LOGO AREA START ---------- -->

        <section class="client-logo-area section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <h3>НАШИ КЛИЕНТЫ</h3>

                    </div>

                    <div class="col-md-8 col-md-offset-2">

                        <div class="logo-carousel" role="tablist">



                            <?php

                                global $post;

                                $args = array( 'posts_per_page' => 1000, 'post_type'=> 'client', 'orderby' => 'menu_order', 'order' => 'ASC' );

                                $myposts = get_posts( $args );

                                $c_counter_u  = 0;

                                foreach( $myposts as $post ) : setup_postdata($post);

                                    $c_counter_u++;



                                    if ($c_counter_u == 1) {

                                        $c_active_u = 'active';

                                    }else{

                                        $c_active_u = '';

                                    }

                            ?>



                            <div class="single-logo-item <?php echo $c_active_u; ?>" role="presentation">

                                <div class="logo-item-inner">

                                    <a data-target="#client-tab-<?php echo $c_counter_u; ?>x" data-toggle="tab" role="tab">

                                    <?php

                                        $client_meta = get_post_meta(get_the_ID(), '_client_meta', true);

                                        if(array_key_exists('client_color_logo', $client_meta)){
                                            $client_color_logo = $client_meta['client_color_logo'];
                                        }else {
                                            $client_color_logo = '';
                                        }

                                        if (!empty($client_color_logo)) {

                                            $c_url = wp_get_attachment_url($client_color_logo, 'large' );

                                            /*echo '<pre> ';

                                            echo var_dump($c_url);

                                            echo ' </pre>';*/

                                            /*$c_url = $c_url[0];*/

                                            /*echo $c_url;*/

                                        }else {
                                            $c_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                        }

                                    ?>

                                        <img src="<?php echo $c_url; ?>" alt="">

                                    </a>

                                </div>

                            </div>



                            <?php endforeach; wp_reset_query(); ?>





                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ---------- CLIENT LOGO AREA END ---------- -->



        <!-- ---------- CLIENT ABOUT AREA START ---------- -->

        <section class="client-about-area section-padding">

            <div class="container">

                <div class="row tab-content">





                    <?php

                        global $post;

                        $args = array( 'posts_per_page' => 1000, 'post_type'=> 'client', 'orderby' => 'menu_order', 'order' => 'ASC' );

                        $myposts = get_posts( $args );

                        $c_counter  = 0;

                        foreach( $myposts as $post ) : setup_postdata($post);

                        $c_counter++;



                        if ($c_counter == 1) {

                            $c_active = 'active';

                        }else{

                            $c_active = '';

                        }

                    ?>



                    <div class="tab-pane <?php echo $c_active; ?>" id="client-tab-<?php echo $c_counter; ?>x">

                        <div class="col-md-6 text-center">

                            <div class="client-logo-wrapper">

                                <div class="client-logo-inner">

                                    <?php



                                    $c_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );



                                    ?>

                                    <img src="<?php echo $c_url; ?>" alt="">

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="client-details">

                                <p>

                                   <?php echo wpautop( the_content() ); ;?>

                                </p>

                            </div>

                        </div>

                    </div>



                    <?php endforeach; wp_reset_query(); ?>



                    

                   

                    

                </div>

            </div>

        </section>

        <!-- ---------- CLIENT ABOUT AREA END ---------- -->