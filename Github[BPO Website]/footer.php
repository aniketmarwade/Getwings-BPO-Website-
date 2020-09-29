 <!-- footer -->
 <section class="footer">
        <footer class="page-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col l4 s12">
                        <h4 class="white-text">About Us</h4>
                        <p class="grey-text text-lighten-4">
                            Get Wings is a BPO company. Get Wings has  been serving clients to meet their unique requirements. Right through conception to implementation of our services to evaluating the results, we maintain a professional approach at every step to ensure the highest quality work & desired results for our clients. Get Wings has expertise in providing data processing services to organizations performing multifaceted activities. 
                            
                             </p>
                    </div>

                    <div class="col l4 s12">
                        <h4 class="white-text">Contact Form</h4>
                        <div class="fform">
                            <div class="row"style="margin:18px;">
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


                    <div class="col l4 s12">
                        <h4 class="white-text">Important Links</h4>

                        <ul class="collection">
                          <a href="career.html">  <li class="collection-item">REGISTRATION</li></a>
                          <a href="aboutus.html">  <li class="collection-item">CONTACT US</li></a>
                          <a href="services.html"> <li class="collection-item">SERVICES</li></a>
                          <a href="index.html">  <li class="collection-item">HOME</li></a>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 GetWings
                    <a class="grey-text text-lighten-4 right" href="aboutus.html">About us</a>
                </div>
            </div>
        </footer>
    </section>
    <!-- footer end -->
