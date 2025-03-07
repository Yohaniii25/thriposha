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
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Left Section: Welcome & Logos -->
                    <div class="col-md-5 p-0">
                        <div class="card shadow-lg text-center p-4" style="background-color: #e76a23; border-radius: 15px;">
                            <!-- First Logo -->
                            <div class="logo mb-3">
                                <img src="../assets/images/landing/triposhalogo.png" alt="Thriposha Logo" width="180">
                            </div>

                            <h3 class="text-white fw-bold">Welcome to Thriposha LTD</h3>

                            <!-- Second Logo -->
                            <div class="logo mt-3">
                                <img src="../assets/images/landing/suposhalogo.png" alt="Suposha Logo" width="180">
                            </div>
                        </div>
                    </div>

                    <!-- Right Section: Login Form -->
                    <div class="col-md-6 p-0">
                        <div class="card shadow-lg border-0 p-4" style="border-radius: 15px;">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material mb-4" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark fw-bold" id="top-profile-tab" data-bs-toggle="tab"
                                            href="#top-profile" role="tab" aria-controls="top-profile"
                                            aria-selected="true"><span class="icon-user me-2"></span>Login</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                        aria-labelledby="top-profile-tab">
                                        <form action="./classes/loginController.php" method="POST" id="loginForm" class="form-horizontal auth-form">
                                            <div class="form-group mb-3">
                                                <input required name="username" type="text" class="form-control rounded-pill px-3"
                                                    placeholder="Username" id="username">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input required name="password" type="password" id="password"
                                                    class="form-control rounded-pill px-3" placeholder="Password">
                                            </div>

                                            <div class="form-button text-center">
                                                <button class="btn btn-primary rounded-pill w-100 py-2" type="submit">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a> -->
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/slick.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>
    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });
    </script>

</body>

</html>

<!-- thriposha_admin H6Efq4P938dx 
admin_user  D0$/6L0h?5ZF  -->