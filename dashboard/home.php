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
         <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
            
         </div>
         <!-- d-flex -->
         <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
               <div class="col-sm-6 col-xl-3">
                  <div class="bg-teal rounded overflow-hidden">
                     <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                           <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                           <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                           <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col-3 -->
               <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                  <div class="bg-danger rounded overflow-hidden">
                     <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                           <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                           <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">Rs: 329,291</p>
                           <span class="tx-11 tx-roboto tx-white-6">Rs: 390,212 before tax</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col-3 -->
               <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                  <div class="bg-primary rounded overflow-hidden">
                     <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                           <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                           <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                           <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col-3 -->
               <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                  <div class="bg-br-primary rounded overflow-hidden">
                     <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                           <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                           <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                           <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col-3 -->
            </div>
            <!-- row -->
            
            <!-- row -->
         </div>
         <!-- br-pagebody -->
         <?php include("php_include/footer.php")?>
      </div>
      <!-- br-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->
      <script src="lib/jquery/jquery.js"></script>
      <script src="lib/popper.js/popper.js"></script>
      <script src="lib/bootstrap/bootstrap.js"></scri
         <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js">
      </script>
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
         Rs: (function(){
           'use strict'
         
           // FOR DEMO ONLY
           // menu collapsed by default during first page load or refresh with screen
           // having a size between 992px and 1299px. This is intended on this page only
           // for better viewing of widgets demo.
           Rs: (window).resize(function(){
             minimizeMenu();
           });
         
           minimizeMenu();
         
           function minimizeMenu() {
             if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
               // show only the icons and hide left menu label by default
               Rs: ('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
               Rs: ('body').addClass('collapsed-menu');
               Rs: ('.show-sub + .br-menu-sub').slideUp();
             } else if(window.matchMedia('(min-width: 1300px)').matches && !Rs: ('body').hasClass('collapsed-menu')) {
               Rs: ('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
               Rs: ('body').removeClass('collapsed-menu');
               Rs: ('.show-sub + .br-menu-sub').slideDown();
             }
           }
         });
      </script>
   </body>
</html>
