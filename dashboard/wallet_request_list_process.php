       <?php include("php_include/head.php")?>
       
       <?php
       
       if(isset($_POST['submit'])){
           $id=$_POST['id'];
           $xuserid=$_POST['xuserid'];
           $status=$_POST['status'];
           $amount=$_POST['amount'];
           $query=mysqli_query($con,"SELECT * FROM `income` WHERE userid='$xuserid'");
           $row=mysqli_fetch_array($query);
           $wallet=$row['wallet'];
           $x=$wallet+$amount;
           if($status=='Approval'){
           $update=mysqli_query($con,"UPDATE `income` SET `wallet`='$x' WHERE userid='$xuserid'");
           $update1=mysqli_query($con,"UPDATE `wallet_request` SET `status`='$status' WHERE id='$id'");
           echo '<script>alert("Send Successful.");window.location.assign("wallet_request_list.php");</script>'; 
           }elseif($status=='Pending'){
              echo '<script>alert("Keep Pending.");window.location.assign("wallet_request_list.php");</script>';  
           }elseif($status=='Reject'){
               $update1=mysqli_query($con,"UPDATE `wallet_request` SET `status`='$status' WHERE id='$id'");
               echo '<script>alert("Rejected.");window.location.assign("wallet_request_list.php");</script>';  
           }
       }
       ?>