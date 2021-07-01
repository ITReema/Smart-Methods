<?php
$conn = mysqli_connect("localhost", "admin", "", "robot_control");
$sql = "SELECT * FROM control";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  if(isset($_GET['forward'])){
    echo($row["forward"]);
  }
  if(isset($_GET['backward'])){
      echo($row["backward"]);
  }
  if(isset($_GET['right'])){
      echo($row["move_right"]);
  }
  if(isset($_GET['left'])){
      echo($row["move_left"]);
  }
  if(isset($_GET['stop'])){
      echo($row["stop"]);
  }
}
?>

