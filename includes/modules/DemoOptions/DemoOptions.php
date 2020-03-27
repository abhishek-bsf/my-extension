<?php
class MYEX_DemoOptions extends ET_Builder_Module {

	public $slug       = 'myex_demo_options';
	public $vb_support = 'on';

	// protected $module_credits = array(
	// 	'module_uri' => 'http://localhost/fedora_wp/',
	// 	'author'     => 'Abhi',
	// 	'author_uri' => 'http://localhost/fedora_wp/',
	// );

	function init() {

        // Name of Module
        $this->name = esc_html__( 'Demo Options', 'myex-my-extension' );
        
        // New Tab for options
        $this->options_tabs = array(
            'demo' => array(
                'name' => esc_html__( 'Demo', 'myex-my-extension' ),
            ),
        );

		$this->settings_modal_toggles  = array(
			// Your custom tab
			'demo' => array(
				'toggles' => array(
					'input'      => esc_html( 'Basic Fields', 'myex-my-extension' ),
					'code'       => esc_html( 'Code Fields', 'myex-my-extension' ),
					'form'       => esc_html( 'Form Fields', 'myex-my-extension' ),
					'typography' => esc_html( 'Typography Fields', 'myex-my-extension' ),
					'color'      => esc_html( 'Colorpicker Fields', 'myex-my-extension' ),
					'upload'     => esc_html( 'Upload Fields', 'myex-my-extension' ),
					'advanced'   => esc_html( 'Advanced Fields', 'myex-my-extension' ),
				),
			),
		);

	}

	function get_fields() {

		// Adding fields to custom tab
		$all_types_tab_slug    = 'demo';
		$all_types_of_fields   = array(
			'text' => array(
				'label'           => esc_html__( 'Text', 'myex-my-extension' ),
				'type'            => 'text',
				'tab_slug'        => $all_types_tab_slug,
				'toggle_slug'     => 'input',
            ),
            'textarea' => array(
				'label'           => esc_html__( 'Textarea', 'et_builder' ),
				'type'            => 'textarea',
				'tab_slug'        => $all_types_tab_slug,
				'toggle_slug'     => 'input',
            ),
            'select_sidebar' => array(
				'label'           => esc_html__( 'Select Sidebar', 'et_builder' ),
				'type'            => 'select_sidebar',
				'tab_slug'        => $all_types_tab_slug,
				'toggle_slug'     => 'input',
            ),
            'preset_affected_2' => array(
				'label'           => esc_html__( 'Preset Affected 2', 'dicm-divi-custom-modules' ),
				'type'            => 'range',
				'tab_slug'        => $all_types_tab_slug,
				'toggle_slug'     => 'advanced',
				'depends_show_if_not' => 'none',
				'default'         => array(
					'presets_shadow',
					array(
						'none'    => '0em',
						'preset1' => '1em',
						'preset2' => '5em',
					),
				),
			),
		);

		return array_merge( $all_types_of_fields );
	}

}

new MYEX_DemoOptions;
