<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 


$customer_id=$_GET['id'];
$c_name= $_POST['msg'];


$c_image= $_FILES['image']['name'];
$c_image_temp=$_FILES['image']['tmp_name'];

if($c_image_temp != "")

{
    move_uploaded_file($c_image_temp , "img/vehicleimages/$c_image");
    $c_update="update testimonial set msg='$c_name', image= '$c_image'
     where id='$customer_id'";   
}else
{
    $c_update="update testimonial set msg='$c_name', image= '$c_image'
     where id='$customer_id'";   
}

$run_update=mysqli_query($con, $c_update);
}
?>      

<!DOCTYPE html>
<html lang="en">
    <title>Bootstrap Example</title>
   <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Edit Vehicle Info</title>

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
	
</head>
    <body>
    
   <?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
    <?php
include "includes/db.php";
$sql = "select * from `testimonial`";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
?>

<div style="margin-left:15%; margin-top:10%">
<form action="" method="post" enctype="multipart/form-data"  />
     <table width="500px" align="center" bgcolor="blueskay">
        <tr align="center">
           <td colspan="2"><h2>Update Your Account</h2></td>
        </tr>
        <tr>
            <td align="right">Customer Name:</td>
            <td><input type="text" name="msg" value="<?php echo $msg; ?>" required /></td>
        </tr>
        <tr>
             <td align="right">Customer Image:</td>
             <td><input type="file" name="image" value="<?php echo $image; ?>"  /><img src="img/vehicleimages/<?php echo $img; ?>" width="150px" height="100px"></td>
        </tr>
        
        <tr align="center">
             <td colspan="2"><input type="submit" name="update" value="Update Account"/></td>
             <td></td>
        </tr> 
     </table>
   </form>
</div>

<?php } ?>
    </body>
</html>
