<?php

$conn = mysqli_connect("localhost","root","YES","notes");

if (!$conn) {
	die("connection faild: ".mysqli_connect_error);
}
