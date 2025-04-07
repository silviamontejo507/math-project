<?php
// Define variables and constants
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the database
$sql = "SELECT * FROM table_name";
$result = $conn->query($sql);

// Display results of the query
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. ", name: " . $row["name"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
