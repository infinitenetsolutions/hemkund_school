 <?php
 include './include/db1.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$sql1 = "INSERT INTO `enquiry`(`name`, `email`, `number`, `subject`, `msg`) VALUES('$name','$email','$number','$subject','$msg')";
$result = mysqli_query($conn , $sql1);
if($result){
echo "<script> alert('data inserted successfully');</script>";
}
} 

    $sql = "SELECT * from  contact";
     $res = mysqli_query($conn, $sql);
     $result1 = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="plate" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
<title>Hemkund Public School</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<!-- prettyphoto -->
<!-- <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"> -->

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/megamenu.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.1' type='text/css' media='all' />

<style>
.flash-button{
	background:green;
	padding:1px 10px;
	color:#fff;
	border:none;
	border-radius:5px;
	
	animation-name: flash;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-iteration-count: infinite;

	}
@keyframes flash {
  0% { background-color: #41bf39; box-shadow: 0 0 3px #41bf39; }
  50% { background-color: #41bf39;box-shadow: 0 0 40px #41bf39; }
  100% { background-color: #41bf39; box-shadow: 0 0 3px #41bf39; }
}


.ttm-row.cta-section {
    padding: 5px 0 5px!important;
}
nav.main-menu ul.menu > li > a{
color:#000!important;
}

@media (max-width: 1199px){
/*#site-header-menu .site-header-menu-inner {
    
    background: #ff4f01!important;
}*/
nav.main-menu ul.menu > li > a {
    color: #ffffff!important;
    background: #141d3c;
}
}


.d-load {
    position: fixed;
    bottom: 8%;
    right: 0px;
    z-index: 9999;
}
.d-load span {
    font-size: 15px;
    position: relative;
    transform: rotate(
90deg
);
    transform-origin: right top;
    color: #fff;
    display: block;
    background: #007b50;
    padding: 6px 15px;
    border-radius: 4px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.d-load span a {
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
}

@media (min-width: 1199px){
.mobile_menu {
    display: none;
}}

@media (max-width: 1199px){
#logo-img{
height:60px!important;
}
}



.float-vision {
    position: fixed;
    width: 3.5em;
    height: 3.5em;
    bottom: 3em;
    left: 1em;
    background-color: #016e3d;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #000;
    z-index:9999;
}
.my-float-vision {
   font-size: 30px;
    margin-top: 12px;
}

@media(max-width:576px){
.site-branding #logo-img{
width:295px;
}
}
</style>


   
</head>

<body>

 <!--whatsapp-->
<a id="visionId" href="https://api.whatsapp.com/send?phone=8541026773&text=&source=&data=" target="_blank" class="float-vision" title="Call Now" style="z-index: 99999;">
            <i class="fa fa-whatsapp my-float-vision" style="color:white;"></i>
 
        </a>
<!--// whatsapp-->

<?php
//  include "config.php";
                                            $sql = "SELECT * from  mpd";
                                            $query = mysqli_query($conn, $sql);
                                            $result = mysqli_fetch_assoc($query);

			?>	
<div class="page">
       

       <!--header start-->
       <header id="masthead" class="header ttm-header-style-01">
          
           <!-- top_bar -->
           <div class="top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
               <div class="container">
                   <div class="row">
                       <div class="col-xl-12 d-flex flex-row align-items-center" style="padding-top: 15px;">
                           
                           <div class="top_bar_contact_item">
                               <div class="top_bar_icon"><i class="fa fa-phone"></i></div><a href="tel:<?php echo $result1['phone'];  ?>"><?php echo $result1['phone'];  ?></a> 
                           </div>
                           <div class="top_bar_contact_item">
                               <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:<?php echo $result1['email'];  ?>"><?php echo $result1['email'];  ?></a>
                           </div>
                           <div class="top_bar_contact_item ml-auto">
                               <!--<a href="admission.php">Online Admission</a>-->
                               <a href="https://www.eduqfix.com/PayDirect/#/student/pay/sICfIDZMUwrpdBpO97ishpEjJ3JzGJqS1Q8Hy3YMwVhlEnz1EVBeaShmumen4IxY/3231">Pay Online</a>
                           </div>
                           <div class="top_bar_contact_item">
                               
                           </div>
                           <div class="top_bar_contact_item">
                               <div class="top_bar_social">
                                   <ul class="social-icons">
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Flickr" tabindex="-1"><i class="fa fa-flickr"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Linkedin" tabindex="-1"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                          
                       </div>
                   </div>
               </div>
           </div><!-- top_bar end-->
           
           
           
<section class="ttm-row cta-section ttm-bgcolor-skincolor text-center clearfix mobile_menu">
            <div class="container">
                   <div class="row">
                       <div class="ttm-rows col-xl-12 d-flex flex-row align-items-center p-3">
                                                                               
                           <div class="top_bar_contact_item">
                               <a href="online-admission.php">Admission</a>
                           </div>
                           <div class="top_bar_contact_item">
                               <a href="https://www.eduqfix.com/PayDirect/#/student/pay/sICfIDZMUwrpdBpO97ishpEjJ3JzGJqS1Q8Hy3YMwVhlEnz1EVBeaShmumen4IxY/3231">Pay Online</a>
                           </div>
                           <div class="top_bar_contact_item">
                               <div class="top_bar_social">
                                   <ul class="social-icons">
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter" tabindex="-1"><i class="fa fa-whatsapp"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Flickr" tabindex="-1"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                       <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Linkedin" tabindex="-1"><i class="fa fa-instagram"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                         
                       </div>
                   </div>
               </div>
        </section>
           
           
           
           <!-- site-header-menu -->
           <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
               <div class="site-header-menu-inner ttm-stickable-header" style="background: #fff7be; min-height: 90px!important;">
                   <div class="container">
                       <div class="row">
                           <div class="col">
                               <!--site-navigation -->
                               <div class="site-navigation d-flex flex-row" style="height: 75px; display: flex; justify-content: center;
    align-items: center;">
                                   <!-- site-branding -->
                                   <div class="site-branding mr-auto">
                                       <a class="home-link" href="index.php" title="Hemkund Public School" >
                                           <img id="logo-img" class="img-center lazyload" data-src="images/Hemkund-logo.png" alt="logo-img" style="height: 75px;
    margin-top: 10px;">
                                       </a>
                                   </div><!-- site-branding end -->
                                   <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                       <span class="menubar-box">
                                           <span class="menubar-inner"></span>
                                       </span>
                                   </div>
                                   <!-- menu -->
                                   <nav class="main-menu menu-mobile" id="menu">
                                       <ul class="menu">
                                           <li class="mega-menu-item active">
                                               <a href="index.php">Home</a>
                                       
                                           </li>
                                              <li class="mega-menu-item ">
                                               <a href="#" class="mega-menu-link">About Us <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                               
                                               <ul class="mega-submenu">
                                                  <li><a href="know-us.php">Know Us</a></li>
           <li><a href="Vision&Mission.php">Vision & Mission</a></li>
            
            
            
                <!--<li><a href="online-admission.php">Admissions</a></li>-->
                                                                                        
                                                </ul>
                                               
                                           </li>
                                           
                                           
                                            <li class="mega-menu-item ">
                                               <a href="#" class="mega-menu-link">Administration <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                               
                                               <ul class="mega-submenu">
                                                  <li><a href="chairman_message.php">Chairman Message</a></li>
                                                  <li><a href="principal-desk.php">Principal's Desk</a></li>
           <li><a href="staff.php" >Teacher Profile</a></li>
           
            <li><a href="certificate.php">Certificate</a></li>
            <li><a href="infrastructure.php">Infrastructure</a></li>
            
                 
                <li><a href="rules-regulations.php">Rules &amp; Regulations</a></li>
            	<li><a href="career.php" >Job Application</a></li>
            <li><a href="mdp.php">School Info</a></li>
            <li><a href="admin/docs/mpd.pdf">MPD</a></li>
                                                
                                                </ul>
                                               
                                           </li>
                                           <li class="mega-menu-item ">
                                               <a href="#" class="mega-menu-link">Admission <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                               
                                               <ul class="mega-submenu">
                                                  <li><a href="school_admission.php" target="blank">Online Admission Nur - VIII</a></li>
                                                  <li><a href="admission_xi.php" target="blank">Online Admission XI</a></li>
                                                  <!--<li><a href="#">Offline Admission</a></li>-->
                                                                                                                                                     
                                                </ul>
                                               
                                           </li>
                                           
                                            <li class="mega-menu-item ">
                                               <a href="#" class="mega-menu-link">Academic <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                               
                                               <ul class="mega-submenu">
                                                  <li><a href="discipline.php">Discipline</a></li>
                                                  <li><a href="uniform.php">Uniform</a></li>
                                                  <li><a href="exam.php">Examination</a></li>
                                                  <li><a href="event.php">School Events</a></li>
                                                  <li><a href="school-notice.php">Notice</a></li>
                                                                                                                                                     
                                                </ul>
                                               
                                           </li>
                                           <!-- <li class="mega-menu-item">
                                               <a href="#" class="mega-menu-link">Our Patron</a>
                                             
                                           </li> -->

                                          
                                           <li class="mega-menu-item">
                                               
                                                <!--<ul class="mega-submenu">
                                                    <li class="current-menu-item"><a href="staff-list.php">Staff List</a></li>
                                               <li ><a href="staff-corner.php">Staff Corner</a></li>
                                               </ul> -->
                                           </li>
                                          <!-- <li class="mega-menu-item">
                                               <a href="#" class="mega-menu-link">Student <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                <ul class="mega-submenu">
                                                 
           <li ><a href="student-council.php">Student Council</a></li>
           <li ><a href="time-table.php">Time Table</a></li>
           <li ><a href="syllabus.php">Syllabus</a></li>
           
          
                                               </ul> 
                                           </li>-->
                                           <li class="mega-menu-item">
                                               <a href="#" class="mega-menu-link">gallery <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                <ul class="mega-submenu">
                                                   <li ><a href="gallery.php">Picture Gallery</a></li>
                                                   <li ><a href="video.php">Video Gallery</a></li>
                                                   <li ><a href="press.php">Press Gallery</a></li>
                                               </ul> 
                                           </li>
                                           <li class="mega-menu-item">
                                               
                                             
                                           </li>
                                            <li class="mega-menu-item">
                                               <a href="contact.php" >Contact us</a>
                                              
                                           </li>
                                       </ul>
                                   </nav>
                               


                               </div><!-- site-navigation end-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- site-header-menu end-->
       </header><!--header end-->



