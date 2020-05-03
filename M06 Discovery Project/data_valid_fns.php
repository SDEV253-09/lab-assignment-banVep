<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// filled_out() function_exists
function filled_out($form_vars) {
	// test that each variable has a value
	foreach ($form_vars as $key => $value) {
		if ((!isset($key)) || ($value == '')) {
			return false;
		}
	}
	return true;
}
	
// valid_email function
function valid_email($address) {
// check an email address is possibly valid
	if (preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $address))
	{
		return true;
	} else {
		return false;
	}
}
	
	
?>