<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

require '../includes/db_connection.php';

if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];

    // Fetch news details
    $query = "SELECT * FROM news WHERE news_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $news = $result->fetch_assoc();
    } else {
        echo 'No news found with the given ID.';
        exit();
    }
    $stmt->close();

    // Fetch gallery images
    $gallery_query = "SELECT * FROM gallery_images WHERE news_id = ?";
    $stmt = $conn->prepare($gallery_query);
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $gallery_result = $stmt->get_result();
    $gallery_images = [];
    while ($row = $gallery_result->fetch_assoc()) {
        $gallery_images[] = $row;
    }
    $stmt->close();
} else {
    echo 'news_id is required.';
    exit();
}

// Update news
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $news_description = mysqli_real_escape_string($conn, $_POST['news_description']);

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $image = basename($_FILES['image']['name']);
        $target_dir = '../assets/thriposha_assets/images/news/';
        $target_file = $target_dir . $image;

        if (getimagesize($_FILES['image']['tmp_name']) && move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $stmt = $conn->prepare("UPDATE news SET title = ?, news_description = ?, image = ? WHERE news_id = ?");
            $stmt->bind_param("sssi", $title, $news_description, $image, $news_id);
        } else {
            echo 'Error uploading image.';
            exit();
        }
    } else {
        $stmt = $conn->prepare("UPDATE news SET title = ?, news_description = ? WHERE news_id = ?");
        $stmt->bind_param("ssi", $title, $news_description, $news_id);
    }

    if ($stmt->execute()) {
        $stmt->close();

        // Handle gallery images upload
        if (!empty($_FILES['gallery_images']['name'][0])) {
            $upload_dir = '../assets/thriposha_assets/images/news_gallery/';
            foreach ($_FILES['gallery_images']['name'] as $key => $image_name) {
                $gallery_image = basename($image_name);
                $target_file = $upload_dir . $gallery_image;

                if (move_uploaded_file($_FILES['gallery_images']['tmp_name'][$key], $target_file)) {
                    $stmt = $conn->prepare("INSERT INTO gallery_images (news_id, image_path) VALUES (?, ?)");
                    $stmt->bind_param("is", $news_id, $gallery_image);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }

        header("Location: all-news.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
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


            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Edit News
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

                                    <li class="breadcrumb-item active">Edit News</li>
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
                                            <form class="needs-validation add-product-form" novalidate="" action="edit-news.php?news_id=<?php echo $news_id; ?>" method="post" enctype="multipart/form-data">
                                                <div class="form">
                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" id="validationCustom01" name="title" type="text" value="<?php echo $news['title']; ?>" required="">
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Image :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <!-- If an image exists, display it -->
                                                            <?php if ($news['image']): ?>
                                                                <img src="../assets/thriposha_assets/images/news/<?php echo $news['image']; ?>" alt="news image" width="100">
                                                            <?php endif; ?>
                                                            <input class="form-control" id="validationCustom01" name="image" type="file">
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>

                                                    <!-- gallery image section -->
                                                    <!-- Gallery Images Section -->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-sm-4">Gallery Images :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <div class="row">
                                                                <?php
                                                                $gallery_query = $conn->prepare("SELECT * FROM gallery_images WHERE news_id = ?");
                                                                $gallery_query->bind_param("i", $news_id);
                                                                $gallery_query->execute();
                                                                $result = $gallery_query->get_result();
                                                                while ($row = $result->fetch_assoc()):
                                                                ?>
                                                                    <div class="col-md-3">
                                                                        <img src="../assets/thriposha_assets/images/news_gallery/<?php echo $row['image_path']; ?>" alt="Gallery Image" width="100">
                                                                        <a href="delete-gallery-image.php?id=<?php echo $row['id']; ?>&news_id=<?php echo $news_id; ?>" class="btn btn-sm btn-danger">Delete</a>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                                <?php $gallery_query->close(); ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Upload New Gallery Images -->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-sm-4">Add More Images :</label>
                                                        <div class="col-xl-8 col-sm-7">
                                                            <input class="form-control" name="gallery_images[]" type="file" multiple>
                                                            <small>Upload multiple images</small>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-sm-4">Add Description :</label>
                                                        <div class="col-xl-8 col-sm-7 description-sm">
                                                            <textarea name="news_description" cols="10" id="editor1" rows="4"><?php echo $news['news_description']; ?></textarea>
                                                        </div>
                                                        <div class="offset-xl-3 offset-sm-4 mt-4">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                            <a href="all-news.php" class="btn btn-light">Cancel</a>
                                                        </div>
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