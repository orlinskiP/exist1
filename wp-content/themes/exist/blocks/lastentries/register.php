<?php

add_action('acf/init', 'register_block_lastentries');

function register_block_lastentries() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'lastentries',
			'title'				=> __('Ostatnie wpisy'),
			'description'		=> __('Ostatnie wpisy'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'render_template'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'desktop',
			'align' 			=> 'full',
			'supports' 			=> array('mode' => false, 'align' => false),
			'mode'				=> 'edit',
			'keywords'			=> array( 'lastentries'),
		));
	}
}