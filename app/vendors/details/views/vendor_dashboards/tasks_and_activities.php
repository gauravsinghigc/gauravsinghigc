 <div class="row mt-1">
     <div class="col-md-12">
         <h6>All Task & Activities</h6>
         <hr>
     </div>
 </div>
 <div class="row">
     <div class="col-md-4 widget-box">
         <a href="#">
             <div class="shadow-sm p-2">
                 <h1 class="display-1 mb-0 pb-0">
                     <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='2' and vendor_main_id='$REQ_VendorId'"); ?>
                 </h1>
                 <p class="mt-0">
                     <i class="fa fa-circle text-success blink-data"></i> Running Tasks
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
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">All Tasks</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='0' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Fresh Tasks</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='1' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Waiting Tasks</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='3' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Overdue Tasks</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='4' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Completed Tasks</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-sm-6 col-12 widget-box">
                 <a href="">
                     <div class="shadow-sm p-2">
                         <h2 class="mb-0">
                             <?php echo TOTAL("SELECT vendor_tasks_id FROM vendor_tasks where vendor_task_status='5' and vendor_main_id='$REQ_VendorId'"); ?>
                         </h2>
                         <p class="text-grey">Failed Tasks</p>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>