<?php

/*

Template Name: Contact-Page Template

*/

    get_header(  );

?>



<?php



//GENERAL INFO

 $phn_no = cs_get_option( 'AP_phone' );

 $address_info = cs_get_option( 'AP_address' );

 $wokring_hour_info = cs_get_option( 'AP_working_hour' );

 $email_info = cs_get_option( 'AP_mail' );



 $contact_page_title = cs_get_option( 'contact_title' );



 $contact_page_lat = cs_get_option ( 'c_lat' );

 $contact_page_longi = cs_get_option ( 'c_longi' );



?>



        <!-- ---------- CONTACT AREA START ---------- -->

        <section class="contact-page-area">

            <div class="container">

                <div class="row">

                    

                    <div class="col-md-6 col-md-push-6 contact-page-info-padding">

                        <div class="row">

                            <div class="col-md-12 text-center">

                                <p class="top-text-1">

                                    <?php 

                                        /*echo wpautop( $contact_page_title );*/ 
                                        echo $contact_page_title; 

                                    ?>

                                </p>

                                <p class="top-text-2">Если вопрос срочный, вы можете сами обратиться в наш контактный центр по номеру:</p>



                                

                                <a href="tel:<?php echo $phn_no; ?>" class="phone-no-text"><?php echo $phn_no; ?></a>

                                

                                <p class="time-text"><?php echo  $wokring_hour_info; ?></p>

                                

                                <p class="email-heading">или отправьте нам E-mail</p>

                                

                                <a href="mailto:<?php echo $email_info; ?>" class="phone-no-text"><?php echo $email_info; ?></a>

                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-12">

                                <?php dynamic_sidebar( 'contact-page-form' ); ?>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-md-pull-6">

                        <div class="googleMap3" latitude="<?php echo $contact_page_lat; ?>" 

                            longitude="<?php echo $contact_page_longi; ?>"></div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ---------- CONTACT AREA END ---------- -->





<?php

    get_footer(  );

?>