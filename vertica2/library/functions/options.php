<?php
/** Spa Options Page **/

$theme_name = 'Theme Options';
$shortname = 'al';
$theme_version = '1.1';
$path = get_stylesheet_directory_uri();
$styles = array();
$background_options = array();
$skins = array();
$vt_temp_link = get_template_directory_uri();

if (is_dir(TEMPLATEPATH . "/css/")) {
	if ($open_dir = opendir(TEMPLATEPATH . "/css/")) {
		while (($style = readdir($open_dir)) !== false) {
			if (stristr($style, ".css") !== false) {
				$styles[] = $style;
			}
		}
	}
}



/**************  General Setting ***************/

$options = array(
	
	array(
		'type' => 'open',
		'tab_name' => 'General settings',
		'tab_id' => 'general-settings'
	) ,

	array(
		'name' => 'Menu Title',
		'id' => $shortname . '_menutitle',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert menu Title (Menu).'
	) ,	
	
    array(
		'name' => 'Show name instead of Logo-Image',
		'id' => $shortname . '_choose_logoname',
        'type' => 'select',
        'std' => 'No',
        'desc' => 'Show name instead of Logo-Image status',
        'options' => array(
					 array( "value" => "Yes", "text" => "yes" ),
					 array( "value" => "No", "text" => "No" ),					 
                ),
    ),		
	array(
		'name' => 'Logo image',
		'id' => $shortname . '_logoimg',
		'type' => 'upload',
		'img_w' => '206',
		'img_h' => '51',
		'std' => $vt_temp_link.'/img/logo.png',
		'desc' => 'Upload a logo from your hard drive or specify an existing url (Recommended size: 206x51)'
	),	
	array(
		'name' => 'Background image',
		'id' => $shortname . '_bg_img',
		'type' => 'upload',
		'std' => '',
		'desc' => 'Upload background image Here.'
	) ,
    array(
		'name' => 'Choose theme',
		'id' => $shortname . '_choose_theme',
        'type' => 'select',
        'std' => 'default',
        'desc' => 'Select theme for your Template',
        'options' => array(
					 array( "value" => "default", "text" => "Default" ),
					 array( "value" => "style_1", "text" => "Style 1" ),
					 array( "value" => "style_2", "text" => "Style 2" ),
					 array( "value" => "style_3", "text" => "Style 3" ),
                                        
                ),
    ),	
	array(
		'name' => 'Favicon',
		'id' => $shortname . '_favicon',
		'type' => 'upload',
		'img_w' => '60',
		'img_h' => '60',
		'std' => '',
		'desc' => 'Upload a favicon.'
	),
    array(
		'name' => 'Show Loader',
		'id' => $shortname . '_loader_option',
        'type' => 'select',
        'std' => 'yes',
        'desc' => 'Select Loader for your Template',
        'options' => array(
					 array( "value" => "yes", "text" => "Show Loader" ),
					 array( "value" => "no", "text" => "Hide Loader" ),      
                ),
            ),
    array(
		'name' => 'Show animation',
		'id' => $shortname . '_animation',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show animation on page load',
        'options' => array(
					 array( "value" => "no", "text" => "Hide Animation" ),
					 array( "value" => "yes", "text" => "Show Animation" ),
                                        
                ),
            ),
	array(
		'type' => 'close'
	) ,

/**************  Cover info ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Cover info',
		'tab_id' => 'intro'
	),
	array(
		'name' => 'Profile picture',
		'id' => $shortname . '_profile_picture',
		'type' => 'upload',
		'std' => '',
		'desc' => 'Upload Your profile picture Here.'
	) ,	
	array(
		'name' => 'Intro title',
		'id' => $shortname . '_intro_title',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert intro title here.'
	) ,	
	array(
		'name' => 'Name',
		'id' => $shortname . '_name',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert your name here.'
	) ,
	array(
		'name' => 'Title/Designation',
		'id' => $shortname . '_title_designation',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert your tilte/designation here.'
	) ,
	array(
		'name' => 'Description',
		'id' => $shortname . '_description',
		'type' => 'textarea',
		'std' => '',
		'desc' => 'Insert detail message here. (You can insert HTML also.)'
	) ,
	
	array(
		'type' => 'close'
	) ,	
	/**************  resume settings  ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Resume',
		'tab_id' => 'doctors'
	),
	array(
		'name' => 'Upload resume',
		'id' => $shortname . '_upload_resume',
		'type' => 'upload',
		'std' => '',
		'desc' => 'Upload Your resume Here.'
	) ,
    array(
		'name' => 'Show download resume on top right.',
		'id' => $shortname . '_show_down_resume',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show download resume on top right status(Yes/No).',
        'options' => array(
					 array( "value" => "yes", "text" => "Yes" ),
					 array( "value" => "no", "text" => "No" )
                                        
                ),
    ),
    array(
		'name' => 'Show download resume under menu.',
		'id' => $shortname . '_show_down_resume_1',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show download resume under menu status(Yes/No).',
        'options' => array(
					 array( "value" => "yes", "text" => "Yes" ),
					 array( "value" => "no", "text" => "No" )
                                        
                ),
    ),
	array(
		'name' => 'Show download resume button text',
		'id' => $shortname . '_show_down_r_text',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Show download resume button text here.'
	) ,	
	array(
		'type' => 'close'
	) ,		
	
	/**************  contact settings  ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Contact',
		'tab_id' => 'contform'
	),
    array(
		'name' => 'Show contact us button on top right.',
		'id' => $shortname . '_show_contact_us',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show contact us button on top right status(Yes/No).',
        'options' => array(
					 array( "value" => "yes", "text" => "Yes" ),
					 array( "value" => "no", "text" => "No" )
                                        
                ),
    ),
    array(
		'name' => 'Show contact us button under menu.',
		'id' => $shortname . '_show_contact_us_1',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show contact us button under menu status(Yes/No).',
        'options' => array(
					 array( "value" => "yes", "text" => "Yes" ),
					 array( "value" => "no", "text" => "No" )
                                        
                ),
    ),
	array(
		'name' => 'Show contact us button text',
		'id' => $shortname . '_show_contact_us_text',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Show contact us button text here.'
	) ,	
	array(
		'name' => 'Contact us button link',
		'id' => $shortname . '_show_contact_us_link',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert contact us button link.'
	) ,	
	array(
		'name' => 'Contact address',
		'id' => $shortname . '_contact_address',
		'type' => 'textarea',
		'std' => '',
		'desc' => 'Insert your contact address.'
	) ,
	array(
		'name' => 'phone',
		'id' => $shortname . '_phone',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert your phone number.'
	) ,
	array(
		'name' => 'contact mail',
		'id' => $shortname . '_contact_mail',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert your contact mail.'
	) ,
	array(
		'name' => 'Custom code for contact address section',
		'id' => $shortname . '_conadd_cuatom',
		'type' => 'textarea',
		'std' => '',
		'desc' => 'Insert your cuatom code for contact address section.'
	) ,	
	array(
		'type' => 'close'
	) ,		
	
	/**************  Blog settings  ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Blog',
		'tab_id' => 'port'
	),
    array(
		'name' => 'Show Blog button on top right.',
		'id' => $shortname . '_show_blog',
        'type' => 'select',
        'std' => 'no',
        'desc' => 'Show Blog button on top right status(Yes/No).',
        'options' => array(
					 array( "value" => "yes", "text" => "Yes" ),
					 array( "value" => "no", "text" => "No" )
                                        
                ),
    ),
	array(
		'name' => 'Show Blog button link',
		'id' => $shortname . '_show_blog_link',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Show Blog button link here.'
	) ,		
	array(
		'name' => 'Show Blog button text',
		'id' => $shortname . '_show_blog_text',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Show Blog button text here.'
	) ,
	array(
		'name' => 'Show Home return button text',
		'id' => $shortname . '_show_home_return_text',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Show Home return button text here.'
	) ,
	array(
		'type' => 'close'
	) ,		
	
	/**************  Bottom settings  ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Bottom',
		'tab_id' => 'bottom'
	),
	array(
		'name' => 'Thanks message',
		'id' => $shortname . '_thanks',
		'type' => 'text',
		'std' => '',
		'desc' => 'Put thanks message Here.'
	) ,
	array(
		'name' => 'Bottom message / Footer text',
		'id' => $shortname . '_footermsg',
		'type' => 'textarea',
		'std' => '',
		'desc' => 'Put Bottom message Here.'
	) ,
	array(
		'name' => 'Message Author / Footer copyright',
		'id' => $shortname . '_footermsgauthor',
		'type' => 'text',
		'std' => '',
		'desc' => 'Insert Message Author Name Here.'
	) ,	
	array(
		'type' => 'close'
	) ,	

	/**************  Custom style settings  ***************/
	array(
		'type' => 'open',
		'tab_name' => 'Custom style',
		'tab_id' => 'cstyle'
	),
	array(
		'name' => 'Custom style',
		'id' => $shortname . '_custom_style',
		'type' => 'textarea',
		'std' => '',
		'desc' => 'Insert custom style here'
	) ,	
	array(
		'type' => 'close'
	) ,	

);
?>