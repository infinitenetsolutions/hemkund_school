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
                                <h2 class="title">Terms</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">Terms</span>
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
             
                    <div class="col-lg-12">
                     <div class="section-title">
                            <div class="title-header">
                               
                                <h2 class="title">Terms</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                       <div class="row mt-35 mb-10 res-991-mb-0">
                            <div class="col-lg-12 col-md-5 col-sm-12">
                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <?php 
                                include "config.php";
                                $sql = "SELECT * FROM `terms`";
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
