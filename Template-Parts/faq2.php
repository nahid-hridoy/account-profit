        <!-- ---------- FAQs AREA START ---------- -->
        <section class="faq-area section-padding">
            <div class="container">
                <div class="row row-padding">
                    <div class="col-md-6 no-padding">
                        <div class="tab-content">

                            <?php 
                                $faq_no_t = 0;
                                $faqs = cs_get_option('faqs'); 
                                foreach( $faqs as $faq ):
                                $faq_no_t++;

                                if ( $faq_no_t == 1 ) {
                                        $area_exp_1 = 'active';
                                    }else{
                                        $area_exp_1 = 'fade';
                                    }
                            ?>

                            <div class="tab-pane <?php echo $area_exp_1; ?>" id="tab-<?php echo $faq_no_t; ?>x">
                                <div class="tab-details faq-page-tab-details">
                                    <?php echo wpautop( $faq['fq_content'] ) ; ?>
                                </div>
                            </div>

                            <?php endforeach; ?>
                   
                        </div>

                    </div>
                    <div class="col-md-6 no-padding">
                        <div class="faq-tab faq-page-tab">
                            <ul class="tab-list">

                                <?php
                                    $faq_no = 0;
                                    $faqs = cs_get_option('faqs');
                                    foreach( $faqs as $faq ):
                                    $faq_no++;

                                    if ( $faq_no == 1 ) {
                                        $area_exp = 'true';
                                        $class_active = 'active';
                                    }else{
                                        $area_exp = '';
                                        $class_active = '';
                                    }
                                ?>

                                <li class="<?php echo $class_active; ?>">
                                    <a data-target="#tab-<?php echo $faq_no; ?>x" data-toggle="tab" aria-expanded="<?php echo $area_exp; ?>">
                                    <?php echo $faq['fq_title']; ?>
                                    </a>
                                </li>
                                
                                <?php endforeach; ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- FAQs AREA END ---------- -->


        <!-- ---------- MOBILE FAQs AREA START ---------- -->
        <div class="mobile-styled-faq">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <?php
                    $faq_no_mb = 0;
                    $faqs = cs_get_option('faqs');
                    foreach( $faqs as $faq ):
                    $faq_no_mb++;

                    if ( $faq_no_mb == 1 ) {
                        $area_exp_mb = 'true';
                        $class_active_mb = 'in';
                    }else{
                        $area_exp_mb = '';
                        $class_active_mb = '';
                    }
                ?>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php echo $faq_no_mb; ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="<?php echo $area_exp_mb; ?>" aria-controls="collapse<?php echo $faq_no_mb; ?>" data-target="#collapse<?php echo $faq_no_mb; ?>">
                            <?php echo $faq['fq_title']; ?>
                            </a>
                        </h4>
                    </div>

                    <div id="collapse<?php echo $faq_no_mb; ?>" class="panel-collapse collapse <?php echo $class_active_mb; ?>" role="tabpanel" aria-labelledby="heading<?php echo $faq_no_mb; ?>">
                        <div class="panel-body">
                                <?php echo wpautop( $faq['fq_content'] ) ; ?>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>



                

            </div>
        </div>
        <!-- ---------- MOBILE FAQs AREA END ---------- -->