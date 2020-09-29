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

 <!-- Section:about us -->
 <section class="section section-follow  
 white-text center"style="margin-top: 50px;">
    <div class="container">
        <div class="row" >
            <div class="col s12">
               <span style="color: #0d47a1;"><h3>ABOUT US</h3></span> 
               <img src="images/blue-line.png" alt="" width=200 ;>
              <span style="color:#0d47a1 ;">
                <h6>Get Wings is a leading BPO company. Get Wings has for years been serving national and international clients to meet their unique requirements. Right through conception to implementation of our services to evaluating the results, we maintain a professional approach at every step to ensure the highest quality work & desired results for our clients. Get Wings has expertise in providing data processing services to organizations performing multifaceted activities.</h6>
              </span>
            </div>
        </div>
    </div>
</section>
<!-- aboutus ends -->

 <!-- Section:vision -->
 <section class="section section-follow  
 white-text center"style="margin-top: 50px;">
    <div class="container">
        <div class="row" >
            <div class="col s12">
               <span style="color: #0d47a1;"><h3>COMPANY VISION</h3></span> 
               <img src="images/blue-line.png" alt="" width=200 ;>
              <span style="color:#0d47a1 ;">
                <h6>To continuously engage ourselves in the process of ‘processing’, identify new avenues & opportunities, develop innovative products that deliver optimum customer satisfaction and to nurture talent to respond to the dynamics of changing requirements & technology.</h6>
              </span>
            </div>
        </div>
    </div>
</section>
<!-- visionends -->

<!-- Section:mission -->
<section class="section section-follow  
white-text center"style="margin-top: 50px;">
   <div class="container">
       <div class="row" >
           <div class="col s12">
              <span style="color: #0d47a1;"><h3>COMPANY MISSION</h3></span> 
              <img src="images/blue-line.png" alt="" width=200 ;>
             <span style="color:#0d47a1 ;">
               <h6>In an industry where simplification of ‘Data’ is the key to success, we believe in being resourceful, innovative and responsive to the needs of our clients and deliver qualitative consistency in our products & services to make them cost effective, efficient & meaningful.</h6>
             </span>
           </div>
       </div>
   </div>
</section>
<!-- mission ends -->

<!-- Section:mission -->
<section class="section section-follow  
white-text center"style="margin-top: 50px;">
   <div class="container">
       <div class="row" >
           <div class="col s12">
              <span style="color: #0d47a1;"><h3>COMPANY CULTURE</h3></span> 
              <img src="images/blue-line.png" alt="" width=200 ;>
             <span style="color:#0d47a1 ;">
               <h6>At Get Wings we believe in working as a team irrespective of position, cast or creed, color or race. The primary focus is on working together to accomplish tasks and get projects through. We aim at creating an work also strike a correct Work-life balance. Work Appreciation is an integral practice that is widely adopted to enhance the morale, skills and competitive spirit for the betterment of the unit in totality.</h6>
             </span>
           </div>
       </div>
   </div>
</section>
<!-- mission ends -->




    <h2 class="header center"> <span style="color: #42a5f5 ;">Contact Us</span> </h2>
    <!-- Section: Contact -->
    <section id="contact" class="section section-contact scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card-panel blue lighten-1 white-text center">
                        <i class="material-icons">email</i>
                        <h5>Request a Callback</h5>
                        <p> We not only have in-depth knowledge of outsourcing but also know the drivers that impact the bottom line of customers. </p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header" style="background-color:aliceblue;">
                            <h4>Location</h4>
                        </li>
                        <li class="collection-item" style="background-color:#42a5f5; color:white;"> Sakkardara Tiranga Square
                        </li>
                        <li class="collection-item" style="background-color:#42a5f5; color:white;">Anand Nagar
                            33</li>
                        <li class="collection-item" style="background-color:#42a5f5; color:white;">Nagpur 440009</li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <div class="card-panel grey lighten-3">
                        <h5>Please fill out this form</h5>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="row">
                                        <div class="input-field ">
                                            <input type="text" name="name" placeholder="Name">
                                            <span class="error"><?php echo $nameErr;?></span>
                                        </div>
                                        <div class="input-field">
                                            <input type="email" name="email"   placeholder="Email">
                                            <span class="error"><?php echo $emailErr;?></span>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="phone" placeholder="Phone">
                                            <span class="error"><?php echo $phoneErr;?></span>
                                        </div>
                                        <div class="input-field">
                                            <textarea class="materialize-textarea" name="msg" placeholder="Enter Message"></textarea>
                                            <span class="error" style="color:red;"><?php echo $msgErr;?></span>
                                        </div>
                                        <input type="submit" value="Submit" class="btn">
                                       <br> <span class="success"><?php echo $successMsg;?></span>
                                    </div>


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