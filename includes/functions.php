<?php

include '../includes/db_connection.php';

function fetchNews() {
    global $conn; 


    $query = "SELECT news_id, title, news_description, image FROM news order by created_at DESC";
    $result = mysqli_query($conn, $query);

    // check if the query is successful
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    // Return the fetched rows if available, otherwise return an empty array
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// view single news
function fetchNewsById($news_id) {
    global $conn;

    $query = "SELECT news_id, title, news_description, image FROM news WHERE news_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}


function fetchDocuments() {
    global $conn; 

    $query = "SELECT id, title, category FROM documents order by created_at DESC";
    $result = mysqli_query($conn, $query);

    // check if the query is successful
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    // Return the fetched rows if available, otherwise return an empty array
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}