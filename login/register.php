<?php
session_start();
include 'handler.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first, last, uid, pwd)
VALUES ('$first', '$last', '$uid', '$pwd')";
$result = $conn->query($sql);

header("Location: https://stud.hosted.hr.nl/0918998/BTS/index.php");


