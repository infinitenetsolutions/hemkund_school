 <?php    
$con = mysqli_connect('localhost','insprojects_db','Srinath123','insprojects_db');

if(isset($_POST['submit']))
{


	$sname= $_POST['sname'];
	$affno= $_POST['affno'];
$scode= $_POST['scode'];
    $saddr= $_POST['saddr'];
    $pname= $_POST['pname'];
   $peducation= $_POST['peducation'];
    $semail= $_POST['semail'];
    $phone= $_POST['phone'];
    
    $file1 = $_FILES['file1']['name'];
	$destination1 = 'docs/' . $file1;
   $file1 = $_FILES['file1']['tmp_name'];
  
  	$file2 = $_FILES['file2']['name'];
	$destination2 = 'docs/' . $file2;
   $file2 = $_FILES['file2']['tmp_name'];
   
  $file3 = $_FILES['file3']['name'];
	$destination3 = 'docs/' . $file3;
    $file3 = $_FILES['file3']['tmp_name'];
  
 $file4 = $_FILES['file4']['name'];
	$destination4 = 'docs/' . $file4;
$file4 = $_FILES['file4']['tmp_name'];
    
  $file5 = $_FILES['file5']['name'];
	$destination5 = 'docs/' . $file5;
    $file5 = $_FILES['file5']['tmp_name'];
   
  $file6 = $_FILES['file6']['name'];
	$destination6 = 'docs/' . $file6;
   $file6 = $_FILES['file6']['tmp_name'];
   
  $file7 = $_FILES['file7']['name'];
	$destination7 = 'docs/' . $file7;
   $file7 = $_FILES['file7']['tmp_name'];
  
  $file8 = $_FILES['file8']['name'];
	$destination8 = 'docs/' . $file8;
    $file8 = $_FILES['file8']['tmp_name'];
  
  $file9 = $_FILES['file9']['name'];
	$destination9 = 'docs/' . $file9;
   $file9 = $_FILES['file9']['tmp_name'];
   
   $file10 = $_FILES['file10']['name'];
	$destination10 = 'docs/' . $file10;
    $file10 = $_FILES['file10']['tmp_name'];
   
   $file11 = $_FILES['file11']['name'];
	$destination11 = 'docs/' . $file11;
    $file11 = $_FILES['file11']['tmp_name'];
   
  $file12 = $_FILES['file12']['name'];
$destination12 = 'docs/' . $file12;
    $file12 = $_FILES['file12']['tmp_name'];
  
  $file13 = $_FILES['file13']['name'];
$destination13 = 'docs/' . $file13;
    $file13 = $_FILES['file13']['tmp_name'];
    $file14 = $_FILES['file14']['name'];
$destination14 = 'docs/' . $file14;
   $file14 = $_FILES['file14']['tmp_name'];
    
   $teacher_no= $_POST['teacher_no'];
   $pgt= $_POST['pgt'];
   $tgt= $_POST['tgt'];
   $prt= $_POST['prt'];
  $ts_ratio= $_POST['ts_ratio'];
    
   $file15 = $_FILES['file15']['name'];
$destination15 = 'docs/' . $file15;
   $file15 = $_FILES['file15']['tmp_name'];
   $file16 = $_FILES['file16']['name'];
	$destination16 = 'docs/' . $file16;
    $file16 = $_FILES['file16']['tmp_name'];
    
    $tyear= $_POST['tyear'];
   $treg_stu= $_POST['treg_stu'];
   $tpass_stu= $_POST['tpass_stu'];
    $tpass_per= $_POST['tpass_per'];
   $tremarks= $_POST['tremarks'];
	
    $wyear= $_POST['wyear'];
   $wreg_stu= $_POST['wreg_stu'];
   $wpass_stu= $_POST['wpass_stu'];
   $wpass_per= $_POST['wpass_per'];
    $wremarks= $_POST['wremarks'];
	
    $sarea= $_POST['sarea'];
   $room_no= $_POST['room_no'];
   $rarea= $_POST['rarea'];
    $lab_no= $_POST['lab_no'];
    $larea= $_POST['larea'];
    $net_facility= $_POST['net_facility'];
   $girl_toilet= $_POST['girl_toilet'];
    $boy_toilet= $_POST['boy_toilet'];
    $sinfra= $_POST['sinfra'];
    
    move_uploaded_file($file1, $destination1);
   // if (move_uploaded_file($file1, $destination1)) {
            $sql = "INSERT INTO `mpd`(`sname`, `affno`, `scode`, `saddr`, `pname`, `peducation`, `semail`, `phone`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`, `file10`, `file11`, `file12`, `file13`, `file14`, `teacher_no`, `pgt`, `tgt`, `prt`, `ts_ratio`, `file15`, `file16`, `tyear`, `treg_stu`, `tpass_stu`, `tpass_per`, `tremarks`, `wyear`, `wreg_stu`, `wpass_stu`, `wpass_per`, `wremarks`, `sarea`, `room_no`, `rarea`, `lab_no`, `larea`, `net_facility`, `girl_toilet`, `boy_toilet`, `sinfra`) 
            				VALUES ('$sname','$affno','$scode','$saddr','$pname','$peducation','$semail','$phone','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$file8','$file9','$file10','$file11','$file12','$file13','$file14','$teacher_no','$pgt','$tgt','$prt','$ts_ratio','$file15','$file16','$tyear','$treg_stu','$tpass_stu','$tpass_per','$tremarks','$wyear','$wreg_stu','$wpass_stu','$wpass_per','$wremarks','$sarea','$room_no','$rarea','$lab_no','$larea','$net_facility','$girl_toilet','$boy_toilet','$sinfra')";
            if (mysqli_query($con, $sql)) {
                echo "Data uploaded and inserted successfully";
            }
      //  } 
        else {
            echo "Failed to upload file.";
        }
   
  
}
?>   





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hemkund Public School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<STYLE>
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #6f6969;
    background-color: #fff;
}
</STYLE>
<body>


