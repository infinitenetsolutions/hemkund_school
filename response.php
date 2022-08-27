<?php
// include file
include_once('easebuzz-lib/easebuzz_payment_gateway.php');
include 'connection.php';
// salt for testing env
$SALT = "4LP8BZIIJ3";

/*
    * Get the API response and verify response is correct or not.
    *
    * params string $easebuzzObj - holds the object of Easebuzz class.
    * params array $_POST - holds the API response array.
    * params string $SALT - holds the merchant salt key.
    * params array $result - holds the API response array after valification of API response.
    *
    * ##Return values
    *
    * - return array $result - hoids API response after varification.
    * 
    * @params string $easebuzzObj - holds the object of Easebuzz class.
    * @params array $_POST - holds the API response array.
    * @params string $SALT - holds the merchant salt key.
    * @params array $result - holds the API response array after valification of API response.
    *
    * @return array $result - hoids API response after varification.
    *
    */
$easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);

$result = $easebuzzObj->easebuzzResponse($_POST);

print_r($result);
$result = json_decode($result, true);


$connection = '';
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $connection = mysqli_connect('localhost','root','','srinathschool_db');
} else {
    $connection = mysqli_connect('localhost','srinathschool_db','Srinath@123','srinathschool_db');
}
//echo "<h1>EaseBuzz</h1>"; 
// $chk_tx = $result["data"]["status"];
// echo "<br>";
// $_SESSION['email'] = $email;
$payment_status = $result['data']['status'];
if ($payment_status == 'success') {

    $amount = $result['data']['net_amount_debit'];
    $payment_mode = $result['data']['mode'];
    $deposit_to = $result['data']['bank_ref_num'];
    $bank_name = $result['data']['bank_name'];
    $transaction_no = $result['data']['txnid'];
    $transaction_date = $result['data']['addedon'];
    // $post_at=$result['data']['bank_ref_num'];
    $type = $result['data']['PG_TYPE'];
    $easebuzz_id = $result['data']['easepayid'];
    $transaction_id = $result['data']['txnid'];
    $status = md5('visible');
    $email = $result['data']['email'];
$amount = $result['data']['amount'];
    
    $_SESSION['email'] = $email;
    // here to gettiong the propectus no automatic
 
    // getting the current time and store into the table
    $timing = date("Y/m/d   h:i:sa");
    // $prospectus_number=rand(1000000,999999);
 
        
    echo $update_payment = "UPDATE `school_admission` SET `payment_status`='$payment_status',`amount`='$amount',`payment_mode`='$payment_mode',`deposite_to`='$deposit_to',`bank_name`='$bank_name',`transaction_no`='$transaction_no',`transaction_date`='$transaction_date',`timing`='$timing',`type`='$type',`easebuzz_id`='$easebuzz_id',`transaction_id`='$transaction_id',`status`='$status' WHERE `email`='$email' ";  
    
    
    $update_payment_result = mysqli_query($connection, $update_payment);
    
    if ($update_payment_result) {
        // getting the data for the send the email 
        $propectus_no_query = "SELECT * FROM `school_admission`  WHERE `email`='$email'";
        $p_no_result = mysqli_query($connection, $propectus_no_query);
        $data_row = mysqli_fetch_array($p_no_result);
        $name = $data_row['name'];
        $promoted_class = $data_row['promoted_class'];
            
        $p_no_result = mysqli_query($connection, $propectus_no_query);

        // here to start send the email to the user 
        // include '../Backend/sendprospectus.php';
        // prospectus_mail($email, $amount, $promoted_class, $name);               

         echo '<script> window.location.replace("../print_form.php") </script>';
    }
} else {
    $_SESSION['email'] = $email;
    //echo '<script> alert("working"); </script>';
     echo '<script> window.location.replace("school_admission.php") </script>';
}
