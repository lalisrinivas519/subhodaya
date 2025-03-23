<?php
session_start();
require('php_include/connect.php');

if (isset($_POST['submit'])) {
    $userid = mysqli_real_escape_string($con, $_POST['userid']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM `user` WHERE `userid`='$userid'");
    $row = mysqli_fetch_array($query);

    if ($row) {
        $my_userid = $row['userid'];
        $my_password = $row['password'];
        
        if ($my_password === $password) {
            
                $_SESSION['userid'] = $userid;
                $_SESSION['id'] = session_id();
                $_SESSION['login_type'] = "user";

                echo '<script>alert("LOGIN SUCCESSFUL.");window.location.assign("dashboard/index.php");</script>';
            
        } else {
            echo '<script>alert("YOUR PASSWORD IS WRONG. PLEASE TRY AGAIN. THANK YOU.");window.location.assign("index.php");</script>';
        }
    } else {
        echo '<script>alert("YOUR USERID IS WRONG. PLEASE TRY AGAIN. THANK YOU.");window.location.assign("index.php");</script>';
    }
} else {
    echo '<script>alert("Invalid submission.");window.location.assign("index.php");</script>';
}
?>
