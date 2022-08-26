<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
  $rand = rand(0000,9999).time();
  
$name=$_POST['name'];
$designation=$_POST['designation'];

$department=$_POST['department'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];

$img= $rand.$_FILES["img"]["name"];
move_uploaded_file($_FILES["img"]["tmp_name"],"img/vehicleimages/$rand".$_FILES["img"]["name"]);
$sql="INSERT INTO `staff`(name, designation, department, qualification, email, image) VALUES(:name, :designation, :department , :qualification , :email , :image)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':designation',$designation,PDO::PARAM_STR);
$query->bindParam(':qualification',$qualification,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':image',$img,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Record inserted successfully";
header('location:staff.php');
}
else 
{
$error="Something went wrong. Please try again";
}
}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Srinath School Portal | Admin Add Teachers</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Teacher Details</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
										
<div class="form-group">
<div class="col-sm-12">
<h4><b>Add Details</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-2">
<label class="control-label">Teacher Name</label>
</div>

<div class="col-sm-6">
<input type="text" class="form-control" name="name" id="name" required>
</div>
</div>


<div class="form-group">
<div class="col-sm-2">
<label class="control-label">Designation </label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="designation" id="designation" required>
</div>
</div>


<div class="form-group">
<div class="col-sm-2">
<label class="col-sm-4 control-label">Department</label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="department" id="department" required>
</div>
</div>

<div class="form-group">
<div class="col-sm-2">
<label class="col-sm-4 control-label">Qualification</label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="qualification" id="qualification" required>
</div>
</div>



<div class="form-group">
<div class="col-sm-2">
<label class="col-sm-4 control-label">Email</label>
</div>
<div class="col-sm-6">
<input type="email" class="form-control" name="email" id="email" required>
</div>
</div>



<!--<div class="form-group">
<div class="col-sm-2">
<label class="col-sm-4 control-label">Teacher Designation</label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="designation" id="designation" required>
</div>
</div>-->

<div class="form-group">
<div class="col-sm-2">
<label class="col-sm-4 control-label">Teacher Image </label>
</div>

<div class="col-sm-6">
<input type="file" name="img" class="form-control" required>
</div>
</div>

</div>
</div>
</div>
</div>
							
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>