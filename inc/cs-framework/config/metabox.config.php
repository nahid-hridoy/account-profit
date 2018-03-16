<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------

$options[]    = array(
  'id'        => '_servicepost_meta',
  'title'     => 'Custom Feature Options',
  'post_type' => 'service-post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'servicepost_meta_section_1',
      'fields' => array(

        // array(
        //   'id'    => 'work_ctg',
        //   'type'  => 'text',
        //   'title' => 'Category Name',
        //   'desc'  => 'Work/Portfolio Item Category Name',
        // ),


        array(
          'id'              => 'features',
          'type'            => 'group',
          'title'           => 'Feature Informations',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Feature',
          'fields'          => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Feature Title',
            )
            
          ),
        ),



      ),
    ),

  ),
);




$options[]    = array(
  'id'        => '_service_meta',
  'title'     => 'Custom Feature Options',
  'post_type' => 'service',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'service_meta_section_1',
      'fields' => array(

        array(
          'id'              => 'service_features',
          'type'            => 'group',
          'title'           => 'Feature Informations',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Feature',
          'fields'          => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'Feature Title',
            )
            
          ),
        ),



      ),
    ),

  ),
);


$options[]    = array(
  'id'        => '_service_icon_meta',
  'title'     => 'Color Icon Upload Option',
  'post_type' => 'service',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'service_icon_meta_section_1',
      'fields' => array(

        array(
          'id'              => 'service_color_icon',
          'type'            => 'image',
          'title'           => 'Colored Icon',
          'desc'            => 'Upload Colored Icon',

          ),



      ),
    ),

  ),
);

$options[]    = array(
  'id'        => '_client_meta',
  'title'     => 'Color Logo Upload Option',
  'post_type' => 'client',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'client_meta_section_1',
      'fields' => array(

        array(
          'id'              => 'client_color_logo',
          'type'            => 'image',
          'title'           => 'Colored Logo',
          'desc'            => 'Upload Colored Logo',

          ),



      ),
    ),

  ),
);


CSFramework_Metabox::instance( $options );
