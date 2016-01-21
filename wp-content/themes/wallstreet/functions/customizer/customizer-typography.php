<?php 

function wallstreet_typography_customizer( $wp_customize ) {

class wallstreet_genral_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Genral Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}
	

class wallstreet_menu_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Menus Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
class wallstreet_post_page_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Post/Page Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}
	
class wallstreet_service_page_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Service Title Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
class wallstreet_portfolio_page_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Portfolio Title Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
class wallstreet_widget_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Widget Title Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	

class wallstreet_intro_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Callout Area Title Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
class wallstreet_callout_dec_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Callout Area Description Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}

class wallstreet_callout_btn_typo_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Callout Button Title Typography In Theme Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	

$wp_customize->add_panel( 'wallstreet_typography_setting', array(
		'priority'       => 1000,
		'capability'     => 'edit_theme_options',
		'title'      => __('Typography Settings', 'wallstreet'),
	) );

	
$font_size = array();
for($i=9; $i<=100; $i++)
{			
	$font_size[$i] = $i;
}

$font_family = array('400'=>'Roboto Regular','300'=>'Roboto Light','600'=>'Roboto Bold','700'=>'Roboto Black','500'=>'Roboto Medium','200'=>'Roboto Thin');

$font_style = array('normal'=>'Normal','italic'=>'Italic');
	
	
// General typography section
$wp_customize->add_section( 'wallstreet_general_typography' , array(
		'title'      => __('General Typography', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 1,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[genral_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_genral_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[genral_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_general_typography',
				'settings'				=> 'wallstreet_pro_options[genral_typo]',
			)
		)
	);
	
$wp_customize->add_setting(
    'wallstreet_pro_options[general_typography_fontsize]',
    array(
        'default'           =>  13,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[general_typography_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_general_typography',
		'setting' => 'wallstreet_pro_options[general_typography_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[general_typography_fontfamily]',
    array(
        'default'           =>  'Helvetica Neue,Helvetica,Arial,sans-serif',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[general_typography_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_general_typography',
		'setting' => 'wallstreet_pro_options[general_typography_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[general_typography_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[general_typography_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_general_typography',
		'setting' => 'wallstreet_pro_options[general_typography_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));


// Menus typography section
$wp_customize->add_section( 'wallstreet_menus_typography' , array(
		'title'      => __('Menus Typography', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 2,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[menu_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_menu_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[menu_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_menus_typography',
				'settings'				=> 'wallstreet_pro_options[menu_typo]',
			)
		)
	);
	
$wp_customize->add_setting(
    'wallstreet_pro_options[menu_title_fontsize]',
    array(
        'default'           =>  18,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[menu_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_menus_typography',
		'setting' => 'wallstreet_pro_options[menu_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[menu_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[menu_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_menus_typography',
		'setting' => 'wallstreet_pro_options[menu_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[menu_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[menu_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_menus_typography',
		'setting' => 'wallstreet_pro_options[menu_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));


// Post and page title typography section
$wp_customize->add_section( 'wallstreet_post_page_title_typography' , array(
		'title'      => __('Post / Page Typography', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 3,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[post_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_post_page_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[post_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_post_page_title_typography',
				'settings'				=> 'wallstreet_pro_options[post_typo]',
			)
		)
	);
	
$wp_customize->add_setting(
    'wallstreet_pro_options[post_title_fontsize]',
    array(
        'default'           =>  26,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[post_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_post_page_title_typography',
		'setting' => 'wallstreet_pro_options[post_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[post_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[post_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_post_page_title_typography',
		'setting' => 'wallstreet_pro_options[post_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[post_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[post_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_post_page_title_typography',
		'setting' => 'wallstreet_pro_options[post_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

// Service typography section
$wp_customize->add_section( 'wallstreet_service_typography' , array(
		'title'      => __('Service Title Typography', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 4,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[service_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_service_page_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[service_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_service_typography',
				'settings'				=> 'wallstreet_pro_options[service_typo]',
			)
		)
	);
	
$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_fontsize]',
    array(
        'default'           =>  26,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[service_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_service_typography',
		'setting' => 'wallstreet_pro_options[service_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[service_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_service_typography',
		'setting' => 'wallstreet_pro_options[service_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[service_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_service_typography',
		'setting' => 'wallstreet_pro_options[service_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

// Portfolio title typography section
$wp_customize->add_section( 'wallstreet_portfolio_typography' , array(
		'title'      => __('Portfolio Title Typography', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 5,
   	) );	
	
$wp_customize->add_setting( 'wallstreet_pro_options[portfolio_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_portfolio_page_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[portfolio_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_portfolio_typography',
				'settings'				=> 'wallstreet_pro_options[portfolio_typo]',
			)
		)
	);	
$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_title_fontsize]',
    array(
        'default'           =>  20,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[portfolio_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_portfolio_typography',
		'setting' => 'wallstreet_pro_options[portfolio_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[portfolio_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_portfolio_typography',
		'setting' => 'wallstreet_pro_options[portfolio_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[portfolio_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_portfolio_typography',
		'setting' => 'wallstreet_pro_options[portfolio_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));


// Widget heading title typography section
$wp_customize->add_section( 'wallstreet_widget_title_typography' , array(
		'title'      => __('Widget Heading Title', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 6,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[widget_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	
$wp_customize->add_control(
		new wallstreet_widget_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[widget_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_widget_title_typography',
				'settings'				=> 'wallstreet_pro_options[widget_typo]',
			)
		)
	);	
$wp_customize->add_setting(
    'wallstreet_pro_options[widget_title_fontsize]',
    array(
        'default'           =>  24,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[widget_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_widget_title_typography',
		'setting' => 'wallstreet_pro_options[widget_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[widget_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[widget_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_widget_title_typography',
		'setting' => 'wallstreet_pro_options[widget_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[widget_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[widget_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_widget_title_typography',
		'setting' => 'wallstreet_pro_options[widget_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

// Call Out Area title typography section
$wp_customize->add_section( 'wallstreet_site_intro_typography' , array(
		'title'      => __('Call Out Area Title', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 7,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[intro_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_intro_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[intro_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_site_intro_typography',
				'settings'				=> 'wallstreet_pro_options[intro_typo]',
			)
		)
	);
	
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_title_fontsize]',
    array(
        'default'           =>  34,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_title_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_site_intro_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_title_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_title_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_title_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_site_intro_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_title_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_title_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_title_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_site_intro_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_title_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

// Call Out Area description typography section
$wp_customize->add_section( 'wallstreet_callout_desc_typography' , array(
		'title'      => __('Call Out Area Description', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 8,
   	) );	
	
$wp_customize->add_setting( 'wallstreet_pro_options[call_dsc_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_callout_dec_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[call_dsc_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_callout_desc_typography',
				'settings'				=> 'wallstreet_pro_options[call_dsc_typo]',
			)
		)
	);	
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_description_fontsize]',
    array(
        'default'           =>  15,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_description_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_callout_desc_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_description_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_description_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_description_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_callout_desc_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_description_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_description_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_description_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_callout_desc_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_description_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

// Call Out Area button typography section
$wp_customize->add_section( 'wallstreet_callout_button_typography' , array(
		'title'      => __('Call Out Area Button', 'wallstreet'),
		'panel' => 'wallstreet_typography_setting',
		'priority'       => 9,
   	) );

$wp_customize->add_setting( 'wallstreet_pro_options[call_btn_typo]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_callout_btn_typo_upgrade(
		$wp_customize,
		'wallstreet_pro_options[call_btn_typo]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'wallstreet_callout_button_typography',
				'settings'				=> 'wallstreet_pro_options[call_btn_typo]',
			)
		)
	);		
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_purches_fontsize]',
    array(
        'default'           =>  16,
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_purches_fontsize]', array(
		'label' => __('Font Size','wallstreet'),
        'section' => 'wallstreet_callout_button_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_purches_fontsize]',
		'type'    =>  'select',
		'choices'=>$font_size,
		'description'=>'(Pixels)'
    ));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_purches_fontfamily]',
    array(
        'default'           =>  'RobotoRegular',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_purches_fontfamily]', array(
		'label' => __('Font Family','wallstreet'),
        'section' => 'wallstreet_callout_button_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_purches_fontfamily]',
		'type'    =>  'select',
		'choices'=>$font_family,
));
$wp_customize->add_setting(
    'wallstreet_pro_options[calloutarea_purches_fontstyle]',
    array(
        'default'           =>  '',
		'capability'        =>  'edit_theme_options',
		'sanitize_callback' =>  'sanitize_text_field',
		'type'              =>  'option'
    )	
);
$wp_customize->add_control('wallstreet_pro_options[calloutarea_purches_fontstyle]', array(
		'label' => __('Font Style','wallstreet'),
        'section' => 'wallstreet_callout_button_typography',
		'setting' => 'wallstreet_pro_options[calloutarea_purches_fontstyle]',
		'type'    =>  'select',
		'choices'=>$font_style,
));

	
}
add_action( 'customize_register', 'wallstreet_typography_customizer' );
?>