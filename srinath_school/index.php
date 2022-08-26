<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";

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

	<title>Srinath Public School | Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
    
    <style>
    @media(min-width:576px){
    .login{
   margin-top: 60px;
   margin-left: 50%;
    }
    }
    </style>
</head>

<body>

	<div class="login-page bk-img" style="background-image: url(img/adminlogin.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 login" >
						
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-10" style="margin-left: 50px;">
                            <img src="../images/logo_sri.png" style="width:90px;margin-left: 30%;">
                            <h1 class="text-center text-bold text-light ">Srinath Public School</h1>
                             <span class="text-center text-bold text-light " style="font-size: 30px;"><b style="font-family: 'FontAwesome';margin-left: 20%;"> Admin Login</b></span>
								<form method="post">

									<label for="" class="text-uppercase text-sm text-light">Your Username </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">

									<label for="" class="text-uppercase text-sm text-light">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">



									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>
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
