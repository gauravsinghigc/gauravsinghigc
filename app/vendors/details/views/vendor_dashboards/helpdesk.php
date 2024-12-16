 <div class="row mt-1">
     <div class="col-md-12">
         <h6>All Help Desk Queries</h6>
         <hr>
     </div>
 </div>
 <div class="row">
     <div class="col-md-4 widget-box">
         <a href="#">
             <div class="shadow-sm p-2">
                 <h1 class="display-1 mb-0 pb-0">
                     <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='2' and vendor_main_id='$REQ_VendorId'"); ?>
                 </h1>
                 <p class="mt-0">
                     <i class="fa fa-circle text-success blink-data"></i> Running Queries
                     <span class="blink text-danger">...</span>
                 </p>
             </div>
         </a>
     </div>
     <div class="col-md-8">
         <div class="row">
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">All Queries</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='0' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">New Queries</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='1' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Viewed Queries</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='3' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Over Due Queries</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='4' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Closed Queries</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_query_id FROM vendor_queries where vendor_query_status='5' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Special Queries</p>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>