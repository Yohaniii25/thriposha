<?php
$conn = new mysqli("localhost", "root", "", "thriposha");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
