<?php
require '../includes/db_connection.php';

if (isset($_GET['id']) && isset($_GET['news_id'])) {
    $id = $_GET['id'];
    $news_id = $_GET['news_id'];

    // Fetch image path
    $stmt = $conn->prepare("SELECT image_path FROM gallery_images WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($image_path);
    $stmt->fetch();
    $stmt->close();

    // Delete file from server
    $file_path = "../assets/thriposha_assets/images/news_gallery/" . $image_path;
    if (file_exists($file_path)) {
        unlink($file_path);
    }

    // Delete from database
    $stmt = $conn->prepare("DELETE FROM gallery_images WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    header("Location: edit-news.php?news_id=$news_id");
    exit();
}
?>
