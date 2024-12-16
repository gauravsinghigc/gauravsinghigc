 <div class="row mt-1">
     <div class="col-md-12">
         <h6>All Purchase Orders</h6>
         <hr>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>All Orders</span><br>
                     <span class='fs-13'><b>@</b> <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?></span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='0' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Fresh Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='0' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='1' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Inprocess Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='1' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='2' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Waiting Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='2' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='3' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Payment Issue Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='3' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='4' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Delivered Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='4' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='6' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Late Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='6' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_order_id FROM vendor_orders WHERE vendor_order_status='5' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Cancelled Orders</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_order_amount FROM vendor_orders WHERE vendor_order_status='5' and vendor_main_id='$REQ_VendorId'", "vendor_order_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
 </div>