<?php
$conn = new mysqli('localhost','srinathschool_db','Srinath@123','srinathschool_db');
//$conn = new mysqli('localhost', 'root', '');  
//mysqli_select_db($conn, 'crud');  
//$sql = "SELECT `student_name`, `student_dob`, `student_adhar`, `student_blood`, `student_gender`, `student_mother_tongue`, `student_nationality`, `student_religion`, `student_category`, `student_image`, `father_name`, `mother_name`, `guardian_name`, `relationship`, `father_occupation`, `mother_occupation`, `annual_income`, `residential_address`, `permanent_address`, `phone_no`, `email`, `pincode`, `school_name`, `last_attended`, `promoted_class`) VALUES ('$student_name', '$student_dob', '$student_adhar', '$student_blood', '$student_gender', '$student_mother_tongue', '$student_nationality', '$student_religion', '$student_category', '$data', '$father_name', '$mother_name', '$guardian_name', '$relationship', '$father_occupation', '$mother_occupation', '$annual_income', '$residential_address', '$permanent_address', '$phone_no', '$email', '$pincode', '$school_name', '$last_attended', '$promoted_class' FROM `school_admission`";  
$sql = "SELECT `id`, `student_name`, `student_dob`, `student_adhar`, `student_blood`, `student_gender`, `student_mother_tongue`, `student_nationality`, `student_religion`, `student_category`, `father_name`, `mother_name`, `guardian_name`, `relationship`, `father_occupation`, `mother_occupation`, `annual_income`, `residential_address`, `permanent_address`, `phone_no`, `email`, `pincode`, `school_name`, `last_attended`, `promoted_class` FROM `school_admission` WHERE 1";  
//$setRec = mysqli_query($conn, $sql);  

//$sql = "SELECT * FROM `school_admission`";
$result = mysqli_query($conn , $sql);
$data = mysqli_fetch_assoc($result);

//print_r($data);exit();

$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "Full Name" . "\t" . "DOB" . "\t" . "Adhaar No" . "\t" ."Blood Group" . "\t" ."Gender" . "\t" ."Mother Tongue" . "\t" ."Nationality" . "\t" ."Religion" . "\t" ."Category" . "\t" ."Father Name" . "\t" ."Mother Name" . "\t" ."Guardian Name" . "\t" ."Relationship" . "\t" ."Father Occupation" . "\t" ."Mother Occupation" . "\t" ."Annual Income" . "\t" ."Residential Address" . "\t" ."Permanent Address" . "\t" ."Phone No" . "\t" ."Email" . "\t" ."Pincode" . "\t" ."School Name" . "\t" ."Last Attended" . "\t" ."Promoted Class" ;  
$setData = '';  
  while ($rec = mysqli_fetch_row($result)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 