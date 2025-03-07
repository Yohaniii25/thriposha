 <?php ?>
 <!-- main header -->
 <header class="main-header style-one">

     <!-- header-lower -->
     <div class="header-lower">
         <div class="outer-box">
             <div class="logo-box">
                 <figure class="logo"><a href="index.php"><img src="../assets/images/logo_small.png" alt=""></a>
                 </figure>
             </div>
             <div class="menu-area">
                 <!--Mobile Navigation Toggler-->
                 <div class="mobile-nav-toggler">
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                     <i class="icon-bar"></i>
                 </div>
                 <nav class="main-menu navbar-expand-md navbar-light">
                     <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                         <ul class="navigation clearfix">
                             <li class=""><a href="index.php">Home</a></li>
                             <li class=""><a href="products.php">Products</a></li>
                             <li class=""><a href="news.php">News</a></li>
                             <li class="dropdown"><a href="about.php">About Us</a>
                                <ul>
                                    <li><a href="">FAQ</a></li>
                                    <li><a href="agents.php">Agents</a></li>
                                    <!-- <li><a href="">Blog Standard</a></li>
                                    <li><a href="">Blog Details</a></li> -->
                                </ul>        
                            </li>
                            <li class=""><a href="gallery.php">Gallery</a></li>
                             <li><a href="contact.php">Contact</a></li>
                             <li class="more-btn centred">
                                <a href="https://sltdirectory.lk/suposha/Thriposha/" style="padding: 10px 30px; border-radius:20px;" class="theme-btn-one">Visit Thriposha</a>
                            </li>
                         </ul>
                     </div>
                 </nav>
             </div>
             <ul class="menu-right-content clearfix">
                 <li class="search-box-outer">
                     <div class="dropdown">
                         <button class="search-box-btn"
                             style="background-image: url(../assets/images/icons/icon-bg-1.png);" type="button"
                             id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                 class="icon-Search"></i></button>
                         <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                             <div class="form-container">
                                 <form method="post" action="blog.php">
                                     <div class="form-group">
                                         <input type="search" name="search-field" value="" placeholder="Search...."
                                             required="">
                                         <button type="submit" class="search-btn"><span
                                                 class="fas fa-search"></span></button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </div>

     <!--sticky Header-->
     <div class="sticky-header">
         <div class="outer-box">
             <div class="logo-box">
                 <figure class="logo"><a href="index.php"><img src="../assets/images/logo_ssmall.png" alt=""></a>
                 </figure>
             </div>
             <div class="menu-area">
                 <nav class="main-menu clearfix">
                     <!--Keep This Empty / Menu will come through Javascript-->
                 </nav>
             </div>
             <ul class="menu-right-content clearfix">
                 <li class="search-box-outer">
                     <div class="dropdown">
                         <button class="search-box-btn"
                             style="background-image: url(../assets/images/icons/icon-bg-1.png);" type="button"
                             id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                 class="icon-Search"></i></button>
                         <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                             <div class="form-container">
                                 <form method="post" action="blog.php">
                                     <div class="form-group">
                                         <input type="search" name="search-field" value="" placeholder="Search...."
                                             required="">
                                         <button type="submit" class="search-btn"><span
                                                 class="fas fa-search"></span></button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </li>
                 <!-- <li class="user-btn">
                     <a href="index.php" style="background-image: url(../assets/images/icons/icon-bg-1.png);">
                         <i class="icon-Profile"></i>
                     </a>
                 </li>
                 <li class="cart-btn">
                     <a href="shop-1.php" style="background-image: url(../assets/images/icons/icon-bg-1.png);">
                         <i class="icon-Bag"></i>
                         <span>3</span>
                     </a>
                 </li> -->
             </ul>
         </div>
     </div>
 </header>
 <!-- main-header end -->

 <!-- Mobile Menu  -->
 <div class="mobile-menu">
     <div class="menu-backdrop"></div>
     <div class="close-btn"><i class="fas fa-times"></i></div>

     <nav class="menu-box">
         <div class="nav-logo"><a href="index.php"><img src="../assets/images/logo_small.png" alt="" title=""></a>
         </div>
         <div class="menu-outer">
             <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
         </div>
         <div class="contact-info">
             <h4>Contact Info</h4>
             <ul>
                 <li>P.O.Box 17, Negombo Road, Kapuwatta, Ja-ela.</li>
                 <li><a href="tel:+8801682648101">0112 237 418 / 0112 236 588</a></li>
                 <li><a href="mailto:info@example.com">thriposha@gmail.com</a></li>
             </ul>
         </div>
         <div class="social-links">
             <ul class="clearfix">
                 <!-- <li><a href="index.php"><span class="fab fa-twitter"></span></a></li> -->
                 <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                 <!-- <li><a href="index.php"><span class="fab fa-pinterest-p"></span></a></li> -->
                 <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                 <!-- <li><a href="index.php"><span class="fab fa-youtube"></span></a></li> -->
             </ul>
         </div>
     </nav>
 </div><!-- End Mobile Menu -->