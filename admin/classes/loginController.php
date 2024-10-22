<?php
session_start();
// require 'db_connection.php';
require_once '../../includes/db_connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($conn) {

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Successful login
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_name'] = $user['username'];
                header("Location: ../index.php");
                exit();
            } else {
                echo "Invalid password";
            }
        } else {
            echo "User not found";
        }
    } else {
        die("Database connection failed.");
    }
}
?>
