<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UrbanShop | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

    <style>

    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0}
    .mySlides {display: none}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    animation-name: fade;
    animation-duration: 5s;
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
    }

    </style>
</head>

<body style="margin-bottom:200px; background-color: #f2f2f2; ">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
   
   <!--Header ends-->
    <div class="slideshow">

    <div class="mySlides fade">
    <a href="watches.php"><img src="images/sliderwatch.jpg" style="width:100%" height="600"></a>
    <div class="text">Watch sale.</div>
    </div>

    <div class="mySlides fade">
    <a href="shoes.php"> <img src="images/slidershoe1.jpg" style="width:100%" height="600"></a>
    <div class="text">Shoes sale.</div>
    </div>

    <div class="mySlides fade">
    <a href="headphone.php"><img src="images/sliderheadphone.jpg" style="width:100%" height="600"></a>
    <div class="text">Headphone sale.</div>
    </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <!-- slider -->
    <div class="navbar bg-body-tertiary">
        <span class="cont" style="margin-left: 150px"><p><i class="fa fa-globe" aria-hidden="true"></i>  FREE STANDARD SHIPPING</p></span>
        <span class="cont"><p><i class="fa fa-money" aria-hidden="true"></i>  100% MONEY BACK</p></span>
        <span class="cont" style="margin-right: 150px"><p><i class="fa fa-gift" aria-hidden="true"></i>  GIFTS FOR MEMBERS</p></span>
    </div>


    <div class="text-center pt-2 h3">
        <h3 style="background-color : yellow; padding: 10px; font-family: Comic Sans; font-weight: bold">Men's Accessories</h3>
    </div>


    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="px-5 py-3">
                <a href="watches.php"> <img src="images/watch.jpg" class="img " alt="" style="border-radius:0.5rem; height: 250px; width: 280px">
                <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                      Watches
                    </div>
                 </a>
                 <hr style="border: 1px solid black">
             </div>
            <div class="px-5 py-3 " >
                <a href="shirt.php"  >
                  <img src="images/clothing.jpg" class="img" alt="" style="border-radius:0.5rem; height: 250px; width: 280px" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Clothing
                     </div>
                  </a>
                  <hr style="border: 1px solid black">
             </div>
            <div class="px-5 py-3">
                <a href="shoes.php">
                 <img src="images/shoes.jpg" class="img  " alt="" style="border-radius:0.5rem; height: 250px; width: 280px">
                <div class="h5 pt-3 font-weight-bolder">
                    Shoes
                 </div>
             </a>
             <hr style="border: 1px solid black">
             </div>
            <div class="px-5 py-3">
                <a href="headphone.php">
                 <img src="images/headphones.jpg" class="img " alt="" style="border-radius:0.5rem; height: 250px; width: 280px">
                 <div class="h5 pt-3 font-weight-bolder">
                    Headphones
                 </div>
             </a>
            </div>
            <div class="px-5 py-3">
                <a href="caps.php">
                 <img src="images/Cap0.jpg" class="img" alt="" style="border-radius:0.5rem; height: 250px; width: 280px">
                <div class="h5 pt-3 font-weight-bolder">
                    Caps
                 </div>
             </a>
             </div>
             <div class="px-5 py-3">
                <a href="grooming.php">
                 <img src="images/grooming0.png" class="img " alt="" style="border-radius:0.5rem; height: 250px; width: 280px">
                 <div class="h5 pt-3 font-weight-bolder">
                    Grooming
                 </div>
             </a>
            </div>      
</div>
</div>
             <!-- Recommended Section -->
            <div class="text-center pt-5 h3" >
                <h3 style="background-color : yellow; padding: 10px; font-family: Comic Sans; font-weight: bold">Suggested for You</h3>
            </div>

            <div class="container">
            <div class="row text-center my-3" id="watch" > 
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/watch1.png" alt="" class="pb-1" height="290" >
                        <div class="figure-caption">
                            <h6>Titan Watch</h6>
                            <h6>Price :Rs 3000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(1)) {
                            echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                            } else {
                                ?>
                                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/shirt1.jpg" alt="" class=" pb-1"  height="290">
                        <div class="figure-caption">
                            <h6>Levis</h6>
                            <h6>Price :Rs 1800</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/polo2.png" alt="" class="pb-1"  height="290">
                        <div class="figure-caption">
                            <h6>Fit polo shirt</h6>
                            <h6>Price :Rs 550</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/formal4.png" alt="" class="pb-1"  height="280"> 
                        <div class="figure-caption">
                            <h6>Puma shoes</h6>
                            <h6>Price :Rs 1000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                            <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                echo '<p><a href="#" class="btn btn-primary  text-white" disabled>Added to cart</a></p>';
                                } else {
                                ?>
                                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>    

    <div class="text-center pt-3 h3">
        <h3 style="background-color : yellow; padding: 10px; font-family: Comic Sans; font-weight: bold">Review Section</h3>
    </div>
    <?php include 'review.php'?>
    <?php include 'contact.php' ?>
    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->

    


    <!-- slider JAVASCRIPT -->
    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>

    <!-- Slider End -->

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});

</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>