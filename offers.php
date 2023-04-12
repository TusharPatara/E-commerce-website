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
        .cardpad{
            background-color: #101010;
            color: white;
            margin-bottom: 30px;
            margin-left: 20px;
        }
    </style>
</head>
<body style="margin-bottom:200px; background-color: #ede9dd;">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class="">
            <div class="container" style="padding-top:200px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1 style="font-family: fantasy">Sale is going on!</h1>
            <p>Flat 40-70% OFF on premium brands </p>
            <a href="products.php" class="btn btn-warning btn-lg text-black font-weight-bold">Shop Now</a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        <h3 style="background-color : yellow; padding: 10px; font-family: Comic Sans; font-weight: bold">Sale upto 70% OFF-</h3>
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row">
        <!-- watch card start -->
            <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/watch-offer.png" alt="Card image cap" height="180"/>
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">Watches 70% off/-</h5>
                    <p class="card-text">Here we shop trendy watches like Analog watch, Digital watch, Smart watch.</p>
                    <a href="products.php#watch" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- card end -->

        <!-- T-shirt card start -->
            <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/shirt-offer.png" alt="Card image cap" height="180" />
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">T-shirt upto 70% off/-</h5>
                    <p class="card-text">We can buy different t-shirt like Allen-solly, Levis, Puma, Adidas, Wrangler , etc. </p>
                    <a href="products.php#shirt" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- card end -->   

        <!-- Shoes card start -->
            <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/shoes-offer.png" alt="Card image cap" height="180" />
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">Shoes 50% off/-</h5>
                    <p class="card-text"> UrbanShop offers a wide range of men Shoes. Shop for casual, formal, sports Shoes at 50% - 90% off.</p>
                    <a href="products.php#shoes" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- card end -->   

        <!-- Headphone card start -->
        <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/headphone-offer.png" alt="Card image cap" height="190" />
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">Headphone 40% off/-</h5>
                    <p class="card-text">Headphones- Upto 40% Off on Headphones. Choose from a wide range of Headphones on Urbanshop .</p>
                    <a href="products.php#headphones" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- card end -->   

        <!-- Cap card start -->
         <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/cap-offer.png" alt="Card image cap" height="190" />
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">Caps 30% off/-</h5>
                    <p class="card-text">Here we shop trendy watches like Analog watch, Digital watch, Smart watch.</p>
                    <a href="products.php#caps" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- T-shirt card end -->   
        <!-- T-shirt card start -->
        <div class="card cardpad" style="width: 330px;">
                <img class="card-img-top" src="images/grooming-offer.png" alt="Card image cap" height="190" />
                <div class="card-body">
                    <h5 class="card-title" style="font-family: fantasy">Grooming products 15% off/-</h5>
                    <p class="card-text">Buy complete range of grooming products like face wash, beard growth oil ,etc</p>
                    <a href="products.php#grooming" class="btn btn-primary text-white" style="width: 100%">Shop Now</a>
                </div>
            </div>
        <!-- T-shirt card end -->     

        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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