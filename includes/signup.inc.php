<?php
session_start();

include '../db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (first, last, uid, pass) 
VALUES ('$first', '$last', '$uid', '$pass')";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");