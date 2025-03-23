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
                  <table id="datatable1" class="table display responsive nowrap" >
                     <thead>
                    <tr style="background-color:#29758E; color:white;">
					  <th style="color:white;">SL</th>
					  <th style="color:white;">Userid</th>
                      <th style="color:white;">A</th>
                      <th style="color:white;">B</th>
					  
                    </tr>
                  </thead>
                     <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `pool_one`");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$b = $row['a_side'];
											$a = $row['b_side'];
										?>
                                        	<tr>
                                            	<td style="background-color:#F1EFC0; color:black;"><?php echo $i ?></td>
                                            		<td style="background-color:#F1EFC0; color:black;"><?php echo $row['userid']; ?></td>
                                            	<td style="background-color:#F1EFC0; color:black;"><?php echo $row['a_side']; ?></td>
                                                <td style="background-color:#F1EFC0; color:black;"><?php echo $row['b_side']; ?></td>
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
      <script>
         $(function(){
           'use strict';
         
           $('#datatable1').DataTable({
             responsive: true,
             language: {
               searchPlaceholder: 'Search...',
               sSearch: '',
               lengthMenu: '_MENU_ items/page',
             }
           });
         
           $('#datatable2').DataTable({
             bLengthChange: false,
             searching: false,
             responsive: true
           });
         
           // Select2
           $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
         
         });
         </script>
   </body>
</html>
