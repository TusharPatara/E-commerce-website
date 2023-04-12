<?php
require ("includes/common.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UrbanShop | Online Shopping Site for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">


  <!-- CSS for About Page -->
  <style>
  #about-section {
    background: rgba(32, 33, 36, 0.1);
    position: relative;
}

.blockabout {
    padding: 20px;
    background: white;
}

.blockabout-inner {
    padding: 30px;
    border: 1px solid rgba(32, 33, 36, 0.1);
}

.sosmed-horizontal a i {
    border: 1px solid #070707;
    border-radius: 50%;
    color: #070707;
    display: inline-block;
    height: 30px;
    width: 30px;
    line-height: 30px;
    margin: auto 3px;
    font-size: 15px;
    text-align: center;
    transition: all 0.3s;
}

.rey-btn {
    border: 2px solid #070707;
    padding: 10px 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 13px;
    font-weight: 700;
    border-radius: 50px;
    transition: all 0.3s;
}

</style>
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>


  <!-- readymate code -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<section id="about-section" class="pt-5 pb-5">
    <div class="container wrapabout">
        <div class="red"></div>
        <div class="row">
            <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0">
                <div class="blockabout">
                    <div class="blockabout-inner text-center text-sm-start">
                        <div class="title-big pb-3 mb-3">
                            <h3 style="font-family: fantasy">ABOUT ME</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            UrbanShop is a online shopping website for men's. In this website we contain all the branded items for men's like Nike shoes, Titan watches, Levis T-Shirts, Boat headphones etc.
                        </p>
                        <p class="description-p text-muted pe-0 pe-lg-0">All the payment options are available in this website COD, upi, debit/credit card etc.</p>
                        <p class="description-p"><u>For enquiry purpose</u>: email - <a href="#">info@urban.com</a> <br> Contact us: +9123445532 <br>main office : DLF, Gurgaon Faridabad.</p>
                        <div class="sosmed-horizontal pt-3 pb-3">
                            <a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="http://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <a href="#" class="btn rey-btn mt-3">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-auto pb-0 mt-sm-0">
                <figure class="potoaboutwrap">
                    <img src="images/about.jpg" alt="potoabout" width="500" height="800" />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- End -->

<!-- javascript code for about page -->
<script>
var testi = $('#testimonial-slide');
var owlcarouselslide = function(e) {
   
    // testimonial slide
    testi.owlCarousel({
        autoplay: false,
        center: true,
        loop: true,
        dots: true,
        touchDrag: false,
        mouseDrag: false,
        smartSpeed: 900,
        items: 1,
        margin: 100,
        nav: true,
        navText: [
            '<i class="fa fa-long-arrow-left " aria-hidden="true"></i>',
            '<i class="fa fa-long-arrow-right " aria-hidden="true"></i>'
        ],
        navContainer: '.custom-nav',
    });
};

$(document).ready(function() {
    owlcarouselslide();
}); 
</script>

<!-- end code -->


  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
