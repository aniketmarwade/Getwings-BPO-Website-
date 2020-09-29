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

    <!-- caurosel services -->

    <section class="cauroselservices">


        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="images/caurosel-services1.png"> <!-- random image -->
                    
                </li>
                <li>
                    <img src="images/caurosel-services2.png"> <!-- random image -->
                   
                </li>
                <li>
                    <img src="images/caurosel-services3.png"> <!-- random image -->
                    
                </li>
                <li>
                    <img src="images/caurosel-services4.png"> <!-- random image -->
                    
                </li>
            </ul>
        </div>
    </section>
 <!-- heading about us -->
 <div class="container center">
    <span style="color:#42a5f5;"> <h2 class="header">Brief about our services!</span>
</div>
     <!-- four icons -->
     <section class="icons">
        <div data-aos="fade-up">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card-panel blue darken-1 center white-text z-depth-3">
                        <i class="fa fa-phone  fa-4x" aria-hidden="true"></i>
                        <h5 class="bpo">BPO</h5>

                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card-panel blue darken-1 center white-text z-depth-3">
                        <i class="fa fa-headphones  fa-4x" aria-hidden="true"></i>
                        <h5 class="bpo">Telemarketing</h5>

                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card-panel blue darken-1 center white-text z-depth-3">
                        <i class="fa fa-print fa-4x" aria-hidden="true"></i>
                        <h5 class="bpo">Lead Generation</h5>

                    </div>
                </div>



                <div class="col s12 m6 l3">
                    <div class="card-panel blue darken-1 center white-text z-depth-3 ">
                        <i class="fa fa-tasks fa-4x" aria-hidden="true"></i>
                        <h5 class="bpo">Data Entry</h5>

                    </div>
                </div>



            </div>




        </div>
        </div>
    </section>
   
    <section class="infoservice">

        <div class="row container-fluid">
            <div class="row">
                
                <div class="col center l4 s12 ">
                    <img src="images/bpo.png" alt="" width="350">
                </div>
                <div class="col center l8 s12">
                    <h4 class="center">
                        <span class="blue-text"> BPO </span></h4>
                      <div class="container">
                        <h6>
                            Our BPO and Call Centre Operations division provides the value added services to the companies for improving their performance parameters, thus allowing them to focus on their respective core business responsibilities by cutting down the cost on non value added services and remain competitive in their core business. 
                        </h6>
                      </div>
                       
                </div>
              </div>
        </div>

        <div class="row container-fluid">
            <div class="row">
                
                <div class="col center l4 s12 ">
                    <img src="images/TELE.png" alt="" width="350">
                </div>
                <div class="col center l8 s12">
                    <h4 class="center">
                        <span class="blue-text"> TELEMARKETING </span></h4>
                      <div class="container">
                        <h6>
                            Business of marketing goods or services via telephone. It is the act of selling, promoting a product or process to the prospective customers over phone. Telemarketing includes the use of persons trained in conversational skills to enhance sales, promote new products and update the customers with current available services.
                        </h6>
                      </div>
                       
                </div>
              </div>
        </div>


        <div class="row container-fluid">
            <div class="row">
                
                <div class="col center l4 s12 ">
                    <img src="images/LEAD.png" alt="" width="350">
                </div>
                <div class="col center l8 s12">
                    <h4 class="center">
                        <span class="blue-text"> LEAD GENERATION </span></h4>
                      <div class="container">
                        <h6>
                            Lead Generation is not a new form of gaining new business, but it now has a new approach of generating business. Lead Generation is gathering information of the customers (customer profile) and to create an interest into the business products or services. Lead Generations are through various means which includes Online Lead Generation, Telemarketing, Direct mail, etc.
                        </h6>
                      </div>
                       
                </div>
              </div>
        </div>




        <div class="row container-fluid">
            <div class="row">
                
                <div class="col center l4 s12 ">
                    <img src="images/DATEA.png" alt="" width="350">
                </div>
                <div class="col center l8 s12">
                    <h4 class="center">
                        <span class="blue-text"> DATA ENTRY</span></h4>
                      <div class="container">
                        <h6>
                            Data entry is the act of entering information into electronic formats by using word processing or dataprocessing software hosted on a computer and it’sdata entry operators who perform these tasks. In truth, though “data entry” sounds technical, you can get many of these jobs with no previous experience.
                        </h6>
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

<!-- script for tab in card collapsible -->
<script>
    
  document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();

  });

</script>
</html>