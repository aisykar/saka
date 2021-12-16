<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'navis');
define('DB_PASSWORD', 'jakarta2000');
define('DB_NAME', 'aisyah');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
	die("ERROR: could not connect." . mysql_connect_error());
}

?>