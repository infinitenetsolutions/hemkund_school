<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $conn = mysqli_connect('localhost','root','','hemkund_school');
} else {
    $conn = mysqli_connect('localhost','hemkundschool2022_hemkundschool_db','Hemkundschool@2022','hemkundschool2022_hemkundschool_db');
}
if(!$conn)
{
    die('unable to connect to database');
}
else
{
    echo "<script>
    alert('connected');
    </script>
    ";
}
?>