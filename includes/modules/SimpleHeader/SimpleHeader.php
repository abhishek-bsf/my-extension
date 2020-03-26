<?php

class SIMP_SimpleHeader extends ET_Builder_Module {

	public $slug       = 'simp_simple_header';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Simple Header', 'simp-simple-extension' );
		// $this->advanced_fields = array(
		// 	'borders'               => array(
		// 		'default' => false,
		// 	),
		// );
	}

	public function get_fields() {
		return array(
			'heading'     => array(
				'label'           => esc_html__( 'My Heading', 'simp-simple-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'simp-simple-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'content'     => array(
				'label'           => esc_html__( 'Content', 'simp-simple-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the heading text.', 'simp-simple-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'icon'     => array(
				'label'           => esc_html__( 'Icon', 'simp-simple-extension' ),
				'type'            => 'select_icon',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the heading text.', 'simp-simple-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'button_alignment' => array(
				'label'            => esc_html__( 'Button Alignment', 'simp-simple-extension' ),
				'description'      => esc_html__( 'Align your button to the left, right or center of the module.', 'simp-simple-extension' ),
				'type'             => 'text_align',
				'option_category'  => 'configuration',
				'options'          => et_builder_get_text_orientation_options( array( 'justified' ) ),
				'tab_slug'         => 'advanced',
				'toggle_slug'      => 'alignment',
				'description'      => esc_html__( 'Here you can define the alignment of Button', 'simp-simple-extension' ),
				'mobile_options'   => true,
			),
		);
	}

	public function render( $unprocessed_props, $content = null, $render_slug ) {

		if( $this->props['icon'] ){
			return sprintf(
				'<h1 class="simp-simple-header-heading">%1$s</h1>
				<label class="simp-simple-header-label">%1$s</label>
				<p class="simp-simple-header-content">%2$s</p>
				<p class="simp-simple-header-icon">%3$s</p>',
				esc_html( $this->props['heading'] ),
				$this->props['content'],
				$this->props['icon'],
			);
		}else{
			return sprintf(
				'<h1 class="simp-simple-header-heading">%1$s</h1>
				<label class="simp-simple-header-label">%1$s</label>
				<p class="simp-simple-header-content">%2$s</p>',
				esc_html( $this->props['heading'] ),
				$this->props['content'],
			);
		}

	}
}

new SIMP_SimpleHeader;