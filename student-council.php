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
                        <div class="pb-20">
                            <p>Meet the genius kids!</p>
                        </div>
                    </div>
                </div>
                 
                <div class="row">
                                                    
                    <div class="col-lg-12">
                        <div class="accordion res-991-pt-30">
                         <?php
                            $sql = mysqli_query($conn, "SELECT * FROM `notice`");
                            while($row = mysqli_fetch_assoc($sql))
                            {
                          ?>
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey ttm-control-right-true active">
                                <div class="toggle-title" style="background-color:#ff4f01;">
                                	<a href="#" style="color:white!important;"><?php echo $row['heading']?></a>
                                </div>
                                <div class="toggle-content" style="color: rgb(255, 255, 255)!important; background: rgb(19, 30, 60)!important;">
                                    <p>testing<?php //echo $row['desi']?></p>
                                </div>
                            </div>
                            <!-- toggle end -->
                            <?php } ?>
                        
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
<script src="js/main.js"></script>
   
    <!-- Javascript end-->

</body>


</html>
