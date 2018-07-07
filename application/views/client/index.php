<!DOCTYPE html>
<html lang="en" class=" js no-touch">

<head>
  <title>Clean Laundry Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/aos/dist/aos.css">
<script type="text/javascript" href="<?php echo base_url() ?>assets/css/aos/dist/aos.js"> </script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/client/font-awesome.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/client/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/client/style.css">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/img/client/logo.png">
    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/client/w3.css">
    
  
</head>
<style>
.mySlides {}

    
    .mySlidesx {display:none}
.w3-leftx, .w3-rightx, .w3-badgex {cursor:pointer}
.w3-badgex {height:13px;width:13px;padding:0}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 10px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
}

#myBtn:hover {
  background-color: #555;
}

</style>
    
    <body >

<button onclick="topFunction()" id="myBtn" title="Go to top" >Top</button>



<script type="text/javascript"></script>
   
   <script src="<?php echo base_url() ?>assets/css/aos/dist/aos.js"></script>
   <script>
   
        AOS.init();
        window.onscroll = 
        function()
            {
                showScroll(550, "goTop")
            };
    

    </script>
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
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-right" >
              <li class="active"><a href="#banner" style="text-align:left;"><i class="fa fa-home"></i> Home</a></li>
    <li role="presentation"><a href="#tes"  style="text-align:left;"><i class="fa fa-check"></i> Layanan</a></li>
    <li role="presentation"><a href="#order"  style="text-align:left;"><i class="fa fa-check-circle"></i> Cek Order Status</a></li> 
      
         
            
            
            <li><a href="#portfolio"  style="text-align:left;"><i class="fa fa-image"></i> Gallery Cleanzone</a></li>
          
            <li><a href="#contact"  style="text-align:left;"><i class="fa fa-phone"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="home"></div>
  <div id="banner" class="section-padding" >
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small animated  bounceInLeft" >Welcome To <span class="bold bounceInLeft ">Clean Laundry</span></h1>
          <p class="big animated  bounceInRight">Pusat Laundry Terpecaya dan Berkualitas di Surabaya </p>
         
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->

  <!--CTA1 START-->
  <div class=" cta-1" id="service" >
      
      <div class="w3-container ban" id="wx" style="margin-top: -210px">


