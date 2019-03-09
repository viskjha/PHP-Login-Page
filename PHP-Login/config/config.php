<?php 

ob_start();
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost","root","","social");
if (mysqli_connect_errno()) {

	echo "fail to connect" .mysqli_connect_errno();
}

 ?>