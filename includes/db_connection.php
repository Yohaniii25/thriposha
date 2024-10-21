<?php
$db = new mysqli("localhost", "thriposha_thriposha", "hH(3_wCFnTWc", "thriposha_thriposha");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
