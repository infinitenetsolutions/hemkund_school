<?php
    include './include/header.php';
    include './include/db1.php';
    ?>

    <!--page start-->
    <!--<div class="page">    -->                  



     <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/Our Teachers.jpg" style="width:100%"/>
            
                
                
            </div>                    
        </div><!-- page-title end-->
        
        
    <!--site-main start-->
    <div class="site-main">                  

        <!--team-section-->
        <section class="ttm-row team-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h5>Find The Right Instructor</h5>
                        <h2 class="title">Our Expert Instructor</h2>
                    </div>
                    <div class="heading-seperator"><span></span></div>
                </div><!-- section title end -->
                <!-- row -->
              <div class="row">
                   
                           
               <?php
      $sql = mysqli_query($conn, "SELECT * FROM `staff`");
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
                 
                 <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyload" data-src="./srinath_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="image" style="width:350px;height:400px;"> 
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html"><?php echo $row['name']?></a></h5>
                                </div>
                                <div class="team-position"><?php echo $row['designation']?></div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#"><i class=""></i></a></li>
                                            <li class="social-facebook"><a href="#"><i class=""></i></a></li>
                                            <li class="social-instagram"><a href="#"><i class=""></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    
                    <?php } ?>         
                    
                    
                    
                    
                  
                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->

             
  <?php
    include './include/footer.php';
    
    ?>
   
   