<?php
// Define constants
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'math_project');

// Connect to database
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Example query
$sql = "SELECT * FROM table_name";
$result = $db->query($sql);

// Print results
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "ID: " . htmlspecialchars($row['id']) . "</br>";
    echo "Name: " . htmlspecialchars($row['name']) . "</br>";
    echo "Age: " . htmlspecialchars($row['age']) . "</br>";
    echo "</div>";
}

// Close the database connection
$db->close();
?>
