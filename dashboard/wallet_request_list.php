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
               <span class="breadcrumb-item active">Wallet Request List</span>
            </nav>
         </div>
         <!-- br-pageheader -->
         <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Wallet Request List</h4>
            <p class="mg-b-0"></p>
         </div>
         <div class="br-pagebody">
            <div class="br-section-wrapper">
               <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    
                    <tr style="background-color:#4e73df; color:white;">
                                            <th style="color:white">SL</th>
                                            <th style="color:white">USERID</th>
                                            <th style="color:white">NAME</th>
                                            <th style="color:white">AMOUNT</th>
                                            <th style="color:white">TRN NUMBER</th>
                                            <th style="color:white">STATUS</th>
                                            <th style="color:white">REPORT</th>
                                            <th style="color:white">DATE</th>
                                            <th style="color:white">SUBMIT</th>
                                        </tr>
                        					 <?php
                        					 $i=1;
                        					 $query=mysqli_query($con,"SELECT * FROM `wallet_request` WHERE status='Pending'");
                        					 while($row=mysqli_fetch_array($query)){
                        				$xuserid=	  $row['userid'];  
                        				$query1=mysqli_query($con,"SELECT * FROM `user` WHERE userid='$xuserid'");
                        				$row1=mysqli_fetch_array($query1);
                        				?>
                        			 <tr>	
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $i;?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $xuserid;?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $row1['name'];?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $row['amount'];?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $row['payment_mode'];?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $row['trn_number'];?>	</td>    
                        				<td style="background-color:#F1EFC0; color:black;"><a href="../dashboard/payment_receipt/<?php echo $row['image'];?>" target="_blank"><img src="../dashboard/payment_receipt/<?php echo $row['image'];?>" width='100px;'>	</a></td>    
                        				<td style="background-color:#F1EFC0; color:black;"><?php echo $row['date'];?>	</td>  
                        					<td style="background-color:#F1EFC0; color:black;">
                        					    <form method="POST" action="wallet_request_list_process.php">
                        					     <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
                        					     <input type="hidden" name="xuserid" value="<?php echo $xuserid;?>">
                        					      <input type="hidden" name="amount" value="<?php echo $row['amount'];?>">
                        					    <select id="cars" name="status">
                                              <option value="Approval">Approval</option>
                                              <option value="Pending">Pending</option>
                                              <option value="Reject">Reject</option>
                                            </select>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Process"> 
                        					   </form>
                        				</td>  
                        			 </tr>	
                        				<?php
                        				$i++;
                        					 }
                        					 ?>
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
