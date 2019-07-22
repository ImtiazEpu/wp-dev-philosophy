<?php
if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_5d226700e712a',
		'title'                 => 'Audio',
		'fields'                => array(
			array(
				'key'               => 'field_5d22670e62ad7',
				'label'             => 'Add Audio File',
				'name'              => 'audio_file',
				'type'              => 'file',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'url',
				'library'           => 'all',
				'min_size'          => '',
				'max_size'          => 15,
				'mime_types'        => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_format',
					'operator' => '==',
					'value'    => 'audio',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5d23e78768428',
		'title'                 => 'Contact From',
		'fields'                => array(
			array(
				'key'               => 'field_5d23e78f3319b',
				'label'             => 'Contact From Shortcode',
				'name'              => 'contact_from_shortcode',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '[contact-form-7 id="100" title="Contact form 1"]',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'contact.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5d20f602630d5',
		'title'                 => 'Featured Posts',
		'fields'                => array(
			array(
				'key'               => 'field_5d20f6959ee5f',
				'label'             => 'Featured',
				'name'              => 'featured',
				'type'              => 'true_false',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'message'           => '',
				'default_value'     => 0,
				'ui'                => 1,
				'ui_on_text'        => '',
				'ui_off_text'       => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'side',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5d227e0e3a2b2',
		'title'                 => 'Social profile',
		'fields'                => array(
			array(
				'key'               => 'field_5d227e20baac6',
				'label'             => 'Facebook',
				'name'              => 'facebook',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'https://',
				'placeholder'       => '',
			),
			array(
				'key'               => 'field_5d227e34baac7',
				'label'             => 'Twitter',
				'name'              => 'twitter',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'https://',
				'placeholder'       => '',
			),
			array(
				'key'               => 'field_5d227e3ebaac8',
				'label'             => 'Instagram',
				'name'              => 'instagram',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'https://',
				'placeholder'       => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'user_form',
					'operator' => '==',
					'value'    => 'all',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5d2264cc0b261',
		'title'                 => 'Video',
		'fields'                => array(
			array(
				'key'               => 'field_5d226518bc41e',
				'label'             => 'Add Video Link',
				'name'              => 'video_link',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'https://vimeo.com/183741782',
				'placeholder'       => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_format',
					'operator' => '==',
					'value'    => 'video',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

endif;