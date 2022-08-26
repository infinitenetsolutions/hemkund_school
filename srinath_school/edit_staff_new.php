<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
$id = $_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$designation=$_POST['designation'];	
$department=$_POST['department'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];

//$phone=$_POST['phone'];

$sql="update staff set name=:name,designation=:designation,department=:department,qualification=:qualification,email=:email, where id=:id";
$query = $dbh->prepare($sql);

$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':designation',$designation,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':qualification',$qualification,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);


$query->bindParam(':id',$id,PDO::PARAM_STR);
//$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->execute();
$msg="Info Updated successfully";
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
	
	<title>Srinath School Portal | Admin Update Contact</title>

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
					
						<h2 class="page-title">Update Staff Info</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Form fields</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<?php $sql = "SELECT * from  staff where id=$id";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				
?>	

												<div class="form-group">
												<label class="col-sm-2 control-label"> Teacher Name</label>
												<div class="col-sm-6">
													<!--<textarea class="form-control" name="name" id="name" required><?php echo htmlentities($result->name);?></textarea>-->
												<input type="text" class="form-control" name="name" id="name" value="<?php echo htmlentities($result->name);?>" required>
                                                </div>
											</div>
											
                                            
                                            
                                            <div class="form-group">
												<label class="col-sm-2 control-label"> Designation</label>
												<div class="col-sm-6">
													<!--<textarea class="form-control" name="designation" id="designation" required><?php echo htmlentities($result->designation);?></textarea>-->
												<input type="text" class="form-control" name="designation" id="designation" value="<?php echo htmlentities($result->designation);?>" required>
                                                </div>
											</div>
											
                                            
                                            
                                            <div class="form-group">
												<label class="col-sm-2 control-label"> Department</label>
												<div class="col-sm-6">
													<!--<textarea class="form-control" name="department" id="department" required><?php echo htmlentities($result->department);?></textarea>-->
												<input type="text" class="form-control" name="department" id="department" value="<?php echo htmlentities($result->department);?>" required>
                                                </div>
											</div>
											
                                            
                                            
                                            <div class="form-group">
												<label class="col-sm-2 control-label"> Qualification</label>
												<div class="col-sm-6">
													<!--<textarea class="form-control" name="name" id="name" required><?php echo htmlentities($result->name);?></textarea>-->
												<input type="text" class="form-control" name="qualification" id="qualification" value="<?php echo htmlentities($result->qualification);?>" required>
                                                </div>
											</div>
											
                                            
                                            
                                            <div class="form-group">
												<label class="col-sm-2 control-label"> Email</label>
												<div class="col-sm-6">
													<!--<textarea class="form-control" name="name" id="name" required><?php echo htmlentities($result->name);?></textarea>-->
												<input type="text" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->email);?>" required>
                                                </div>
											</div>
											

<?php 
}
} ?>
											<div class="hr-dashed"></div>
											
										
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
													<button class="btn btn-primary" name="submit" type="submit">Update</button>
												</div>
											</div>

										</form>
                                        
                                        
                                        <div class="form-group">
												<label class="col-sm-4 control-label"> Teacher Image</label>
                                                <img src="img/vehicleimages/<?php echo htmlentities($result->image);?>" style="width:200px;height:100px"/>
                                               
												<div class="col-sm-8">
													<a href="change_staff.php?id=<?php echo $id; ?>" class="btn btn-primary">Update image</a>
												</div>
											</div>
                                           

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