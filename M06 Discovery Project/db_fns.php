<?php

// Show erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function db_connect() {
	$result = new mysqli('localhost', 'bm_user', 'password', 'bookmarks');
	if (!$result) {
		throw new Exception('Could not connect to database server');
	} else {
		return $result;
	}
}

?>