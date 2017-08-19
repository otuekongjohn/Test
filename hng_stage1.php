// An exceedingly Simple PHP script
<?php 
  echo "Good day. Thanks for the opportunity. God be praised!";
?>

// Script to display mysql content using PHP
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jokesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM jokers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data (joke) of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Joke: " . $row["joketext"]. " - Date: " . $row["jokedate"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
