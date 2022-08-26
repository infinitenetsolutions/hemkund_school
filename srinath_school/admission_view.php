<?php
$con = mysqli_connect('localhost','srinathschool_db','Srinath@123','srinathschool_db');
$id = $_GET['id'];
//print_r($id);
//exit();




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Srinath School | Admission Form </title>
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
                            <img src="https://srinathschool.com/images/logo-img.png" style="width:400px;" />
                            <!-- <h1 class="text-center">SRINATH PUBLIC SCHOOL</h1> -->
                            <!-- <h5 class="text-center">( A Unit of Sandhya Sambhu Educational Trust )</h5>
                            <h5 class="text-center">(Affiliated to CBSE, New Delhi, Affiliation No : 3430390, School Code : 66595)</h5>
                            <h4 class="text-center"> Dindli, Adityapur, Seraikella-Kharsawan - 831013</h4>
                            <h4 class="text-center"> Ph.:0657-2383114, 8986626046</h4> -->
                            <h2 class="app-heading text-center"> APPLICATION FORM FOR REGISTRATION / ADMISSION</h2>
                            <h2 class="app-heading-two text-center"> Class - Nursery to VIII </h2>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                            </ol>
                        </div> -->
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
$query = "SELECT * FROM `school_admission` WHERE `id`='$id'";
$result = mysqli_query($con , $query);
$data = mysqli_fetch_assoc($result);
?>
                        <form method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12" id="error_section"></div>
            <div class="col-md-4 col-sm-12">

                <label class="label">Name of Student</label>
                <input readonly value="<?php echo $data['student_name'];?>" type="text" name="student_name" class="form-control" placeholder="Name of Student" required>

            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Date of Birth</label>
                <input readonly type="date" name="student_dob" class="form-control" value="<?php echo $data['student_dob'];?>" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Student Adhar No</label>
                <input readonly type="number" name="student_adhar" class="form-control" value="<?php echo $data['student_adhar'];?>" placeholder="Student Adhar No" required>
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Blood Group</label>
                <input readonly type="text" name="student_blood" class="form-control" placeholder="Student Adhar No" value="<?php echo $data['student_blood'];?>" required>
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Gender</label>
                <input readonly type="text" name="student_blood" class="form-control" placeholder="Student Adhar No" value="<?php echo $data['student_gender'];?>" required>
                
                <!--<select id="gender" name="student_gender" class="form-control" disabled>
                                                <option value="0">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                              </select>-->
            </div>

            <div class="col-md-4 col-sm-12">
                <label class="label">Mother Tongue</label>
                <input readonly type="text" name="student_mother_tongue" class="form-control" value="<?php echo $data['student_mother_tongue'];?>" placeholder="Mother Tongue" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Nationality</label>
                <input readonly type="text" name="student_nationality" class="form-control" value="<?php echo $data['student_nationality'];?>" placeholder="Nationality" required>
            </div>

            <div class="col-md-4 col-sm-12">
                <label class="label">Religion</label>
                <input readonly type="text" name="student_religion" class="form-control" value="" value="<?php echo $data['student_religion'];?>" placeholder="Religion" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Category</label>
                 <input readonly type="text" name="student_religion" class="form-control" value="" value="<?php echo $data['student_category'];?>" placeholder="Religion" required>
                 
               <!-- <select name="student_category" class="form-control" required disabled>
                      <option value="0">Select</option>
                      <option value="General">General</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="OBC">OBC</option>
                    </select>-->
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Student Image :</label>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['student_image']).'" style="width:150px;" class="img-thumbnail"/>'; ?>                
            </div>
            
            
             <div class="col-md-4 col-sm-12">
                <label class="label">Mother Image :</label>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['mother_image']).'" style="width:150px;" class="img-thumbnail"/>'; ?>                
            </div>
            
             <div class="col-md-4 col-sm-12">
                <label class="label">Father Image :</label>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['father_image']).'" style="width:150px;" class="img-thumbnail"/>'; ?>                
            </div>
            
             <div class="col-md-4 col-sm-12">
                <label class="label">Guardian Image :</label>
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data['guardian_image']).'" style="width:150px;" class="img-thumbnail"/>'; ?>                
            </div>
            
            <div class="col-md-4 col-sm-12">
                                                  
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
                        <input readonly type="text" name="father_name" class="form-control" placeholder="Father's Name" required  value="<?php echo $data['father_name'];?>">
                    </div>


                    <div class="col-md-4">
                        <label class="label">Mother's Name</label>
                        <input readonly type="text" name="mother_name" class="form-control" placeholder="Mother's Name" required value="<?php echo $data['mother_name'];?>">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Guardian's Name</label>
                        <input readonly type="text" name="guardian_name" class="form-control" placeholder="Guardian's Name" required value="<?php echo $data['guardian_name'];?>">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Relationship with Student</label>
                        <input readonly type="text" name="relationship" class="form-control" placeholder="Relationship with Student" required value="<?php echo $data['relationship'];?>">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Father Occupation</label>
                        <input readonly type="text" name="father_occupation" placeholder="Father Occupation" class="form-control" required value="<?php echo $data['father_occupation'];?>">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Mother Occupation</label>
                        <input readonly type="text" name="mother_occupation" placeholder="Mother Occupation" class="form-control" required value="<?php echo $data['mother_occupation'];?>">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Annual Income</label>
                        <input readonly type="number" name="annual_income" class="form-control" placeholder="Annual Income" required value="<?php echo $data['annual_income'];?>">
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
                    <div class="col-md-6 col-sm-12">
                        <label class="label">Residential Address</label>
                        <textarea disabled name="residential_address" class="form-control" rows="1" placeholder="Residential Address" required><?php echo $data['residential_address'];?></textarea>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label class="label">Permanent Address</label>
                        <textarea disabled name="permanent_address" class="form-control" rows="1" placeholder="Permanent Address" required><?php echo $data['permanent_address'];?></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Phone No</label>
                        <input readonly type="number" name="phone_no" class="form-control" placeholder="Phone No" required value="<?php echo $data['phone_no'];?>">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Email Id</label>
                        <input readonly type="email" name="email" class="form-control" placeholder="Email Id" required value="<?php echo $data['email'];?>">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Pin Code</label>
                        <input readonly type="number" name="pincode" class="form-control" placeholder="Pin Code" required value="<?php echo $data['pincode'];?>">
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title"> Perticular of Previous Studies</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Name of School</label>
                        <input readonly type="text" name="school_name" class="form-control" placeholder="Name of School" required value="<?php echo $data['school_name'];?>"/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Class last Attended / is studing</label>
                        <input readonly type="text" name="last_attended" class="form-control" placeholder="Class last Attended" required value="<?php echo $data['last_attended'];?>"/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Promoted to Class</label>
                        <input readonly type="text" name="promoted_class" class="form-control" placeholder="Promoted to Class" required value="<?php echo $data['promoted_class'];?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title"> For Office Use</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Form No</label>
                        <input type="text" name="" class="form-control" placeholder="Form No" required value=""/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Admission No</label>
                        <input type="text" name="" class="form-control" placeholder="Admission No" required value=""/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Recipt No</label>
                        <input type="text" name="" class="form-control" placeholder="Recipt No" required value="">
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Admitted In</label>
                        <input type="text" name="" class="form-control" placeholder="Admitted In" required value="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Date</label>
                        <input type="date" name="" class="form-control" required value="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="label">Session From</label>
                        <input type="date" name="" class="form-control" required value="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label class="label">Session To</label>
                        <input type="date" name="" class="form-control"  required value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="card card-secondary">
        <div class="card-body table-responsive p-4">
            <div class="col-md-6">
            <a href="" class="btn btn-primary" onclick="window.print();">Print</a>
                <!--<input readonly type="submit" name="submit" value="Submit" class="btn btn-primary" />
                
                <button type="reset" class="btn btn-primary">Reset</button>-->
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