<div class="container-fluid">
    <div class="row">
            <h5 style="text-align:right;"><U><B>APPENDIX - IX</B></U></h5>

      <h3 style="text-align:center;"><U><B>Mandatory Public Disclousure</B></U></h3>
      <BR>


     
       <div class="col-md-1">
 </div>
        <div class="col-md-10">
          <h5><U><B>GENERAL INFORMATION</B></U></h5>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Information</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Details</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">NAME OF THE SCHOOL</label>
                    </div>
                    <div class="col-sm-6">
                         <input type="text" name="sname" class="form-control"/>
                    </div>
                </div>
                      <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">AFFILIATION NO.(IF APPLICABLE)</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1">3430380</label> -->
                         <input type="text" name="affno"  class="form-control"/>
                    </div>
                </div>
                     <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">SCHOOL CODE (IF APPLICABLE)</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1">66586</label> -->
                         <input type="text" name="scode"  class="form-control"/>
                    </div>
                </div>
         
                <div class="form-group row">
                  
                    <div class="col-sm-6">
                        <label for="inputWebsite">COMPLETE ADDRESS WITH PINCODE</label>
                    </div>
                     <div class="col-sm-6">
                        <input type="text" name="saddr"  class="form-control"/>
                    </div>
                </div>
                   <div class="form-group row">
                  
                    <div class="col-sm-6">
                        <label for="inputWebsite">PRINCIPAL NAME</label>
                    </div>
                     <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1">MR. DEBADATTA GEORGE</label> -->
                         <input type="text" name="pname"  class="form-control"/>
                    </div>
                </div>

                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">PRINCIPAL QUALIFICATION</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1">B.Ed, MA</label> -->
                         <input type="text" name="peducation"  class="form-control"/>
                    </div>
                </div>

                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">SCHOOL EMAIL ID</label>
                    </div>
                    <div class="col-sm-6">
                         <input type="text" name="semail"  class="form-control"/>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">CONTACT DETAILS (LANDLINE/MOBILE)</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1">0657-2210494</label> -->
                        <input type="text" name="phone"  class="form-control"/>
                    </div>
                </div>
             <h5><U><B>DOCUMENTS AND INFORMATION</B></U></h5>
      <BR>
        <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">DOCUMENTS/INFORMATION</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">LINKS OF UPLOADED DOCUMENTS ON YOUR SCHOOLS WEBSITE</label>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/AFFILITATION_LETTER.pdf" target="_blank">AFFILITATION LETTER</a></label> -->
                         <input type="file" name="file1"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/SOCIETY CERTIFICATE.pdf" target="_blank">SOCIETY CERTIFICATE</a></label> -->
                         <input type="file" name="file2"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/NOC.pdf" target="_blank">NOC</a></label> -->
                         <input type="file" name="file3"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT,2009, AND IT'S RENEWAL IF APPLICABLE</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/RTE.pdf" target="_blank">RTE</a></label> -->
                        <input type="file" name="file4"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE </label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/BUILDING.pdf" target="_blank">BUILDING</a></label> -->
                         <input type="file" name="file5"  class="form-control"/>
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF VALID FIRe SAFETY CERTIFICATE ISSUED BYTHE COMPETENT AUTHORITY </label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/FIRE.pdf" target="_blank">FIRE SAFETY</a></label> -->
                         <input type="file" name="file6"  class="form-control"/>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF THEDEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION SELF CERTIFICATION BY SCHOOL </label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/SELF CERTIFICATE.pdf" target="_blank">SELF CERTIFICATE</a></label> -->
                        <input type="file" name="file7"  class="form-control"/>
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/WATER HEALTH CERTIFICATE.pdf" target="_blank">WATER HEALTH CERTIFICATE</a></label> -->
                         <input type="file" name="file8"  class="form-control"/>
                    </div>
                </div>
                <br>
                      <P><B>NOTE:</B> THE SCHOOLS NDDTS TO UPLOAD THE SELF ATTESTED COPIES OF ABOVE LISTED DOCUMENTS BY CHAIRMAN/MANAGER/SECRETARY AND PRINCIPAL. IN CASE, IT IS NOTICED AT LATER STAGE THAT UPLOADEDDOCUMENTS ARE NOT GENUINE THEN SCHOOL SHALL BE LIABLE FOR ACTION AS PER NORMS.</P>
                      <BR>

                         <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">FEE STRUCTURE OF THE SCHOOL</label>
                    </div>
                    <div class="col-sm-6">
                         <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/FEES STRUCTURE.pdf" target="_blank">FEES STRUCTURE</a></label> -->
                         <input type="file" name="file9"  class="form-control"/>
                    </div>
                </div>
                      <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">ANNUL ACADEMIC CALANDER</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/ACADEMIC CALENDER.pdf" target="_blank">ACADEMIC CALENDER.pdf</a></label> -->
                        <input type="file" name="file10"  class="form-control"/>
                    </div>
                </div>

                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST OF SCHOOL MANAGEMENT COMMITTEE(SMC)</label>
                    </div>
                    <div class="col-sm-6">
                      <!-- <label for="inputAddressLine1"> <a href="https://nspshp.com/assets/files/SMC.pdf" target="_blank">SMC</a></label> -->
                      <input type="file" name="file11"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/PTA.pdf" target="_blank">PTA</a></label> -->
                        <input type="file" name="file12"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/NOT YET.pdf" target="_blank"></a>NOT YET</label> -->
                        <input type="file" name="file13"  class="form-control"/>
                    </div>
                </div>
                 <h5><U><B>STAFF (TEACHING)</B></U></h5>
            <form>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Information</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Details</label>
                    </div>
                </div>
                    <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">PRINCIPAL</label>
                    </div>
                    <div class="col-sm-6">
                       <!-- <label for="inputAddressLine1">1</label> -->
                       <input type="file" name="file14"  class="form-control"/>
                    </div>
                </div>
                    <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputCity">TOTAL NO OF TEACHERS - </label>
                        <!-- <label for="inputAddressLine1">23</label> -->
                        <input type="text" name="teacher_no"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">PGT - </label>
                        <!-- <label for="inputAddressLine1">7</label> -->
                        <input type="text" name="pgt"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">TGT - </label>
                       <!-- <label for="inputAddressLine1">10</label> -->
                       <input type="text" name="tgt"  class="form-control"/>
                    </div>
                     <div class="col-sm-3">
                        <label for="inputPostalCode">PRT - </label>
                        <!-- <label for="inputAddressLine1">5 </label> -->
                        <input type="text" name="prt"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">TEACHERS SECTION RATIO - </label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1">1.5:1</label> -->
                        <input type="text" name="ts_ratio"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">DETAILS OF SPECIAL EDUCATION - </label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1">1</label> -->
                        <input type="file" name="file15"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">DETAILS OF COUNSELLOR AND WELNESS TEACHER - </label>
                    </div>
                    <div class="col-sm-6">
                       <!-- <label for="inputAddressLine1">1</label> -->
                       <input type="file" name="file16"  class="form-control"/>
                    </div>
                </div>
                <H5><U> RESULT CLASS: X</U></H5>
                      <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="inputCity">YEAR - </label>
                        <!-- <label for="inputAddressLine1">0</label> -->
                        <input type="text" name="tyear"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF REGISTERED STUDENTS - </label>
                        <!-- <label for="inputAddressLine1">0</label> -->
                        <input type="text" name="treg_stu"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">NO. OF STUDENTS PASSED - </label>
                        <!-- <label for="inputAddressLine1">0</label> -->
                        <input type="text" name="tpass_stu"  class="form-control"/>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">PASS PERSENTAGE - </label>
                        <!-- <label for="inputAddressLine1">EG. 78.56%</label> -->
                        <input type="text" name="tpass_per"  class="form-control"/>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">REMARKS - </label>
                       <!-- <label for="inputAddressLine1">0</label> -->
                       <input type="text" name="tremarks"  class="form-control"/>
                    </div>
                </div>
                  <H5><U> RESULT CLASS: XII</U></H5>
                      <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="inputCity">YEAR - </label>
                        <!-- <label for="inputAddressLine1">0</label> -->
                        <input type="text" name="wyear"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF REGISTERED STUDENTS - </label>
                       <!-- <label for="inputAddressLine1">0</label> -->
                       <input type="text" name="wreg_stu"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">NO. OF STUDENTS PASSED - </label>
                        <!-- <label for="inputAddressLine1">0 </label> -->
                        <input type="text" name="wpass_stu"  class="form-control"/>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">PASS PERSENTAGE - </label>
                       <!-- <label for="inputAddressLine1">EG. 78.0%"</label> -->
                       <input type="text" name="wpass_per"  class="form-control"/>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">REMARKS -</label>
                        <!-- <label for="inputAddressLine1">0 </label> -->
                        <input type="text" name="wremarks"  class="form-control"/>
                    </div>
                </div>

                <H5><U> SCHOOL INFRASTRUCTURE:</U></H5>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Information</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Details</label>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</label>
                    </div>
                    <div class="col-sm-6">
                        <!-- <label for="inputAddressLine1">12181</label> -->
                        <input type="text" name="sarea"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">NO. AND SIZE OF THE CLASS ROOMS (IN SQ FTMTR)</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF CLASS ROOMS - </label>
                        <!-- <label for="inputAddressLine1">32</label> -->
                        <input type="text" name="room_no"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">SIZE IN SQ. MTR - </label>
                        <!-- <label for="inputAddressLine1">500</label> -->
                        <input type="text" name="rarea"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO OF LABORATORIES - </label>
                        <!-- <label for="inputAddressLine1">3</label> -->
                        <input type="text" name="lab_no"  class="form-control"/>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">SIZE SQ MTR - </label>
                        <!-- <label for="inputAddressLine1">600</label> -->
                        <input type="text" name="larea"  class="form-control"/>
                    </div>
                </div>
                     <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">INTERNET FACILITY</label>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="net_facility"  class="form-control"/>
                   </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">NO OF GIRLS TOILETS</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="girl_toilet"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">NO. OF BOYS TOILETS</label>
                    </div>
                    <div class="col-sm-6">
                       <input type="text" name="boy_toilet"  class="form-control"/>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LINKS OF YOUTUBE VIDEO OF THEINSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="sinfra"  class="form-control"/>
                    </div>
                </div>
               
                <input type="submit" class="btn btn-primary"  value="submit" name="submit"><br /><br />
               
            </form>
        </div>
    </div>

</div>
</body>
</html>