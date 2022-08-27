<?php
    include './include/header.php';
    include './include/db1.php';
    
    if(isset($_POST['send']))
    {
    $post = $_POST['post'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
    $exp = $_POST['exp'];    
 
	$sql1 = "INSERT INTO `career`(`post`, `name`, `phone`, `email`, `subject`, `exp`) 
    VALUES ('$post', '$name', '$phone', '$email', '$subject', '$exp')";
	$result = mysqli_query($conn , $sql1);
	if($result){
	echo "<script> alert('Your Details are Sent successfully.');</script>";
	}
    else
    echo "<script> alert('Some Error Occured!!');</script>";
    }
    ?>
    

            <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/Career.jpg" style="width:100%"/>
            
                
                
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!--- conatact-section -->
        <section class="ttm-row conatact-section bg-map pb-0 clearfix" style="margin-bottom: 30px;">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-9">
                       <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor z-index-2 spacing-7">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="mb-30 res-991-mb-0">
                                    <h5>Please mail your resume at hemkundpublicschool@gmail.com</h5>
                                </div>
                                <form  action="#" class="ttm-contactform_transparent wrap-form clearfix" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>
                                                <span class="text-input"><input name="post" type="text" value="" placeholder="POST APPLYING FOR *" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Contact No" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="email" type="text" value="" placeholder="Email id" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="subject" type="text" value="" placeholder="Subject" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input"><input name="exp" type="text" value="" placeholder="TEACHING EXPERIENCE " required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                        		<span class="text-input"><textarea name="message" rows="3" placeholder="Qualification" required="required"></textarea></span>
                                    		</label>
                                        </div>
                                    </div>
                                    <div class="mt-35">
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" name="send" type="submit">Send Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-3 mr-auto">
                        <div class="mb-25">
                            <h3>Vacancies</h3>
                        </div>
                        <ul class="ttm_contact_widget_wrapper list-inline">
                            <li><h5 class="title font-weight-normal mb-10">Experience Required
</h5>5 Years</li>
                            <li class="mt-15 mb-20 ">
                                <span class="ttm-horizontal_sep"></span>
                            </li>
                            <li><h5 class="title font-weight-normal mb-10">Qualifications
</h5>B.Ed</li>
                            <li class="mt-15 mb-20 d-block">
                                <span class="ttm-horizontal_sep"></span>
                            </li>
                            <li><h5 class="title font-weight-normal mb-10">Contact 
</h5> 0657-22383114</li>
                        </ul>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- conatact-section end -->

        <!--google_map-->
        <br>

    </div><!--site-main end-->


    <?php
    include './include/footer.php';
    
    ?>