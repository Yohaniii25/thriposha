<?php
session_start();
require '../../includes/db_connection.php';  // Adjust the path as needed

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $news_description = $_POST['news_description'];

    // Handle file upload
    $image = '';  // Initialize image variable

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $upload_dir = '../img/uploads/';  // Define your upload directory
        $image = basename($_FILES['image']['name']);
        $target_file = $upload_dir . $image;

        // Move uploaded file to the desired directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // File uploaded successfully
        } else {
            echo "Error uploading file.";
        }
    }

    // Insert news into the database
    $stmt = $conn->prepare("INSERT INTO news (title, news_description, image, adminId) VALUES (?, ?, ?, ?)");
    $adminId = $_SESSION['admin_id'];  // Get admin ID from session
    $stmt->bind_param("sssi", $title, $news_description, $image, $adminId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "News added successfully!";
    } else {
        echo "Error adding news: " . $stmt->error;
    }

    $stmt->close();
}


// Include the sidebar
include '../sidebar.php';  // Adjust the path as needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="stylesheet" href="../styles.css"> 
</head>
<body>
    <div class="container">

        <div class="main-content">
            <h2>Add News</h2>
            <form action="add_news.php" method="POST" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="news_description">Description:</label>
                <textarea id="news_description" name="news_description" required></textarea>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*">

                <button type="submit">Add News</button>
            </form>
        </div>
    </div>
</body>
</html>