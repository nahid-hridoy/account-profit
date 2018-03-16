<?php

//GENERAL INFO
 $phn_no = cs_get_option( 'AP_phone' );
 $address_info = cs_get_option( 'AP_address' );
 $wokring_hour_info = cs_get_option( 'AP_working_hour' );
 $email_info = cs_get_option( 'AP_mail' );


 $fb = cs_get_option( 'fb' );
 $twt = cs_get_option( 'twt' );
 $linked_in = cs_get_option( 'linkedin' );
 $google_plus = cs_get_option( 'google_plus' );
 $insta = cs_get_option( 'instagram' );
 $youtube = cs_get_option( 'youtube' );
 $skype = cs_get_option( 'skype' );
 $pinterest = cs_get_option( 'pinterest' );


 //LOGO

 $footer_logo = cs_get_option('AP_footer_logo');
 $footer_logo_array = wp_get_attachment_image_src( cs_get_option('AP_footer_logo'), 'large' );



if (!empty($footer_logo)) {
    $footer_logo = $footer_logo_array[0];
}else{
    $footer_logo = ''.get_template_directory_uri().'/assets/img/logo.png';
}







?>



        <!-- ---------- FOOTER AREA START ---------- -->
        <section class="footer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo logo-footer">
                            <a href="<?php echo site_url(  ); ?>"><img src="<?php echo $footer_logo; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-info">
                            <p class="phone-no-footer"><?php echo $phn_no; ?></p>
                            <p class="phone-no-footer"><?php echo $email_info; ?></p>
                            <p class="address-footer"><?php echo $address_info; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="social-icon">
                           <a href="<?php echo $fb;?>"><i class="fa fa-facebook"></i></a>
                           <a href="<?php echo $twt;?>"><i class="fa fa-twitter"></i></a>
                           <a href="<?php echo $google_plus;?>"><i class="fa fa-google-plus"></i></a>
                           <a href="<?php echo $linked_in;?>"><i class="fa fa-linkedin-square"></i></a>
                           <a href="<?php echo $insta;?>"><i class="fa fa-instagram"></i></a>
                           <a href="<?php echo $youtube;?>"><i class="fa fa-youtube"></i></a>
                           <a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a>
                           <a href="<?php echo $skype;?>"><i class="fa fa-skype"></i></a>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- FOOTER AREA END ---------- -->
        

        <!-- <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script> -->
        <?php wp_footer(); ?>
    </body>
</html>
