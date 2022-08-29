<?php
    include './include/header.php';
    
    ?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Privacy Policy</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">Privacy Policy</span>
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
              <!--       <div class="col-lg-6">
                        
                        <div class="col-bg-img-five ttm-col-bgimage-yes ttm-bg pt-100 pb-90">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="ttm-play-icon-btn">
                                        <div class="ttm-play-icon-animation">
                                            <a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                     <div class="section-title">
                            <div class="title-header">
                               
                                <h2 class="title">Privacy Policy</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                       <div class="row mt-35 mb-10 res-991-mb-0">
                            <div class="col-lg-12 col-md-5 col-sm-12">
                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                
                                 <?php 
                                include "config.php";
                                $sql = "SELECT * FROM `privacy`";
                                $result = mysqli_query($conn , $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <li><?php echo $row['msg'] ?> 
                                     </li>
                                     <?php } ?>
                                     
                                  
                                </ul>
                            </div>
                           
                        </div> 
                    </div>
                </div>
            </div>
        </section>


       
        
    </div><!--site-main end-->

    <?php
    include './include/footer.php';
    
    ?>
