<?php
include("php_include/connect.php");
?>

<?php
    if(isset($_POST['submit'])){
        $userid = 'SCF'.mt_rand(1000000, 9999900);
        $name = mysqli_real_escape_string($con,$_POST['name']);
		$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $referral_userid = mysqli_real_escape_string($con,$_POST['referral_userid']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $confirm_password = mysqli_real_escape_string($con,$_POST['confirm_password']);
		$date = date('d-m-Y');
	    
	
	
	if($userid!='' && $name!='' && $mobile!=''  && $email!=''  && $referral_userid!='' && $password!='' && $confirm_password!=''){
		
        if($password == $confirm_password){
			$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$userid'");
			if(mysqli_num_rows($query)==0){
			$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$referral_userid'");
			if(mysqli_num_rows($query)>0){
			
				$query = mysqli_query($con,"INSERT INTO `user`(`name`, `email`, `password`, `mobile`, `referral_userid`, `date`, `email1`, `trn_password`) VALUES ('$name','$userid','$password','$mobile','$referral_userid','$date','$email','$password')");
				$query = mysqli_query($con,"INSERT INTO `wallet`(`email`) VALUES ('$userid')");
				$query = mysqli_query($con,"INSERT INTO `income`(`email`) VALUES ('$userid')");
				
			   
					 echo '<script>alert("Registration  Successful.");window.location.assign("login.php");</script>';
			}else{
				echo '<script>alert("The  Referral Userid Not available.");window.location.assign("index.php");</script>';
			}	  
			 }else {
						echo '<script>alert("The  Userid Not available.");window.location.assign("index.php");</script>';
				}

            
        } else {
            echo '<script>alert("Password and Confirm Password should be same");window.location.assign("index.php");</script>';
        }
	}		
	else{
		echo '<script>alert("Please fill all the fields.");window.location.assign("index.php");</script>';
	}
	
	

	}
?><!--/join user-->




