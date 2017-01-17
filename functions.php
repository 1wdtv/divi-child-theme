<?php 

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}


function lab_enqueue_parent_style() { 
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
	}
add_action( 'wp_enqueue_scripts', 'lab_enqueue_parent_style' );

//do not remove anything above this line!

/*-----------------------------------------------------------------------------------*/
/* Add any of your own custom functions below ---------------------------------------*/
/*-----------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------*/
/* Do not add anything below this or the sky will fall ;-) */
/*-----------------------------------------------------------------------------------*/