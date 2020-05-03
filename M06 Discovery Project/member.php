<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_all);

echo "beginning";

// include function files for this application
require_once('bookmark_fns.php');

echo "Start";

session_start();

echo "after session_start";

// create short variable names
if (!isset($_POST['username'])) {
	// if not isset -> set with dummy value
	$_POST['username'] = " ";
}
$username = $_POST['username'];
if (!isset($_POST['passwd'])) {
	// if not isset -> set with dummy value
	$_POST['passwd'] = " ";
}
$passwd = $_POST['passwd'];

if ($username && $passwd) {
	// they have just tried logging in_array
	try {
		login($username, $passwd);
			// if they are in the database register the user id
			$_SESSION['valid_user'] = $username;
		}
	catch(Exception $e) {
		// unseccessful login
		do_html_header('Problem');
		echo 'You could not be logged in. <br>
				You must be logged in to view this page.';
		do_html_url('login.php' 'login');
		do_html_footer();
		exit;
	}
}

do_html_header('Home');
check_valid_user();
// get the bookmarks this user has saved
if ($url_array = get_user_urls($_SESSION['valid_user'])) {
	display_user_urls($url_array);
}

// give menu of options
display_user_menu();


do_html_footer();

?>