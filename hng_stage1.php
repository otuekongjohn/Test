// An exceedingly Simple PHP script
<?php 
  echo "Good day. Thanks for the opportunity.<br>God be praised!";
?>

// Script to display mysql content using PHP
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hngdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM intern_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Names: " . $row["Full Name"]. " - Github: " . $row["@github"]. " - Slack: " . $row["@slack"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
