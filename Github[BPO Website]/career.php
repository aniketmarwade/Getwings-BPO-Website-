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
                <img src="images/caurosel1.png">
                <!-- random image -->
                <div class="caption center-align">
                    <h2 class="hedtxt black-text">Take Your Dream Vacation</h2>
                    <h5 class="light black-text text-lighten-3 hide-on-small-only ">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quidem, provident eos dicta unde debitis</h5>
                </div>
            </li>
            <li>
                <img src="images/caurosel2.png">
                <!-- random image -->
                <div class="caption left-align">
                    <h2>We Work With All Budgets</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Possimus delectus inventore neque impedit</h5>
                </div>
            </li>
            <li>
                <img src="images/caurosel3.png">
                <!-- random image -->
                <div class="caption right-align">
                    <h2>Group & Individual Getaways</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Sunt ipsum molestias excepturi doloremque</h5>
                </div>
            </li>
        </ul>
    </section>
    <!-- slider ends -->


 <!-- Section: Contact -->
 <section id="contact" class="section section-contact scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card-panel blue lighten-1 white-text center">
                  <img src="images/team.png" alt="" width="380" height="295">
                     <h5>START YOUR CAREER WITH US</h5>
                    <p>Glad to have you here!  Fill out the form to get registered with Get Wings 
                    </p>
                </div>
               

                <ul >
                    <div class="card-panel blue lighten-1 white-text center">
                        <img src="images/micman.png" alt="" width="320" height="255">
                           <h5>Leave us a message and we’ll get in touch!</h5>
                          
                      </div>
                </ul>

            </div>
            <div class="col s12 m6">
                <div class="card-panel grey lighten-3">
                    <h5>Registration Form</h5>
                    <form method="post" action="regconn.php">

                            <p>FULL NAME</p>
                            <input class="input-field" type="text" name="name" placeholder="Name">
                            
                            <p>EMAIL</p>
                            <input class="input-field" type="email" name="email" placeholder="Email">
                            
                            <p>PHONE NO</p>
                            <input class="input-field" type="text"  name="phone" placeholder="Phone">
                            
                            <p>ADDRESS</p>
                            <input class="input-field" type="text" name="address" placeholder="Address">
                            
                            <p>CITY</p>
                            <input class="input-field" type="text" name="city" placeholder="City">
                           
                            <p>PINCODE</p>
                            <input class="input-field" type="text" name="pincode" placeholder="Pincode">
                           
                           <p>INTERESTED IN</p>
                           <input class="input-field" type="text" name="interest" placeholder="BPO/Telemarketing/Data Entry/Led Generation">

                           <input  type="submit" value="Submit" class="btn">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include 'footer.php';
?>
 






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