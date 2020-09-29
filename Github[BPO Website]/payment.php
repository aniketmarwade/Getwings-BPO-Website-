<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Wings</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Pacifico&display=swap" rel="stylesheet">

    <!-- M icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- actual m -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--  custom css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />

    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
<?php
   include'conn.php';
include("header.php");
   ?>



    <!-- Section: Slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="images/PAYMENT1.png">
                <!-- random image -->
               
            </li>
            
        </ul>
    </section>
    <!-- slider ends -->

<!-- Section: Icon Boxes -->
<section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <img src="images/debitcard.png" alt="" width="150" height="89">           
            <h4>Bank Transfers</h4>
            <p>We accept bank transfers like Card Payments, RTGS & Net Banking</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
<img src="images/bhimupi.png" alt="" width="150" height="89">            <h4>UPI Payments</h4>
            <p>We accept UPI transfers & all the other online payment methods</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <img src="images/greenrupee.png" alt="" width="150" height="89">   <h4>Cash Payments</h4>
            <p>We accept money transfers by cash methods and other offline methods</p>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- Section: Icon Boxes -->
<section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <img src="images/gpay.png" alt="" width="150" height="100">           
            <h4>Google Pay</h4>
            <p>We accept Google Pay transfers & all the other online payment methods</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
<img src="images/paytm.png" alt="" width="150" height="100">            <h4>Paytm</h4>
            <p>We accept Paytm transfers & all the other online payment methods</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <img src="images/phonepe.png" alt="" width="150" height="100">   <h4>Phone Pe</h4>
            <p>We accept Phone Pe transfers & all the other online payment methods</p>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  
<!-- Section: Icon Boxes -->
<section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <img src="images/paypal.jpg" alt="" width="170" height="100">           
            <h4>Pay Pal</h4>
            <p>We accept Paypal transfers & all the other online payment methods</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
<img src="images/amazonpay.png" alt="" width="150" height="100"> <h4>Amazon Pay</h4>
            <p>We accept Amazon Pay & all the other online payment methods</p>
          </div>
        </div>
        
    
  </section>

  <?php
include 'footer.php';
?>
 


    <!-- link disabled modal -->
    <section class='infomodal'>
        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4 id="info-modal-heading">Link Disabled</h4>
                <p id="idinfo-modal-content">Sorry! all links are diabled as of now</p>
            </div>

            <div class="modal-footer">
                <a href="#" class="modal-close waves-effect btn-flat">close</a>
            </div>
        </div>
    </section>
<!-- link disabled modal end -->









</body>
<!-- j query -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
    integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ=="
    crossorigin="anonymous"></script>

<!-- aos javascript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<!-- M script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- custom js -->
<script src="js/loader.js"></script>

</html>