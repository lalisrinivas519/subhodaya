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
         
         <!-- br-pageheader -->
         <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Wallet Approval List</h4>
            <p class="mg-b-0"></p>
         </div>
         <div class="br-pagebody">
            <div class="br-section-wrapper">
               <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    
                    <tr style="background-color:#4e73df; color:white;">
                                            <th style="color:white;">SL</th>
                                            <th style="color:white;">USERID</th>
                                            <th style="color:white;">NAME</th>
                                            <th style="color:white;">AMOUNT</th>
                                            <th style="color:white;">PAYMENT MODE</th>
                                            <th style="color:white;">TRN NUMBER</th>
                                            <th style="color:white;">REPORT</th>
                                            <th style="color:white;">DATE</th>
                                        </tr>
                        					 <?php
                        					 $i=1;
                        					 $query=mysqli_query($con,"SELECT * FROM `wallet_request` WHERE `status`='Approval' order by id desc");
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
                        				
                        			 </form>
                        			  
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
