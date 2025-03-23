<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Shubhodaya Capital Finance Private Limited</title>
      <?php include("php_include/head.php");?>
      <script src="https://kit.fontawesome.com/f5203ff0a7.js" crossorigin="anonymous"></script>
   </head>
   <body class="bg_right">
      <!-- Header section -->
      <?php include("php_include/header.php");?>
      <!-- Header section -->
      <!-- Page Banner -->
      <section class="pagebanner">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="bannerTitle text-left">
                     <h2>Register Here</h2>
                     <p>Join Our Family,Get Financial Freedom In Your Life Just By Registering With Us<span style="color:red;font-size:38px;"> &#10084;</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Page Banner -->   
      <!-- Common Section -->
      <section class="commonSection contactPage">
         <center>
            <div class="container">
               <div class="row">
                  <div class="col-lg-10">
                     <div class="formArea" style="background-color:#A8A7E9;" >
                        <div class="row">
                           <div class="col-lg-12 col-md-12">
                              <form action="register_process.php" method="POST" class="contactFrom row" id="contactForm">
                                 <div class="col-md-11">
                                    <input class="required" type="text"  name="name" placeholder="Your Name*" required>
                                 </div>
                                 <div class="col-md-11">
                                    <input class="required" type="email" name="email" placeholder="Email here*" required>
                                 </div>
                                 <div class="col-md-11">
                                    <input class="required" type="text" name="mobile" placeholder="Mobile Number*" required>
                                 </div>
								 <div class="col-md-11">
                                    <input class="required" type="text" name="referral_userid" placeholder="Referral ID*" required>
                                 </div>
                                 <div class="col-md-11">
                                    <input class="required" type="password"  name="password" placeholder="Password*"  required style="font-size: 19px; color: #929292; line-height: 55px; width: 100%; background: #f2f2fa;height: 55px; border: 1px solid #d9d9ef; outline: none; border-radius: 3px; margin-bottom: 30px; padding: 0 20px;">
                                 </div>
								 <div class="col-md-11">
                                    <input class="required" type="password"  name="confirm_password" placeholder="Confirm Password*"  required style="font-size: 19px; color: #929292; line-height: 55px; width: 100%; background: #f2f2fa;height: 55px; border: 1px solid #d9d9ef; outline: none; border-radius: 3px; margin-bottom: 30px; padding: 0 20px;">
                                 </div>
                                 <div class="col-md-12">
                                    <button name="submit" type="submit" id="con_submit" class="common_btn">Register</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </center>
      </section>
      <!-- Common Section -->  
      <!-- footer section -->
      <?php include("php_include/footer.php");?>
      <!-- footer section -->
      <!-- Include All JS -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.themepunch.revolution.min.js"></script>
      <script src="js/jquery.themepunch.tools.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/shuffle.js"></script>
      <script src="js/slick.js"></script>
      <script src="js/gmaps.js"></script>
      <script src="https://maps.google.com/maps/api/js?key=AIzaSyCysDHE3s4Qw3nTh9o58-2mJcqvR6HV8Kk"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/theme.js"></script>
   </body>
</html>