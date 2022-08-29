<?php
include './include/header.php';
include './include/db1.php';
?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Important Notice</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">Important Notice</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-10 m-auto text-center">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">Important Notice</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        
                    </div>
                </div>
                 
                <div class="row">
                                                    
                    <div class="col-lg-12">
                        <div class="accordion res-991-pt-30">
                         <?php
                            $sql = mysqli_query($conn, "SELECT * FROM `notice`");
                            $ctr=1;
                            while($row = mysqli_fetch_assoc($sql))
                            {
                          ?>
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true active">
                                <div class="toggle-title" style="background-color:#7c0000;"><a href="#" style="color:white!important;"><?php echo $row['heading']?></a></div>
                                <div class="toggle-content" 
                                style="color: rgb(255, 255, 255)!important;
  									  background: rgb(19, 30, 60)!important;">
                                    <!--<p><?php echo $row['desi']?></p>-->
                                    <img src="./hemkund_school/img/vehicleimages/<?php echo  $row['image']?>" style="width:100%;"/>
                                </div>
                            </div><!-- toggle end -->
                            <?php } ?>
                        
                       </div>
                    </div>
                    
                    <div class="col-lg-12" style="display:none;">
                        <div class="accordion res-991-pt-30">
                       
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true active">
                                <div class="toggle-title" style="background-color:#ff4f01;"><a href="#" style="color:white!important;">note</a></div>
                                <div class="toggle-content" 
                                style="color: rgb(255, 255, 255)!important;
  									  background: rgb(19, 30, 60)!important;">
                                    <p>note</p>
                                </div>
                            </div><!-- toggle end -->
                          
                        
                       </div>
                    </div>
                                      
                </div>
                  
            </div>
        </section>
               
    </div><!--site-main end-->

</div><!-- page end -->

<?php
include './include/footer.php';
?>
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
    <script src="js/main.js"></script>
    <!-- Javascript end-->

</body>


</html>
