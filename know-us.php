<?php
    include './include/header.php';
    include 'include/db1.php';
    
    $sql = "SELECT * from  aboutus";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);		
?>
    
        <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/About us.jpg" style="width:100%"/>
            
                
                
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div  class="pb-55 pr-20 res-991-pb-0 res-991-pr-0">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>ABOUT </h5>
                                    <h2 class="title">About Us</h2>
                                </div>
                                <div class="heading-seperator"><span></span></div>
                            </div><!-- section title end -->
                            
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-8">
                           <p><?php echo $result['desi'];?></p>
                           </div>
                           <div class="col-lg-4">
                         <img id="footer-logo-img" class="img-center lazyloaded" data-src="images/logo-img1.png" alt="image" src="images/about.jpg" style="width:400px;">
                           </div>
                           </div>
                           
                        </div>                        
                    </div>
                   
                </div><!-- row end -->
                              
            </div>
        </section>
        <!--broken-section end-->

        <!--broken-section-->
       <!-- <section class="ttm-row broken-section bg-layer clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        
                        <div class="col-bg-img-three ttm-col-bgimage-yes ttm-left-span ttm-bg">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                            </div>
                        </div>
                        <img class="img-fluid ttm-equal-height-image" src="images/bg-image/col-bgimage-3.jpg" alt="bg-image">
                    </div>
                    <div class="col-lg-6">

                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-darkgrey col-bg-img-four ttm-col-bgimage-yes spacing-6">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">

                                <div class="section-title">
                                    <div class="title-header">
                                        <h5>WHY Uniaro</h5>
                                        <h2 class="title">Check Out<br>Our School History</h2>
                                    </div>
                                    <div class="heading-seperator"><span></span></div>
                                </div>
                                <div id="ttmscore-timeline" class="ttmscore-timeline-wrapper pt-15 clearfix">

                                    <div class="timeline ttmscore-timeline ttmscore-timeline-style-1 ttmscore-timeline-round">
                                        <div class="timeline-panel">
                                            <div class="timeline-date">
                                                <span class="timeline-year">2018</span>
                                            </div>
                                            <div class="timeline-body">
                                                <h3 class="title">A Beginning of new ERA</h3>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece classical.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-date">
                                                <span class="timeline-year">2015</span>
                                            </div>
                                            <div class="timeline-body">
                                                <h3 class="title">Merge with Excepteur Group</h3>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece classical.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-date">
                                                <span class="timeline-year">2012</span>
                                            </div>
                                            <div class="timeline-body">
                                                <h3 class="title">Initial Start Up Of Company</h3>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece classical.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--broken-section end-->


        <!--certification-section-->
        <section class="ttm-row certification-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>how it works</h5>
                                <h2 class="title">Key Facilities </h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-resume"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Experience Faculties</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-university"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Well Furnished Classroom</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-diploma"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Personal & Intensive Care on Slow learners</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-mortarboard"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Audio, Visual & Play way method of teaching</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-open-book-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Computer Education</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-top-content style3">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-xl">
                                    <i class="flaticon-book-2"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Co-curricular Activities</h5>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </section>
        <!--certification-section end-->

   
    </div><!--site-main end-->

<?php
include './include/footer.php';
?>