<?php

include 'config.php';

$username = $_POST["username"];
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$status = $_POST["status"];
$year = $_POST["year_grad"];

$email = $_POST["email_id"];
$pwd = $_POST["pwd"]; 



if($mysqli->query("INSERT INTO `uConnect`.`User` (`first_name`, `last_name`, `email_id`, `password`, `year_grad`, `username`, `status`) 
VALUES ('$fname', '$lname', '$email', '$pwd', '$year', '$username', '$status')")){
	echo 'Data inserted'; 
	echo '<br/>';
}








header ("location:login.php");

?>


