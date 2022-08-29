<?php 
     include './include/db1.php';
     $sql = "SELECT * from  contact";
     $res = mysqli_query($conn, $sql);
     $result = mysqli_fetch_assoc($res);
?>




        <!--cta-section-->
        <section class="ttm-row cta-section ttm-bgcolor-skincolor text-center clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="font-weight-normal" style="margin-bottom: 0px;padding: 10px;">For the bright future of your child join <b>Hemkund Public School</b>  </h4>
                    </div>
                </div>
            </div>
        </section>
        <!--cta-section end-->


    </div><!--site-main end-->


    <!--footer start-->
    <footer class="footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center lazyload" data-src="images/hem-logo1.png" alt="image">
                            </div>
                            <div class="textwidget widget-text">
                                <p class="pb-10 pr-30 res-575-pr-0">The school was established in 2014. Hemkund Public School is a Co-ed school affiliated to Central Board of Secondary Education</p>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Usefull Links</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                           <h3 class="widget-title">Our Location</h3>
                           <p><?php echo $result['addr']; ?></p>
                          <p><?php echo $result['email']; ?></p>
                          <p>+91 <?php echo $result['phone'];?></p>
                        </div>
                    </div>
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           
                        </div>                        <div class="widget widget-text clearfix">
                           <h3 class="widget-title">Newsletter</h3>
                            <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                                <div class="ttm_subscribe_form">
                                    <input type="email" name="email" placeholder="Enter Email Address Here...." required="">
                                    <button class="btn" type="submit"> <i class="fa fa-paper-plane-o"></i> </button>
                                </div>
                                <div class="subscribe-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul id="menu-footer-menu" class="footer-nav-menu ttm-textcolor-white">
                         <!--    <li><a href="#">Employees</a></li> -->
                            <li><a href="privacy.php">Privacy Policy</a></li>

                            <li><a href="terms.php">Terms of Use</a></li>
                            <li><a href="contact.php">Contact</a></li>
                          
                        </ul>
                      <!--   <div class="d-sm-flex flex-row align-items-center justify-content-center pt-35 pb-15">
                            <img data-src="images/footer-award-one.png" class="img-fluid lazyload" alt="award-one">
                            <div class="ml-30 pl-30 border-left res-575-ml-0 res-575-pl-0 res-575-mt-20">
                                <img data-src="images/footer-award-two.png" class="img-fluid lazyload" alt="award-two">
                            </div>
                        </div> -->
                        <div class="text-center pb-15">© Copyright Hemkund Public School <?php echo date('Y');?> All rights reserved | Designed by<a href="https://www.infinitenetsolutions.com/"> Infinite Net Solutions</a></div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/lazysizes.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->
<script src="js/jquery.min.js"></script>
  
    <script src="js/map.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Javascript end-->


</body>


</html>