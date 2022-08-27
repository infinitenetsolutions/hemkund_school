
<style>
.slick-next{
right:0px!important;
}
</style>
<?php
include './include/header.php';
 include './include/db1.php';
?>


<div class="stick-right">
                    <div class="d-load"><span><a download="download" href="./srinath_school/img/vehicleimages/download.pdf">Download Prospectus</a></span></div>
      </div>



    <div class="banner-slider-wrapper">
        <div class="banner-slider slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
            <!-- banner-slide -->
            <?php
      $sql = mysqli_query($conn, "SELECT * FROM `tblslider`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
            <div class="banner-slide">
                <img class="img-fluid lazyload" data-src="./srinath_school/img/vehicleimages/<?php echo $row['img']; ?>" alt="slider-image"/>
                <div class="banner-caption">
                    <div class="info">

                        <div class="container">    
                        
                            <div class="d-lg-flex justify-content-end">
                                <div class="mt-40 res-991-mt-0">

                                    <div class="banner-text right-content ttm-textcolor-white">
                                        <!-- <div class="ttm-textcolor-skincolor slideInLeft animated"><h6>YOU CAN LEARN ANYTHING</h6></div> -->
                                       <!-- <div class="mt-5 mb-10">
                                            <h2 class="slideInLeft animated">Best way to fund </h2>
                                            <h2 class="slideInLeft animated delay-1s">Your <span class="ttm-textcolor-skincolor">Study</span> Abroad </h2>
                                        </div>-->
                                        <!-- <p class="slideInLeft animated delay-2s">Create your free account now and get immediate access<br> to 100s of online courses. </p> -->
                                    </div>
                                   <!-- <div class="fadeInUp animated delay-3s mt-15">
                                        <a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mr-3">Learn more</a>
                                        <span class="ttm-bgcolor-darkgrey">
                                            <a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor">Get it now</a>
                                        </span>

                                    </div>-->
                                </div>
                            </div>                                                     
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
           
        </div>
    </div>


<!--site-main start-->
<div class="site-main">

       
    <!--features-section-->
    <section class="ttm-row features-section clearfix">
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class=" res-991-mt-15 ttm-bgcolor-white box-shadow">
                        <div class="row ttm-vertical_sep">
                            <div class="col-md-4">
                                <!-- featured-imagebox -->
                                <div class="featured-icon-box icon-align-top-content text-center style1">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon-mortarboard"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Quality Teachers</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Teachers are best known for the role of educating the students that are placed in their care.</p>
                                        </div>
                                        <!--<a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="#" title="">Read more<i class="fa fa-chevron-right"></i></a>-->
                                    </div>
                                </div><!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4">
                                <!-- featured-imagebox -->
                                <div class="featured-icon-box icon-align-top-content text-center style1" style="background: #7c0000;
    color: #fff;">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon-idea" style="color:#fff;"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5 class="text-light">Best Curriculum</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Being a parent is the most important job you will ever have, and the most indispensable.</p>
                                        </div>
                                        <!--<a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="#" title="">Read more<i class="fa fa-chevron-right"></i></a>-->
                                    </div>
                                </div><!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4">
                                <!-- featured-imagebox -->
                                <div class="featured-icon-box icon-align-top-content text-center style1">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon-file"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Education system</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p> The term education system generally refers to public schooling, through high school programs. </p>
                                        </div>
                                       <!-- <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="#" title="">Read more<i class="fa fa-chevron-right"></i></a>-->
                                    </div>
                                </div><!-- featured-imagebox end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
            
    </section>
    <!--features-section end-->

  <!--procedure-section-->
  <!--<section class="ttm-row procedure-section clearfix">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                    
                    <div class="section-title with-sep title-style-center_text">
                        <div class="title-header">
                            <h5>YOU CAN LEARN</h5>
                            <h2 class="title">Our Admission Process</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                   
                    <div class="featured-imagebox featured-imagebox-procedure">
                        <div class="featured-thumbnail">
                            <img class="img-fluid lazyload" data-src="images/teachers/t5.jpg" alt="image">
                            <div class="process-num"></div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">

                            </div>
                            <div class="featured-desc">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="featured-imagebox featured-imagebox-procedure">
                       <div class="featured-thumbnail">
                            <img class="img-fluid lazyload" data-src="images/teachers/t2.jpg" alt="image">
                            <div class="process-num"></div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                
                            </div>
                            <div class="featured-desc">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                   
                    <div class="featured-imagebox featured-imagebox-procedure">
                        <div class="featured-thumbnail">
                            <img class="img-fluid lazyload" data-src="images/teachers/t3.jpg" alt="image">
                            <div class="process-num"></div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                               
                            </div>
                            <div class="featured-desc">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                  
                    <div class="featured-imagebox featured-imagebox-procedure">
                        <div class="featured-thumbnail">
                            <img class="img-fluid lazyload" data-src="images/teachers/t4.jpg" alt="image">
                            <div class="process-num"></div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                
                            </div>
                            <div class="featured-desc">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--procedure-section end-->

    <!--introduction-section-->
    <section class="ttm-row introduction-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 col-sm-9 mt-0 mx-auto">
                    <!-- ttm_single_image-wrapper -->
                    <div class="border mr_60 res-991-mr-0">
                        <div class="ttm_single_image-wrapper pt-10 pl-10 pr-10 pb-10">
                            <img class="img-fluid lazyload" data-src="about.jpg" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="pt-10 pl-80 res-991-pl-0 res-991-pt-30">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h5>ABOUT School</h5>
                                <h2 class="title">Introduce Hemkund Public School</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        <!--<p>Hemkund Public School was established by in 2021 for the public benefit. After wards, it is recognized globally. Throughout our great history, Merthon has offered access to a wide range of academic opportunities. Like an international reputation for excellence across the  sciences. The University has pioneered change in the sector. We are one of the largest with over 80,000 students.</p> -->
                        <?php   
                                            $sql = "SELECT * from  aboutus";
                                            $query = mysqli_query($conn, $sql);
                                            $result = mysqli_fetch_assoc($query);
                                			$st = $result['desi'];
                               

                         ?>

                        <p><?php  echo substr($st,0,355);?></p>
                        
                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mt-20" type="submit"><a href="know-us.php">Read More</a></button>
                      
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-6">
                                <!-- featured-icon-box -->
                                <!-- <div class="featured-icon-box icon-align-before-content style4">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-round ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                            <i class="flaticon-school-3"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>25 Years Of</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Education Experience</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- featured-icon-box end -->
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-6">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box icon-align-before-content style4">
                                    <div class="featured-icon">
                                        <div class="img-content">
                                            <!-- <img class="lazyload" data-src="images/author-sign.png" alt="ttm_single_image-wrapper"> -->
                                        </div>
                                    </div>
                                    <div class="featured-content pl-20">
                                        <div class="featured-title">
                                            <!-- <h5>Linechh Jhon</h5> -->
                                        </div>
                                        <div class="featured-desc">
                                            <!-- <p>Chairnan and founder</p> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section-->


    <!--course-section-->
    <section class="ttm-row course-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            
                            <h5>What we do</h5>
                            <h2 class="title">Our Facilities</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}},
            {"breakpoint":590,"settings":{"slidesToShow": 1}}]}'>
               
               
                 <?php
      $sql = mysqli_query($conn, "SELECT * FROM `infrastructure`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="./srinath_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="image" style="width:255px;height:228px;"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><?php echo $row['msg']; ?></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p><?php echo $row['description']; ?></p>
                                </div>
                            </div>
                        
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                <?php }?>
                                                              
            </div>
            <!-- row -->
           <!--  <div class="row">
                <div class="col-lg-12">
                    <div class="mt-30 res-991-mt-15 mb_25 text-center"><p>Don’t hesitate, contact us for better help and services. <u><a href="#"><strong>Explore all Courses.</strong></a></u></p></div>
                </div>
            </div> --><!-- row end -->
        </div>
    </section>
    <!--course-section-->


    <!--skill-section-->
    <section class="ttm-row skill-section bg-img1 ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="pr-60 res-991-pr-0">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h5>YOU CAN LEARN IT</h5>
                                <h2 class="title">Principal’s Message</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                        <!-- <p> In the midst of the clamour of the pandemic and the gradual emergence of a new ‘normal’ in life, replete with its painstaking precautions and explicit safeguards… right in the thick of it all, the Srinath team continued to work at its own breakneck pace, to reorient its website and present it to all of you in its brand new apparel. We hope to be able to communicate better through our remodelled platform, as we add features in the days to come.
                                                            </p> -->
                                                            <?php   
                                            $sql = "SELECT * from  pdesk";
                                            $query = mysqli_query($conn, $sql);
                                            $result = mysqli_fetch_assoc($query);
                                			$st = $result['msg'];
                               

                         ?>

                        <p><?php  echo substr($st,0,355);?></p>
                                                            <div class="ttm-btn-box pr-20 pb-20">
                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-round ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="principal-disk.php" title="">Read More <i class="ti ti-arrow-circle-right"></i></a>
                        </div>
                        
                        <div class="mt-40 mb-30">
                            <span class="ttm-horizontal_sep"></span>
                        </div>
                        <div class="row ttm-vertical_sep">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <!-- ttm-fid -->
                                <div class="ttm-fid inside ttm-fid-with-icon text-center">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="flaticon-university-1"></i>
                                    </div>
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span   data-appear-animation="animateDigits" 
                                                    data-from="0" 
                                                    data-to="15000" 
                                                    data-interval="15" 
                                                    data-before="" 
                                                    data-before-style="sup" 
                                                    data-after="" 
                                                    data-after-style="sub" 
                                                    class="numinate">15000
                                            </span>
                                            <sub>+</sub>
                                        </h4>
                                        <h3 class="ttm-fid-title">Satisfied Students</h3>
                                    </div>
                                </div><!-- ttm-fid end -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <!-- ttm-fid -->
                                <div class="ttm-fid inside ttm-fid-with-icon text-center">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="flaticon-classroom"></i>
                                    </div>
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span   data-appear-animation="animateDigits" 
                                                    data-from="0" 
                                                    data-to="800" 
                                                    data-interval="15" 
                                                    data-before="" 
                                                    data-before-style="sup" 
                                                    data-after="" 
                                                    data-after-style="sub" 
                                                    class="numinate">800
                                            </span>
                                            <sub>+</sub>
                                        </h4>
                                        <h3 class="ttm-fid-title">Qualified Teachers</h3>
                                    </div>
                                </div><!-- ttm-fid end -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <!-- ttm-fid -->
                                <div class="ttm-fid inside ttm-fid-with-icon text-center">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="flaticon-school-3"></i>
                                    </div>
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span   data-appear-animation="animateDigits" 
                                                    data-from="0" 
                                                    data-to="200" 
                                                    data-interval="15" 
                                                    data-before="" 
                                                    data-before-style="sup" 
                                                    data-after="" 
                                                    data-after-style="sub" 
                                                    class="numinate">200
                                            </span>
                                            <sub>+</sub>
                                        </h4>
                                        <h3 class="ttm-fid-title">Honor & Awards Win</h3>
                                    </div>
                                </div><!-- ttm-fid end -->
                            </div>
                        </div>
                        <div class="mt-60 pt-25 pb-5 pl-30 mr_90 res-991-mr-0 res-991-mb-15 ttm-bgcolor-skincolor">
                            <div class="row align-items-center">
                                <div class="col-sm-10">
                                    <h4 class="mb-5 font-weight-normal">Hemkund Public School</h4>
                                    <p>A community of lifelong learners, responsible global citizens, and champions of our own success.</p>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-white ttm-icon_element-size-xs mb-15">
                                            <i class="fa fa-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- col-img-img-one -->
                    <div class="col-bg-img-one ttm-bg ttm-col-bgimage-yes">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content"></div>
                    </div><!-- col-img-bg-img-one end-->
                    <img  class="ttm-equal-height-image img-fluid lazyload" data-src="images/bg-image/col-bgimage-1.jpg" alt="bg-image">
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--skill-section-->


 <!-- element-style-section -->
 <section class="element-row element-style pt-50">
   
   
    <div class="ttm-row pt-50 pb-50 ttm-bgcolor-darkgrey bg-img5 ttm-bg ttm-bgimage-yes">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
        
        
        <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            
                            <!--<h5>What we do</h5>-->
                            <h2 class="title">Notice</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div>
            
            
            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="school-notice.php" title="" style="
    position: absolute;
    font-size: 17px;
    bottom: 20px;
    margin: 0 auto;
    right: 40%;
