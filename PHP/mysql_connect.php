<?php
// Opens a connection to the database


// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'User');
DEFINE ('DB_PASSWORD', 'Paybyway1');
DEFINE ('DB_HOST', 'tennisdb.crbw8gvplma9.us-west-2.rds.amazonaws.com');
DEFINE ('DB_NAME', 'tennisDB');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

function execute_query($query){
	$response = @mysqli_query($dbc, $query);
	return $response;
}

?>