<div class="w3-content w3-display-container" style="max-width:1100px ">
  <?php 
    foreach ($data_iklan as $data) {
      echo '
        <img class="mySlides w3-animate-fading" src="'.base_url().'assets/uploads/iklan/'.$data->gambar.'" style="width:100%">
      ';
    }
  ?>
  
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki kiri"  onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <?php 
      $no = 1;
      foreach ($data_iklan as $data) {
        echo '
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv('.$no++.')"></span>
        ';
      }
    ?>
    
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
        <h1 class="cta-title bold "  data-aos="fade-in" style="color: white; display: block;">Tentang Clean</h1>
        <p class="cta-sub-title"  style="color: #333"><p data-aos="fade-in" data-aos-delay="400">Clean adalah sebuah perusahaan teknologi yang bertujuan untuk meningkatkan kesejahteraan pekerja pada sektor informal di Indonesia. Clean bertumpu pada 3 nilai pokok: Kecepatan, Inovasi,<br> Dan, Dampak Sosial. Clean telah mempunyai dari 100 cleanzone di Surabaya. Cleanzone terbagi menurut setiap wilayah kota Surabaya</p> <p><a href="#" class="btn btn-banner" data-aos="fade-right">Read More<i class="fa fa-send"></i></a></p></p>
      </div>

    </div>

  </div>

  
  <!--CTA1 END-->

  <!--SERVICE START-->
  <div id="tes"  class="section-padding " style="background-color: white;">
    <div class="container">
      <div class="row">
        
        <div class="page-title text-center" style="color: black;"><br><br><br>
          <h1 style="color: #333;" data-aos-delay="400" data-aos="zoom-in">Layanan Kami</h1>
          <p style="color: #333;" data-aos-delay="400" data-aos="zoom-up">Clean Laundry Sangat tepecaya, Bermutu, Cepat, Rapi, Dan Bukab Laundry abal-abal <br>Berikut 3 Layanan kami dibawah ini. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="col-md-4">
          <div class="service-box" data-aos="fade-right" data-aos-delay="400">
            <div class="service-icon"><img src="<?php echo base_url() ?>assets/img/icons/gold-clock.svg" "></div>
            <div class="service-text">
              <h2 style="color: #333;">Proses Cepat</h2>
              <p> Kami Menggunakan Mesin Teknoogi super canggih dan sangat bermutu </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box" data-aos="fade-up" data-aos-delay="800">
            <div class="service-icon"><img src="<?php echo base_url() ?>assets/img/icons/status5mini.svg" style="width: 60px; height: 60px; margin-top: -6px; margin-left: 1px;"></div>
            <div class="service-text">
              <h2 style="color: #333">Tepat Waktu</h2>
              <p> Kami selalu tepat waktu dalam proses pencucian jadi tidak akan ada overloud :v.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box" data-aos="fade-left" data-aos-delay="1200">
            <div class="service-icon"><img src="<?php echo base_url() ?>assets/img/icons/status3mini.svg" style="width: 60px; height: 60px; margin-top: -6px; margin-left: 1px;"style="width: 60px; height: 60px; margin-top: -6px; margin-left: 2px;"></div>
            <div class="service-text">
              <h2 style="color: #333;">Harum & Rapih</h2>
              <p> Kami menggunakan pengharum yang sangat bermutu dan berkualitas dan selalu rapi untuk anu :v .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SERVICE END-->
  <div id="portfolio" style="background-color: white;">
    <div class="container" style="background-color: white;">
      <div class="page-title text-center">
        <h1 style="color: #333;" data-aos-delay="400" data-aos="fade-up">Gallery Cleanzone</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
         <hr class="pg-titl-bdr-btm"></hr>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
            
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <?php 
          foreach ($data_galeri as $data) {
            echo '
              <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                <a href="">
                  <img src="'.base_url().'assets/uploads/galeri/'.$data->gambar.'" alt="">
                  <div class="details">
                    <h4>'.$data->deskripsi.'</h4>
                    <span>'.$data->sub_deskripsi.'</span>
                  </div>
                </a>
              </div>
            ';
          }
        ?>
        

      </div>
    </div>
  </div>

  <!--TEAM START-->
  <div class="w3-content w3-section" style="max-width:1200px" >
  <img class="mySlidesx w3-animate-left" src="assets/img/banner.png" style="width:100%" >
  <img class="mySlidesx w3-animate-left" src="assets/img/profile-bg.png"  style="width:100%">
  <img class="mySlidesx w3-animate-left" src="assets/img/login-bg.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlidesx");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel,5000); // Change image every 2 seconds
}
</script>
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
              <input type="text" name="name" class="form-control text-field-box " id="name" placeholder="ID Invoice" data-rule="minlen:4" data-msg="Data Orderan Anda Tidak Di Temukan" />
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
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-6 text-center wow zoomIn">
          <h3>Find Us On:</h3>
          <div class="footer_social   ">
           

           <a  href="https://play.google.com/store/apps/details?id=relaxtudio.clean.dropzone"><img src="<?php echo base_url() ?>assets/img/client/gp.png" class="gp"></a> <h2>OR</h2> <br><a  href="https://play.google.com/store/apps/details?id=com.ss.android.ugc.trill&hl=in"><img src="<?php echo base_url() ?>assets/img/client/as.png" class="as"></a>
              
           
          </div>
       
        </div>
        <!--- END COL -->
           <div style="visibility: visible; animation-name: zoomIn;" class="col-md-6 text-center wow zoomIn">
           <h3>Contact Us:</h3>
          <div class="footer_social   ">
           
 <ul>
              <li class="blue-dark"><a class="f_facebook" style="background-color : #2C3E50  ;" href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="blue-light"><a class="f_twitter" style="background-color :    #3498DB ;" href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="red"><a class="f_google" style="background-color :  #E74C3C  ;" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="blue-dark"><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
              
           
          </div>
          </div>
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






<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>

</html>
