<?php

//GENERAL INFO
 $phn_no = cs_get_option( 'AP_phone' );
 $address_info = cs_get_option( 'AP_address' );
 $wokring_hour_info = cs_get_option( 'AP_working_hour' );
 $email_info = cs_get_option( 'AP_mail' );



//Favicon
 $fav_logo = cs_get_option('AP_fav_logo');
 $fav_logo_array = wp_get_attachment_image_src( cs_get_option('AP_fav_logo'), 'large' );



 //LOGO
 $header_logo = cs_get_option('AP_header_logo');
 $header_logo_array = wp_get_attachment_image_src( cs_get_option('AP_header_logo'), 'large' );

 $footer_logo = cs_get_option('AP_footer_logo');
 $footer_logo_array = wp_get_attachment_image_src( cs_get_option('AP_footer_logo'), 'large' );

if (!empty($header_logo)) {
    $header_logo = $header_logo_array[0];
}else{
    $header_logo = ''.get_template_directory_uri().'/assets/img/logo.png';
}


if (!empty($footer_logo)) {
    $footer_logo = $footer_logo_array[0];
}else{
    $footer_logo = ''.get_template_directory_uri().'/assets/img/logo.png';
}



if (!empty($fav_logo)) {
    $fav_logo = $fav_logo_array[0];
}else{
    $fav_logo = ''.get_template_directory_uri().'/assets/img/favicon.png';
}




?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <title>Account Profit</title> -->
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo $fav_logo; ?>">


        <?php wp_head(); ?>
        
    </head>
    <body>


    <!-- ---------- OFF CANVAS MENU AREA START ---------- -->
        <div class="off-canvas-menu">
            <span class="menu-close"><i class="fa fa-close"></i></span>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'Primary',
                    // 'menu-class' => 'menu',
                ));
            ?>

        </div>
    
        <div class="off-canvas-overlay"></div>
        <!-- ---------- OFF CANVAS MENU AREA END ---------- -->

        <!-- ---------- MOBILE HEADER AREA START ---------- -->
        <section class="mobile-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="menu-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu-bar.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-8 text-center">
                        <div class="logo mobile-logo">
                            <a href="<?php echo site_url(  ); ?>"><img src="<?php echo $header_logo; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-2 text-right">
                        <a href="tel:+7 (950) 564-99-33" class="mobile-telephone-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-telephone.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- MOBILE HEADER AREA END ---------- -->

        <!-- ---------- HEADER AREA START ---------- -->
        <section class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="<?php echo site_url(  ); ?>"><img src="<?php echo $header_logo; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <div class="main-menu">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'menu_id' => 'Primary',
                                    // 'menu-class' => 'menu',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 text-right" id="pop-frm-up">
                        <a class="free-consultation spu-open-96">Бесплатная консультация</a>

                        <!-- <input class="free-consultation" value="Бесплатная консультация" type="submit" > -->

                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- HEADER AREA END ---------- -->





<!-- 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content pop-frm-nmh47">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php dynamic_sidebar( 'popup-contact-form' ); ?>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>

    </div>
  </div>
</div> -->