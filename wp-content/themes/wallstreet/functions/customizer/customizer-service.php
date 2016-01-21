<?php
function wallstreet_service_customizer( $wp_customize ) {
//Service section panel
$wp_customize->add_panel( 'wallstreet_service_options', array(
		'priority'       => 600,
		'capability'     => 'edit_theme_options',
		'title'      => __('Service Settings', 'wallstreet'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Enable Service Section  ', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 50,
   	) );
	
	
	//Show and hide Service section
	$wp_customize->add_setting(
	'wallstreet_pro_options[service_section_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_section_enabled]',
    array(
        'label' => __('Enable Service Section on front page.','wallstreet'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
//service section one
	$wp_customize->add_section( 'service_section_one' , array(
		'title'      => __('Service Section one', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[service_image_one]',array('default' => get_template_directory_uri().'/images/service.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_one]',
			array(
				'label' => 'Service Image One',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_one]',
				'section' => 'service_section_one',
				'type' => 'upload',
			)
		)
	);
	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_one]',
    array(
        'default' => __('Product Designing','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title_one]',
    array(
        'label' => __('Service Title One','wallstreet'),
        'section' => 'service_section_one',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_one]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description_one]',
    array(
        'label' => __('Service Description One','wallstreet'),
        'section' => 'service_section_one',
        'type' => 'textarea',	
    )
);
//Second service

$wp_customize->add_section( 'service_section_two' , array(
		'title'      => __('Service Section Two', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 200,
   	) );


$wp_customize->add_setting( 'wallstreet_pro_options[service_image_two]',array('default' => get_template_directory_uri().'/images/service2.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_two]',
			array(
				'label' => 'Service Image Two',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_two]',
				'section' => 'service_section_two',
				'type' => 'upload',
			)
		)
	);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_two]',
    array(
        'default' => __('WordPress Themes','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_title_two]',
    array(
        'label' => __('Service Title Two' ,'wallstreet'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_two]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option',
    )	
);
$wp_customize->add_control(
		'wallstreet_pro_options[service_description_two]',
		array(
        'label' => __('Service Description Two','wallstreet'),
        'section' => 'service_section_two',
        'type' => 'textarea',
    )
);
//Third Service section
$wp_customize->add_section( 'service_section_three' , array(
		'title'      => __('Service Section Three', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 300,
   	) );


$wp_customize->add_setting( 'wallstreet_pro_options[service_image_three]',array('default' => get_template_directory_uri().'/images/service3.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[service_image_three]',
			array(
				'label' => 'Service Image Three',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[service_image_three]',
				'section' => 'service_section_three',
				'type' => 'upload',
			)
		)
	);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_title_three]',
    array(
        'default' => __('Easy to Use','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_title_three]',
    array(
        'label' => __('Service Title Three','wallstreet'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'wallstreet_pro_options[service_description_three]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'wallstreet_pro_options[service_description_three]',
    array(
        'label' => __('Service Description Three','wallstreet'),
        'section' => 'service_section_three',
        'type' => 'textarea',
    )
);
$wp_customize->add_section( 'more_service' , array(
		'title'      => __('Add More Service', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 400,
   	) );	
	
class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more services, than upgrade to pro version','wallstreet');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/wallstreet/', 'wallstreet'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','wallstreet' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'service_pro',
    array(
        'default' => __('','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'service_pro', array(	
		'label' => __('Discover wallstreet Pro','wallstreet'),
        'section' => 'more_service',
		'setting' => 'service_pro',
    ))
);	
}
add_action( 'customize_register', 'wallstreet_service_customizer' );
?>