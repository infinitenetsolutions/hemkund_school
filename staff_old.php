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
                                <h2 class="title">Our Teachers</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-2.html">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">Our Teachers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <div class="row">                   
                  
                
               <?php
      $sql = mysqli_query($conn, "SELECT * FROM `staff`");
  
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
                    <div class="ttm-box-col-wrapper col-lg-3 col-md-3 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="ttm-team-box-view-overlay">
                               <!-- <div class="featured-iconbox ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons list-inline">
                                            <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>-->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="./hemkund_school/img/vehicleimages/<?php echo $row['image']; ?>" alt="image" style="height: 330px;width: 100%;"> 
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><?php echo $row['name']?></h5>
                                </div>
                                <div class="team-position"><?php echo $row['designation']?></div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>

<?php } ?>                    

                    
                </div><!-- row end -->
            </div>
        </section>
        <!--grid-section end-->

      
      
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
                
                <div class="row slick_slider slick-initialized slick-slider" data-slick="{&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;:false, &quot;autoplay&quot;:false, &quot;infinite&quot;:true, &quot;responsive&quot;: [{&quot;breakpoint&quot;:991,&quot;settings&quot;:{&quot;slidesToShow&quot;: 3}}, {&quot;breakpoint&quot;:678,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}}, {&quot;breakpoint&quot;:460,&quot;settings&quot;:{&quot;slidesToShow&quot;: 1}}]}">
                    <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3800px; transform: translate3d(-1140px, 0px, 0px);" role="listbox"><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 380px;" tabindex="-1">
                       
                       <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyload" data-src="images/team-member/team-img02.jpg" alt="image">
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="-1">Sophia Arthur</a></h5>
                                </div>
                                <div class="team-position">Senior Lecturer</div>
                               
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    
                    
                    <div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 380px;" tabindex="-1">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyloaded" data-src="images/team-member/team-img03.jpg" alt="image" src="images/team-member/team-img03.jpg"> 
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="-1">Robert Walter</a></h5>
                                </div>
                                <div class="team-position">Programming Expert</div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#" tabindex="-1"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-facebook"><a href="#" tabindex="-1"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-instagram"><a href="#" tabindex="-1"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    
                    <div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 380px;" tabindex="-1">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyloaded" data-src="images/team-member/team-img04.jpg" alt="image" src="images/team-member/team-img04.jpg"> 
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="-1">Michael Grey</a></h5>
                                </div>
                                <div class="team-position">Principal at Uniaro</div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#" tabindex="-1"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-facebook"><a href="#" tabindex="-1"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-instagram"><a href="#" tabindex="-1"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide20">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyloaded" data-src="images/team-member/team-img01.jpg" alt="image" src="images/team-member/team-img01.jpg"> 
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="0">William Logan</a></h5>
                                </div>
                                <div class="team-position">Biology Professor</div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-facebook"><a href="#" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-instagram"><a href="#" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide21">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyloaded" data-src="images/team-member/team-img02.jpg" alt="image" src="images/team-member/team-img02.jpg">
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="0">Sophia Arthur</a></h5>
                                </div>
                                <div class="team-position">Senior Lecturer</div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#" tabindex="0"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-facebook"><a href="#" tabindex="0"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-instagram"><a href="#" tabindex="0"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    
                    <div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 380px;" tabindex="-1">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team style2">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazyload" data-src="images/team-member/team-img03.jpg" alt="image"> 
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="instructor-profile.html" tabindex="-1">Robert Walter</a></h5>
                                </div>
                                <div class="team-position">Programming Expert</div>
                                <div class="ttm-media-link">
                                    <div class="media-block">
                                        <ul class="social-icons">
                                            <li class="social-twitter"><a href="#" tabindex="-1"><i class="ti ti-twitter-alt"></i></a></li>
                                            <li class="social-facebook"><a href="#" tabindex="-1"><i class="ti ti-facebook"></i></a></li>
                                            <li class="social-instagram"><a href="#" tabindex="-1"><i class="ti ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div></div></div>
                    
                    
                    
                </div><!-- row end -->
            </div>
        </section>
      
      
      
      
    </div><!--site-main end-->

    <?php
    include './include/footer.php';
    
    ?>