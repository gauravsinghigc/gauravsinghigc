 <div class="row mt-1">
     <div class="col-md-12">
         <h6>
             <span>All Reminders & Alerts</span>
         </h6>
         <hr>
     </div>
 </div>

 <div class="row mt-1">
     <div class="col-md-5">
         <div class="shadow-sm p-2 b-r-1">
             <h6 class="flex-s-b fs-12">
                 <span>All Scheduled Reminders</span>
                 <span class='badge badge-primary badge-pill float-right'>10</span>
             </h6>
             <hr>
             <form>
                 <input type="text" Id="search" oninput="SearchData('search', 'ReminderList')" class="form-control" placeholder="Search Reminders...">
             </form>
             <ul class="reminders mt-2">
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>

                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y"); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
                 <li class='ReminderList'>
                     <a href="">
                         <h2>
                             <span class="fs-12 d-block pull-right"><?php echo DATE("d M, Y", strtotime("+5 day")); ?> </span>
                             <?php echo RandomColorText("<i class='fa fa-bell'></i>"); ?>
                             <span class='time'><?php echo DATE("h:m A"); ?></span>
                         </h2>
                         <span class='difference'><i class='fa fa-clock'></i> 5 min left</span>
                         <span class="type">CALL</span>
                         <span class="level high">HIGH</span>
                         <p>Need to discuss fresh matrial</p>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
     <div class="col-md-7">
         <div class="shadow-sm p-2 b-r-1">
             <?php echo GENERATE_CALENDAR; ?>
         </div>
     </div>
 </div>