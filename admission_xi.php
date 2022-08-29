<?php
include "connection.php";
include './include/header.php';

if(isset($_POST['submit1']))
    {
    $name = $_POST['name'];
	$dob = $_POST['dob'];
	$religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
	$fname = $_POST['fname'];
    $mname = $_POST['mname'];    
    $address = $_POST['address'];    
    $year = $_POST['year'];    
    $board = $_POST['board'];    
   $transfer_certificate = addslashes(file_get_contents($_FILES['transfer_certificate']['tmp_name']));   
    $character_certificate = addslashes(file_get_contents($_FILES['character_certificate']['tmp_name']));    
    $marks_sheet = addslashes(file_get_contents($_FILES['marks_sheet']['tmp_name']));    
    $birth_certificate = addslashes(file_get_contents($_FILES['birth_certificate']['tmp_name']));    
    $medical_certificate = addslashes(file_get_contents($_FILES['medical_certificate']['tmp_name'])); 
    $subject_desired1 = $_POST['subject_desired1'];    
    $subject_desired2 = $_POST['subject_desired2'];    
    $subject_desired3 = $_POST['subject_desired3'];    
    $subject_desired4 = $_POST['subject_desired4'];    
    $subject_desired5 = $_POST['subject_desired5'];    
    $subject_desired6 = $_POST['subject_desired6'];    
    $father_occp = $_POST['father_occp'];    
    $mother_occp = $_POST['mother_occp'];    
    $father_desig = $_POST['father_desig'];    
    $mother_desig = $_POST['mother_desig'];    
    $father_annual = $_POST['father_annual'];    
    $mother_annual = $_POST['mother_annual'];    
    $phone = $_POST['phone'];    
    $perma_address = $_POST['perma_address'];    
    $language = $_POST['language'];    
    $other_lang = $_POST['other_lang'];    
    $disease = $_POST['disease'];    
    $activities = addslashes(file_get_contents($_FILES['activities']['tmp_name']));    
    $sibling_name1 = $_POST['sibling_name1'];    
    $sibling_name2 = $_POST['sibling_name2'];    
    $sibling_name3 = $_POST['sibling_name3'];    
    $sibling_name4 = $_POST['sibling_name4'];    
    $ward_name = $_POST['ward_name'];   
    
    $_SESSION["student_name"] = $name;
	$_SESSION["promoted_class"] = '11';
	$_SESSION["phone_no"] = $phone;
	$_SESSION["address"] = $address;

	$_SESSION["surl"] = "https://hemkundpublicschool.com/response.php";
	$_SESSION["surl"] = "https://hemkundpublicschool.com/response.php"; 
	
	$sql1 = "INSERT INTO `class_xi`(`name`, `dob`,`religion`,`nationality`,`fname`,`mname`,`address`,`year`,`board`,`subject_desired1`,`subject_desired2`,`subject_desired3`,`subject_desired4`,`subject_desired5`,`subject_desired6`,`father_occp`,`mother_occp`,`father_desig`,`mother_desig`,`father_annual`,`mother_annual`,`phone`,`perma_address`,`language`,`other_lang`,`disease`,`sibling_name1`,`sibling_name2`,`sibling_name3`,`sibling_name4`,`ward_name`,`transfer_certificate`,`character_certificate`,`marks_sheet`,`birth_certificate`,`medical_certificate`,`activities`) 
    VALUES ('$name', '$dob','$religion','$nationality','$fname','$mname','$address','$year','$board','$subject_desired1','$subject_desired2','$subject_desired3','$subject_desired4','$subject_desired5','$subject_desired6','$father_occp','$mother_occp','$father_desig','$mother_desig','$father_annual','$mother_annual','$phone','$perma_address','$language','$other_lang','$disease','$sibling_name1','$sibling_name2','$sibling_name3','$sibling_name4','$ward_name','$transfer_certificate','$character_certificate','$marks_sheet','$birth_certificate','$medical_certificate','$activities')";
             //print_r($_POST);exit();
            // echo $sql1;exit();
	$result = mysqli_query($conn , $sql1);
    if($result)
    {
        $last_id = $conn->insert_id;
       // echo $last_id;
      for ($i=0; $i<count($_POST['subject']); $i++)
      {
        $subject = $_POST['subject'][$i];          
        $max = $_POST['max'][$i];          
        $obtained = $_POST['obtained'][$i];          
        $percent = $_POST['percent'][$i];          
        $medium = $_POST['medium'][$i];          
        $aggregate = $_POST['aggregate'][$i];          
        $qry1="INSERT INTO marks (`subject`,`max_marks`,`marks_obtain`,`per_marks`,`exam_medium`,`aggregate`,`student_id`) 
        VALUES ('$subject','$max','$obtained','$percent','$medium','$aggregate','$last_id')";

        $result1=mysqli_query($conn,$qry1);
        }
        }
        if($result1)
        {
            echo '<script> window.location.replace("easebuzz11.php") </script>';
	    }
        else
        echo "<script> alert('Some Error Occured!!');</script>";
    }

