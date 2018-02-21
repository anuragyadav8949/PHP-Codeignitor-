<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from teashop.24webgroup.com/html/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 09:05:10 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo PROJECT_NAME ?>  | Contact us </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?php echo META_DES ?>" name="description" />
    <meta content="<?php echo META_AUTH ?>" name="author" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png">
    <!-- Global CSS  -->
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- ui -->
    <link href="<?php echo base_url();?>assets/plugins/jquery-ui-1.12.0/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <!-- owl carousel -->
    <link href="<?php echo base_url();?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- theme style -->
    <link href="<?php echo base_url();?>assets/css/themestyles.css" rel="stylesheet" type="text/css">
    <!-- nivo-slider  -->
    <link href="<?php echo base_url();?>assets/css/slider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/plugins/Nivo-Slider/nivo-slider.css" rel="stylesheet" type="text/css">
    <!-- animation -->
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <!-- media css -->
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- magnific popup -->
    <link href="<?php echo base_url();?>assets/plugins/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
    <!-- font awesome -->
    <link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
         <link href="24webgroup"/>
        <script src="assets/html5shiv.js"></script>
        <script src="assets/respond.js"></script>
        <![endif]-->
        <link href="<?php echo base_url();?>assets/css/coustom.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .contact-box .contact-form .form-control {    border: 1px solid #909090;}
        </style>
</head>

