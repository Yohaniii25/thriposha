<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

require '../includes/db_connection.php';
include '../includes/functions.php';

// Fetch existing document details
if (isset($_GET['id'])) {
    $document_id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM documents WHERE id = ?");
    $stmt->bind_param("i", $document_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $document = $result->fetch_assoc();
    $stmt->close();

    if (!$document) {
        echo "<script>alert('Document not found!'); window.location.href='all-documents.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='all-documents.php';</script>";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];

    // Keep existing document path unless a new one is uploaded
    $document_path = $document['document'];

    // Handle document file upload
    if (!empty($_FILES['document']['name'])) {
        // Remove old document file
        if (file_exists("../assets/thriposha_assets/documents/" . $document['document'])) {
            unlink("../assets/thriposha_assets/documents/" . $document['document']);
        }

        $new_document = $_FILES['document']['name'];
        $document_temp = $_FILES['document']['tmp_name'];
        $upload_dir = "../assets/thriposha_assets/documents/";
        $document_path = $upload_dir . basename($new_document);

        if (!move_uploaded_file($document_temp, $document_path)) {
            echo "<script>alert('Error uploading document.');</script>";
            exit();
        }
    }

    // Update document details in the database using prepared statements
    $stmt = $conn->prepare("UPDATE documents SET title=?, category=?, document=? WHERE id=?");
    $stmt->bind_param("sssi", $title, $category, $document_path, $document_id);

    if ($stmt->execute()) {
        echo "<script>alert('Document updated successfully!'); window.location.href='all-documents.php';</script>";
    } else {
        echo "<script>alert('Failed to update document!');</script>";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Thriposha LTD</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <?php include '../includes/admin_header.php'; ?>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <?php include '../includes/sidebar.php'; ?>
            <!-- Page Sidebar Ends-->


            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Edit Document
                                        <small>Thriposha LTD</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active">Edit Document</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row product-adding">

                                        <div class="col-xl-7">
                                            <form class="needs-validation add-product-form" novalidate="" action="edit-document.php?id=<?php echo $document_id; ?>" method="post" enctype="multipart/form-data">
                                                <div class="form">
                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" id="validationCustom01" name="title" type="text" value="<?php echo $document['title']; ?>" required="">
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <!-- Category -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Category :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <select class="form-control digits" id="validationCustom05" name="category" required="">
                                                                <option value="">Select Category</option>
                                                                <option value="tenders" <?php if ($document['category'] == 'tenders') echo 'selected'; ?>>Tenders</option>
                                                                <option value="procurements" <?php if ($document['category'] == 'procurements') echo 'selected'; ?>>Procurements</option>
                                                            </select>
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <!-- current document -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Current Document :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <p><a href="<?php echo htmlspecialchars($document['document']); ?>" target="_blank">View Current Document</a></p>
                                                        </div>
                                                    </div>
                                                    <!-- upload new document -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Upload New Document (Replacing Current One) :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" id="validationCustom01" name="document" type="file">
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                    <!-- form button -->
                                                    <div class="offset-xl-3 offset-sm-4 mt-4">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <a href="all-documents.php" class="btn btn-light">Cancel</a>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <?php include '../includes/admin_footer.php'; ?>
            <!-- footer end-->
        </div>
    </div>

    <div class="bottom-space"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- touchspin js-->
    <script src="assets/js/touchspin/vendors.min.js"></script>
    <script src="assets/js/touchspin/touchspin.js"></script>
    <script src="assets/js/touchspin/input-groups.min.js"></script>

    <!-- form validation js-->
    <script src="assets/js/dashboard/form-validation-custom.js"></script>

    <!-- ckeditor js-->
    <script src="assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="assets/js/editor/ckeditor/ckeditor.custom.js"></script>

    <!-- Zoom js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <script src="assets/js/zoom-scripts.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>
</body>

</html>