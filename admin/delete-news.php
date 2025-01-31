<?php
session_start();
require '../includes/db_connection.php';

// Ensure admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

// Validate news_id
if (!isset($_GET['news_id']) || !is_numeric($_GET['news_id'])) {
    die("Invalid news_id.");
}
$news_id = intval($_GET['news_id']); // Convert to integer

// Fetch the news image
$stmt = $conn->prepare("SELECT image FROM news WHERE news_id = ?");
if (!$stmt) {
    die("SQL Error: " . $conn->error); // Debugging
}
$stmt->bind_param("i", $news_id);
$stmt->execute();
$stmt->bind_result($news_image);
$stmt->fetch();
$stmt->close();

// Delete the image file if it exists
if (!empty($news_image)) {
    $image_path = "../assets/images/news/" . $news_image;
    if (file_exists($image_path)) {
        unlink($image_path);
    }
}

// Delete associated gallery images
$stmt = $conn->prepare("DELETE FROM gallery_images WHERE news_id = ?");
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}
$stmt->bind_param("i", $news_id);
$stmt->execute();
$stmt->close();

// Now delete the news record
$stmt = $conn->prepare("DELETE FROM news WHERE news_id = ?");
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}
$stmt->bind_param("i", $news_id);
if ($stmt->execute()) {
    $stmt->close();
    header("Location: all-news.php?message=News+deleted+successfully");
    exit();
} else {
    echo "Error deleting news: " . $conn->error;
}
?>
