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
         
      </div>
      <!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
         <h4 class="tx-gray-800 mg-b-5">Edit Users</h4>
      </div>
      
      <div class="br-pagebody" >
         <div class="row mg-t-10">
            <div class="col-xl-6">
                <?php
				include("php_include/connect.php");
					if(isset($_POST['edit_btn'])){
						$id = $_POST['edit_id'];
						$query = "SELECT * FROM `user` WHERE `id`='$id'";
						$query_run = mysqli_query($con,$query);
						
						foreach($query_run as $row){
				?>
               <div class="form-layout form-layout-4"style="background-color:#0BC4CB;border-radius:15px;">
                   <label><b>Edit Userid is :</b> <?php echo $row['userid'];?></label>
                  <hr>
                    <form action="edit_user_list.php" method="post" class="user">
						
						<div class="form-group">
						    <label><font color="red">*</font>Name:</label>
							<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
							<input name="edit_name" type="text" value="<?php echo $row['name'];?>" class="form-control " id="exampleInputEmail" style="width:290px;" aria-describedby="emailHelp" placeholder="Mame">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Mobile:</label>
							<input name="edit_mobile" type="text" value="<?php echo $row['mobile'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="Mobile">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Email:</label>
							<input name="edit_gmail" type="text" value="<?php echo $row['email'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="Mobile">
						</div>
							<div class="form-group">
						    <label><font color="red">*</font>Referral:</label>
							<input name="edit_referral_userid" type="text" value="<?php echo $row['referral_userid'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="email">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Password:</label>
							<input name="edit_password" type="text" value="<?php echo $row['password'];?>" class="form-control " style="width:290px;" id="exampleInputPassword" placeholder="password">
						</div>
							<div class="form-group">
						    <label><font color="red">*</font>TRN Password:</label>
							<input name="edit_trn_password" type="text" value="<?php echo $row['trn_password'];?>" class="form-control " style="width:290px;" id="exampleInputPassword" placeholder="password">
						</div>
						<div class="form-group">
							<button  type="submit" name="update" class="btn btn-primary">Edit Data Now</button>
							<button href="user_list.php" class="btn btn-danger">Cancel Edit</button>
						</div>
						<hr>
                   </form> 
                  <!-- form-layout -->
               </div>
               <?php
						}
					}
				?>
			   
			   <!-- col-6 -->
            </div>
             <?php
					if(isset($_POST['update'])){
						$id = $_POST['edit_id'];
						$name = $_POST['edit_name'];
						$mobile = $_POST['edit_mobile'];
						$referral_userid = $_POST['edit_referral_userid'];
						$password = $_POST['edit_password'];
						$edit_trn_password = $_POST['edit_trn_password'];
						$edit_gmail = $_POST['edit_gmail'];

						$query = "UPDATE `user` SET `email`='$edit_gmail',`name`='$name',`mobile`='$mobile',`referral_userid`='$referral_userid',`password`='$password',`trn_password`='$edit_trn_password' where `id`='$id'";
						$query_run= mysqli_query($con,$query);
						if($query_run){
							echo '<script>alert("Data successfully Updated");window.location.assign("user_list.php");</script>';
						}else{
							echo '<script>alert("Please Field All Thw Field");</script>';
						}
						}
			  ?>
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