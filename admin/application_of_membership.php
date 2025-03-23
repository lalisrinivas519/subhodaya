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
          <a class="breadcrumb-item" href="index.php">Home</a>
          
          <span class="breadcrumb-item active">Application of membership</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Application of membership</h4>
      </div>

      <div class="br-pagebody" >
              <div class="row mg-t-80">
            <div class="col-xl-6">
              <div class="form-layout form-layout-4"style="background-color:#0BC4CB; border-radius:15px;">
			  
			  <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">For Office Use Only</h6>
                <p class="mg-b-30 tx-gray-600"></p>
				<form action="index.php" method="GET">
				 <div class="row">
				 
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
				  <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Upload Photo</h6>
                    <input type="file" class="form-control" placeholder="upload image">
                  </div>
                </div>
				 <br>
                <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="branch code">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="total Unit Price">
                  </div>
                </div>
				<div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Account No">
                  </div>
                </div>
				<div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Plan Period">
                  </div>
                </div>
				
				<div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Opening Date">
                  </div>
                </div>
				
				<div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Execution Date">
                  </div>
                </div>
				<br>
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Applicant Details</h6>
                <p class="mg-b-30 tx-gray-600"></p>
                <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="name">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="father/mothername">
                  </div>
                </div>
                
                <div class="row mg-t-20">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="address"></textarea>
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="occupation">
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Pan no">
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Mob no">
                  </div>
                </div>
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="dob">
                  </div>
                </div>
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="age">
                  </div>
                </div>
				
				<br>
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" name="bankdetails">Bank Details</h6>
				<br>
				
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="bank name">
                  </div>
                </div>
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Bank Branch">
                  </div>
                </div>
				
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="account no">
                  </div>
                </div>
				<br>
				
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="IFSC Code">
                  </div>
                </div>
				<br>
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Nomination Details</h6>
				<br>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="name">
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="relationship">
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="DOB">
                  </div>
                </div>
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="age">
                  </div>
                </div>
				<br><br>
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Details Of Marketing Executive</h6>
				<br>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="name">
                  </div>
                </div>
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="code no">
                  </div>
                </div>
				
				<br>
                      <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="designation">
                  </div>
                </div>
				<br><br>
				<p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="font-size:10px;"> Selected Plan</p>
				<div >
				<label style="color:white;" >DDP<input type="radio"name="plan"></label>&nbsp;&nbsp;
				<label style="color:white;" >MDP<input type="radio"name="plan"></label>&nbsp;&nbsp;
				<label style="color:white;" >FD<input type="radio"name="plan"></label>&nbsp;&nbsp;
				<label style="color:white;" >MIP<input type="radio"name="plan"></label>&nbsp;&nbsp;
				<label style="color:white;" >YIP<input type="radio" name="plan"></label>&nbsp;&nbsp;
		</div>
		<br>
				<p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="font-size:10px;">  Plan Period</p>
				
		<div ><label style="color:white;" >3Y<input type="radio" name="period"></label>&nbsp;&nbsp;
				<label style="color:white;" >4Y<input type="radio"name="period"></label>&nbsp;&nbsp;
				<label style="color:white;" >5Y<input type="radio" name="period"></label>&nbsp;&nbsp;
				<label style="color:white;" >6Y<input type="radio" name="period"></label>&nbsp;&nbsp;
				<label style="color:white;" >6.3Y<input type="radio" name="period"></label>&nbsp;&nbsp;
				<label style="color:white;" >7Y<input type="radio" name="period"></label>&nbsp;&nbsp;
		</div>
		<br>
				<p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="font-size:10px;">Mode Of Payment</p>
				
		<div >
				<label style="color:white;" >Daily<input type="radio"name="payment"></label>&nbsp;&nbsp;
				<label style="color:white;" >Monthly<input type="radio"name="payment"></label>&nbsp;&nbsp;
				<label style="color:white;" >One Time Payment<input type="radio"name="payment"></label>&nbsp;&nbsp;
				
		</div>
				<center>
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-primary" name="submit">Submit </button>
                </div>
				</center>
				
				<!-- form-layout-footer -->
              </div><!-- form-layout -->
            </div><!-- col-6 -->
          </div>
	 </div><!-- br-pagebody -->
      <?php include("php_include/footer.php")?>
    </div><!-- br-mainpanel -->
   <!-- ########## END: MAIN PANEL ########## -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></scri
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
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
