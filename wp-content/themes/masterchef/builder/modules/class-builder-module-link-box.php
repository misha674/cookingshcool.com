<?php

class Tm_Builder_Module_Link_Box extends Tm_Builder_Module {
	function init() {
		$this->name = esc_html__( 'Link Box', 'masterchef' );
		$this->slug = 'tm_pb_link_box';
		$this->icon = 'f14c';
		$this->whitelisted_fields = array(
			'title',
			'title_orientation',
			'image',
			'image_min_height',
			'image_min_height_laptop',
			'image_min_height_tablet',
			'image_min_height_phone',
			'button',
			'url',
			'url_new_window',
			'admin_label',
			'module_id',
			'module_class',
		);

		$this->fields_defaults = array(
			'url_new_window'          => array( 'off' ),
			'title_orientation'       => array( 'top' ),
			'image_min_height'        => array( '690' ),
			'image_min_height_laptop' => array( '550' ),
			'image_min_height_tablet' => array( '350' ),
			'image_min_height_phone'  => array( '250' ),
		);

		$this->main_css_element = '%%order_class%%.' . $this->slug;

		$this->advanced_options = array(
			'fonts' => array(
				'header' => array(
					'label'    => esc_html__( 'Header', 'masterchef' ),
					'css'      => array(
						'main' => "{$this->main_css_element} h4, {$this->main_css_element} h4 a",
					),
				),
				'body'   => array(
					'label'    => esc_html__( 'Body', 'masterchef' ),
					'css'      => array(
						'line_height' => "{$this->main_css_element} p",
					),
				),
			),
			'background' => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);
	}

	function get_fields() {
		$tm_accent_color = tm_builder_accent_color();

		$fields = array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'masterchef' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'The title of your blurb will appear in bold below your blurb image.', 'masterchef' ),
			),
			'title_orientation' => array(
				'label'           => esc_html__( 'Title Orientation', 'masterchef' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'top' => esc_html__( 'Top', 'masterchef' ),
					'bottom'  => esc_html__( 'Bottom', 'masterchef' ),
				),
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'masterchef' ),
			),
			'image' => array(
				'label'              => esc_html__( 'Image', 'masterchef' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'masterchef' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'masterchef' ),
				'update_text'        => esc_attr__( 'Set As Image', 'masterchef' ),
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'masterchef' ),
			),
			'image_min_height' => array(
				'label'           => esc_html__( 'Image Minimal Height', 'masterchef' ),
				'type'            => 'range',
				'default'         => '690px',
				'range_settings'  => array(
					'min'  => '150',
					'max'  => '1000',
					'step' => '1',
				),
				'mobile_options'      => true,
				'mobile_global'       => true,
				'option_category' => 'basic_option',
			),
			'image_min_height_laptop' => array(
				'type' => 'skip',
			),
			'image_min_height_tablet' => array(
				'type' => 'skip',
			),
			'image_min_height_phone' => array(
				'type' => 'skip',
			),
			'button' => array(
				'label'           => esc_html__( 'Button Text', 'masterchef' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired button text.', 'masterchef' ),
			),
			'url' => array(
				'label'           => esc_html__( 'Url', 'masterchef' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If you would like to make your blurb a link, input your destination URL here.', 'masterchef' ),
			),
			'url_new_window' => array(
				'label'           => esc_html__( 'Url Opens', 'masterchef' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'masterchef' ),
					'on'  => esc_html__( 'In The New Tab', 'masterchef' ),
				),
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'masterchef' ),
			),
			'content_new' => array(
				'label'             => esc_html__( 'Content', 'masterchef' ),
				'type'              => 'tiny_mce',
				'option_category'   => 'basic_option',
				'description'       => esc_html__( 'Input the main text content for your module here.', 'masterchef' ),
			),
			'disabled_on' => array(
				'label'           => esc_html__( 'Disable on', 'masterchef' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => esc_html__( 'Phone', 'masterchef' ),
					'tablet'  => esc_html__( 'Tablet', 'masterchef' ),
					'desktop' => esc_html__( 'Desktop', 'masterchef' ),
				),
				'additional_att'  => 'disable_on',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'This will disable the module on selected devices', 'masterchef' ),
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'masterchef' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'masterchef' ),
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'masterchef' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'masterchef' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {

		$this->set_vars(
			array(
				'title',
				'title_orientation',
				'image',
				'image_min_height',
				'image_min_height_laptop',
				'image_min_height_tablet',
				'image_min_height_phone',
				'alt',
				'button',
				'url',
				'url_new_window',
			)
		);

		$this->function_name = $function_name;

		if ( '' !== $this->_var( 'title' ) ) {
			$this->_var( 'title', '<h2 class="tm_pb_link_box_title">' . $this->_var( 'title' ) . '</h2>' );
		}

		if ( '' !== $this->_var( 'image_min_height' ) ) {
			$image_min_height = array(
				'desktop' => $this->_var( 'image_min_height' ),
				'laptop'  => $this->_var( 'image_min_height_laptop' ),
				'tablet'  => $this->_var( 'image_min_height_tablet' ),
				'phone'   => $this->_var( 'image_min_height_phone' ),
			);

			tm_pb_generate_responsive_css(
				$image_min_height,
				'%%order_class%% .tm_pb_link_box_content',
				'min-height',
				$function_name
			);
		}

		if ( '' !== $this->_var( 'button' ) && '' !== $this->_var( 'url' ) ) {
			$this->_var( 'button', sprintf(
				'<a class="tm_pb_button" href="%1$s"%3$s>%2$s</a>',
				esc_url( $this->_var( 'url' ) ),
				$this->_var( 'button' ),
				( 'on' === $this->_var( 'url_new_window' ) ? ' target="_blank"' : '' )
			) );
		} else {
			$this->_var( 'button', '' );
		}

		$classes = array();

		$content = $this->get_template_part( 'link_box.php' );

		$output = $this->wrap_module( $content, $classes, $function_name );

		return $output;
	}

}

new Tm_Builder_Module_Link_Box;