<?php
$connection = new mysqli("localhost", "admin", "", "robot_arm_control");
if ($connection->connect_errno) {
	exit("Database connection failed. reason: " . $connection->connect_error);
}

$motor_1 = $_POST['motor_1'];
$motor_2 = $_POST['motor_2'];
$motor_3 = $_POST['motor_3'];
$motor_4 = $_POST['motor_4'];
$motor_5 = $_POST['motor_5'];
$motor_6 = $_POST['motor_6'];

$query = "INSERT INTO `motors`(`motor_1`, `motor_2`, `motor_3`, `motor_4`, `motor_5`, `motor_6`) VALUES ($motor_1, $motor_2, $motor_3, $motor_4, $motor_5, $motor_6)";

$connection->query($query);
header("Location: index.html");
$connection->close();
?>