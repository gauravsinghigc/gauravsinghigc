 <div class="row mt-1">
     <div class="col-md-12">
         <h6>All Contracts Payments</h6>
         <hr>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $NetPayable = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Net Payable</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $TotalPaidAmount = AMOUNT("SELECT vip_paid_amount FROM vendor_contracts, vendor_invoices, vendor_invoice_payments WHERE vendor_contracts.vendor_contract_id=vendor_invoices.vendor_contract_main_id and vendor_invoices.vendor_invoice_id=vendor_invoice_payments.vip_main_invoice_id and vendor_contracts.vendor_main_id='$REQ_VendorId'", "vip_paid_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Net Paid</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $PendingBalance = $NetPayable - $TotalPaidAmount; ?>
                 </h2>
                 <p class="small">
                     <span>Balance/Pending</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $PauseContracts = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='2' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Paused Contracts</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $OverDueContracts = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='6' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Over due Contracts</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $CancelledContracts = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='5' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Cancelled Contacts</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $RunningContracts = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='1' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Running Contacts</span><br>
                 </p>
             </div>
         </a>
     </div>
     <div class='col-lg-3 col-md-3 col-sm-6 col-6 col-xs-6 widget-box'>
         <a href="#">
             <div class="shadow-sm p-2">
                 <h2 class="mb-0">
                     <span class='fs-12'>Rs.</span>
                     <?php echo $UpcomingContracts = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts WHERE vendor_contract_status='0' and vendor_main_id='$REQ_VendorId'", "vendor_contract_amount"); ?>
                 </h2>
                 <p class="small">
                     <span>Upcoming Contacts</span><br>
                 </p>
             </div>
         </a>
     </div>
 </div>