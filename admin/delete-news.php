<?php

session_start();
require '../includes/db_connection.php';

// Ensure that the user is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

// Check if the 'news_id' is passed in the URL
if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];

    // Fetch the news item to check if it exists
    $query = "SELECT * FROM news WHERE news_id = '$news_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $news = mysqli_fetch_assoc($result);

        // Delete associated image if it exists
        if (!empty($news['image'])) {
            $image_path = "../assets/images/news/" . $news['image'];
            if (file_exists($image_path)) {
                unlink($image_path); // Remove the image
            }
        }

        // Delete the news record from the database
        $delete_query = "DELETE FROM news WHERE news_id = '$news_id'";
        if (mysqli_query($conn, $delete_query)) {
            // Redirect back to the news list
            header("Location: all-news.php?message=News+deleted+successfully");
            exit();
        } else {
            echo "Error deleting news: " . mysqli_error($conn);
        }
    } else {
        echo "No news found with the given ID.";
    }
} else {
    echo "news_id is required.";
    exit();
}
?>
