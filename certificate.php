<?php
include './include/header.php';
include './include/db1.php';
?>
<style>
div#block-hd {
       width: 100%;
    text-align: center;
    font-size: 20px;
    font-weight: 500;
    font-weight: bold;
    background-color: #c74a02;
    height: 22px;
    vertical-align: middle;
    padding-top: 3px;
    margin-top: 5px;
    height: 32px;
    color: white;
}
}
</style>
<!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Certificates</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-2.html">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">School Certificates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">
<div class="row">
                    <div class="col-lg-6 col-sm-10 m-auto text-center">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">School Certificates</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        <div class="pb-20">
                           
                        </div>
                    </div>
                </div>

        <!--portfolio-section-->
        <section class="ttm-row portfolio-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs">
                            <!-- <ul class="tabs portfolio-filter">
                                <li class="tab active"><a href="#" data-filter="*">all</a></li>
                                <li class="tab"><a href="#" data-filter=".campus">Campus</a></li>
                                <li class="tab"><a href="#" data-filter=".study">Study</a></li>
                                <li class="tab"><a href="#" data-filter=".classes">Classes</a></li>
                                <li class="tab"><a href="#" data-filter=".library">Library</a></li>
                            </ul> -->
                            <div class="content-tab">
                                <!-- content-inner -->
                                <div class="row multi-columns-row ttm-boxes-spacing-10px isotope-project">


                                <?php
      $sql = mysqli_query($conn, "SELECT * FROM `events` group by msg");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>

                                  
                                   <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 campus">
                                        <!-- featured-imagebox -->
                                         
                                        <div class="featured-imagebox featured-imagebox-portfolio">
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                
           								<a href="event_year.php?year=<?php echo $row['msg'] ?>"> <img class="img-fluid" src="srinath_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="image" style="width: 100%;height: 270px;"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-iconbox ttm-media-link">
                                                    <a class="ttm_prettyphoto ttm_image" title="campus" data-rel="prettyPhoto" href="srinath_school/img/vehicleimages/<?php echo $row['image']; ?>">
                                                        <i class="fa fa-expand"></i><a href="event_year.php?year=<?php echo $row['msg'] ?>"><i class="fa fa-image"></i></a>
                                                    </a>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                            
                                        </div><!-- featured-imagebox -->
                                        <div id="block-hd"> <a href="event_year.php?year=<?php echo $row['msg'] ?>" style="color: white"><?php echo $row['msg'] ?></a></div>
                                     
                                    </div>
 									
                                    <?php } ?>                                                                                                                                                                                                                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section-->


    </div><!--site-main end-->

<?php
include './include/footer.php';
?>