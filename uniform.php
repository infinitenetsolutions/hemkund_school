<style>
li span{
font-size:20px!important;
}
</style>

<?php
    include './include/header.php';
    
    ?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Student Uniform Code</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">Student Uniform Code</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <div class="site-main">

        <section class="ttm-row">
            <div class="container">
                
                
                <div class="row">
              
                    <div class="col-lg-12">
                     <div class="section-title">
                            <div class="title-header">
                               
                                <h4 class="title">Student Uniform Code</h4>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                        <div class="row  mb-10 res-991-mb-0">
                        <div class="col-lg-12 col-md-5 col-sm-6">
                            <?php
    							  $sql = mysqli_query($conn, "SELECT * FROM `uniform`");
    	 						 $ctr=1;
  							    while($row = mysqli_fetch_assoc($sql))
     								 {
 							     ?>
                                
                                 <?php 
                                 echo $row['msg']; 
                                 }
                                 ?>
                             
                            </div>
                           
                        </div> 
                    </div>
                </div>
            </div>
        </section>


       
        
    </div>

    <?php
    include './include/footer.php';
    
    ?>
