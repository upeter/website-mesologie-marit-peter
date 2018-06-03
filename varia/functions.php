function bl_remove_private_title( $title ) {
    // Return only the title portion as defined by %s, not the additional 
    // 'Private: ' as added in core
    return "%s";
}

add_filter('wp_mail_smtp_custom_options', function( $phpmailer ) {
    $phpmailer->SMTPOptions = array(
		'ssl' => array(
			'verify_peer'       => false,
			'verify_peer_name'  => false,
			'allow_self_signed' => true
		)
	);
	
    return $phpmailer;
} );
