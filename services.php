<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>7.2 Mechanix</title>
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" href="assets/img/favicon-icon.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Font-awesome CSS -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Ionicons CSS -->
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Swiper CSS -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/datepicker.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- jQuery min js -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	</head>
	
	<body>
        <!-- Preloader -->
        <div class="site-preloader-wrap">
            <div class="cssload-loader"></div>
        </div>
        <!-- End Preloader -->
        
        <!-- Start Top Header Area -->
        <?php include 'top_header.php'; ?>
        <!-- End Start Top Header Area -->
        
        <!-- Start Main Menu Area -->
        <div class="main-menu-area" data-spy="affix" data-offset-top="55">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-3"> 
                        <div class="logo">
                            <a href="index.html"><img src="img_logo/logo_header.png" alt="Logo"></a>
                        </div>
                    </div>
                    
                    <div class="col-md-9"> 
                        <?php include 'nav_bar_services.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Menu Area -->
 
        <!-- SearchBox Modal -->
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div>
        <!-- End SearchBox Modal -->
        
        <!-- Start Breadcumbs Area -->
        <div class="breadcumbs-area breadcumbs-bg-1 bc-area-padding">
            <!-- <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Services</h2>
                                <span><a href="index.html">home</a> / services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- End Breadcumbs Area -->
        
        <!-- Start Services Area -->
        <div class="content-block-area">
            <div class="container">
                <!-- <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/1.jpeg" alt="Image">
                            <h3>Transmission Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Transmission Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/1.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/2.jpeg" alt="Image">
                            <!-- <h3>Suspension Repair</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Suspension Repair</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/2.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/3.jpeg" alt="Image">
                            <!-- <h3>Car Inspection</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Car Inspection</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/3.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/4.jpeg" alt="Image">
                            <!-- <h3>Transmission Repair</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Transmission Repair</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/4.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/5.jpeg" alt="Image">
                            <!-- <h3>Suspension Repair</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Suspension Repair</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/5.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/6.jpeg" alt="Image">
                            <!-- <h3>Car Inspection</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Car Inspection</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/6.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="gallery/7.jpeg" alt="Image">
                            <!-- <h3>Transmission Repair</h3> -->
                            <div class="box-content">
                                <!-- <h3 class="title">Transmission Repair</h3> -->
                                <!-- <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                <ul class="icon">
                                    <li><a class="lightbox" href="gallery/7.jpeg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-8.jpg" alt="Image">
                            <h3>Suspension Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Suspension Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-8.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-9.jpg" alt="Image">
                            <h3>Car Inspection</h3>
                            <div class="box-content">
                                <h3 class="title">Car Inspection</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-9.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-one.jpg" alt="Image">
                            <h3>Transmission Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Transmission Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-one.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-two.jpg" alt="Image">
                            <h3>Suspension Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Suspension Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-two.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-three.jpg" alt="Image">
                            <h3>Car Inspection</h3>
                            <div class="box-content">
                                <h3 class="title">Car Inspection</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-three.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-7.jpg" alt="Image">
                            <h3>Transmission Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Transmission Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-7.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-8.jpg" alt="Image">
                            <h3>Suspension Repair</h3>
                            <div class="box-content">
                                <h3 class="title">Suspension Repair</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-8.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="services-item">
                        <div class="box">
                            <img src="assets/img/services-img-9.jpg" alt="Image">
                            <h3>Car Inspection</h3>
                            <div class="box-content">
                                <h3 class="title">Car Inspection</h3>
                                <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="assets/img/services-img-9.jpg"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-sm-12 col-md-12 text-center">
                    <a href="#" id="loadmore" class="btn theme-btn">ver más</a>
                </div>
            </div>
            
        </div>
        <!-- End Services Area -->
        
         
        <!-- Start Our testimonials Area -->
        <!-- <?php //include 'testimonials.php'; ?> -->
        <!-- End Our testimonials Area -->
        
        <!-- Start Our Parners Area -->
        <?php include 'our_partners.php'; ?>
        <!-- End Our Parners Area -->
        
        <!-- Footer Area -->
        <?php include 'footer.php'; ?>
        <!-- End Footer Area -->
        
        <!-- Back Top top -->
        <a href="#content" class="back-to-top">Top</a>
        <!-- End Back Top top -->
        
		<!-- Bootstrap JS file -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Owl-Carousel JS file -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Magnific Popup JS file -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Mixitup JS file -->
		<script src="assets/js/mixitup.min.js"></script>
		<!-- Swiper JS file -->
		<script src="assets/js/swiper.jquery.min.js"></script>
		<!-- Datepicker JS file -->
		<script src="assets/js/datepicker.js"></script>
		<!-- WOW JS file -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Isotop JS JS file -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- Waypoints JS file -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- Counter JS file -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- RipplesJS -->
		<script src="assets/js/jquery.ripples-min.js"></script>
		<!-- YTPlayer JS -->
		<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- Jarallax JS -->
		<script src="assets/js/jarallax.min.js"></script>
		<!-- Parsley JS -->
        <script src="assets/js/parsley.min.js"></script>
        <!-- jQuery Google Map JS file -->
        <script src="assets/js/jquery.googlemap.js"></script>
        <!-- Google Map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
        <!-- Custom JS file -->
        <script src="assets/js/active.js"></script>
	</body>
</html>