<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

require '../includes/db_connection.php';
include '../includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $category = $_POST['category'];

    // handle the document upload
    $document = $_FILES['document']['name'];
    $document_temp = $_FILES['document']['tmp_name'];
    $document_path = "../assets/thriposha_assets/documents/" . $document;


    // move the uploaded file to the specified path
    if(move_uploaded_file($document_temp, $document_path)) {
        // Prepare the SQL query using prepared statements
        $stmt = $conn->prepare("INSERT INTO documents (title, category, document) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $category, $document);


        // Execute the query    
        if ($stmt->execute()) {
            echo "<script>alert('Document added successfully!')</script>";
        } else {
            echo "<script>alert('Failed to add document!')</script>";
        }

        // Close the prepared statement
        $stmt->close();
    }
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

            <!-- Right sidebar Start-->
            <?php include '../includes/admin_right_sidebar.php'; ?>
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Add Document
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

                                    <li class="breadcrumb-item active">Add Document</li>
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
                                            <form class="needs-validation add-product-form" novalidate="" action="add_documents.php" method="post" enctype="multipart/form-data">
                                                <div class="form">
                                                    <!-- Title Input -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="title" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" id="title" name="title" type="text" required="">
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                    </div>

                                                    <!-- Document Upload -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="document" class="col-xl-3 col-sm-4 mb-0">Document :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" id="document" name="document" type="file" required="">
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                    </div>

                                                    <!-- Category Dropdown -->
                                                    <div class="form-group mb-3 row">
                                                        <label for="category" class="col-xl-3 col-sm-4 mb-0">Category :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <select class="form-control" id="category" name="category" required="">
                                                                <option value="" disabled selected>Select Category</option>
                                                                <option value="tenders">Tenders</option>
                                                                <option value="procurements">Procurements</option>
                                                                <option value="career">Careers</option>
                                                            </select>
                                                            <div class="valid-feedback">Looks good!</div>
                                                        </div>
                                                    </div>



                                                    <!-- Form Buttons -->
                                                    <div class="offset-xl-3 offset-sm-4 mt-4">
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                        <button type="button" class="btn btn-light">Discard</button>
                                                    </div>
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