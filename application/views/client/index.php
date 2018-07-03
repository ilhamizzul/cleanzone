<!DOCTYPE html>
<html lang="en" class=" js no-touch">

<head>
  <title>Clean Laundry Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/client/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/client/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/client/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/client/style.css">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/img/client/logo.png">
    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/client/w3.css">
  
</head>
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
    
    
<body>
    
    
  <!--HEADER START-->
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
          <img src="<?php echo base_url() ?>assets/img/client/logoo.png" class="logo" >
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#banner"><i class="fa fa-home"></i> Home</a></li>
    <li role="presentation"><a href="#tes">Layanan</a></li>
    <li role="presentation"><a href="#"><i class="fa fa-rocket"></i> Cleanzone</a></li> 
    <li role="presentation"><a href="#order"><i class="fa fa-check-circle"></i> Cek Order Status</a></li> 
      
         
            
            <li><a href="#service"><i class="fa fa-user"></i> Tentang Kami</a></li>
            <li><a href="#portfolio"><i class="fa fa-camera"></i> Gallery Cleanzone</a></li>
            <li><a href="#about">Our Team</a></li>
            <li><a href="#contact"><i class="fa fa-phone"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="banner" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small">Welcome To <span class="bold">Clean Laundry</span></h1>
          <p class="big">Putih bersih :v wkwkwk</p>
         
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->

  <!--CTA1 START-->
  <div class=" cta-1" id="service" >
      
      <div class="w3-container" style="margin-top: -170px ">


<div class="w3-content w3-display-container" style="max-width:1100px">
  <img class="mySlides" src="<?php echo base_url() ?>assets/img/client/banner%20RI%20GO(Revisi1)a.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

    <div class="container">
      <div class="row text-left white">
        <br><br><br>
        <h1 class="cta-title">Tentang Clean</h1>
        <p class="cta-sub-title"><p>Clean adalah sebuah perusahaan teknologi yang bertujuan untuk meningkatkan kesejahteraan pekerja pada sektor informal di Indonesia. Clean bertumpu pada 3 nilai pokok: Kecepatan, Inovasi,<br> Dan, Dampak Sosial. Clean telah mempunyai dari 100 cleanzone di Surabaya. Cleanzone terbagi menurut setiap wilayah kota Surabaya</p> <p><a href="#" class="btn btn-banner">Read More<i class="fa fa-send"></i></a></p></p>
      </div>

    </div>

  </div>

  
  <!--CTA1 END-->

  <!--SERVICE START-->
  <div id="tes" class="section-padding " style="background-color: #4fc3f7;">
    <div class="container">
      <div class="row">
        <div class="page-title text-center"><br><br><br>
          <h1>Layanan Kami</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
         
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><img src="icons/gold-clock.svg"></div>
            <div class="service-text">
              <h3 style="color: white;">Design</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa fa-code"></i></div>
            <div class="service-text">
              <h3 style="color: white;">Development</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-diamond"></i></div>
            <div class="service-text">
              <h3 style="color: white;">Marketing</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SERVICE END-->
  <div id="portfolio" style="background-color: crimson;">
    <div class="container" style="background-color: crimson;">
      <div class="page-title text-center">
        <h1 style="color: white;">Gallery Cleanzone</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
        
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-logo">Logo</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/ph.png" style="width: 100%;" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/ph.png" alt="">
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app3.jpg" alt="">
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card1.jpg" alt="">
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card2.jpg" alt="">
            <div class="details">
              <h4>Card 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web3.jpg" alt="">
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card3.jpg" alt="">
            <div class="details">
              <h4>Card 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app2.jpg" alt="">
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo1.jpg" alt="">
            <div class="details">
              <h4>Logo 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo3.jpg" alt="">
            <div class="details">
              <h4>Logo 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web1.jpg" alt="">
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo2.jpg" alt="">
            <div class="details">
              <h4>Logo 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--TEAM START-->
  <div id="about" class="section-padding" style="background-color: darkcyan;"> 
    <div class="container" style="background-color: darkcyan;">
      <div class="row">
        <div class="page-title text-center">
          <h1 style="">Meet Our Team</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          
        </div>
        <div class="autoplay">
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src=".jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Haris Brown</h3>
                <p class="marb-20">Sr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src=".jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3></h3>
                <p class="marb-20"</p>
                <p></p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src=".jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Iain Dante</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent4.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Kate Haris</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--TEAM END-->

 

  <!--ORDER START-->
  <div id="order" class="section-padding ">
    <div class="container " >
      <div class="row">
        <div class="page-title text-center">
          <h1 style="color: white;">Cek Status Order</h1>
          <p style="color: grey;">
         
        </div>
        <div id="sendmessage" style="color: grey;">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>

        <div class="form-sec">
          <form action="" method="post" role="form" class="contactForm">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="ID Invoice" data-rule="minlen:4" data-msg="Data Orderan Anda Tidak Di Temukan" style="margin-left: 250px;"/>
              <div class="validation" ></div>
            </div>
            

              <button class="button-medium" id="contact-submit" type="submit" name="contact" style="">Cek Order</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--CONTACT END-->
<br><br><br><br>
  <!--FOOTER START-->
  <footer class="footer section-padding">
    <div class="container">
      <div class="row">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
          <h3>Find Us On:</h3>
          <div class="footer_social">
           

           <a  href="https://play.google.com/store/apps/details?id=relaxtudio.clean.dropzone"><img src="<?php echo base_url() ?>assets/img/client/gp.png" class="gp"></a> <h2>OR</h2> <br><a  href="https://play.google.com/store/apps/details?id=com.ss.android.ugc.trill&hl=in"><img src="<?php echo base_url() ?>assets/img/client/as.png" class="as"></a>
              
           
          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
  </footer>
  <!--FOOTER END-->
  <div class="footer-bottom">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
        <div class="footer_copyright">
          <p> © Copyright, All Rights Reserved.</p>
          <div class="credits">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/scripts/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/scripts/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/custom.js"></script>
  <script src="<?php echo base_url() ?>assets/script/contactform/contactform.js"></script>

</body>

</html>