<body>
    <!-- start wrapper -->
    <div class="wrapper">
        <!-- start page -->
        <div class="page style-3">
         <!-- header -->
            <?php $this->load->view('common/header')?>
            <!-- / header -->
            <!-- start breadcrumb area-->
            <div class="breadcrumbs page-title page-title-about bg-pattern" >
                 <div class="page-title-overlay">
                        <div class="container">
                            <div class="row">
                              <div class="col-xs-12">
                               <h2>Where To Find Us</h2>
                              </div>
                            </div>
                          </div>
                 </div>
                  
                </div>
            <!-- end breadcrumb area-->
            <!-- start 404 -->
            <section class="main-page container">
                <div class="main-container col1-layout">
                    <div class="main">
                        <div class="col-main">
                            <section class="contact-us-area">
                                <div class="contact-box">
                                    <div class="contact-details">
                                     <!--    <div class="page-title margin-bottom text-center"><span>where to find us</span></div> -->
                                        <!-- <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="hotline contact-us-box">
                                                    <i class="fa fa-mobile icons"></i>
                                                    <span><strong>Teliphone</strong></span>
                                                    <ul>
                                                        <li><i class="fa fa-phone"></i><span>Phone: +00123456789</span></li>
                                                        <li><i class="fa fa-phone"></i><span>Phone: +0026 555 654</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="support contact-us-box">
                                                    <i class="fa fa-envelope-o icons"></i>
                                                    <span><strong>email</strong></span>
                                                    <ul>
                                                        <li><i class="fa fa-envelope-o"></i><span>prallax_sup@gmail.com</span></li>
                                                        <li><i class="fa fa-envelope-o"></i><span>24parallaxs@gmail.com</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <div class="location contact-us-box">

                                                    <i class="fa fa-map-marker icons"></i>
                                                    <span><strong>address</strong></span>
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i> <span>Los Angeles, CA 90036</span></li>
                                                        <li><i class="fa fa-map-marker"></i><span>los Angeles, CA 90036</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="contact-form ">
                                                    <div class="comment-respond padding-top">
                                                        <div class="comment-respond-inner">
                                                            <div class="hadding"><span>Leave a Comment</span></div>
                                                            <form id="contactform" class="comment-form respond-form">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 comment-form-name">
                                                                        <input type="text" id="author" name="author" placeholder="Your Name:" class="form-control " value="" required>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 comment-form-email">
                                                                        <input type="email" id="email" name="email" placeholder="Email:" class="form-control " value="" required>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                                                        <div class="comment-form-comment">
                                                                            <textarea class="form-control " placeholder="Comment:" id="comment" name="comment" cols="40" rows="8"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-submit  padding-top-product">
                                                                    <button type="submit" class="btn btn-button blue-bg white  btn-hover">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                
                                                <div class="contact-form ">
                                                    <div class="comment-respond padding-top">
                                                        <div class="comment-respond-inner">
                                                            <div class="hadding"><span>HOW TO GET US</span></div>
                                                            <div class="widget-content">
                                                              <p><i class="fa fa-map-marker primary-color"></i> 104, Thakker Heights, Opp CEAT, Subhash Nagar road, Nahur west, Mumbai, Maharashtra 400078 </p>
                                                              <p><i class="fa fa-phone primary-color"></i> <a href="tel: +91 9930260491">+91 9930260491</a></p>
                                                              <p><i class="fa fa-envelope primary-color"></i> <a href="mailto:biz@Nextasy.in">biz@Nextasy.in</a></p>
                                                          </div>

                                                      </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-map">

                                        <script src='https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBF5LAdqTeQau6aWexOieRr98vnicuvut8'></script>
                                        <div style='overflow:hidden;'>
                                            <div id='gmap_canvas' style='height:370px;width:100%;'></div>
                                            <style>
                                                #gmap_canvas img {
                                                    max-width: none!important;
                                                    background: none!important
                                                }
                                            </style>
                                        </div>
                                        <script type='text/javascript'>
                                            function init_map() {
                                                var myOptions = {
                                                    zoom: 16,
                                                    center: new google.maps.LatLng(19.1548105,72.9290861),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                map = new google.maps.Map(document.getElementById('gmap_canvas'),
                                                    myOptions);
                                                marker = new google.maps.Marker({
                                                    map: map,
                                                    position: new google.maps.LatLng(19.1548105,72.9290861)
                                                });
                                                infowindow = new google.maps.InfoWindow({
                                                    content: '<strong>Dr. Patkars </strong><br> Apple Cider Vinegar <br>'
                                                });
                                                google.maps.event.addListener(marker, 'click', function() {
                                                    infowindow.open(map, marker);
                                                });
                                                infowindow.open(map, marker);
                                            }
                                            google.maps.event.addDomListener(window, 'load', init_map);
                                        </script>
                                        <div class="main-office">
                                            <div class="main-office-inner">
                                               <div class="title">Main Office</div>
                                                <ul>
                                                    <li><span class="fa fa-home"></span>104, Thakker Heights, Opp CEAT,<br>
                                                      Subhash Nagar road, Nahur west,<br> Mumbai, Maharashtra 400078,</li>
                                                    <li><span class="fa fa-phone-square"></span>092222 21620</li>
                                                </ul>
                                                <h5>Customer Service:<span>info@drpatkar@gmail.com</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end 404 -->
           <!--  free shipping message -->
               
                <!-- / free shipping message -->
                <!-- Footer -->
               <?php $this->load->view('common/footer')?>
                <!-- / Footer -->
                <div style="display: block;" id="top-buttom" class="top-bottom"><span class="top-to-botton "></span></div>
            </div>
            <!-- / page -->
        </div>
        <!-- / wrapper -->
        <!-- JS Global -->
        <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-1.11.3.min.js"></script>
        <!-- jquery ui -->
        <script src="<?php echo base_url();?>assets/plugins/jquery-ui-1.12.0/jquery-ui.min.js"></script>
        <!-- bootstarp -->
        <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- owl carousel -->
        <script src="<?php echo base_url();?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- nivo slider -->
        <script src="<?php echo base_url();?>assets/plugins/Nivo-Slider/jquery.nivo.slider.js"></script>
        <!-- elevatezoom -->
        <script src="<?php echo base_url();?>assets/plugins/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="<?php echo base_url();?>assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
        <!-- countdown -->
        <script src="<?php echo base_url();?>assets/plugins/countdown/jquery.plugin.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/countdown/jquery.countdown.min.js"></script>
        <!-- accordion -->
        <script src="<?php echo base_url();?>assets/js/jquery.accordion.source.js"></script>
        <!-- ddslick -->
        <script src="<?php echo base_url();?>assets/js/jquery.ddslick.min.js"></script>
        <!-- custom js -->
        <script src="<?php echo base_url();?>assets/js/theme.js"></script>

        <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
            
        <script type="text/javascript">
            $(window).scroll(function(){
                if ($(window).scrollTop() >= 30) {
                 $('.sticky-header').addClass('fixed');
             }
             else {
                 $('.sticky-header').removeClass('fixed');
             }
         });
     </script>

      <script >
     // javascpt having ajax coding
     
 $(function() {
  
    // Setup form validation on the #register-form element
    $("#contactform").validate({
        
        // Specify the validation rules
        rules: {
            author:"required",
            email:"required",
            comment:"required",
          
            email: {
                required: true,
                email: true
            },
        },
        submitHandler: function(form) {
            $('.submit').css('display','none');
            $('.process').css('display','inline');

            var author = document.getElementById('author').value;
        //alert(author);    
            var email=document.getElementById('email').value;
       // alert(email);     
            var comment=document.getElementById('comment').value; 
       // alert(comment);        
            var base_url="<?php echo base_url();?>"
    
              data = {                        //array to pass var data
                    author:author,
                    email:email,
                    comment:comment            
             }
              $.ajax({
        type: "POST",// it doesnt show the methods in url
       // url: base_url + "MFS/savefree_trial", 
        url: base_url+"Contact/contact_email",                        //calling controller
         data : data,                              //array 
        dataType:"json",
        success: function(response){
            if(response.success==true){
              alert(response.message);
              //document.getElementById('successmsg').innerHTML =response.message;
              //location.reload();
            }
            else{

              alert(response.message);
            $('.submit').css('display','inline');
            $('.process').css('display','none');
            }
          
        }
    });
    return false;
        }
    });

  });
   
        </script>
    </body>

<!-- Mirrored from teashop.24webgroup.com/html/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 09:05:10 GMT -->
</html>