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
       <?php include 'top_header.php'?>
        <!-- End Start Top Header Area -->
        
        <!-- Start Main Menu Area -->
        <div class="main-menu-area" data-spy="affix" data-offset-top="55">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-3"> 
                        <div class="logo">
                            <a href="index.php"><img src="img_logo/logo_header.png" alt="Logo"></a>
                        </div>
                    </div>
                    
                    <div class="col-md-9"> 
                      <?php include 'nav_bar_contact.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Menu Area -->
 
        <!-- SearchBox Modal -->
        <!-- <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div> -->
        <!-- End SearchBox Modal -->
        
        <!-- Start Breadcumbs Area -->
        <div class="breadcumbs-area breadcumbs-bg-2 bc-area-padding">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Contactenos</h2>
                                <span><a href="index.php">Inicio</a> / Contactenos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcumbs Area -->
        
        
        <!-- Contact Form Area -->
        <div class="content-block-area contact-us">
            <div class="container">
               <h2 class="area-title">Información de contacto</h2>
                <div class="row">
                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>Blvd. Lázaro Cárdenas #615 Fracc. Jardines del Lago</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>(686) 290-6974 <br> (686) 290-6977</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>info@72mechanix.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-area">
                   <h2 class="area-title">Contactenos</h2>
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="contact-img-bg"></div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <form id="contatc_form" method="POST" action="assets/include/sendmail.php" name="myform">
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" id="contact_name" name="name" placeholder="Nombre" required="Se requiere su nombre" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="email" class="form-control" name="email" id="contact_email" placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Tema:</label>
                                        <input type="text" class="form-control" name="sub" id="contact_subject" placeholder="Tema" required="" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" name="phone" id="contact_phone" placeholder="Télefono" data-parsley-type="integer" data-parsley-minlength="6" data-parsley-type-message="Only numbers" required="" />
                                    </div>
                                </div>

                                <div class="col-sm-12"> 
                                    <div class="form-group">
                                        <label>Mensaje:</label>
                                        <textarea id="contact_message" class="form-control" name="message" rows="6" placeholder="Mensaje" required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-minlength-message="Tu comentario debe de tener al menos 10 letras..."></textarea>
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6LeMly8UAAAAAG8FJH-xbRYPyV825xNA3KzwWtcr"></div> -->
                                    <div id="contact_send_status"></div>
                                    <button type="submit" class="btn theme-btn">Enviar mensaje</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form Area -->
        
        <!-- Google Map Area -->
        <div id="map"></div>
        <!-- Google Map Area -->    
            
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
        <!--Google recaptcha js-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- jQuery Google Map JS file -->
        <script src="assets/js/jquery.googlemap.js"></script>
        <!-- Google Map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
        <!-- Custom JS file -->
        <script src="assets/js/active.js"></script>
        
        
	</body>
</html>