<?php

$conn = mysqli_connect("localhost","root","YES","notes");

if (!$conn) {
	die("connection faild: ".mysqly_connect_error);
}
