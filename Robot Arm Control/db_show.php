<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Robotic Arm</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="db_table">
        <table>
          <tr>
            <th>Motor_1</th>
            <th>Motor_2</th>
            <th>Motor_3</th>
            <th>Motor_4</th>
            <th>Motor_5</th>
            <th>Motor_6</th>
          </tr>
          <?php
          $link = mysqli_connect("localhost", "admin", "", "robot_arm_control");
          if ($link->connect_error) {
          die("Connection failed: " . $link->connect_error);
          }
          $sql = "SELECT `motor_1`, `motor_2`, `motor_3`, `motor_4`, `motor_5`, `motor_6` FROM `motors`";
          $result = $link->query($sql);
          if ($result->num_rows > 0) {
          while($row = $result ->fetch_assoc()) {
          echo "
          <tr>
          	<td>" . $row["motor_1"]. "</td>
          	<td>" . $row["motor_2"]. "</td>
          	<td>" . $row["motor_3"]. "</td>
   			    <td>" . $row["motor_4"]. "</td>
          	<td>" . $row["motor_5"]. "</td>
          	<td>" . $row["motor_6"]. "</td>
          </tr>";
          }
          echo "</table>";
          } 
          $link->close();
          ?>
        </table>
      </div>
	</div>
</body>
</html>
