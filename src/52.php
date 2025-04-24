<?php
// Define variables and constants
$username = "your_username";
$password = "your_password";

// Check if username and password are provided
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = <PASSWORD>($_POST['password']);

    // SQL query to check username and password
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $query = $conn->prepare($sql);
    $query->bind_param("ss", $username, $password);

    if ($query->execute()) {
        echo "<h1>Logged in successfully!</h1>";
        // Redirect to the main page or any other desired page
        header("Location: /main.php");
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "Please provide both username and password.";
}
