<?php
    include './include/header.php';
    include './include/db1.php';
    if(isset($_POST['send']))
    {
    $course = $_POST['course'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$city = $_POST['city'];
    $country = $_POST['country'];
    $pcode = $_POST['pcode'];
    $phone = $_POST['phone'];

	$sql1 = "INSERT INTO `admission`(`course`, `name`, `fname`, `mname`, `gender`, `dob`, `email`, `address`, `state`, `city`, `country`, `pcode`, `phone`) 
    VALUES ('$course', '$name', '$fname', '$mname', '$gender', '$dob', '$email', '$address', '$state', '$city', '$country', '$pcode', '$phone')";
	$result = mysqli_query($conn , $sql1);
	if($result){
	echo "<script> alert('Request Sent successfully. You will be informed');</script>";
	}
    else
    echo "<script> alert('Some Error Occured!!');</script>";
    }
    
    ?>


          <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/online admission.jpg" style="width:100%"/>                                           
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row" style="background: #141d3c;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-10 m-auto text-center">
                        
                        <div class="pb-20">
                           
                        </div>
                    </div>
                </div>
                 <h3 class="text-white">Register Today</h3>
                        <p>Fill in the data below.</p>
                <div class="row ttm-btn-shape-square ttm-btn-style-border">
             
                    <div class="col-lg-6 m-auto">
                        
                           
                           <div id="review_form_wrapper">
    <div class="comment-respond">
        
    <form id="prospectus_form" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Select Class :</label>
                                                <select id="course" name="course" class="form-control">
                                                    <option value="" selected=""> Select Class </option>
                                                    <option value="Class-1" > Class-1 </option>
                                                    <option value="Class-2"> Class-2 </option>
                                                    <option value="Class-3"> Class-3 </option>
                                                    <option value="Class-4"> Class-4 </option>
                                                    <option value="Class-5"> Class-5 </option>
                                                    <option value="Class-6"> Class-6 </option>
                                                    <option value="Class-7"> Class-7 </option>
                                                    <option value="Class-8"> Class-8 </option>
                                                    <option value="Class-9"> Class-9 </option>
                                                    <option value="Class-10"> Class-10 </option>                                                                                                                                                                                                
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Applicant Name :</label>
                                                <input id="name" name="name" class="form-control" placeholder="Enter Name" type="text">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Father's Name :</label>
                                                <input id="fname" name="fname" class="form-control" placeholder="Father's Name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Mother's Name :</label>
                                                <input id="mname" name="mname" class="form-control" placeholder="Mother's Name" type="text">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Select Gender :</label>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Date Of Birth :</label>
                                                <input id="dob" name="dob" class="form-control" placeholder="Enter DOB" type="date">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                           <div class="form-group col-md-12">
                                                <label for="">Email Address :</label>
                                                <input id="email" name="email" class="form-control" placeholder="Enter Email" type="email">
                                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Address :</label>
                                                <textarea id="address" name="address" class="form-control" placeholder="Enter Your Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Enter State :</label>
                                                <input id="state" name="state" class="form-control" value="" type="text"  placeholder="Enter State">
                                            </div>
                                            <div class="form-group col-md-6">
                                                 <label for="">Enter City :</label>
                                                <input id="city" name="city" class="form-control" value="" type="text"  placeholder="Enter City">
                                            </div>
                                           
                                        </div>
                                        <div class="form-row">
                                           <div class="form-group col-md-6">
                                                <label for="">Enter Country :</label>
                                                <input id="country" name="country" class="form-control" value="India" type="text" readonly="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Postal Code :</label>
                                                 <input id="pcode" name="pcode" class="form-control" placeholder="Enter Postal Code" type="text">
                                            </div>
                                        </div>
                                        <!-- OTP Section Starts -->
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Phone Number :</label>
                                                <input id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" type="text" maxlength="10" minlength="10">
                                              
                                            </div>
                                        </div>
                                        
                                    
                                        <!-- OTP Section Ends -->
                                        <!-- Submit And Payment Section Starts -->
                                        <div id="prospectus_submit_section" class="form-row" style="">
                                        
                                            <div class="form-group col-md-4 mt-4">
                                                <input type="hidden" name="action" value="prospectus">
                                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mt-20" type="submit" name="send">Submit & Apply</button>
                                            </div>
                                        </div>
                                        <!-- Submit And Payment Section Ends -->
                                    </form>
    </div>
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
