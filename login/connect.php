<?php

// Make a MySQL Connection
// $host="localhost";
// $user="0918998";
// $password="aehashae";
// $db = "0918998";

$host="localhost";
$user="root";
$password="";
$db = "logintest";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>
