<?php 
// DB credentials.
$con = mysqli_connect('localhost','srinathschool_db','Srinath@123','srinathschool_db');

define('DB_HOST','localhost');
define('DB_USER','srinathschool_db');
define('DB_PASS','Srinath@123');
define('DB_NAME','srinathschool_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>