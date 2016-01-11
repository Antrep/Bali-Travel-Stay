<?php
session_start();
include 'handler.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	header("Location: https://stud.hosted.hr.nl/0918998/BTS/login.html");
} else {
	$_SESSION['id'] = $row['id'];
	header("Location: https://stud.hosted.hr.nl/0918998/BTS/index.php");
}




