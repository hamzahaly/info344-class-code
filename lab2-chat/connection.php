<?php
function getConnection() {
	//variables in php file are local to this function.
	require_once 'secret/db-credentials.php';
	
	try {
		//PDO is a library that allows us to connect to a database
	$dbConn = new PDO("mysql:host=159.203.233.236;dbname=info344chat", "info344student", "$dbPassword");
			
		return $dbconn;
		
	} catch(PDOException $e) {
		die('Could not connect to database ' . $e);
	}
}
?>