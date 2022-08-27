<?php 
// DB credentials.
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $con = mysqli_connect('localhost','root','','hemkund_school');
} else {
    $con = mysqli_connect('localhost','hemkundschool2022_hemkundschool_db','Hemkundschool@2022','hemkundschool2022_hemkundschool_db');
}
if(!$con)
{
    die('unable to connect to database');
}
// else
// {
//     echo "<script>
//     alert('connected');
//     </script>
//     ";
// }
if ($_SERVER['HTTP_HOST'] == 'localhost') {
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','hemkund_school');
}
else
{
define('DB_HOST','localhost');
define('DB_USER','hemkundschool2022_hemkundschool_db');
define('DB_PASS','Hemkundschool@2022');
define('DB_NAME','hemkundschool2022_hemkundschool_db');
}

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