?>



<body>

    <!--whatsapp-->
    <a id="visionId" href="https://api.whatsapp.com/send?phone=918986626046&text=&source=&data=" target="_blank"
        class="float-vision" title="Call Now" style="z-index: 99999;">
        <i class="fa fa-whatsapp my-float-vision" style="color:white;"></i>
        <!--            <blink><div class="" style="color: #FFF; background: #c70013; opacity: 0.8; display: table-cell; vertical-align: middle; padding: 10px; border-radius: 3px; position: fixed; width: 8.5em; height: 3.0em; bottom: 14.7em; left: 5.5em;">Call Now</div></blink>-->
    </a>
    <!--// whatsapp-->

    <!--Enquiry form data get-->





    <div class="page">


      


        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Hemkund School | Admission Form </title>
            <link rel="icon" href="images/favicon.png" />
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <link rel='stylesheet' id='google-fonts-1-css'
                href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.1'
                type='text/css' media='all' />

            <style>
            .card-header:first-child {
                color: #fff;
                background: #7c0000;
            }

            .card-title {
                font-weight: 700;
                font-size: 19px;
                margin-bottom: 0px !important;
                text-transform: uppercase;
                font-family: monospace;
            }

            .app-heading {
                background: #ccc;
                font-size: 20px;
                font-weight: 800;
                border-radius: 10px;
                padding: 3px 10px;
            }

            .app-heading-two {
                background: #cccccc;
                font-size: 24px;
                border-radius: 10px;
                font-weight: 800;
                color: #ff4f01;
            }

            .label {
                font-weight: 600;
            }

            .card-title {
                color: #fff !important;
            }





            input[type="checkbox"] {
                display: none;
            }

            input[type="checkbox"]+label {
                /* color: #f2f2f2; */
            }

            input[type="checkbox"]+label span {
                display: inline-block;
                width: 19px;
                height: 19px;
                margin: -2px 10px 0 0;
                vertical-align: middle;
                background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) left top no-repeat;
                cursor: pointer;
            }

            input[type="checkbox"]:checked+label span {
                background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -19px top no-repeat;
            }
            </style>
        </head>

        <body class="hold-transition sidebar-mini">
            <div class="wrapper">
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6 m-auto text-center">
                                    <br>
                                    <h2 class="app-heading text-center"> APPLICATION FORM FOR ADMISSION</h2>
                                    <h2 class="app-heading-two text-center"> Class - XI </h2>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <!-- SELECT2 EXAMPLE -->
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Student Details</h3>
                                </div>
                                <form role="form" action="" method="POST" id="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12" id="error_section"></div>
                                            <div class="col-md-4 col-sm-12">

                                                <label class="label">Name of Student</label>
                                                <input type="text" name="name" value="" class="form-control" placeholder="Name of Student" required>

                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Date of Birth</label>
                                                <input type="date" name="dob" class="form-control" required>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Religion</label>
                                                <!--<input type="text" name="religion" class="form-control" value="" placeholder="Religion" required>-->
                                                <select name="religion" class="form-control" required>
                                                <option value="#" selected  disabled>Select Religion</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="muslim">Muslim</option>
                                                <option value="sikh">Sikh</option>
                                                <option value="christian">Christian</option>
                                                <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Nationality</label>
                                                <!--<input type="text" name="nationality" class="form-control" placeholder="Nationality" required>-->
                                                <select name="nationality" class="form-control" required>
                                                  <option value="#" selected  disabled>Select Nationality</option>
                                                  <option value="indian">Indian</option>
                                                  <option value="nri">NRI</option>
                                                 </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                            </div>

                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Parent Details</h3>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Father's Name</label>
                                                <input type="text" name="fname" class="form-control" placeholder="Father's Name" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="label">Mother's Name</label>
                                                <input type="text" name="mname" class="form-control" placeholder="Mother's Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Address Detail</h3>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Full Address of Father/Guardian</label>
                                                <textarea name="address" class="form-control" rows="3" placeholder="Full Address of Father/Guardian" required></textarea>
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Year of Passing Class X</label>
                                                <input type="text" name="year" class="form-control" rows="3" placeholder="Year of Passing Class X" required />
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <label class="label">Name of Board</label>
                                                <input type="text" name="board" class="form-control" placeholder="Name of Board" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Details of marks obtained in Class X</h3>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <div class="container-fluid">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Subjects</th>
                                                                <th>Max Marks</th>
                                                                <th>Marks Obta. </th>
                                                                <th>% of Marks</th>
                                                                <th>Medium of Exam </th>
                                                                <th>% Aggregate</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="English" readonly name="subject[]"></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="Hindi" name="subject[]" readonly></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="Maths" name="subject[]" readonly></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="Gen Science" name="subject[]" readonly></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="Social Science" name="subject[]" readonly></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                            <tr>
                                                                <th><input type="text" class="form-control" value="Sanskrit" name="subject[]" readonly></th>
                                                                <td><input type="text" class="form-control"  name="max[]" /></td>
                                                                <td><input type="text" class="form-control"  name="obtained[]" /></td>
                                                                <td><input type="text" class="form-control"  name="percent[]" /></td>
                                                                <td><input type="text" class="form-control"  name="medium[]" /></td>
                                                                <td><input type="text" class="form-control"  name="aggregate[]" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Documents Submitted </h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">Transfer Certificate O/C</label>
                                                        <input type="file" name="transfer_certificate" class="form-control" required>
                                                    </div>
                                                   
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">Character Certificate O/C</label>
                                                        <input type="file" name="character_certificate" class="form-control" required>
                                                    </div>
                                                   
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">Marks Sheet O/C</label>
                                                        <input type="file" name="marks_sheet" class="form-control" required>
                                                    </div>
                                                   
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">Birth Certificate O/C</label>
                                                        <input type="file" name="birth_certificate" class="form-control" required>
                                                    </div>
                                                   
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">Medical Certifiacte</label>
                                                        <input type="file" name="medical_certificate" class="form-control" required>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Desired Subject</h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">i) Subject One</label>
                                                        <input type="text" name="subject_desired1" class="form-control" placeholder="Subject Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">ii) Subject Two</label>
                                                        <input type="text" name="subject_desired2" class="form-control" placeholder="Subject Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">iii) Subject Three</label>
                                                        <input type="text" name="subject_desired3" class="form-control" placeholder="Subject Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">iv) Subject Four</label>
                                                        <input type="text" name="subject_desired4" class="form-control" placeholder="Subject Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">v) Subject Five</label>
                                                        <input type="text" name="subject_desired5" class="form-control" placeholder="Subject Name" required>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="label">vi) Subject Six</label>
                                                        <input type="text" name="subject_desired6" class="form-control" placeholder="Subject Name" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Other Information </h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Occupation of Father </label>
                                                        <input type="text" name="father_occp" class="form-control" placeholder="Occupation of Father" required>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Designation (If in service) </label>
                                                        <input type="text" name="father_desig" class="form-control" placeholder="Designation (If in service)" required>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Annual Income (Rs) </label>
                                                        <!--<input type="text" name="father_annual" class="form-control" placeholder="Annual Income (Rs)" required>-->
                                                        <select name="father_annual" class="form-control" required>
                                                          <option value="#" selected  disabled>Select Father's Annual Income (Rs)</option>
                                                          <option value="1-2lakh">1 lakh - 2 Lakh</option>
                                                          <option value="2-3lakh">2 lakh - 3 Lakh</option>
                                                          <option value="3-4lakh">3 lakh - 4 Lakh</option>
                                                          <option value="4-5lakh">4 lakh - 5 Lakh</option>
                                                          <option value="5lakh-above">5 lakh - Above</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Occupation of Mother </label>
                                                        <input type="text" name="mother_occp" class="form-control" placeholder="Occupation of Mother" required>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Designation (If in service) </label>
                                                        <input type="text" name="mother_desig" class="form-control" placeholder="Designation (If in service)" required>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Annual Income (Rs) </label>
                                                        <!--<input type="text" name="mother_annual" class="form-control" placeholder="Annual Income (Rs)" required>-->
                                                        <select name="mother_annual" class="form-control" required>
                                                          <option value="#" selected  disabled>Select Mother's Annual Income (Rs)</option>
                                                          <option value="1-2lakh">1 lakh - 2 Lakh</option>
                                                          <option value="2-3lakh">2 lakh - 3 Lakh</option>
                                                          <option value="3-4lakh">3 lakh - 4 Lakh</option>
                                                          <option value="4-5lakh">4 lakh - 5 Lakh</option>
                                                          <option value="5lakh-above">5 lakh - Above</option>
                                                         </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Phone No. </label>
                                                        <input type="text" name="phone" class="form-control" placeholder="Phone No." required>
                                                    </div>

                                                   <div class="col-md-4 col-sm-12">
                                                        <label class="label">Permanent Address </label>
                                                        <textarea name="perma_address" class="form-control" placeholder="Permanent Address" required></textarea>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Mother Tounge of the student </label>
                                                        <input type="text" name="language" class="form-control" placeholder="Mother Tounge of the student" required>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Other Language Known </label>
                                                        <input type="text" name="other_lang" class="form-control" placeholder="Other Language Known">
                                                    </div>

                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">If suffering from any disease </label>
                                                        <input type="text" name="disease" class="form-control" placeholder="If suffering from any disease">
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <label class="label">Co-curriculars activities : (Attach certificate in support ) </label>
                                                        <input type="file" name="activities" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Name of brother and sister if studying in Hemkund Public School</h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">i) Enter Brother/Sister Name:</label>
                                                        <input type="text" name="sibling_name1" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">ii)  Enter Brother/Sister Name:</label>
                                                        <input type="text" name="sibling_name2" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">iii)  Enter Brother/Sister Name:</label>
                                                        <input type="text" name="sibling_name3" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <label class="label">iv)  Enter Brother/Sister Name:</label>
                                                        <input type="text" name="sibling_name4" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">CERTIFICATE FROM THE PARENTS</h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <input type="checkbox" id="c1" name="cc" />
                                                        <label for="c1"><span></span>I /We hereby certify that the above
                                                            informaiton provided by me/us is correct and I/we understand
                                                            that if the information is found to be incorrect/false, the
                                                            ward shall be automatically debarred from selection /
                                                            admission process without any correspondence in this regard.
                                                            I/we also understand that the application/ registration
                                                            /short listing does not gurantee admisison to my ward.I/we
                                                            accept the process of admisison undertaken by the school and
                                                            I/we abide by the decision taken by the school authorities .
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Declaration </h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <p style="display: inline-flex;"> a) I do hereby declare that
                                                            the information furnished in
                                                            respect of my son / daughter / ward &nbsp;
                                                            <input type="text" class="form-control" name="ward_name" style="width:200px;" placeholder="Enter Your Ward Name"/> &nbsp;is true of my knowledge &
                                                            belief.</p>
                                                        <p>b) I shall abide by the rules of the school .</p>
                                                        <p>c) If my ward commits any kind of indiscipline he/she may be
                                                            expelled / punished by the school.</p>
                                                        <p>d) He/ She will atleast attend 75% lectures failing which he
                                                            /she may not be allowed to appear at the examination.</p>
                                                        <p>e) I will pay the school fee on time every month/quarter.
                                                        </p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Note </h3>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <p> a) The student must maintain good conduct in the school.</p>
                                                        <p> b) That I have read all the terams and conditions prescribed
                                                            by the school and agree to adide by it .</p>
                                                        <p>c) That the student should not be suffering from any chronic
                                                            disease.</p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="card card-secondary">
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                    <input type="submit" name="submit1" id="submit1" value="Submit" class="btn btn-primary" />
                                                    <input type="reset" value="Reset" class="btn btn-primary" />
                                                    </div>
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                </div>
                </section>
            </div>
    </div>
