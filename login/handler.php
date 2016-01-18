<?php

//$conn = mysqli_connect("localhost", "0918998", "aehashae", "0918998");
$conn = mysqli_connect("localhost", "root", "", "logintest");

if (!$conn) {
    die("Connectie gefaald: ".mysqli_connect_error());
}

