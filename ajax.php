 <?php
error_reporting('E_ALL');
$host = 'localhost';
$db = 'hemkundschool2022_hemkundschool_db';

$user = 'hemkundschool2022_hemkundschool_db';
$pass = 'Hemkundschool@2022';
 
 echo 'done';
 
$con = new mysqli($host, $user, $pass, $db);
if (mysqli_connect_errno()) {    printf("Connect failed: %s\n", mysqli_connect_error());    exit(); }


 if($_GET['act'] == 'contactus')
    {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $subject = $_POST['subject'];
	$message = $_POST['msg'];
 

	
	$result = $con->query("INSERT INTO `contact_us`(`name`, `email`, `phone`, `subject`, `msg`, time)   VALUES ('$name','$email','$phone','$subject','$message', NOW())") OR die(mysqli_errror($con));
	
	if($result)
	{
		$mg = '<div class = alert alert-success">Your Message Sent successfully. You will be informed</div>';
		}
    else
		$mg = '<div class = alert alert-danger">Your Message Sending Failed.</div>';
    }
?>