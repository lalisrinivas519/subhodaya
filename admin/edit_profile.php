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
          
          <span class="breadcrumb-item active">Edit Profile </span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
       <h4 class="tx-gray-800 mg-b-5">Edit Profile</h4>
      </div>

                <div class="br-pagebody" >
              <div class="row mg-t-10">
            <div class="col-xl-6">
              <div class="form-layout form-layout-4"style="background-color:#0BC4CB;border-radius:15px;">
               <form action="" method="">
			 <br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Upload image</p></center>
	         <center> <input type="file" class="form-control" placeholder="upload image" style="width:400px"></center>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Name</p></center>
	         <center> <input type="text" class="form-control" placeholder="Name" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Father/MotherName</p></center>
	         <center> <input type="text" class="form-control" placeholder="Father/MotherName" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Full Address</p></center>
	         <center> <input type="text" class="form-control" placeholder="Full Address" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Bank Name</p></center>
	         <center> <input type="text" class="form-control" placeholder="Bank Name" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Account No</p></center>
	         <center> <input type="text" class="form-control" placeholder="Account No" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">IFSC Code</p></center>
	         <center> <input type="text" class="form-control" placeholder="IFSC Code" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">PAN No</p></center>
	         <center> <input type="text" class="form-control" placeholder="PAN No" style="width:400px"></center><br>
			 <center> <p class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Age</p></center>
	         <center> <input type="text" class="form-control" placeholder="Age" style="width:400px"></center><br>
			 
			 <center>
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-primary" name="submit">Submit </button>
                </div>
				</center>
				</form>
				
		<!-- form-layout -->
            </div><!-- col-6 -->
          </div>
	 </div><!-- br-pagebody -->
      <?php include("php_include/footer.php")?>
    </div>
<!-- br-mainpanel -->
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
