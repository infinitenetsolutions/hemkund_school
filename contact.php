<?php
    include './include/header.php';
    include './include/db1.php';
    
    if(isset($_POST['send']))
    {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $subject = $_POST['subject'];
	$message = $_POST['message'];
 
	$sql1 = "INSERT INTO `contactus`(`name`, `email`, `phone`, `subject`, `message`) 
    VALUES ('$name','$email','$phone','$subject','$message')";
	$result = mysqli_query($conn , $sql1);
	if($result){
	echo "<script> alert('Your Message Sent successfully. You will be informed');</script>";
	}
    else
    echo "<script> alert('Some Error Occured!!');</script>";
    }
    ?>
    
          <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/contact us.jpg" style="width:100%"/>
                                            
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--- conatact-section -->
        <section class="ttm-row conatact-section bg-map pb-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mr-auto">
                        <div class="mb-25">
                            <h3>We’re Happy to Discuss Your Project and Answer any Question</h3>
                        </div>
                        <?php
      $sql = mysqli_query($conn, "SELECT * FROM `contact`");
      $ctr=1;
      while($row = mysqli_fetch_assoc($sql))
      {
      ?>
                        <ul class="ttm_contact_widget_wrapper list-inline">
                            <li><h5 class="title font-weight-normal mb-10"><i class="pr-10 ttm-textcolor-skincolor ti ti-location-pin"></i>Location</h5><?php echo $row['addr']; ?></li>
                            <li class="mt-15 mb-20 ">
                                <span class="ttm-horizontal_sep"></span>
                            </li>
                            <li><h5 class="title font-weight-normal mb-10"><i class="pr-10 ttm-textcolor-skincolor fa fa-envelope-o"></i>Email</h5><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></li>
                            <li class="mt-15 mb-20 d-block">
                                <span class="ttm-horizontal_sep"></span>
                            </li>
                            <li><h5 class="title font-weight-normal mb-10"><i class="pr-10 ttm-textcolor-skincolor fa fa-phone"></i>Toll Free Number</h5><?php echo $row['phone']; ?></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="col-lg-7">
                       <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor z-index-2 spacing-7">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="mb-30 res-991-mb-0">
                                    <h3>Want to talk? Let`s do it!</h3>
                                </div>
                                <form  action="#" class="ttm-contactform_transparent wrap-form clearfix" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="email" type="text" value="" placeholder="Your Email" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="subject" type="text" value="" placeholder="Subject" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <label>
                                        <span class="text-input"><textarea name="message" rows="3" placeholder="Message" required="required"></textarea></span>
                                    </label>
                                    <div class="mt-35">
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" name="send" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- conatact-section end -->

        <!--google_map-->
        <div id="google_map" class="google_map">
            <div class="map_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58842.55344596374!2d86.06764830844445!3d22.815074151529213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e4958f000001%3A0xed8fdca4f040cee9!2sSrinath%20Public%20School!5e0!3m2!1sen!2sin!4v1624607691670!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               
            </div>
        </div>
    </div><!--site-main end-->


    <?php
    include './include/footer.php';
    
    ?>