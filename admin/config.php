<?php

$dbhost = "localhost";
$dbname = "investsure";
$dbuser = "root";
$dbpass = "";

mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname) or die(mysql_error());
 
?>