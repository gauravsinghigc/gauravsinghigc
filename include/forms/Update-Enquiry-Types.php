<section class="pop-section hidden" id="UpdateEnquiryTypes">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add & update enquiry types</h4>
                    <a onclick="Databar('UpdateEnquiryTypes')" class="btn btn-sm closebtn btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="app-sub-heading">Add New Enquiry Type</h5>
                </div>
                <div class="col-md-12">
                    <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                        <?php echo FormPrimaryInputs(true); ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" minlength="5" placeholder="Enter enquiry type name" required name="cet_name" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="cet_icon" class="form-control" required>
                                        <?php echo InputOptions(ALL_FONT_ICONS, ""); ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-1 pt-1 text-center">
                                    <div class="custom-control custom-switch">
                                        <input value='1' name='cet_status' checked type="checkbox" class="custom-control-input" id="EnquiryTypeEntry">
                                        <label class="custom-control-label" for="EnquiryTypeEntry"></label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" name="SaveNewEnquiryTypes" class="btn btn-sm btn-success"><?php echo FontIcon("check"); ?> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="app-sub-heading">Update Enquiries Types</h4>
                </div>
            </div>
            <?php
            $AllEnquiries = SET_SQL("SELECT cet_id, cet_name, cet_icon, cet_status from config_enquiry_types WHERE cet_user_id='" . LOGIN_UserId . "'", true);
            if ($AllEnquiries != null) {
                foreach ($AllEnquiries as $Enquiries) {
                    $cet_status = $Enquiries->cet_status;
                    $Selection = ReturnSelectionStatus($cet_status); ?>
                    <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                        <?php echo FormPrimaryInputs(true, [
                            "cet_id" => $Enquiries->cet_id
                        ]); ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" minlength="5" value='<?php echo $Enquiries->cet_name; ?>' required name="cet_name" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="cet_icon" class="form-control" required>
                                        <?php echo InputOptions(ALL_FONT_ICONS, $Enquiries->cet_icon); ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-1 pt-1 text-center">
                                    <div class="custom-control custom-switch">
                                        <input value='1' name='cet_status' <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Enquiries->cet_id; ?>">
                                        <label class="custom-control-label" for="customSwitch<?php echo $Enquiries->cet_id; ?>"></label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" name="UpdateEnquiryTypes" class="btn btn-sm btn-success"><?php echo FontIcon("check"); ?> Update</button>
                                    <?php echo CONFIRM_DELETE_POPUP(
                                        "listofenquiryTypes",
                                        [
                                            "remove_enquiry_type_records" => true,
                                            "control_id" => $Enquiries->cet_id
                                        ],
                                        "ModuleController",
                                        "<i class='fa fa-trash'></i>",
                                        "btn btn-sm btn-default text-danger"
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </form>
            <?php }
            } else {
                echo NoData("No Enquiry Type Found!");
            } ?>


            <div class="row">
                <div class="col-md-12 text-right">
                    <hr>
                    <a href="#" onclick="Databar('UpdateEnquiryTypes')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</section>