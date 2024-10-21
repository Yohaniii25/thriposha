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

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #dddddd;
        padding: 8px 18px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>


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
    <?php include 'mobile.php'; ?>
    <!-- End Mobile Menu -->


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(../assets/thriposha_assets/images/home/nutrient_banner.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Contact us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section alternet-2 sec-pad" style="background-color: #fff;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="contact-info-inner">
                        <div class="single-box">
                            <h3>Opening hours</h3>
                            <ul class="list clearfix">
                                <li>Weekdays: 08.30 AM – 04.30 PM</li>
                                <li>Sunday & Holidays: Closed</li>
                            </ul>
                        </div>
                        <div class="single-box">
                            <h3>Contact info</h3>
                            <ul class="list clearfix">
                                <li>P.O Box 17, Negombo Road, Kapuwatta, Ja-Ela</li>
                                <li><a href="mailto:example@info.com">EMAIL : thriposha@gmail.com</a></li>
                                <li><a href="tel:0112236588">TEL : 011 223 6588 / 011 223 7418</a></li>
                                <li><a href="">FAX : 011 224 1459</a></li>
                            </ul>
                        </div>
                        <div class="single-box">
                            <h3>Social contact</h3>
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/srilankathriposhaltd"><i style="line-height: 3;" class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.youtube.com/@srilankathriposhaltd9679"><i style="line-height: 3;" class="fab fa-youtube"></i></a></li>
                                <li><a href="contact.php"><i style="line-height: 3;" class="fab fa-twitter"></i></a></li>
                                <li><a href="contact.php"><i style="line-height: 3;" class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <h3>Drop us a line</h3>
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name *" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email *" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Message ..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5515581491886!2d79.89325517399644!3d7.061858016675253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f736392f29db%3A0xe77f37f35d7e6f50!2sSri%20Lanka%20Thriposha%20Limited!5e0!3m2!1sen!2slk!4v1701169289504!5m2!1sen!2slk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- google-map-section end -->



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
<script src="../assets/thriposha_assets/js/isotope.js"></script>
<script src="../assets/thriposha_assets/js/jquery-ui.js"></script>
<script src="../assets/thriposha_assets/js/bxslider.js"></script>
<script src="../assets/thriposha_assets/js/jquery.bootstrap-touchspin.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="../assets/thriposha_assets/js/gmaps.js"></script>
<script src="../assets/thriposha_assets/js/map-helper.js"></script>

<!-- main-js -->
<script src="../assets/thriposha_assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>