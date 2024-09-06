<?php
vc_map(array(
  'name'   => esc_html__('Pearl Reservation for Open Table', 'pearl'),
  'base'   => 'stm_reservation_open_table',
  'icon'   => 'pearl-open_table',
  'description' => esc_html__('Table reservation module', 'pearl'),
  'category' =>array(
    esc_html__('Content', 'pearl'),
    esc_html__('Pearl', 'pearl')
  ),
  'params' => array(
    array(
      'type'        => 'textfield',
      'heading'     => esc_html__('Title', 'pearl'),
      'param_name'  => 'title',
      'value'       => 'MAKE ONLINE RESERVATION',
      'admin_label' => true
    ),
    array(
      'type'        => 'checkbox',
      'heading'     => esc_html__('Show text "POWERED BY OPENTABLE"', 'pearl'),
      'param_name'  => 'powered',
      'std'         => 'true',
    ),
    array(
      'type'        => 'textfield',
      'heading'     => esc_html__('Your Restaurant ID', 'pearl'),
      'param_name'  => 'restaurant_id',
      'value'       => '',
      'admin_label' => true
    ),
    array(
      'type' => 'dropdown',
      'heading'     => esc_html__('Time format', 'pearl'),
      'param_name'  => 'timeformat',
      'value' => array(
        esc_html__('12 hours', 'pearl')  => 12,
        esc_html__('24 hours', 'pearl')  => 24,
      )
    ),
    pearl_load_styles(1, 'style', true),
    pearl_vc_add_css_editor(),
    vc_map_add_css_animation(),
  )
));

if (class_exists('WPBakeryShortCode')) {
  class WPBakeryShortCode_Stm_Reservation_Open_Table extends WPBakeryShortCode
  {
  }
}
