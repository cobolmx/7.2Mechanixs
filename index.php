<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>7.2 Mechanix</title>
        <!-- Favicon -->
        <!-- <link rel="icon" sizes="16x16" href="assets/img/favicon-icon.png"> -->
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
        
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
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
                            <a href="index.html"><img src="img_logo/logo_header.png" alt="Logo"></a>
                        </div>
                    </div>                    
                    <div class="col-md-9"> 
                        <!-- nav bar -->
                       <?php include 'nav_bar.php'; ?>
                        <!-- end nav bar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Menu Area -->        
        <!-- SearchBox Modal -->
        <!-- incluir modal en caso de que sea necesario -->
        <!-- End SearchBox Modal -->        
        <!-- Start Homepage Slider -->
        <div class="homepage-slides-wrapper">
            <!-- Slider main container -->
            <?php include 'swiper_slider.php'; ?>
            <!-- end slider container -->
        </div>
        <!-- End Homepage Slider -->        
        
        <!-- Start Services Area -->
        <div class="content-block-area gray-bg">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>Nuestros servicios</span> sobresalientes</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>Servicios realizados en tiempo y profesionalismo.</p>
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-oil"></i></div>
                            </div>
                            <h3>Cambio de aceite</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Utilizamos componentes de alta calidad.</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-motor-1"></i></div>
                            </div>
                            <h3>Afinaciones</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Afinaciones por computadora y con los mejores técnicos. </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-breaks"></i></div>
                            </div>
                            <h3>Frenos</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Útilizamos componentes de los mejores en el mercado.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="separator-line"></div>
            <!-- services -->
            <?php include 'services_gallery.php'; ?>
            <!-- end services -->
        </div>
        <!-- End Services Area -->
    
        <!-- Start Why Choose Us Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>Por que </span> elegirnos?</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>Somos especialistas en mantenimiento automotriz nos enfocamos en los servicios que proveemos 
                           sean de excelencia siempre con el mismo profesionalismo atendemos tanto como flotillas y particulares. 
                            Nuestros precios son los más competitivos del Mercado y tenemos una excelente ubicación, así como garantía de 
                            nuestros servicios y seguro de responsabilidad civil para las unidades que recibimos. </p>
                       </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">01</span>
                            <span class="single-boxed"><i class="flaticon-crane"></i></span>
                            <h3>Cambio de aceite</h3>                            
                            <ul>
                                <li>Aceite Mobil Grados 5w-20, 10w-30, 15w-40, 20w-50</li>
                                <li>Filtro Fram</li>
                                <li>Bujias NGK y Auto lite</li>
                            </ul>                            
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">02</span>
                            <span class="single-boxed"><i class="flaticon-wheel-1"></i></span>
                            <h3>Servicio 2</h3>
                            <p>texto agregar para descripcion de los servicios puede ser muy larga la descripcion </p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">03</span>
                            <span class="single-boxed"><i class="flaticon-speedometer"></i></span>
                            <h3>Servicio 3</h3>
                            <p>texto agregar para descripcion de los servicios puede ser muy larga la descripcion </p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">04</span>
                            <span class="single-boxed"><i class="flaticon-car-radio"></i></span>
                            <h3>Servicio 4</h3>
                            <p>texto agregar para descripcion de los servicios puede ser muy larga la descripcion </p>  
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="col-md-12 text-center">                    
                    <a href="" class="btn theme-btn">Acerca de nosotros</a>
                </div> -->
            </div>
        </div>
        <!-- End Why Choose Us Area -->
        
        <!-- Start Count-Down Area -->
        <!-- <div class="count-down-area count-bg jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-people-outline"></i> <span class="count-number counter">12,500</span></span>
                            <h3 class="count-info">Clientes satisfechos</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-partlysunny-outline"></i> <span class="count-number counter">17,500</span></span>
                            <h3 class="count-info">proyectos completados</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-paperplane-outline"></i> <span class="count-number counter">15,500</span></span>
                            <h3 class="count-info">Cotizaciones</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-thunderstorm-outline"></i> <span class="count-number counter">14,500</span></span>
                            <h3 class="count-info">Horas laboradas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Count-Down Area -->
        
        <!-- Start Auto Body Services Area -->
        <!-- <div class="content-block-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="body-service-boxed-item auto-body-bg"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                               <div class="section-title text-center">
                                   <h2><span>Auto Body</span> services</h2>
                                   <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                               <div class="services-list">
                                    <ul>
                                       <li>Aluminum Repair</li>
                                       <li>Paintless Dent Repair</li>
                                       <li>Auto Glass Repair</li>
                                       <li>Auto Painting</li>
                                       <li>Windshield Repairs</li>
                                       <li>Auto Paint Repair</li>
                                    </ul>
                               </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="services-list">
                                   <ul>
                                       <li>Fender Repair</li>
                                       <li>Hail Damage Repair</li>
                                       <li>Towing Service</li>
                                       <li>Wheel Alignment</li>
                                       <li>Wheel Rim Repair</li>
                                       <li>Collision Repair</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 text-center">
                            <a href="#" class="btn theme-btn">request appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Auto Body Services Area -->
        
        <!-- Start Our testimonials Area -->
        <?php //include 'testimonials.php'; ?>
        <!-- End Our testimonials Area -->
        
        <!-- Start Appointment Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="apointment-preview-boxed man-image-bg wow fadeInUp"></div>
                    </div>
                    <div class="col-md-6">
                       <div class="section-title text-center">
                           <h2><span>Solicite </span> una cita</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>texto agregar para descripcion de los servicios puede ser muy larga la descripcion</p>
                       </div>
                        <form class="appointment-form" action="index.html">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Información del vehículo</label>
                                    <select id="Year">
                                        <option value="hide">-- Año, Modelo --</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Seleccionar servicio</label>
                                    <select id="selectServices">
                                        <option value="hide">-- Seleccionar servicio --</option>
                                        <option value="1">Cambio de frenos</option>
                                        <option value="2">Cambio de aceite</option>
                                        <!-- <option value="3">Auto Painting</option>
                                        <option value="4">Oil Change</option>
                                        <option value="4">Collision Repair</option>
                                        <option value="4">Break Repair</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Fecha de cita</label>
                                    <input type="text" id="datepicker" name="appointmentDate" placeholder="Fecha para la cita" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Tiempo para la cita</label>
                                    <select id="Time">
                                        <option value="hide">-- Elija --</option>
                                        <option value="2010">09:00AM - 10:00AM</option>
                                        <option value="2011">10:00AM - 11:00AM</option>
                                        <option value="2012">11:00AM - 12:00PM</option>
                                        <option value="2013">12:00PM - 01:00PM</option>
                                        <option value="2014">01:00PM - 02:00PM</option>
                                        <option value="2015">02:00PM - 03:00PM</option>
                                        <option value="2015">03:00PM - 04:00PM</option>
                                        <option value="2015">04:00PM - 05:00PM</option>
                                        <option value="2015">05:00PM - 06:00PM</option>
                                        <option value="2015">06:00PM - 07:00PM</option>
                                        <option value="2015">07:00PM - 08:00PM</option>
                                        <option value="2015">08:00PM - 09:00PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">
                                   <p>Detalles del contacto</p>
                               </div>
                                <div class="col-md-6">
                                    <input type="text" name="yourName" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="yourEmail" placeholder="Correo eléctronico" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="yourPhone" placeholder="Télefono" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="yourMessage" id="yourMessage" placeholder="Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class="btn theme-btn" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
        
        <!-- Start News Area -->
        <!-- <div class="content-block-area gray-bg">
            <div class="container">
               <div class="row">
                   <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>recent</span> news</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-blog-item">
                            <a href="#" class="zoomin"><img src="assets/img/blog-item-one.jpg" alt="Image Description"></a>
                            <div class="blog-item-info">
                                <span class="blog-date">August 20, 2017</span> <div class="separator">|</div> 
                                <a class="blog-tags red" href="#"><i class="fa fa-tag"></i> Auto</a>
                                <a href="#"><h3>Blog Title Goes to Here</h3></a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="blog-item-profile">
                                            <img src="assets/img/testimonials-1.jpg" alt="Image description"> <a href="#">anika rimjim</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        <div class="blog-item-c-v-info">
                                            <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                            <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    <div class="col-sm-4">
                        <div class="single-blog-item">
                            <a href="#" class="zoomin"><img src="assets/img/blog-item-two.jpg" alt="Image Description"></a>
                            <div class="blog-item-info">
                                <span class="blog-date">August 20, 2017</span> <div class="separator">|</div> 
                                <a class="blog-tags green" href="#"><i class="fa fa-tag"></i> motor</a>
                                <a href="#"><h3>Blog Title Goes to Here</h3></a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="blog-item-profile">
                                            <img src="assets/img/44w.jpg" alt="Image description"> <a href="#">anika rimjim</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        <div class="blog-item-c-v-info">
                                            <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                            <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="single-blog-item">
                            <a href="#" class="zoomin"><img src="assets/img/blog-item-three.jpg" alt="Image Description"></a>
                            <div class="blog-item-info">
                                <span class="blog-date">August 20, 2017</span> <div class="separator">|</div> 
                                <a class="blog-tags blue" href="#"><i class="fa fa-tag"></i> repair</a>
                                <a href="#"><h3>Blog Title Goes to Here</h3></a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="blog-item-profile">
                                            <img src="assets/img/10m.jpg" alt="Image description"> <a href="#">anika rimjim</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        <div class="blog-item-c-v-info">
                                            <span><a href="#"><i class="fa fa-comments-o"> 25</i></a></span>
                                            <span><a href="#"><i class="fa fa-eye"> 520</i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End News Area -->
        
        <!-- Start Our Parners Area -->
        <?php include 'our_partners.php'; ?>
        <!-- End Our Parners Area -->
        
        <!-- Footer Area -->
        <?php include 'footer.php'; ?>
        <!-- end footer area -->
        
        <!-- Back Top top -->
        <a href="#content" class="back-to-top">Arriba</a>
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
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script> -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
        <!-- Custom JS file -->
        <script src="assets/js/active.js"></script>
	</body>
</html>