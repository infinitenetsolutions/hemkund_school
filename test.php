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
                                    <div class="banner-text right-content ttm-textcolor-white"></div>
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
                                <div class="featured-icon-box icon-align-top-content text-center style1" style="background: #ff4f01; color: #fff;">
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

 <!--blog-section-->
    <section class="ttm-row blog-section bg-img2 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
             <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h5>OUR EVENTS</h5>
                            <h2 class="title">Latest events</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
                
                 <?php
      $sql = mysqli_query($conn, "SELECT * FROM `events`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
               
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="./srinath_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="image" style="height: 270px;width: 100%;">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2019-08-12T08:47:17+00:00">Date of Event : <?php echo $row['msg']; ?></time>
                                </span>
                            </div>
                            <!--<div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line cat-link"><i class="fa fa-tag"></i>General Knowledge</span>
                            </div>-->
                            <div class="post-title featured-title">
                                <h5><?php echo $row['description']; ?></h5>
                            </div>
                            <div class="post-desc featured-desc">
                                <!--<p><?php echo $row['description']; ?></p>-->
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                <?php }?>
                
                
            </div>
        </div>
    </section>
    <!--blog-section end-->
    
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

<section class="element-row element-style">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title clearfix">
                            <h2 class="title">Course</h2>
                        </div>
                    </div>
                </div>
                <!-- slick_slider -->
                <!-- slick_slider -->
                <div class="row slick_slider slick-initialized slick-slider" data-slick="{&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4, &quot;arrows&quot;:false, &quot;autoplay&quot;:true, &quot;centerMode&quot;:true, &quot;centerPadding&quot;:0, &quot;infinite&quot;:true, &quot;initialSlide&quot;:2, &quot;responsive&quot;: [{&quot;breakpoint&quot;:1100,&quot;settings&quot;:{&quot;slidesToShow&quot;: 3}} , {&quot;breakpoint&quot;:777,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}},
                {&quot;breakpoint&quot;:590,&quot;settings&quot;:{&quot;slidesToShow&quot;: 1}}]}">
                    <div aria-live="polite" class="slick-list draggable" style="padding: 0px;"><div class="slick-track" style="opacity: 1; width: 4560px; transform: translate3d(-1710px, 0px, 0px);" role="listbox"><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Learn PHP Programming  From Scratch</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Now PHP is one of the best used programming languages...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>                
                                    <span class="ttm-lp-price "><ins>$85.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-three-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Full Data Analysis Course For Beginner</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>122</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>4</span>
                                    </div>  
                                    <span class="ttm-lp-price"><del>$69.00</del><ins>$45.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-four-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Masters Course in Adobe Photoshop</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Top-rated Photoshop courses are covers most of all important...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>27</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price ttm-free-course"><ins>Free</ins></span>                       
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Visual Basic Web Courses With Live Project</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Specially designed to gear up for students and job seekers...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>75</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price "><ins>$39.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-five-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Learning A Mobile App Development</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>                              
                                    <span class="ttm-lp-price "><ins>$85.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide50">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-one-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Complete Beginner to the Web Design</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Are you excited to learn the web design, but not start yet...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>78</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price"><ins>$69.00</ins></span>                            
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide51">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="0">Learn PHP Programming  From Scratch</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Now PHP is one of the best used programming languages...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>                
                                    <span class="ttm-lp-price "><ins>$85.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide52">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-three-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="0">Full Data Analysis Course For Beginner</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>122</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>4</span>
                                    </div>  
                                    <span class="ttm-lp-price"><del>$69.00</del><ins>$45.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-current slick-active slick-center" data-slick-index="3" aria-hidden="false" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide53">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-four-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="0">Masters Course in Adobe Photoshop</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Top-rated Photoshop courses are covers most of all important...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>27</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price ttm-free-course"><ins>Free</ins></span>                       
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide54">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="0">Visual Basic Web Courses With Live Project</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Specially designed to gear up for students and job seekers...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>75</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price "><ins>$39.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 285px;" tabindex="-1" role="option" aria-describedby="slick-slide55">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-five-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="0">Learning A Mobile App Development</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>                              
                                    <span class="ttm-lp-price "><ins>$85.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-one-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Complete Beginner to the Web Design</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Are you excited to learn the web design, but not start yet...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>78</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price"><ins>$69.00</ins></span>                            
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Learn PHP Programming  From Scratch</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Now PHP is one of the best used programming languages...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>                
                                    <span class="ttm-lp-price "><ins>$85.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-three-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Full Data Analysis Course For Beginner</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>122</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>4</span>
                                    </div>  
                                    <span class="ttm-lp-price"><del>$69.00</del><ins>$45.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-four-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Masters Course in Adobe Photoshop</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Top-rated Photoshop courses are covers most of all important...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>27</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price ttm-free-course"><ins>Free</ins></span>                       
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 285px;" tabindex="-1">
                        <!-- featured-imagebox-course -->
                        <div class="featured-imagebox featured-imagebox-course">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid" src="images/course/course-two-526x470.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="featured-content-post-inner">
                                    <div class="post-title featured-title">
                                        <h5><a href="courses-single.html" tabindex="-1">Visual Basic Web Courses With Live Project</a></h5>
                                    </div>
                                    <div class="post-desc featured-desc">
                                        <p>Specially designed to gear up for students and job seekers...</p>
                                    </div>
                                </div>
                                <div class="ttm-course-box-meta">
                                    <div class="ttm-enrolled">
                                        <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>75</span>
                                        <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                    </div>  
                                    <span class="ttm-lp-price "><ins>$39.00</ins></span>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-course end-->
                    </div></div></div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </section>
   

    <?php 
include './include/footer.php';
?>