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
                            <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
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
                           <h2><span>Our featured</span> services</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-oil"></i></div>
                            </div>
                            <h3>Oil Change</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-motor-1"></i></div>
                            </div>
                            <h3>Motor Mount</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="featured-boxed text-center">
                           <div class="octagonWrap">
                                <div class="octagon"><i class="flaticon-breaks"></i></div>
                            </div>
                            <h3>Brake Repair</h3>
                            <div class="upper-line"></div>
                            <div class="bottom-line"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="separator-line"></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-item">
                            <div class="box">
                                <img src="assets/img/services-img-one.jpg" alt="Image">
                                <h3>Transmission Repair</h3>
                                <div class="box-content">
                                    <h3 class="title">Transmission Repair</h3>
                                    <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <ul class="icon">
                                        <li><a class="singleImage" href="assets/img/services-img-one.jpg"><i class="fa fa-search"></i></a></li>
                                        <li><a href="single-service.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item">
                            <div class="box">
                                <img src="assets/img/services-img-two.jpg" alt="Image">
                                <h3>Suspension Repair</h3>
                                <div class="box-content">
                                    <h3 class="title">Suspension Repair</h3>
                                    <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <ul class="icon">
                                        <li><a class="singleImage" href="assets/img/services-img-two.jpg"><i class="fa fa-search"></i></a></li>
                                        <li><a href="single-service.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item">
                            <div class="box">
                                <img src="assets/img/services-img-three.jpg" alt="Image">
                                <h3>Car Inspection</h3>
                                <div class="box-content">
                                    <h3 class="title">Car Inspection</h3>
                                    <span class="post">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    <ul class="icon">
                                        <li><a class="singleImage" href="assets/img/services-img-three.jpg"><i class="fa fa-search"></i></a></li>
                                        <li><a href="single-service.html"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 text-center">
                        <a href="services.html" class="btn theme-btn">view all services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services Area -->
    
        <!-- Start Why Choose Us Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>Why choose</span> us</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                       </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">01</span>
                            <span class="single-boxed"><i class="flaticon-crane"></i></span>
                            <h3>Car Inspection</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">02</span>
                            <span class="single-boxed"><i class="flaticon-wheel-1"></i></span>
                            <h3>Tires Services</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">03</span>
                            <span class="single-boxed"><i class="flaticon-speedometer"></i></span>
                            <h3>Schedule Service</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="boxed-item">
                            <span class="sirial-number">04</span>
                            <span class="single-boxed"><i class="flaticon-car-radio"></i></span>
                            <h3>Radiator Repair</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>  
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 text-center">
                    <a href="about-us.html" class="btn theme-btn">about us</a>
                </div>
            </div>
        </div>
        <!-- End Why Choose Us Area -->
        
        <!-- Start Count-Down Area -->
        <div class="count-down-area count-bg jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-people-outline"></i> <span class="count-number counter">12,500</span></span>
                            <h3 class="count-info">Happy Clients</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-partlysunny-outline"></i> <span class="count-number counter">17,500</span></span>
                            <h3 class="count-info">Completed Projects</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-paperplane-outline"></i> <span class="count-number counter">15,500</span></span>
                            <h3 class="count-info">WINNING AWARD</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count-down-boxed text-center">
                            <span class="count-icon"><i class="ion-ios-thunderstorm-outline"></i> <span class="count-number counter">14,500</span></span>
                            <h3 class="count-info">Hours Worked</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Count-Down Area -->
        
        <!-- Start Auto Body Services Area -->
        <div class="content-block-area">
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
        </div>
        <!-- End Auto Body Services Area -->
        
        <!-- Start Our testimonials Area -->
        <div class="content-block-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="section-title text-right">
                            <h3>our clients</h3>
                            <h2><span>CLIENTS THAT TRUST</span> OUR SERVICES</h2>
                       </div>
                        <div class="testimonials-car-boxed wow fadeInLeft">
                           <img src="assets/img/testimonial-car.png" alt="Image">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="testimonial-item">
                            <div class="testimonial-single-item">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to  making it look like readable English.</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            
                            <div class="quotation-profile">
                                <img src="assets/img/testimonials-1.jpg" alt="Image">
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="testimonial-item">
                            <div class="testimonial-single-item">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to  making it look like readable English.</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="quotation-profile">
                                <img src="assets/img/31m.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-8 col-md-offset-4 text-center">
                        <a href="#" class="btn theme-btn">see testimonials</a>
                    </div>
                </div>
            </div>
        </div>
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
                           <h2><span>request an</span> appointment</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. .</p>
                       </div>
                        <form class="appointment-form" action="index.html">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Vehicle Information</label>
                                    <select id="Year">
                                        <option value="hide">-- Year, Model --</option>
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
                                    <label>Select Services</label>
                                    <select id="selectServices">
                                        <option value="hide">-- Select Service --</option>
                                        <option value="1">Aluminum Repair</option>
                                        <option value="2">Fender Repair</option>
                                        <option value="3">Auto Painting</option>
                                        <option value="4">Oil Change</option>
                                        <option value="4">Collision Repair</option>
                                        <option value="4">Break Repair</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Appointment Date</label>
                                    <input type="text" id="datepicker" name="appointmentDate" placeholder="Appointment Date" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Appointment Time</label>
                                    <select id="Time">
                                        <option value="hide">-- Choose --</option>
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
                                   <p>Contact Details</p>
                               </div>
                                <div class="col-md-6">
                                    <input type="text" name="yourName" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="yourEmail" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="yourPhone" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="yourMessage" id="yourMessage" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class="btn theme-btn" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
        
        <!-- Start News Area -->
        <div class="content-block-area gray-bg">
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
        </div>
        <!-- End News Area -->
        
        <!-- Start Our Parners Area -->
        <div class="content-block-area">
            <div class="container">
               <div class="row">
                   <div class="col-md-6 col-md-offset-3">
                       <div class="section-title text-center">
                           <h2><span>Our</span> Partner</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                       </div>
                   </div>
                </div>
                <div class="partner-slides">
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-1.png" alt="Image Description"></a>
                    </div>
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-2.png" alt="Image Description"></a>
                    </div>
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-3.png" alt="Image Description"></a>
                    </div>
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-4.png" alt="Image Description"></a>
                    </div>
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-5.png" alt="Image Description"></a>
                    </div>
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="#"><img src="assets/img/partner-6.png" alt="Image Description"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Parners Area -->
        
        <!-- Footer Area -->
        <footer class="site-footer">
            <!-- Footer Top Area -->
            <div class="footer-top-area">
                <div class="container">
                   <div class="row">
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="fa fa-map-o"></i></span> <p>1828 Johns Drive Glenview, IL 60025</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="flaticon-crane"></i></span> <p>Working Days Monday to Friday</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="fa fa-headphones"></i></span> <p>Give us a free call (224) 228-8475</p>
                            </div>
                       </div>
                   </div>
                   <div class="hr-line"></div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer-wid">
                                <a href="index.html" class="footer-logo"><img src="assets/img/logo.png" alt="logo"></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="link-color">Read More About Us <i class="fa  fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid footer-menu">
                                        <h3 class="footer-wid-title">Navigation</h3>
                                        <ul>
                                            <li><a href="index.html"><i class="fa  fa-angle-right"></i> home</a></li>
                                            <li><a href="about-us.html"><i class="fa  fa-angle-right"></i> About</a></li>
                                            <li><a href="projects.html"><i class="fa  fa-angle-right"></i> our mission</a></li>
                                            <li><a href="industries.html"><i class="fa  fa-angle-right"></i> services</a></li>
                                            <li><a href="gallery.html"><i class="fa  fa-angle-right"></i> gallery</a></li>
                                            <li><a href="blog.html"><i class="fa  fa-angle-right"></i> blog</a></li>
                                            <li><a href="contact-us.html"><i class="fa  fa-angle-right"></i> contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid footer-menu">
                                        <h3 class="footer-wid-title">Hours of Operation</h3>
                                        <ul>
                                            <li><i class="fa  fa-angle-right"></i> Monday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Tuesday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Wednesday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Thursday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Friday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Saturday:7:30am - 3:00pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Sunday: Closed</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid">
                                        <h3 class="footer-wid-title">Get In Touch</h3>
                                        <p>1828 Johns Drive Glenview, IL 60025</p>
                                        <div class="address-info">
                                            <span><i class="fa  fa-phone"></i> (224) 228-8475</span><br>
                                            <span><i class="fa  fa-envelope"></i> support@carservice.com </span>
                                        </div>
                                        <div class="subscribe">
                                            <form action="index.html">
                                                <input type="text" placeholder="Type your email" required>
                                                <button>Subscribe now <i class="fa  fa-paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="social-icos">    
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Footer Top -->

            <!-- Footer Bottom Area -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-5">
                            &copy; Copyright <script type="text/javascript">
                            var d=new Date();
                            document.write(d.getFullYear());
                            </script> All Rights Reserved.
                        </div>
                        <div class="col-md-6 col-sm-7 text-right">
                            <a href="#">Terms & Condition</a> <span class="seprator">|</span> <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Footer Bottom Area -->
        </footer> <!-- End Footer Area -->
        
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