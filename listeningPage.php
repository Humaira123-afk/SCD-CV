<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

//if ($result->num_rows > 0)
{
  // output data of each row
  echo "<table>";
  echo "<tr> <th>ID</th>  <th>Name</th>  <th>Age</th> <th>Detail</th> </tr>"  ;

  while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "<td><a href='detail.php?id=".$row["id"]."'>Click</a></td>";
        echo "</tr>";
     }
    echo "</table>";
}
/* else {
  echo "0 results";
}*/
?>