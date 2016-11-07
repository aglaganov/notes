<?php
session_start();

include '../db.php';

$uid = $_POST['uid'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pass='$pass'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){

} else {
	$_SESSION['id'] = $row['id'];
}

header("Location: ../index.php");