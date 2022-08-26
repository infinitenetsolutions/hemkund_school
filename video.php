<?php
include './include/header.php';
include './include/db1.php';
?>
<style>
.container1 {
  position: relative;
}

.image1 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay1 {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
   background-color: #ff4f01;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container1:hover .overlay1 {
  bottom: 0;
  height: 100%;
  opacity: 0.7;
}

.text1 {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
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

</style>
   <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/videos.jpg" style="width:100%"/>                                           
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">
<div class="row">
                    <div class="col-lg-6 col-sm-10 m-auto text-center">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 class="title">Video Gallery</h2>
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
      $sql = mysqli_query($conn, "SELECT * FROM `video_gallery` group by event");
       while($row = mysqli_fetch_assoc($sql))
      {
      ?>

                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6 campus">
                                    
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio">
                                               <div class="container1">
  												<a href="video_event.php?event=<?php echo $row['event'] ?>">
                                                <video controls style="width: 100%;height: 270px;">
                                            	<source src="srinath_school/img/vehicleimages/<?php echo $row['video']; ?>" type="video/mp4">
                                            	</video>
                                                <!-- <div class="overlay1">
                                                  <div class="text1"><?php echo $row['event'] ?></div>
                                                </div>-->
                                                </a>
                                              </div>
                                          
                                        </div><!-- featured-imagebox -->
                                       <div id="block-hd"><a href="video_event.php?event=<?php echo $row['event'] ?>"  style="color: white"><?php echo $row['event'] ?></a></div>
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