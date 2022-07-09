select.php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpgym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Email_Id, Full_Name,Age,Gender,Locality,Phon_Number FROM login_user";
$result = $conn->query($sql);
echo "<table>";
echo "<tr>";
echo "<th> UserId</th>";
echo "<th> User Name </th>";
echo "</tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "userid: " . $row["userid"]. " - Name: " . $row["username"]. "<br>";
    $emailid=$row["userid"];
    $name=$row["Full_Name"];
    $age=$row["Age"];
    $gen=$row["Gender"];
    $loca=$row["Locality"];
    $phon=$row["Phon_Number"];
    

        echo "<tr> <td>" . $id."</td><td>". $name ."</td></tr>";
  }
  echo "</table>";
} 
else {
  echo "0 results";
}
$conn->close();
?>
