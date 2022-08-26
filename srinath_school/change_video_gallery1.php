<?php
session_start();
error_reporting(0);
include('includes/config.php');

$id=$_GET['imgid'];
if(isset($_POST['update']))
{
$msg = substr($_POST['msg'],0,4);
//$msg= $_POST['msg'];
$description= $_POST['description'];
$image= $_FILES['image']['name'];
$image_temp=$_FILES['image']['tmp_name'];


if($image_temp != "" && $msg != "")
{
    move_uploaded_file($image_temp , "img/vehicleimages/$image");
    $c_update="update video_gallery set year='$msg', event='$description', video= '$image' where id='$id'";   
}
else if($image_temp != "" && $msg == "")
{
    move_uploaded_file($image_temp , "img/vehicleimages/$image");
    $c_update="update video_gallery set event='$description', video= '$image' where id='$id'";   
}
else if($image_temp == "" && $msg != "")
{
     $c_update="update video_gallery set year='$msg', event='$description' where id='$id'";   
}
else
{
    $c_update="update video_gallery set event='$description' where id='$id'";
}

$run_update=mysqli_query($con, $c_update);
if($run_update){
header("location:video_gallery.php");
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
	
	<title>Srinath Public School | Admin Gallery Updation </title>   

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

td, th {
    padding: 8px;
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
					
						<h2 class="page-title">Video Gallery Details </h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Edit Video Gallery Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>





<div class="form-group">
												

<?php
$id=$_GET['imgid'];
$sql = "select * from `video_gallery` where `id` = '$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>
<div>
<form action="" method="post" enctype="multipart/form-data"  />
     <table width="500px" align="center" bgcolor="blueskay">
        <tr align="center">
           <td colspan="4"><h2>Update Video</h2></td>
        </tr>
        <tr>
            <td align="right">Select New Video Date:</td>
            <td><input type="month" name="msg"  /></td>
        </tr>
        
        <tr>
            <td align="right">Previous Date:</td>
            <td><input type="text" name="msg" disabled value="<?php echo $row['year']; ?>"  /></td>
       	</tr>
        
        <tr></tr>
            
        <tr>
            <td align="right">Update Video Description:</td>
            <td><textarea rows="4" cols="50" name="description"><?php echo $row['event']; ?></textarea></td>
        </tr>
               
        <tr>
             <td align="right">Select New Video:</td>
             <td><input type="file" name="image" required accept="video/*"></td>
        </tr>
        
        <tr>
        	<td align="right">Current Video:</td>
            <td><video width="250" height="140" controls><source src="img/vehicleimages/<?php echo $row['video']; ?>" type="video/mp4"></video></td>
        </tr>
        <tr align="center">
             <td colspan="2">
             <button class="btn btn-primary" name="update" type="submit">Update</button></td>
             <td></td>
        </tr> 
     </table>
   </form>
</div>
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