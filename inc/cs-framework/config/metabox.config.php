<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'stock_page_options',
  'title'     => 'Stock Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'stock_page_title',
          'type'  => 'switcher',
          'title' => 'Enable page title',
          'default'=> true,
        ),
        // end: a field
        // begin: a field
        array(
          'id'    => 'stock_page_content',
          'type'  => 'switcher',
          'title' => 'Enable page content',
          'default'=> false,
        ),
        // end: a field



      ), // end: fields
    ), // end: a section



  ),
);
// -----------------------------------------
// Slide Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'stock_slide_options',
  'title'     => 'Stock Slide Options',
  'post_type' => 'slide',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'stock_slide_meta',

      // begin: fields
      'fields' => array(

        // begin:Button field
        array(
          'id'              => 'button',
          'type'            => 'group',
          'title'           => 'Slide Buttons',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Button',
          'fields'          => array(
            array(
              'id'    => 'type',
              'type'  => 'select',
              'title' => 'Button Type',
              'desc'   => 'Select button type',
              'options'=>array(
                'bordered'=>'Bordered Button',
                'filled'=>'Filled button'
              )
            ),
            array(
              'id'    => 'text',
              'type'  => 'text',
              'title' => 'Button text',
              'desc'   => 'Type button text',
              'default'=>'Get free consultation'
            ),
            array(
              'id'    => 'link_type',
              'type'  => 'select',
              'title' => 'Link Type',
              'desc'   => 'Select link type',
              'options'=>array(
                '1'=>'WordPress Page',
                '2'=>'External Link'
              )
            ),
            array(
              'id'    => 'link_to_page',
              'type'  => 'select',
              'title' => 'Select Page',
              'desc'   => 'Select page link',
              'options'=>'page',
              'dependency'=>array('link_type', '==', '1')
            ),
            array(
              'id'    => 'link_to_external',
              'type'  => 'text',
              'title' => 'Type URL',
              'desc'   => 'Type extarnal page link',
              'dependency'=>array('link_type', '==', '2')
            ),
          ),
        ),
        // end: Button field
        // begin: a field
        array(
          'id'             => 'enable_overlay',
          'type'           => 'switcher',
          'default'        => true,
          'title'          => 'Enable overlay?',
        ),
         array(
           'id'            =>'overlay_percentage',
           'type'          => 'text',
           'default'       => '70',
           'title'         => 'Overlay percentage',
           'desc'          => 'Type overlay percentage in number'
         ),
         array(
           'id'            => 'overlay_color',
           'type'          => 'color_picker',
           'title'         => 'Overlay color',
           'default'       => '#181a1f'
         ) 
        // end: a field


      ), // end: fields
    ), // end: a section



  ),
);



CSFramework_Metabox::instance( $options );
