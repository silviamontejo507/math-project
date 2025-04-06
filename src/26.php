<?php
// Define variables
$user = "test_user";
$password = "password123";

// Check if user exists in database
if (isset($user) && $user != "") {
    echo "User already exists.";
} else {
    // Insert new user into the database
    $sql = "INSERT INTO users (name, password) VALUES ('$user', '$password')";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        echo "User added successfully.";
    } else {
        echo "Error adding user: " . $sql;
    }
}
?>
