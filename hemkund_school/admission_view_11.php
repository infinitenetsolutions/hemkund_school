<?php
// $con = mysqli_connect('localhost','hemkundschool2022_hemkundschool_db','Hemkundschool@2022','hemkundschool2022_hemkundschool_db');
include('includes/config.php');
$id = $_GET['id'];
//print_r($id);
//exit();




?>

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

        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.1'
            type='text/css' media='all' />

        <style>
            .card-header:first-child {
                color: #fff;
                background: #ff4f01;
            }
            
            .card-title {
                font-weight: 700;
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
                            <div class="card-header" style="position:relative;">
                                <h3 class="card-title">Student Details</h3>
<a href="" onclick="window.print();" class="btn btn-success" style="padding: 10px 20px;font-weight: 900;position:absolute;right:20px;bottom:10px;">Print</a>
                            </div>
                            
                            
                             <?php
$query = "SELECT * FROM `class_xi` WHERE `id`='$id'";
$result = mysqli_query($con , $query);
$data = mysqli_fetch_assoc($result);
?>

                            <form role="form" action="" method="POST" id="" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12" id="error_section"></div>
                                        <div class="col-md-4 col-sm-12">

                                            <label class="label">Name of Student</label>
                                            <input type="text" name="name" value="<?php echo $data[name];?>" class="form-control" placeholder="Name of Student" readonly>

                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" value="<?php echo $data[dob];?>" readonly>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="label">Religion</label>
                                            <input type="text" name="religion" class="form-control" value="<?php echo $data[religion];?>" placeholder="Religion" readonly>
                                            <!--<select name="religion" class="form-control" readonly>
											<option value="#" disabled="">Select Religion</option>
											<option value="hindu" <?php echo ($data[religion] == 'hindu')?"selected":"" ?>>Hindu</option>
											<option value="muslim" <?php echo ($data[religion] == 'muslim')?"selected":"" ?>>Muslim</option>
											<option value="sikh" <?php echo ($data[religion] == 'sikh')?"selected":"" ?>>Sikh</option>
											<option value="christian" <?php echo ($data[religion] == 'christian')?"selected":"" ?>>Christian</option>
											<option value="other" <?php echo ($data[religion] == 'other')?"selected":"" ?>>Other</option>
											</select>-->
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label class="label">Nationality</label>
                                            <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?php echo $data[nationality];?>" readonly>
                                            <!--<select name="nationality" class="form-control" required="">
											  <option value="#" disabled="">Select Nationality</option>
											  <option value="indian" <?php echo ($data[nationality] == 'hindu')?"selected":"" ?>>Indian</option>
											  <option value="nri" <?php echo ($data[nationality] == 'hindu')?"selected":"" ?>>NRI</option>
											 </select>-->
                                        </div>

                                    </div>
                                </div>
                            </form>
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
                                            <input type="text" name="fname" class="form-control" placeholder="Father's Name" readonly value="<?php echo $data[fname];?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="label">Mother's Name</label>
                                            <input type="text" name="mname" class="form-control" placeholder="Mother's Name" readonly value="<?php echo $data[mname];?>">
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
                                            <textarea name="address" class="form-control" rows="3" placeholder="Full Address of Father/Guardian" readonly> <?php echo $data[address];?></textarea>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label class="label">Year of Passing Class X</label>
                                            <input type="text" name="year" class="form-control" rows="3" placeholder="Year of Passing Class X" readonly value="<?php echo $data[year];?>">
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label class="label">Name of Board</label>
                                            <input type="text" name="board" class="form-control" placeholder="Name of Board" readonly value="<?php echo $data[board];?>">
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
                                                            <?php
                                                              $e_max=$h_max=$m_max=$gs_max=$ss_max=$sn_max=0;
                                                              $e_ob=$h_ob=$m_ob=$gs_ob=$ss_ob=$sn_ob=0;
                                                              $e_per=$h_per=$m_per=$gs_per=$ss_per=$sn_per=0;
                                                              $e_med=$h_med=$m_med=$gs_med=$ss_med=$sn_med=0;
                                                              $e_agg=$h_agg=$m_agg=$gs_agg=$ss_agg=$sn_agg=0;
                                                              $query1 = "SELECT * FROM `marks` WHERE `student_id`='$data[id]'";
                                                              $result1 = mysqli_query($con , $query1);
                                                              while($data1 = mysqli_fetch_assoc($result1)){ 
                                                              if($data1[subject] == 'English')
                                                              {
                                                              	$e_max= $data1[max_marks];
                                                              	$e_ob= $data1[marks_obtain];
                                                              	$e_per= $data1[per_marks];
                                                              	$e_med= $data1[exam_medium];
                                                              	$e_agg= $data1[aggregate];
                                                              }                                                              
                                                              if($data1[subject] == 'Hindi')
                                                              {
                                                              	$h_max= $data1[max_marks];
                                                                $h_ob= $data1[marks_obtain];
                                                              	$h_per= $data1[per_marks];
                                                              	$h_med= $data1[exam_medium];
                                                              	$h_agg= $data1[aggregate];
                                                              }
                                                              if($data1[subject] == 'Maths')
                                                              {
                                                              	$m_max= $data1[max_marks];
                                                                $m_ob= $data1[marks_obtain];
                                                              	$m_per= $data1[per_marks];
                                                              	$m_med= $data1[exam_medium];
                                                              	$m_agg= $data1[aggregate];
                                                              }
                                                              if($data1[subject] == 'Gen Science')
                                                              {
                                                              	$gs_max= $data1[max_marks];
                                                                $gs_ob= $data1[marks_obtain];
                                                              	$gs_per= $data1[per_marks];
                                                              	$gs_med= $data1[exam_medium];
                                                              	$gs_agg= $data1[aggregate];
                                                              }
                                                              if($data1[subject] == 'Social Science')
                                                              {
                                                              	$ss_max= $data1[max_marks];
                                                                $ss_ob= $data1[marks_obtain];
                                                              	$ss_per= $data1[per_marks];
                                                              	$ss_med= $data1[exam_medium];
                                                              	$ss_agg= $data1[aggregate];
                                                              }
                                                              if($data1[subject] == 'Sanskrit')
                                                              {
                                                              	$sn_max= $data1[max_marks];
                                                                $sn_ob= $data1[marks_obtain];
                                                              	$sn_per= $data1[per_marks];
                                                              	$sn_med= $data1[exam_medium];
                                                              	$sn_agg= $data1[aggregate];
                                                              }
                                                              }
                                                            ?>
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
                                                    <?php ?>
                                                    <tbody>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="English" readonly="" name="subject[]"></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $e_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $e_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $e_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $e_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $e_agg; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="Hindi" name="subject[]" readonly=""></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $h_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $h_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $h_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $h_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $h_agg; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="Maths" name="subject[]" readonly=""></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $m_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $m_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $m_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $m_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $m_agg; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="Gen Science" name="subject[]" readonly=""></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $gs_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $gs_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $gs_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $gs_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $gs_agg; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="Social Science" name="subject[]" readonly=""></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $ss_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $ss_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $ss_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $ss_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $ss_agg; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><input type="text" class="form-control" value="Sanskrit" name="subject[]" readonly=""></th>
                                                            <td><input type="text" class="form-control" name="max[]" readonly value="<?php echo $sn_max; ?>"></td>
                                                            <td><input type="text" class="form-control" name="obtained[]" readonly value="<?php echo $sn_ob; ?>"></td>
                                                            <td><input type="text" class="form-control" name="percent[]" readonly value="<?php echo $sn_per; ?>"></td>
                                                            <td><input type="text" class="form-control" name="medium[]" readonly value="<?php echo $sn_med; ?>"></td>
                                                            <td><input type="text" class="form-control" name="aggregate[]" readonly value="<?php echo $sn_agg; ?>"></td>
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
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['transfer_certificate']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
                                                </div>

                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">Character Certificate O/C</label>
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['character_certificate']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
                                                </div>

                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">Marks Sheet O/C</label>
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['marks_sheet']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
                                                </div>

                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">Birth Certificate O/C</label>
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['birth_certificate']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
                                                </div>

                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">Medical Certifiacte</label>
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['medical_certificate']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">Co-curriculars activities : (Attach certificate in support ) </label>
                                                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($data['activities']) . '"' ?> alt="portfolio" height="250px" width="200px"/>
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
                                                    <input type="text" name="subject_desired1" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired1];?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="label">ii) Subject Two</label>
                                                    <input type="text" name="subject_desired2" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired2];?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="label">iii) Subject Three</label>
                                                    <input type="text" name="subject_desired3" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired3];?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="label">iv) Subject Four</label>
                                                    <input type="text" name="subject_desired4" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired4];?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="label">v) Subject Five</label>
                                                    <input type="text" name="subject_desired5" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired5];?>">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="label">vi) Subject Six</label>
                                                    <input type="text" name="subject_desired6" class="form-control" placeholder="Subject Name" readonly value="<?php echo $data[subject_desired6];?>">
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
                                                    <input type="text" name="father_occp" class="form-control" placeholder="Occupation of Father" readonly value="<?php echo $data[father_occp];?>">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Designation (If in service) </label>
                                                    <input type="text" name="father_desig" class="form-control" placeholder="Designation (If in service)" readonly value="<?php echo $data[father_desig];?>">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Annual Income (Rs) </label>
                                                    <input type="text" name="father_annual" class="form-control" placeholder="Annual Income (Rs)" readonly value="<?php echo $data[father_annual];?>">
                                                    <!--<select name="father_annual" class="form-control" required="">
													  <option value="#" disabled="">Select Father's Annual Income (Rs)</option>
													  <option value="1-2lakh" <?php echo ($data[father_annual] == '1-2lakh')?"selected":"" ?>>1 lakh - 2 Lakh</option>
													  <option value="2-3lakh" <?php echo ($data[father_annual] == '2-3lakh')?"selected":"" ?>>2 lakh - 3 Lakh</option>
													  <option value="3-4lakh" <?php echo ($data[father_annual] == '3-4lakh')?"selected":"" ?>>3 lakh - 4 Lakh</option>
													  <option value="4-5lakh" <?php echo ($data[father_annual] == '4-5lakh')?"selected":"" ?>>4 lakh - 5 Lakh</option>
													  <option value="5lakh-above" <?php echo ($data[father_annual] == '5lakh-above')?"selected":"" ?>>5 lakh - Above</option>
													 </select>-->
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Occupation of Mother </label>
                                                    <input type="text" name="mother_occp" class="form-control" placeholder="Occupation of Mother" readonly value="<?php echo $data[mother_occp];?>">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Designation (If in service) </label>
                                                    <input type="text" name="mother_desig" class="form-control" placeholder="Designation (If in service)" readonly value="<?php echo $data[mother_desig];?>">
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Annual Income (Rs) </label>
                                                    <input type="text" name="mother_annual" class="form-control" placeholder="Annual Income (Rs)" value="<?php echo $data[mother_annual];?>" readonly>
                                                    <!--<select name="mother_annual" class="form-control" required="">
													  <option value="#" disabled="">Select Mother's Annual Income (Rs)</option>
													  <option value="1-2lakh" <?php echo ($data[mother_annual] == '1-2lakh')?"selected":"" ?>>1 lakh - 2 Lakh</option>
													  <option value="2-3lakh" <?php echo ($data[mother_annual] == '2-3lakh')?"selected":"" ?>>2 lakh - 3 Lakh</option>
													  <option value="3-4lakh" <?php echo ($data[mother_annual] == '3-4lakh')?"selected":"" ?>>3 lakh - 4 Lakh</option>
													  <option value="4-5lakh" <?php echo ($data[mother_annual] == '4-5lakh')?"selected":"" ?>>4 lakh - 5 Lakh</option>
													  <option value="5lakh-above" <?php echo ($data[mother_annual] == '5lakh-above')?"selected":"" ?>>5 lakh - Above</option>
													 </select>-->
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Phone No. </label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone No." readonly value="<?php echo $data[phone];?>">
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Permanent Address </label>
                                                    <textarea name="perma_address" class="form-control" placeholder="Permanent Address" readonly><?php echo $data[perma_address];?></textarea>
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Mother Tounge of the student </label>
                                                    <input type="text" name="language" class="form-control" placeholder="Mother Tounge of the student" readonly value="<?php echo $data[language];?>">
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">Other Language Known </label>
                                                    <input type="text" name="other_lang" class="form-control" placeholder="Other Language Known" value="<?php echo $data[other_lang];?>" readonly>
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <label class="label">If suffering from any disease </label>
                                                    <input type="text" name="disease" class="form-control" placeholder="If suffering from any disease" value="<?php echo $data[disease];?>" readonly>
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
                                                    <input type="text" name="sibling_name1" class="form-control" placeholder="Enter Name" value="<?php echo $data[sibling_name1];?>" readonly>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">ii)  Enter Brother/Sister Name:</label>
                                                    <input type="text" name="sibling_name2" class="form-control" placeholder="Enter Name" value="<?php echo $data[sibling_name2];?>" readonly>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">iii)  Enter Brother/Sister Name:</label>
                                                    <input type="text" name="sibling_name3" class="form-control" placeholder="Enter Name" value="<?php echo $data[sibling_name3];?>" readonly>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="label">iv)  Enter Brother/Sister Name:</label>
                                                    <input type="text" name="sibling_name4" class="form-control" placeholder="Enter Name" value="<?php echo $data[sibling_name4];?>" readonly>
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
                                                    <input type="checkbox" id="c1" name="cc">
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
                                                    <p style="display: inline-flex;"> a) I do hereby declare that the information furnished in respect of my son / daughter / ward &nbsp;
                                                        <input type="text" class="form-control" name="ward_name" style="width:200px;" placeholder="Enter Your Ward Name" value="<?php echo $data[ward_name];?>" readonly> &nbsp;is true of my knowledge &amp; belief.
                                                    </p>
                                                    <p>b) I shall abide by the rules of the school .</p>
                                                    <p>c) If my ward commits any kind of indiscipline he/she may be expelled / punished by the school.</p>
                                                    <p>d) He/ She will atleast attend 75% lectures failing which he /she may not be allowed to appear at the examination.</p>
                                                    <p>e) I will pay the school fee on time every month/quarter.
                                                    </p>
                                                    <p></p>
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
                                                    <p> b) That I have read all the terams and conditions prescribed by the school and agree to adide by it .</p>
                                                    <p>c) That the student should not be suffering from any chronic disease.
                                                    </p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- <div class="card card-secondary">
                                    <div class="card-body table-responsive p-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <input type="submit" name="submit1" id="submit1" value="Submit" class="btn btn-primary">
                                                    <input type="reset" value="Reset" class="btn btn-primary">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>


                </section>
            </div>

        </div>
    </body>

    </html>