 <div class="row mt-1">
     <div class="col-md-12">
         <h6>All Contracts Overview</h6>
         <hr>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>All Contracts</span><br>
                     <span class='fs-13'><b>@</b> <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?></span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='0' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Fresh Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='0' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='1' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Active Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='1' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='2' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Pause Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='2' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='3' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Pending Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='3' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='4' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Completed Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='4' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='6' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Overdue Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='6' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0"><?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts WHERE vendor_contract_status='5' and vendor_main_id='$REQ_VendorId'"); ?></h2>
                 <p class="small">
                     <span>Cancelled Contracts</span><br>
                     <span class='fs-13'><b>@</b>
                         <?php echo Price(AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='5' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"), "", "Rs."); ?>
                     </span><br>
                 </p>
             </div>
         </a>
     </div>
 </div>