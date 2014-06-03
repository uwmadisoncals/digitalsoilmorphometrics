<?php
/* Custom code goes below this line. */

	do_action( 'attitude_after_main_container' );

/**
 * Remove empty paragraph tags
 * ----------------------------------------------------------------------------
 */
add_filter( 'the_content', 'remove_empty_p', 20, 1 );
function remove_empty_p( $content ){
	// clean up p tags around block elements
	
	$content = preg_replace( array(
		'#<p>\s*<(div|aside|section|article|header|footer)#',
		'#</(div|aside|section|article|header|footer)>\s*</p>#',
		'#</(div|aside|section|article|header|footer)>\s*<br ?/?>#',
		'#<(div|aside|section|article|header|footer)(.*?)>\s*</p>#',
		'#<p>\s*</(div|aside|section|article|header|footer)#',
	), array(
		'<$1',
		'</$1>',
		'</$1>',
		'<$1$2>',
		'</$1',
	), $content );
 logit( $content, '$content:' );

 	$result = preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)?(\s|&nbsp;)*</p>#i', '', $content);
 	logit( $result, '$result:' );
	return $result;
}



//############################################
	//#############    FIREPHP  ##################
 	

	//$firephp = FirePHP::getInstance(true);
	 
	//$var_content = $content;
	
	//$firephp->log($var_content,'$var_content');

	
	
	//############################################
	//############################################
	//
/* Custom code goes above this line. */
?>