<?php
include '../includes/db_connection.php'; // Include the database connection

// User details to be inserted
$username = "admin_user";
$email = "g@gmail.com"; // You can set any email you like for the admin
$password = "D0$/6L0h?5ZF"; // Ensure the backslash is escaped

// Encrypt the password before storing it
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL query to insert the user
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "User added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
