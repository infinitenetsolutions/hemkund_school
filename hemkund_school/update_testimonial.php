<?php     
include "config.php";
$id=$_GET['id'];
if(isset($_POST['update']))
{
$msg= $_POST['msg'];
$description= $_POST['description'];
$image= $_FILES['image']['name'];
$image_temp=$_FILES['image']['tmp_name'];


if($image_temp != "")
{
    move_uploaded_file($image_temp , "img/vehicleimages/$image");
    $c_update="update testimonial set msg='$msg', description='$description' , image= '$image' where id='$id'";   
}
else
{
    $c_update="update testimonial set msg='$msg' , description='$description' where id='$id'";
}

$run_update=mysqli_query($con, $c_update);
}
?>      

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background: #b0e0a0;">
    
    <?php

$id=$_GET['id'];
$sql = "select * from `testimonial` where `id` = '$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div>
<form action="" method="post" enctype="multipart/form-data"  />
     <table width="1000px" align="center" bgcolor="blueskay">
        <tr align="center">
           <td colspan="2"><h2>Update Testimonial</h2></td>
        </tr>
        <tr>
            <td align="right">Name:</td>
            <td><input type="text" name="msg" value="<?php echo $row['msg']; ?>"  /></td>
        </tr>
         <tr>
            <td align="right">Messaage:</td>
            <!--<td><input type="text" name="description" value="<?php echo $row['description']; ?>"  /></td>-->
            <td><textarea rows="10" cols="60"  name="description"><?php echo $row['description']; ?></textarea></td>
        </tr>
        
        
        <tr>
             <td align="right">Image:</td>
             <td><input type="file" name="image" /><img src="img/vehicleimages/<?php echo $row['image']; ?>" width="150px" ></td>
        </tr>
        <tr align="center">
             <td colspan="2"><input type="submit" name="update" value="Update Account"/></td>
             <td></td>
        </tr> 
     </table>
   </form>
</div>


    </body>
</html>
