<?php
include "include/db1.php";
$sql = "SELECT * from  mpd";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

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
                        <label for="inputAddressLine1">NAME OF THE SCHOOL</label>
                    </div>
                    <div class="col-sm-6">
                         <!--<label for="inputAddressLine1">Hemkund PUBLIC SCHOOL</label> -->
                         <label for="inputAddressLine1"><?php echo strtoupper($result['sname']);?></label>
                    </div>
                </div>
                      <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">AFFILIATION NO.(IF APPLICABLE)</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><?php echo strtoupper($result['affno']);?></label>
                    </div>
                </div>
                     <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">SCHOOL CODE (IF APPLICABLE)</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><?php echo strtoupper($result['scode']);?></label>
                    </div>
                </div>
         
                <div class="form-group row">
                  
                    <div class="col-sm-6">
                        <label for="inputWebsite">COMPLETE ADDRESS WITH PINCODE</label>
                    </div>
                     <div class="col-sm-6">
                        <label for="inputAddressLine1"><?php echo strtoupper($result['saddr']);?></label>
                    </div>
                </div>
                   <div class="form-group row">
                  
                    <div class="col-sm-6">
                        <label for="inputWebsite">PRINCIPAL NAME</label>
                    </div>
                     <div class="col-sm-6">
                         <label for="inputAddressLine1">MR. <?php echo strtoupper($result['pname']);?></label>
                    </div>
                </div>

                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">PRINCIPAL QUALIFICATION</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><?php echo strtoupper($result['peducation']);?></label>
                    </div>
                </div>

                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">SCHOOL EMAIL ID</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><?php echo $result['semail'];?></label>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">CONTACT DETAILS (LANDLINE/MOBILE)</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><?php echo strtoupper($result['phone']);?></label>
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
                       <!--  <label for="inputAddressLine1"><a href="https://nspshp.com/assets/files/AFFILITATION_LETTER.pdf" target="_blank">AFFILITATION LETTER</a></label>-->
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file1']; ?>" target="_blank">AFFILITATION LETTER</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file2']; ?>" target="_blank">TRUST CERTIFICATE</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file3']; ?>" target="_blank">NOC</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT,2009, AND IT'S RENEWAL IF APPLICABLE</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="admin/<?php echo $result['file4']; ?>" target="_blank">RTE</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE </label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file5']; ?>" target="_blank">BUILDING</a></label>
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF VALID FIRe SAFETY CERTIFICATE ISSUED BYTHE COMPETENT AUTHORITY </label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file6']; ?>" target="_blank">FIRE SAFETY</a></label>
                    </div>
                </div>
                   <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPY OF THEDEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION SELF CERTIFICATION BY SCHOOL </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="admin/<?php echo $result['file7']; ?>" target="_blank">DEO CERTIFICATE</a></label>
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</label>
                    </div>
                    <div class="col-sm-6">
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file8']; ?>" target="_blank">WATER HEALTH CERTIFICATE</a></label>
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
                         <label for="inputAddressLine1"><a href="admin/<?php echo $result['file9']; ?>" target="_blank">FEES STRUCTURE</a></label>
                    </div>
                </div>
                      <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">ANNUL ACADEMIC CALANDER</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="admin/<?php echo $result['file10']; ?>" target="_blank">ACADEMIC CALENDER.pdf</a></label>
                    </div>
                </div>

                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST OF SCHOOL MANAGEMENT COMMITTEE(SMC)</label>
                    </div>
                    <div class="col-sm-6">
                      <label for="inputAddressLine1"><a href="admin/<?php echo $result['file13']; ?>" target="_blank">SMC</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="admin/<?php echo $result['file12']; ?>" target="_blank">PTA</a></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LIST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="admin/<?php echo $result['file11']; ?>" target="_blank">N/A</a></label>
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
                       <label for="inputAddressLine1"><?php echo $result['principal']; ?></label>
                    </div>
                </div>
                    <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="inputCity">TOTAL NO OF TEACHERS - </label>
                        <label for="inputAddressLine1"><?php echo $result['teacher_no']; ?></label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">PGT - </label>
                        <label for="inputAddressLine1"><?php echo $result['pgt']; ?></label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">TGT - </label>
                       <label for="inputAddressLine1"><?php echo $result['tgt']; ?></label>
                    </div>
                     <div class="col-sm-3">
                        <label for="inputPostalCode">PRT - </label>
                        <label for="inputAddressLine1"><?php echo $result['prt']; ?> </label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">TEACHERS SECTION RATIO - </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><?php echo $result['ts_ratio']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">DETAILS OF SPECIAL EDUCATION - </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><?php echo $result['sp_edu']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">DETAILS OF COUNSELLOR AND WELNESS TEACHER - </label>
                    </div>
                    <div class="col-sm-6">
                       <label for="inputAddressLine1"><?php echo $result['welness_tr']; ?></label>
                    </div>
                </div>
              <!--  <H5><U> RESULT CLASS: X</U></H5>
                      <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="inputCity">YEAR - </label>
                        <label for="inputAddressLine1">0</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF REGISTERED STUDENTS - </label>
                        <label for="inputAddressLine1">0</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">NO. OF STUDENTS PASSED - </label>
                        <label for="inputAddressLine1">0</label>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">PASS PERSENTAGE - </label>
                        <label for="inputAddressLine1">EG. 78.56%</label>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">REMARKS - </label>
                       <label for="inputAddressLine1">0</label>
                    </div>
                </div>
                  <H5><U> RESULT CLASS: XII</U></H5>
                      <div class="form-group row">
                    <div class="col-sm-2">
                        <label for="inputCity">YEAR - </label>
                        <label for="inputAddressLine1">0</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF REGISTERED STUDENTS - </label>
                       <label for="inputAddressLine1">0</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">NO. OF STUDENTS PASSED - </label>
                        <label for="inputAddressLine1">0 </label>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">PASS PERSENTAGE - </label>
                       <label for="inputAddressLine1">EG. 78.0%"</label>
                    </div>
                     <div class="col-sm-2">
                        <label for="inputPostalCode">REMARKS -</label>
                        <label for="inputAddressLine1">0 </label>
                    </div>
                </div> -->

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
                        <label for="inputAddressLine1"><?php echo $result['sarea']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">NO. AND SIZE OF THE CLASS ROOMS (IN SQ FTMTR)</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO. OF CLASS ROOMS - </label>
                        <label for="inputAddressLine1"><?php echo $result['room_no']; ?></label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">SIZE IN SQ. MTR - </label>
                        <label for="inputAddressLine1"><?php echo $result['rarea']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputState">NO OF LABORATORIES - </label>
                        <label for="inputAddressLine1"><?php echo $result['lab_no']; ?></label>
                    </div>
                    <div class="col-sm-3">
                        <label for="inputPostalCode">SIZE SQ MTR - </label>
                        <label for="inputAddressLine1"><?php echo $result['larea']; ?></label>
                    </div>
                </div>
                     <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">INTERNET FACILITY</label>
                    </div>
                     <!-- <div class="col-sm-6">
                        <label for="inputCity">  <label class="checkbox-inline">
      <input type="checkbox" value="" ><?php echo $result['net_facility']; ?>
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">NO
    </label></label>
                    </div> -->
                   <div class="col-sm-6">
                    <label for="inputCity">YES</label>
                   </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">NO OF GIRLS TOILETS</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><?php echo $result['girl_toilet']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">NO. OF BOYS TOILETS</label>
                    </div>
                    <div class="col-sm-6">
                       <label for="inputAddressLine1"><?php echo $result['boy_toilet']; ?></label>
                    </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">LINKS OF YOUTUBE VIDEO OF THEINSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</label>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1"><a href="www.youtube.com/watch?v=DLaZwvn4Meg" target="_blank">Infrastructure of the School</a></label>
                    </div>
                </div>
               
                
               
            </form>
        </div>
    </div>
</div>
</body>
</html>