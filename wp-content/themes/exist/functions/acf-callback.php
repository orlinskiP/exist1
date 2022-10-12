<?php

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists(STYLESHEETPATH . "/blocks/" . $slug . "/template.php") ) {
		include( STYLESHEETPATH . "/blocks/" . $slug . "/template.php" );
	}
}