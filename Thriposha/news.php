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

        <!-- add functions.php -->
        <?php include '../includes/functions.php' ?>


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(../assets/thriposha_assets/images/home/nutrient_banner.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>News</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <?php
                    // Call the function to fetch news
                    $newsItems = fetchNews();

                    // Check if there are any news items
                    if (!empty($newsItems)) {
                        foreach ($newsItems as $news) {
                            $news_id = $news['news_id'];
                            $title = $news['title'];
                            $news_description = $news['news_description'];
                            $image = $news['image'];

                            $imagePath = "../assets/thriposha_assets/images/news/" . $image;
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <a href="single_news.php?id=<?php echo $news_id; ?>"><img src="<?php echo $imagePath; ?>" alt=""></a>
                                        </figure>
                                        <div class="lower-content">
                                            <h3><a href="single_news.php?id=<?php echo $news_id; ?>"><?php echo $title; ?></a></h3>
                                            <!-- <p><?php echo $news_description; ?></p> -->
                                            <div class="btn-box"><a href="single_news.php?id=<?php echo $news_id; ?>" class="theme-btn-two">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>No news found.</p>";
                    }
                    ?>
                </div>
            </div>
        </section>
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