">View All Notice <i class="ti ti-angle-double-right"></i></a>

            <!-- slick_slider -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
               
                <?php
      $sql = mysqli_query($conn, "SELECT * FROM `notice`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>  
               <div class="ttm-box-col-wrapper col-lg-12" style="height:100px!important;">
                    <!-- testimonials -->
                    <div class="testimonials ttm-testimonial-box-view-style1"> 
                        <div class="testimonial-content">
                           
                            <div class="testimonial-caption">
                            <img target="blank" src="./srinath_school/img/vehicleimages/<?php echo  $row['image']?>" style="width:50px;margin:0 auto;"/>
                            <!--<a href="./srinath_school/img/vehicleimages/<?php echo  $row['image']?>" >Read Admission Notice</a>-->
                                <!--<h5><?php echo  $row['heading']?></h5>-->
                                
                            </div>
                           <blockquote><?php echo  $row['heading']?></blockquote>
                            
                        </div>
                    </div><!-- testimonials end -->
                </div>
                
                <?php } ?>
                
               
            </div>
        </div>
    </div>
</section>
<!-- element-style-section end-->



    <!--broken-section-->
    <section class="ttm-row broken-section bg-layer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-skincolor spacing-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <!--<h5>WHY Uniaro</h5>-->
                                    <h2 class="title">Our Thoughts</h2>
                                </div>
                                <div class="heading-seperator"><span></span></div>
                            </div><!-- section title end -->
                            <p>Educating our children in the richness of their past, the diversity of their present and the possibilities for their future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-60 res-991-mt-0">
                        <div class="ttm-col-bgcolor-yes col-bg-img-six ttm-bgcolor-darkgrey ttm-col-bgimage-yes ttm-bg ttm-right-span spacing-2">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="mt_50">
                                    <!-- slick_slider -->
                                    <div class="row slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
                                     <?php
      $sql = mysqli_query($conn, "SELECT * FROM `testimonial`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>  
                                       <div class="ttm-box-col-wrapper col-lg-12">
                                            <!-- testimonials -->
                                            <div class="testimonials ttm-testimonial-box-view-style1"> 
                                                <div class="testimonial-content">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center lazyload" data-src="./srinath_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="testimonial-img">
                                                        </div>
                                                    </div>
                                                    <blockquote><?php echo $row['description']; ?></blockquote>
                                                    <div class="testimonial-caption">
                                                        <h5><?php echo $row['msg']; ?></h5>
                                                        <label></label>
                                                    </div>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                        <?php } ?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--broken-section end-->


   

    <?php 
include './include/footer.php';
?>