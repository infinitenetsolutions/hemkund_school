<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','hemkundschool2022_hemkundschool_db','Hemkundschool@2022','hemkundschool2022_hemkundschool_db');


$query = "SELECT * FROM `school_admission` WHERE `id`='$id'";
$result = mysqli_query($con , $query);


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
                            <img src="images/logo-img.png" style="width:400px;" />
                            <h2 class="app-heading text-center"> APPLICATION FORM FOR REGISTRATION / ADMISSION</h2>
                            <h2 class="app-heading-two text-center"> Class - Nursery to IX </h2>
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
                <input readonly type="text" name="student_name" value="" class="form-control" placeholder="Name of Student" required>

            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Date of Birth</label>
                <input readonly type="date" name="student_dob" class="form-control" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Student Adhar No</label>
                <input readonly type="number" name="student_adhar" class="form-control" value="" placeholder="Student Adhar No" required>
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Blood Group</label>
                <input readonly type="text" name="student_blood" class="form-control" placeholder="Student Adhar No" required>
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Gender</label>
                <select id="gender" name="student_gender" class="form-control">
                                                <option value="0">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                              </select>
            </div>

            <div class="col-md-4 col-sm-12">
                <label class="label">Mother Tongue</label>
                <input readonly type="text" name="student_mother_tongue" class="form-control" placeholder="Mother Tongue" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Nationality</label>
                <input readonly type="text" name="student_nationality" class="form-control" placeholder="Nationality" required>
            </div>

            <div class="col-md-4 col-sm-12">
                <label class="label">Religion</label>
                <input readonly type="text" name="student_religion" class="form-control" value="" placeholder="Religion" required>
            </div>
            <div class="col-md-4 col-sm-12">
                <label class="label">Category</label>
                <select name="student_category" class="form-control" required>
                      <option value="0">Select</option>
                      <option value="General">General</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="OBC">OBC</option>
                    </select>
            </div>


            <div class="col-md-4 col-sm-12">
                <label class="label">Image</label>
                <input readonly type="file" name="student_image" class="form-control">
            </div>
            <!-- <div class="col-md-4 col-sm-12">
                                        <img src="http://www.clipartpanda.com/clipart_images/user-66327738/download.png" id="photoBrowser" style="margin-top:17px;margin-left:4px;border:solid 1px lightgray" width="120" height="120">
                                    </div>-->

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
                        <input readonly type="text" name="father_name" class="form-control" placeholder="Father's Name" required>
                    </div>


                    <div class="col-md-4">
                        <label class="label">Mother's Name</label>
                        <input readonly type="text" name="mother_name" class="form-control" placeholder="Mother's Name" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Guardian's Name</label>
                        <input readonly type="text" name="guardian_name" class="form-control" placeholder="Guardian's Name" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Relationship with Student</label>
                        <input readonly type="text" name="relationship" class="form-control" placeholder="Relationship with Student" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label class="label">Father Occupation</label>
                        <input readonly type="text" name="father_occupation" placeholder="Father Occupation" class="form-control" required>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Mother Occupation</label>
                        <input readonly type="text" name="mother_occupation" placeholder="Mother Occupation" class="form-control" required>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Annual Income</label>
                        <input readonly type="number" name="annual_income" class="form-control" placeholder="Annual Income" required>
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
                        <textarea name="residential_address" class="form-control" rows="3" placeholder="Residential Address" required></textarea>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label class="label">Permanent Address</label>
                        <textarea name="permanent_address" class="form-control" rows="3" placeholder="Permanent Address" required></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Phone No</label>
                        <input readonly type="number" name="phone_no" class="form-control" placeholder="Phone No" required>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Email Id</label>
                        <input readonly type="email" name="email" class="form-control" placeholder="Email Id" required>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Pin Code</label>
                        <input readonly type="number" name="pincode" class="form-control" placeholder="Pin Code" required>
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
                        <input readonly type="text" name="school_name" class="form-control" placeholder="Name of School" required/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Class last Attended / is studing</label>
                        <input readonly type="text" name="last_attended" class="form-control" placeholder="Class last Attended" required/>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label class="label">Promoted to Class</label>
                        <input readonly type="text" name="promoted_class" class="form-control" placeholder="Promoted to Class" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-secondary">
        <div class="card-body table-responsive p-4">
            <div class="col-md-6">
                <input readonly type="submit" name="submit" value="Submit" class="btn btn-primary" />
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <button type="reset" class="btn btn-primary">Reset</button>
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