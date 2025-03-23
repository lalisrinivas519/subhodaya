<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("php_include/head.php")?>
   </head>
   <body>
      <?php include("php_include/sidebar.php")?>
      <?php include("php_include/navbar.php")?>
      <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
         <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="home.php">home</a>
            <span class="breadcrumb-item active">Update Adhar Details </span>
         </nav>
      </div>
      <!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
         <h4 class="tx-gray-800 mg-b-5">Update Adhar Details</h4>
      </div>
      <div class="br-pagebody" >
         <div class="row mg-t-10">
            <div class="col-xl-6">
               <div class="form-layout form-layout-4"style="background-color:#0BC4CB;border-radius:15px;">
                 
                <form action="update_adhar.php" method="POST" enctype="multipart/form-data">
				  <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <center> <input type="text"  name="adhar_no"class="form-control" placeholder="AADHAR NO" style="width:400px"></center>
                     <br>
                     <?php 
              if($row['adhar_front']==NULL){
                
                ?>  
              <center>  <img src="img/adharfront.jpeg" style="border-radius:10px; width:200px;"/></center>
                <?php
              }else{
                  
                  ?>
                 <center> <img src="kyc/<?php echo $row['adhar_front'];?>" style="border-radius:10px; width:200px;"/></center>
                  <?php
              }
              ?>
                     <br>
                     <center>
                        <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Upload Aadhar Front Image</p>
                     </center>
                     <center> <input type="file" name="image"class="form-control" placeholder="upload image" style="width:400px"></center>
					 
					 <center>
                        <div class="form-layout-footer mg-t-30">
                           <button class="btn btn-primary" name="submit1">Submit </button>
                        </div>
                     </center>
				</form>
				
				<?php
                           if(isset($_POST['submit1'])){
                               $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
							    $adhar_no      =      mysqli_real_escape_string($con,$_POST['adhar_no']);
                               $image=$_FILES["image"]["name"];
                            $extensions=array('image/jpg','image/jpeg','image/png');
                               	    $query=mysqli_query($con,"UPDATE `admin` SET `adhar_no`='$adhar_no',`adhar_front`='$image' WHERE `userid`='$userid'");
                               	    $newname = $image;  
                                      $target = 'kyc/'.$newname;
                                      move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                               	     if($query){
                               	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_adhar.php");</script>';
                               	     }else{
                               	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_adhar.php");</script>'; 
                               	     }
                           }
                           ?> 
				<br><form action="update_adhar.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="userid" value="<?php echo $userid?>">
                     <?php 
              if($row['adhar_back']==NULL){
                
                ?>  
              <center>  <img src="img/adharback.jpeg" style="border-radius:10px; width:200px;"/></center>
                <?php
              }else{
                  
                  ?>
                 <center> <img src="kyc/<?php echo $row['adhar_back'];?>" style="border-radius:10px; width:200px;"/></center>
                  <?php
              }
              ?>
                     <br>
                     <center>
                        <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Upload Aadhar Back Image</p>
                     </center>
                     <center> <input type="file" name="image" class="form-control" placeholder="upload image" style="width:400px"></center>
                     <center>
                        <div class="form-layout-footer mg-t-30">
                           <button class="btn btn-primary" name="submit2">Submit </button>
                        </div>
                     </center>
                  </form>
                  <!-- form-layout -->
               </div>
               
			   <?php
                           if(isset($_POST['submit2'])){
                               $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
							
                               $image=$_FILES["image"]["name"];
                            $extensions=array('image/jpg','image/jpeg','image/png');
                               	    $query=mysqli_query($con,"UPDATE `admin` SET `adhar_back`='$image' WHERE `userid`='$userid'");
                               	    $newname = $image;  
                                      $target = 'kyc/'.$newname;
                                      move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                               	     if($query){
                               	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("update_adhar.php");</script>';
                               	     }else{
                               	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("update_adhar.php");</script>'; 
                               	     }
                           }
                           ?> 
			   <!-- col-6 -->
            </div>
         </div>
         <!-- br-pagebody -->
         <?php include("php_include/footer.php")?>
      </div>
      <!-- br-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
      <script src="lib/jquery/jquery.js"></script>
      <script src="lib/popper.js/popper.js"></script>
      <script src="lib/bootstrap/bootstrap.js"></scri
         <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js">
      </script>
      <script src="lib/moment/moment.js"></script>
      <script src="lib/jquery-ui/jquery-ui.js"></script>
      <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
      <script src="lib/peity/jquery.peity.js"></script>
      <script src="lib/chartist/chartist.js"></script>
      <script src="lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
      <script src="lib/d3/d3.js"></script>
      <script src="lib/rickshaw/rickshaw.min.js"></script>
      <script src="js/bracket.js"></script>
      <script src="js/ResizeSensor.js"></script>
      <script src="js/dashboard.js"></script>
      <script>
         $(function(){
           'use strict'
         
           // FOR DEMO ONLY
           // menu collapsed by default during first page load or refresh with screen
           // having a size between 992px and 1299px. This is intended on this page only
           // for better viewing of widgets demo.
           $(window).resize(function(){
             minimizeMenu();
           });
         
           minimizeMenu();
         
           function minimizeMenu() {
             if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
               // show only the icons and hide left menu label by default
               $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
               $('body').addClass('collapsed-menu');
               $('.show-sub + .br-menu-sub').slideUp();
             } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
               $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
               $('body').removeClass('collapsed-menu');
               $('.show-sub + .br-menu-sub').slideDown();
             }
           }
         });
      </script>
   </body>
</html>