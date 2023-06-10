<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
	// Localhost
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "dbname");
} else{
	// Ammex
	define("DB_HOST", "");
	define("DB_USER", "");
	define("DB_PASS", "");
	define("DB_NAME", "");
}

?>