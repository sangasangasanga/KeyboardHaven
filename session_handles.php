<?php 
	require_once('C:/xampp/htdocs/KeyboardHaven/lib/Zebra-Session-master/Zebra_Session.php');

	// Change consts for easy updating, Change them to suit your database.
	define("DB_HOST_OR_IP",			"localhost");
	define("DB_LOGIN_USERNAME",    	"root");
	define("DB_LOGIN_PASSWORD", 	"AL26yK80f0a08dOd");
	define("DB_DATABASE_NAME", 		"dbKeyboardHaven");
	//
	$link = mysqli_connect(DB_HOST_OR_IP, DB_LOGIN_USERNAME, DB_LOGIN_PASSWORD, DB_DATABASE_NAME);

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}	

	$session = new Zebra_Session($link, 'TestSecurityCode');

	session_regenerate_id(true);
	// echo  $_SESSION['email'] ;

?>