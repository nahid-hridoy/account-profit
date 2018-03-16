<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'AP-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Account-Profit Framework <small>by NMH47</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general-options',
  'title'       => 'General Option',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'AP_header_logo',
      'type'    => 'image',
      'title'   => 'Top/Header Logo',
    ),
    array(
      'id'      => 'AP_footer_logo',
      'type'    => 'image',
      'title'   => 'Footer Logo',
    ),
    array(
      'id'      => 'AP_fav_logo',
      'type'    => 'image',
      'title'   => 'Favicon',
    ),
    array(
      'id'      => 'AP_phone',
      'type'    => 'text',
      'title'   => 'Footer Telephone No',
      'default' => '8 (812) 409-50-92',
    ),
    array(
      'id'      => 'AP_mail',
      'type'    => 'text',
      'title'   => 'Email',
      'default' => 'account@profit.com',
    ),

    array(
      'id'      => 'AP_address',
      'type'    => 'textarea',
      'title'   => 'Address',
      'sanitize' => false,
    ),
    array(
      'id'      => 'AP_working_hour',
      'type'    => 'textarea',
      'title'   => 'Working Hour',
      'sanitize' => false,
    ),





  ), // end: fields
);

$options[]      = array(
  'name'        => 'about_company',
  'title'       => 'About Company',
  'icon'        => 'fa fa-briefcase',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'about_company_title',
      'type'    => 'text',
      'title'   => 'Title',
      'sanitize' => false,
    ),
    array(
      'id'      => 'about_company_desc',
      'type'    => 'textarea',
      'title'   => 'Details',
      'sanitize' => false,
    ),


  ), // end: fields
);


$options[]      = array(
  'name'        => 'faq-facts',
  'title'       => 'FAQ',
  'icon'        => 'fa fa-question-circle',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'faq_title',
      'type'    => 'text',
      'title'   => 'Title',
      'sanitize' => false,
    ),
    array(
      'id'      => 'faq_desc',
      'type'    => 'textarea',
      'title'   => 'Details',
      'sanitize' => false,
    ),

    array(
      'id'      => 'faqs',
      'type'    => 'group',
      'title'   => 'FAQ',
      'button_title'   => 'Add New',
      'accordion_title'   => 'Add New FAQ',
      'fields'          => array(
        array(
          'id'    => 'fq_title',
          'type'  => 'text',
          'title' => 'FAQ Title',
        ),
        array(
          'id'    => 'fq_content',
          'type'  => 'textarea',
          'title' => 'Faq Content',
        ),
        
      ),

    ),

    
 



  ), // end: fields
);




$options[]      = array(
  'name'        => 'feature_service',
  'title'       => 'HomePage Featured Service',
  'icon'        => 'fa fa-certificate',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'f_s_title',
      'type'    => 'text',
      'title'   => 'Title',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
    array(
      'id'      => 'f_s_desc',
      'type'    => 'textarea',
      'title'   => 'Description',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
    array(
      'id'      => 'f_s_1',
      'type'    => 'text',
      'title'   => 'Feature One',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
    array(
      'id'      => 'f_s_2',
      'type'    => 'text',
      'title'   => 'Feature Two',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
    array(
      'id'      => 'f_s_3',
      'type'    => 'text',
      'title'   => 'Feature Three',
      'sanitize' => false,
      // 'default' => 'Школа перманентного макияжа «MICROBLADING&BROW»',
    ),
 



  ), // end: fields
);

$options[]      = array(
  'name'        => 'contact_page',
  'title'       => 'Contact Page',
  'icon'        => 'fa fa-envelope',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'contact_title',
      'type'    => 'textarea',
      'title'   => 'Contact Page Title',
      'sanitize' => false,

    ),
    array(
      'id'      => 'c_lat',
      'type'    => 'text',
      'title'   => 'Map - Latitude',
    ),
    array(
      'id'      => 'c_longi',
      'type'    => 'text',
      'title'   => 'Map - Longitude',

    ),
 



  ), // end: fields
);

$options[]      = array(
  'name'        => 'social',
  'title'       => 'Social',
  'icon'        => 'fa fa-book',

  // begin: fields
  'fields'      => array(


    array(
      'id'      => 'fb',
      'type'    => 'text',
      'title'   => 'Facebook',
      'default' => '#',
    ),
    array(
      'id'      => 'twt',
      'type'    => 'text',
      'title'   => 'Twitter',
      'default' => '#',
    ),
    array(
      'id'      => 'google_plus',
      'type'    => 'text',
      'title'   => 'Google Plus',
      'default' => '#',
    ),
    array(
      'id'      => 'linkedin',
      'type'    => 'text',
      'title'   => 'Linked In',
      'default' => '#',
    ),
    array(
      'id'      => 'youtube',
      'type'    => 'text',
      'title'   => 'Youtube',
    ),
    array(
      'id'      => 'instagram',
      'type'    => 'text',
      'title'   => 'Instagram',
    ),
    array(
      'id'      => 'pinterest',
      'type'    => 'text',
      'title'   => 'Pinterest',
      
    ),
    
    array(
      'id'      => 'skype',
      'type'    => 'text',
      'title'   => 'Skype',
    ),


  ), // end: fields
);






CSFramework::instance( $settings, $options );
