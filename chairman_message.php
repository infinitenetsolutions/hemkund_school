<?php
    include './include/header.php';
    
    ?>

            <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/Chairman Message.jpg" style="width:100%"/>
            
                
                
            </div>                    
        </div><!-- page-title end-->

<br>
    <!--site-main start-->
    <div class="site-main">

  <div class="row">
     <!--<div class="col-sm-2"></div>-->
    <!--<div class="col-sm-4"><img src="./images/portfolio/photo.jpg" style="height: 400px;width: 400px;"/></div>-->
    <div class="col-sm-12" style="background-color:lavenderblush;padding: 25px 60px;"><h4><u>Chairman's Message</u></h4>
<p>Lets hear to what our Chairman says!</p><br>
<?php 
	include "include/db1.php";
	$result = mysqli_query($conn,"SELECT * FROM chair");
	$row = mysqli_fetch_assoc($result);
	?>	
<p style="text-align: justify;"><?php echo $row['msg'];?></p>
<div class="featured-icon-box icon-align-before-content style4 pt-20 res-991-pt-0 float-right">
                                <div class="featured-icon">
                                    <!-- <div class="img-content">
                                        <img class="img-fluid" src="images/author-sign-3.png" alt="ttm_single_image-wrapper">
                                    </div> -->
                                </div>
                                <div class="featured-content pl-30">
                                    <div class="featured-title">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 mr-2">—</h4>
                                            <h5 class="mb-0"><?php echo $row['heading'];?></h5>
                                        </div>
                                    </div>
                                    <div class="featured-desc">
                                        <h4></h4>
                                    </div>
                                </div>
                            </div></div>
     <!--<div class="col-sm-1" ></div>-->
   
  </div>
        <!--introduction-section-->
             <!--broken-section end-->

        <!--broken-section-->
       
        <!--broken-section end-->


        <!--certification-section-->
       
        <!--certification-section end-->


        <!--team-section-->
      
        <!--team-section end-->


    </div><!--site-main end-->
<br>
<?php
    include './include/footer.php';
    
    ?>
