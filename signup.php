<?php

include 'db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];

echo $first."<br>";
echo $last."<br>";
echo $uid."<br>";
echo $pass."<br>";

$sql = "INSERT INTO users (first, last, uid, pass) VALUES ()";