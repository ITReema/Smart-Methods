<?php
$link = mysqli_connect("localhost", "admin", "", "robot_arm_control");
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}

$link->close();
?>