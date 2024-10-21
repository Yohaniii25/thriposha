<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>The Sri Lanka Thriposha Ltd</title>

    <!-- Fav Icon -->
    <link rel="icon" href="../assets/thriposha_assets/images/logo/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="../assets/thriposha_assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/flaticon.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/owl.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/animate.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/color.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/jquery-ui.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/nice-select.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/global.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/style.css" rel="stylesheet">
    <link href="../assets/thriposha_assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- preloader -->
        <?php include 'preloader.php'; ?>
        <!-- preloader end -->

        <!-- product side bar starts -->
        <?php include 'product_sidebar.php' ?>
        <!-- product side bar ends -->

        <!-- main header -->
        <?php include 'header_all.php' ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <?php include 'mobile.php' ?>
        <!-- End Mobile Menu -->

        <!-- db_connection -->
        <?php include '../includes/db_connection.php' ?>

        <?php include '../includes/functions.php' ?>

        <?php

        $news_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        $news = fetchNewsById($news_id);


        if ($news) {
            $title = $news['title'];
            $news_description = $news['news_description'];
            $image = $news['image'];

            $imagePath = "../assets/thriposha_assets/images/news/" . $image;
        } else {
            echo "<p>News item not found.</p>";
            exit;
        }
        ?>
        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(../assets/thriposha_assets/images/home/nutrient_banner.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container sec-pad-2 blog-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="inner-box">
                                <div class="text">
                                    <p><?php echo $news_description; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- image of the news -->
                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo $imagePath; ?>" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->

        <!-- news-section end -->


        <!-- main-footer -->
        <?php include 'footer.php' ?>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="php">
            <span class="icon-Arrow-Up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="../assets/thriposha_assets/js/jquery.js"></script>
    <script src="../assets/thriposha_assets/js/popper.min.js"></script>
    <script src="../assets/thriposha_assets/js/bootstrap.min.js"></script>
    <script src="../assets/thriposha_assets/js/owl.js"></script>
    <script src="../assets/thriposha_assets/js/wow.js"></script>
    <script src="../assets/thriposha_assets/js/validation.js"></script>
    <script src="../assets/thriposha_assets/js/jquery.fancybox.js"></script>
    <script src="../assets/thriposha_assets/js/appear.js"></script>
    <script src="../assets/thriposha_assets/js/jquery.countTo.js"></script>
    <script src="../assets/thriposha_assets/js/scrollbar.js"></script>
    <script src="../assets/thriposha_assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/thriposha_assets/js/nav-tool.js"></script>
    <script src="../assets/thriposha_assets/js/jquery-ui.js"></script>
    <script src="../assets/thriposha_assets/js/bxslider.js"></script>
    <script src="../assets/thriposha_assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="../assets/thriposha_assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>