<?
/*
Template Name: Single-Service Template
Template Post Type: service
*/
?>

<?php
    get_header(  );
?>


        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <!-- ---------- SERVICE DETAILS AREA START ---------- -->
        <section class="about-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 service-area service-page-service-list service-details-category">
                        <div class="row">
                            <div class="col-md-2 single-service-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-service-1.png" alt="">
                            </div>
                            <div class="col-md-10 header-excerpt">
                            
                                    <h3 class="about-page-heading single-service-heading service-details-heading">
                                        <?php the_title(); ?>
                                    </h3>

                                    <?php wpautop( the_excerpt() ); ?>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row single-service-row">
                            
                            <!-- SINGLE SERVICE START -->
                            <div class="col-md-12">
                                <!-- <?php the_content( ); ?> -->
                                <p class="about-details single-service-details">
                                    <?php echo wpautop( the_content() ); ?> 
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="about-feature-points single-service-feature-points">

                                    <?php

                                        $service_meta = get_post_meta(get_the_ID(), '_service_meta', true);
                                        /*echo '<pre> ';
                                        echo var_dump($service_meta);
                                        echo ' </pre>';*/
                                        if(array_key_exists('service_features', $service_meta)){
                                            $service_features = $service_meta['service_features'];
                                        }else {
                                            $service_features = array();
                                        }
                                    ?>
                                   
                                    <?php if(!empty($service_features)): foreach($service_features as $service_feature): ?>

                                    <p class="single-feature-points"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-check.png" alt=""><?php echo $service_feature['title']; ?> </p>

                                    <?php endforeach; endif; ?>
        
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#contact-form" class="ask-question-btn">Задать вопрос</a>
                            </div>
                            <!-- SINGLE SERVICE END -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ---------- SERVICE DETAILS AREA END ---------- -->
        <?php endwhile; endif;?>

        <!-- ---------- CONTACT FORM AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/form' ); ?>
        <!-- ---------- CONTACT FORM AREA END ---------- -->




<?php get_footer(); ?>