<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

require '../includes/db_connection.php';

// Check if document ID is provided
if (isset($_GET['id'])) {
    $document_id = intval($_GET['id']);

    // Fetch the document details
    $stmt = $conn->prepare("SELECT document FROM documents WHERE id = ?");
    $stmt->bind_param("i", $document_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $document = $result->fetch_assoc();
    $stmt->close();

    if ($document) {
        $document_path = "../assets/thriposha_assets/documents/" . $document['document'];

        // Delete the document file from the server
        if (file_exists($document_path)) {
            unlink($document_path);
        }

        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM documents WHERE id = ?");
        $stmt->bind_param("i", $document_id);

        if ($stmt->execute()) {
            echo "<script>alert('Document deleted successfully!'); window.location.href='all-documents.php';</script>";
        } else {
            echo "<script>alert('Failed to delete document!'); window.location.href='all-documents.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Document not found!'); window.location.href='all-documents.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='all-documents.php';</script>";
}

?>