</body>

</html>

<!--cta-section-->
<section class="ttm-row cta-section ttm-bgcolor-skincolor text-center clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="font-weight-normal" style="margin-bottom: 0px;padding: 10px;">For the bright future
                    of your child join <b>Hemkund Public School</b> </h4>
            </div>
        </div>
    </div>
</section>
<!--cta-section end-->


</div>
<!--site-main end-->


<!--footer start-->
<footer class="footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="footer-logo">
                            <img id="footer-logo-img" class="img-center lazyload" data-src="images/logo-img1.png"
                                alt="image">
                        </div>
                        <div class="textwidget widget-text">
                            <p class="pb-10 pr-30 res-575-pr-0">The school was established in 2014. Hemkund Public
                                School is a Co-ed school affiliated to Central Board of Secondary Education</p>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Usefull Links</h3>
                        <ul id="menu-footer-quick-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                    <div class="widget style2 widget-out-link clearfix">
                        <h3 class="widget-title">Our Location</h3>
                        <p>beside Guru Nanak Welfare Society, Tin Plate Basti, Jamshedpur, Jharkhand-831003</p>
                        <p>hemkundpublicschool@gmail.com </p>
                        <p>+91 089866 26046</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">

                    </div>
                    <div class="widget widget-text clearfix">
                        <h3 class="widget-title">Newsletter</h3>
                        <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                            <div class="ttm_subscribe_form">
                                <input type="email" name="email" placeholder="Enter Email Address Here...." required="">
                                <button class="btn" type="submit"> <i class="fa fa-paper-plane-o"></i> </button>
                            </div>
                            <div class="subscribe-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul id="menu-footer-menu" class="footer-nav-menu ttm-textcolor-white">
                        <!--    <li><a href="#">Employees</a></li> -->
                        <li><a href="privacy.php">Privacy Policy</a></li>

                        <li><a href="terms.php">Terms Of Use</a></li>
                        <li><a href="contact.php">Contact</a></li>

                    </ul>
                    <!--   <div class="d-sm-flex flex-row align-items-center justify-content-center pt-35 pb-15">
                            <img data-src="images/footer-award-one.png" class="img-fluid lazyload" alt="award-one">
                            <div class="ml-30 pl-30 border-left res-575-ml-0 res-575-pl-0 res-575-mt-20">
                                <img data-src="images/footer-award-two.png" class="img-fluid lazyload" alt="award-two">
                            </div>
                        </div> -->
                    <div class="text-center pb-15">© Copyright Hemkund Public School 2021 All rights reserved |
                        Designed by<a href="https://www.infinitenetsolutions.com/"> Infinite Net Solutions</a></div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery-waypoints.js"></script>
<script src="js/jquery-validate.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/numinate.min.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/jquery-isotope.js"></script>
<script src="js/lazysizes.min.js"></script>
<script src="js/main.js"></script>
<!-- Javascript end-->
<script src="js/jquery.min.js"></script>

<script src="js/map.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Javascript end-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>
        $('#c1').click(function() {

            if ($(this).attr('checked') == false) {
                $('#submit1').attr("disabled", "disabled");
            } else {
                $('#submit1').removeAttr('disabled');
            }
        });
    </script>
    
</body>
</html>