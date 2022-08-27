<style>
li span{
font-size:20px!important;
}
</style>

<?php
    include './include/header.php';
    
    ?>


           <!-- page-title -->
        <div class="">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <img src="./images/single_page/Offline Admission.jpg" style="width:100%"/>                                           
            </div>                    
        </div><!-- page-title end-->


    <div class="site-main">

        <section class="ttm-row">
            <div class="container">
                
                
                <div class="row">
              
                    <div class="col-lg-12">
                     <div class="section-title">
                            <div class="title-header">
                               
                                <h4 class="title"> Offline Admission  </h4>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                        <div class="row  mb-10 res-991-mb-0">
                        <div class="col-lg-12 col-md-5 col-sm-6">
                            <?php
    							  $sql = mysqli_query($conn, "SELECT * FROM `discipline`");
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
