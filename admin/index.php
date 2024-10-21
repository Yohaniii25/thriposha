<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS here -->
</head>

<body>
// Include the sidebar
<?php include '../admin/sidebar.php'; ?>  // Adjust the path as needed

    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['admin_name']; ?>!</h1>
        <p>Admin Panel Content Here</p>
    </div>
</body>
</html>
