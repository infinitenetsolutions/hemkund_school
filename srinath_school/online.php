<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from school_admission  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data deleted successfully";

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
	
	<title>Hemkund School Portal |Admin Manage Admission Details</title>

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

						<h2 class="page-title">Manage Admission Details</h2>
							<div class="panel panel-default">
							<div class="panel-heading">Listed  Details 
                            <a href="export.php" style="
    position: absolute;
    right: 50px;
    background: #ff4f01;
    padding: 5px 25px;
    color: #fff;
    font-weight: 900;
    font-size: 15px;
">Export</a>
                            </div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<div class="table-responsive">
                                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sl. No.</th>
											<th>Student Name</th>
											<th>Student Dob</th>
                                            <th>Student Adhar</th>
                                            <th>Student Blood</th>
                                            <th>Student Gender</th>
                                            <th>Student Mother Tongue</th>
                                            <th>Student Nationality</th>
                                            <th>Student Religion</th>
                                            <th>Student Category</th>
                                            <th>Student Image</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Guardian Name</th>
                                            <th>Relationship</th>
                                            <th>Father Occupation</th>
                                            <th>Mother Occupation</th>
                                            <th>Annual Income</th>
                                            <th>Residential Address</th>
                                            <th>Permanent Address</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Pincode</th>
                                            <th>School Name</th>
                                            <th>Last Attended</th>
                                            <th>Promoted Class</th>
                                            
                                            <th>Action</th>
										</tr>
									</thead>
									
									<tbody>

									<?php $sql = "SELECT * from  school_admission";
                                   
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->student_name);?></td>
											<td><?php echo htmlentities($result->student_dob);?></td>
                                            <td><?php echo htmlentities($result->student_adhar);?></td>
                                            <td><?php echo htmlentities($result->student_blood);?></td>
                                            <td><?php echo htmlentities($result->student_gender);?></td>
                                            <td><?php echo htmlentities($result->student_mother_tongue);?></td>
                                            <td><?php echo htmlentities($result->student_nationality);?></td>
                                            <td><?php echo htmlentities($result->student_religion);?></td>
                                            <td><?php echo htmlentities($result->student_category);?></td>
                                            
                                            <!--<td><?php echo htmlentities($result->student_image);?></td>-->
                                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($result->student_image).'" style="width:50px;"/>'; ?></td>
                                            
                                            <td><?php echo htmlentities($result->father_name);?></td>
                                            <td><?php echo htmlentities($result->mother_name);?></td>
                                            <td><?php echo htmlentities($result->guardian_name);?></td>
                                            <td><?php echo htmlentities($result->relationship);?></td>
                                            <td><?php echo htmlentities($result->father_occupation);?></td>
                                            <td><?php echo htmlentities($result->mother_occupation);?></td>
                                            <td><?php echo htmlentities($result->annual_income);?></td>
                                            <td><?php echo htmlentities($result->residential_address);?></td>
                                            <td><?php echo htmlentities($result->permanent_address);?></td>
                                            <td><?php echo htmlentities($result->phone_no);?></td>
                                            <td><?php echo htmlentities($result->email);?></td>
                                            <td><?php echo htmlentities($result->pincode);?></td>
                                            <td><?php echo htmlentities($result->school_name);?></td>
                                            <td><?php echo htmlentities($result->last_attended);?></td>
                                            <td><?php echo htmlentities($result->promoted_class);?></td>
                                            
                                            
                                            
											<td><a href="admission_view.php?id=<?php echo $result->id;?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a href="online.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>
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
