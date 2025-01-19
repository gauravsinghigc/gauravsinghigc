<div class="row">
    <div class="col-md-6">
        <div class="shadow-sm p-2 b-r-1">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <input placeholder="Search..." type="search" id='EnquirySearching' oninput="SearchData('EnquirySearching', 'RecordsList')" onchange="form.submit()" value='<?php echo IfRequested("GET", "search_query", "", null); ?>' name='search_query' class="form-control form-control-lg">
                        </div>
                    </form>
                </div>
            </div>

            <?php echo ClearFilters("search_query"); ?>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $Start = START_FROM;
                    $EndLimit = DEFAULT_RECORD_LISTING;
                    if (isset($_GET['vendor_name'])) {
                        $VendorSQL = "SELECT * FROM vendor WHERE vendor_name LIKE '%" . $_GET['vendor_name'] . "%' ORDER BY vendor_id DESC";
                    } else {
                        $VendorSQL = "SELECT * FROM vendor ORDER BY vendor_id DESC";
                    }
                    $VendorHandler = SET_SQL($VendorSQL . " limit $Start, $EndLimit", true);
                    if ($VendorHandler != null) {
                        $SerialNo = SERIAL_NO;
                        foreach ($VendorHandler as $Data) {
                            $SerialNo++;
                            $Selection = ReturnSelectionStatus($Data->vendor_status);
                            $VendorType = FETCH("SELECT vendor_type_name FROM config_vendor_types where vendor_type_id='" . $Data->vendor_type_id . "'", "vendor_type_name"); ?>
                            <div class="RecordsList">
                                <a href="<?php echo APP_URL; ?>/?viewid=<?php echo SECURE($Data->vendor_id, "e"); ?>" class='w-100 text-black'>
                                    <div class="data-list flex-s-b">
                                        <div class="w-pr-13">
                                            <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid shadow-sm rounded-circle bg-white">
                                        </div>
                                        <div class="w-pr-87">
                                            <div class="pl-1">
                                                <h6 class="text-primary bold mb-0 fs-13"><?php echo $Data->vendor_name; ?></h6>
                                                <span class="fs-10 font-italic text-secondary pull-right"><?php echo $VendorType; ?></span>
                                                <p class="text-secondary mt-0 mb-0 fs-12" style="line-height: 1rem;">
                                                    <span class="small"><?php echo $Data->vendor_biz_name; ?></span><br>
                                                    <span><?php echo $Data->vendor_phone_code; ?><?php echo $Data->vendor_phone; ?></span><br>
                                                    <span class="pull-right high neg-mt-0-7"><?php echo DATE_FORMATES("d M, Y", $Data->vendor_created_at); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    PaginationFooter(TOTAL($VendorSQL), "index.php"); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-2 rounded">
            <?php if ($VendorID != 0) { ?>
                <div class="d-block text-left">
                    <img class="w-pr-20 rounded-circle shadow-none" src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo FETCH($VendorSQL, "vendor_logo"); ?>">
                    <h4 class="p-1 mb-0 bold mt-1"><?php echo FETCH($VendorSQL, "vendor_name"); ?></h4>
                    <h5 class="text-secondary"><?php echo FETCH($VendorSQL, "vendor_biz_name"); ?></h5>
                    <a href="tel:<?php echo FETCH($VendorSQL, "vendor_phone_code"); ?><?php echo FETCH($VendorSQL, "vendor_phone"); ?>" class="btn btn-md btn-default text-primary b-r-3">
                        <i class="fa fa-phone text-success"></i> <?php echo FETCH($VendorSQL, "vendor_phone_code"); ?><?php echo FETCH($VendorSQL, "vendor_phone"); ?>
                    </a><br>
                    <a href="mailto:<?php echo FETCH($VendorSQL, "vendor_email"); ?>" class="btn btn-md btn-default text-primary b-r-3 mt-1"><i class="fa fa-envelope text-danger"></i> <?php echo FETCH($VendorSQL, "vendor_email"); ?></a>
                    <p class="shadow-sm p-1 rounded mt-1">
                        <i class="fa fa-map-marker text-success"></i>
                        <?php echo VendorAddressDetails($VendorID); ?>
                        <?php echo VendorAddressDetails($VendorID, "vendor_address_gst_no"); ?>
                    </p>
                    <h6 class="bold">Supplier & Dealer of</h6>
                    <hr>
                </div>
            <?php } else {
                echo "Select any enquiry!";
            } ?>
        </div>
    </div>

    <div class="col-md-5">
        <div class="rsor-chat-window">
            <div class="chat-body" id='chatboxs'>
                <?php
                $AllFeedbacks = SET_SQL("SELECT * FROM vendor_enquiry_feedbacks where vendor_main_id='$VendorID'", true);
                if ($AllFeedbacks != null) {
                    foreach ($AllFeedbacks as $Feedbacks) {
                        $vendor_feedack_have_reminder = $Feedbacks->vendor_feedack_have_reminder;

                        if ($vendor_feedack_have_reminder == 0) {
                ?>
                            <div class="w-100 text-right" style="display: flex;justify-content: flex-end;">
                                <p class="feedbacks">
                                    <?php echo SECURE($Feedbacks->vendor_feedback_msg, "d"); ?><br>
                                    <span><?php echo DATE_FORMATES("d M, Y", $Feedbacks->vendor_msg_created_at); ?></span>
                                </p>
                            </div>
                        <?php
                        } else {
                            $ReminderDate = $Feedbacks->vendor_feedback_reminding_date;
                            if ($ReminderDate == DATE("Y-m-d")) {
                                $BlinkData = "blink-data";
                            } else {
                                $BlinkData = "";
                            } ?>
                            <center>
                                <p class="Havereminders">
                                    <b class="<?php echo $BlinkData; ?>">
                                        <i class="fa fa-bell text-danger"></i>
                                        <?php echo DATE_FORMATES("d M, Y", $Feedbacks->vendor_feedback_reminding_date); ?>
                                        <?php echo DATE_FORMATES("h:m A", $Feedbacks->vendor_feedback_reminding_time); ?>
                                    </b>
                                    <br>
                                    <?php echo SECURE($Feedbacks->vendor_feedback_msg, "d"); ?><br>
                                    <span><?php echo DATE_FORMATES("d M, Y", $Feedbacks->vendor_msg_created_at); ?></span>
                                </p>
                            </center>
                    <?php }
                    }
                } else { ?>
                    <center>
                        <p class="Havereminders">
                            No Feedback found!
                        </p>
                    </center>
                <?php } ?>
            </div>
            <div class="chat-actions">
                <div class="actions">
                    <a href=""></a>
                </div>
                <div class="InputArea">
                    <?php if ($VendorID != 0) { ?>
                        <form action="<?php echo CONTROLLER; ?>" method="POST">
                            <?php echo FormPrimaryInputs(true, [
                                "vendor_id" => $VendorID
                            ]); ?>
                            <div class="form-group flex-s-b">
                                <input type='text' tabindex="1" id='MessageArea' name='vendor_feedback_msg' class="form-control" placeholder="Start Typing here...">
                                <button type="submit" name='SaveEnquiryFeedback' class="btn btn-md btn-primary pull-right w-pr-20 ml-1 btn-block"><i class="fa fa-send"></i> Save</button>
                            </div>
                            <a class="btn btn-sm btn-default" id='ButtonName' onclick="ReminderOptionsButton()"><i class="fa fa-bell"></i> Reminder</a>
                            <div class="d-block w-50">
                                <div style='display:none;' id='ReminderTime'>
                                    <div class="flex-s-b mt-2">
                                        <input type='checkbox' hidden id='ReminderOption' name='vendor_feedack_have_reminder' value=''>
                                        <input type='date' value='<?php echo DATE("Y-m-d"); ?>' name='vendor_feedback_reminding_date' min="<?php echo DATE("Y-m-d"); ?>" class="form-control mr-1">
                                        <input type='time' value='<?php echo DATE("h:m"); ?>' name='vendor_feedback_reminding_time' min="<?php echo DATE("h:m"); ?>" class="form-control ml-1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function ReminderOptionsButton() {
        var Reminder = document.getElementById("ReminderTime");
        var ButtonName = document.getElementById("ButtonName");
        var ReminderOption = document.getElementById("ReminderOption");

        if (Reminder.style.display == "none") {
            Reminder.style.display = "block";
            ButtonName.innerHTML = "<i class='fa fa-times'></i> Cancel Reminder";
            ButtonName.classList.remove("btn-default");
            ButtonName.classList.add("btn-danger");
            ReminderOption.checked = true;
            ReminderOption.value = 1;
        } else {
            Reminder.style.display = "none";
            ButtonName.innerHTML = "<i class='fa fa-bell'></i> Reminder";
            ButtonName.classList.remove("btn-danger");
            ButtonName.classList.add("btn-default");
            ReminderOption.checked = false;
            ReminderOption.value = 0;
        }
    }

    window.onload = function() {
        // Focus on the input field when the page loads
        document.getElementById('MessageArea').focus();

        //auto scroll chatbody
        var chatbox = document.getElementById('chatboxs');
        chatbox.scrollTop = chatbox.scrollHeight; // Scroll to the bottom of the chatbox
    };
</script>