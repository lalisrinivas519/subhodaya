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
               <a class="breadcrumb-item" href="home.php">Home</a>
               <span class="breadcrumb-item active"> User List</span>
            </nav>
         </div>
         <!-- br-pageheader -->
         <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">User List</h4>
            <p class="mg-b-0"></p>
         </div>
         <div class="br-pagebody">
            <div class="br-section-wrapper">
               <div class="table-wrapper" style="overflow-x:auto;">
                    <input type="text" id="searchInput" placeholder="Search..."><br><br>
                  <table id="dataTable" class="table display responsive nowrap">
                     <thead>
                    <tr style="background-color:#29758E; color:white;">
					  <th style="color:white;">SL</th>
					  <th style="color:white;">Date</th>
                      <th style="color:white;">User id</th>
                      <th style="color:white;">Name</th>
                      <th style="color:white;">Ref Userid</th>
                      <th style="color:white;">Mobile</th>
                      <th style="color:white;">Password</th>
                      <th style="color:white;">TRN Password</th>
                      <th style="color:white;">Edit ID</th>
					  <th style="color:white;">Delete ID</th>
					  
                    </tr>
                  </thead>
                     <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `user` order by id desc");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$date = $row['join_date'];
											$userid = $row['userid'];
											$name = $row['name'];
											$mobile = $row['mobile'];
											$password = $row['password'];
											$trn_password = $row['trn_password'];
										$referral_userid=$row['referral_userid'];
											$city = $row['city'];
											$state = $row['state'];
											$pincode = $row['pincode'];
										?>
                                        	<tr>
                                            	<td style="background-color:#F1EFC0; color:black;"><?php echo $i ?></td>
                                            	<td style="background-color:#F1EFC0; color:black;"><?php echo $date ?></td>
                                                <td style="background-color:#F1EFC0; color:black;"><?php echo $userid ?></td>
												<td style="background-color:#F1EFC0; color:black;"><?php echo $name ?></td>
													<td style="background-color:#F1EFC0; color:black;"><?php echo $referral_userid ?></td>
												<td style="background-color:#F1EFC0; color:black;"><?php echo $mobile ?></td>
                                                <td style="background-color:#F1EFC0; color:black;"><?php echo $password ?></td>
                                                 <td style="background-color:#F1EFC0; color:black;"><?php echo $trn_password ?></td>
                                                <td style="background-color:#F1EFC0; color:black;">
													<form method="post" action="edit_user_list.php">
														<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
														<input type="submit" name="edit_btn" value="Edit" class="btn btn-primary" >
													</form>
												</td>
												<td style="background-color:#F1EFC0; color:black;">
													<form method="post" action="">
														<input type="submit" name="delete_id" value="Delete" class="btn btn-danger" >
													</form>
												</td>
												
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no pin.</td>
                                        </tr>
                                    <?php
									}
								?>
                  </tbody>
                  </table>
               </div>
               <!-- table-wrapper -->
            </div>
            <!-- br-section-wrapper -->
         </div>
         <!-- br-pagebody -->
         <?php include("php_include/footer.php")?>
      </div>
      <!-- br-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
       <script>
          document.addEventListener("DOMContentLoaded", function() {
  const searchInput = document.getElementById("searchInput");
  const dataTable = document.getElementById("dataTable");
  const rows = dataTable.getElementsByTagName("tr");

  searchInput.addEventListener("keyup", function() {
    const searchText = searchInput.value.toLowerCase();

    for (let i = 0; i < rows.length; i++) {
      const row = rows[i];
      const cells = row.getElementsByTagName("td");

      let found = false;
      for (let j = 0; j < cells.length; j++) {
        const cell = cells[j];
        if (cell) {
          const cellText = cell.textContent.toLowerCase();
          if (cellText.indexOf(searchText) > -1) {
            found = true;
            break;
          }
        }
      }

      if (found) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    }
  });
});

      </script>
     <script src="lib/jquery/jquery.js"></script>
      <script src="lib/popper.js/popper.js"></script>
      <script src="lib/bootstrap/bootstrap.js"></script>
      <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
      <script src="lib/moment/moment.js"></script>
      <script src="lib/jquery-ui/jquery-ui.js"></script>
      <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
      <script src="lib/peity/jquery.peity.js"></script>
      <script src="lib/highlightjs/highlight.pack.js"></script>
      <script src="lib/datatables/jquery.dataTables.js"></script>
      <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
      <script src="lib/select2/js/select2.min.js"></script>
      <script src="js/bracket.js"></script>
     
   </body>
</html>
