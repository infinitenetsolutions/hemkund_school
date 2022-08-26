<?php
    include './include/header.php';
    include './include/db1.php';
    ?>

             <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/Infrastructure.jpg" style="width:100%"/>
                                            
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row ">
                 <?php
      $sql = mysqli_query($conn, "SELECT * FROM `infrastructure`");
  
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="srinath_school/img/vehicleimages/<?php echo $row['image']?>" alt="image" style="height:280px"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html"><?php echo $row['msg']?></a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p><?php echo $row['description']?></p>
                                    </div>
                                </div>
                            
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div>
                  <?php } ?>
                    
                   
                </div>
            </div>
        </section>
        <!--grid-section-->

    </div><!--site-main end-->

    <?php
  
    include './include/footer.php';
    
    ?>