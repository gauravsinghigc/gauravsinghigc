<section class="pop-section hidden" id="UpdateEnquiryFlow">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add & update enquiry flow</h4>
                    <a onclick="Databar('UpdateEnquiryFlow')" class="btn btn-sm closebtn btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="app-sub-heading">Add New Enquiry Flow</h5>
                </div>
                <div class="col-md-12">
                    <form class="row" action="<?php echo CONTROLLER; ?><?php echo CONTROLLER; ?>/ModuleController/EnquiryController.php" method="POST">
                        <?php echo FormPrimaryInputs(true); ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" minlength="5" placeholder="Enter enquiry flow name" required name="cef_name" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type='number' name='cef_sort_order' class="form-control" required='' placeholder="Sort Order 1 to ~">
                                </div>
                                <div class="form-group col-md-1 pt-1 text-center">
                                    <div class="custom-control custom-switch">
                                        <input value='1' name='cef_status' checked type="checkbox" class="custom-control-input" id="EnquiryFlowEntry">
                                        <label class="custom-control-label" for="EnquiryFlowEntry"></label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" name="SaveNewEnquiryFlowStep" class="btn btn-sm btn-success"><?php echo FontIcon("check"); ?> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="app-sub-heading">Update FlowChart Flow</h4>
                </div>
            </div>
            <?php
            $GetFlowChart = SET_SQL("SELECT cef_id, cef_name, cef_short_name, cef_sort_order, cef_status from config_enquiry_flow WHERE cef_user_id='" . LOGIN_UserId . "' ORDER BY cef_sort_order ASC", true);
            if ($GetFlowChart != null) {
                foreach ($GetFlowChart as $FlowChart) {
                    $cef_status = $FlowChart->cef_status;
                    $Selection = ReturnSelectionStatus($cef_status); ?>
                    <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                        <?php echo FormPrimaryInputs(true, [
                            "cef_id" => $FlowChart->cef_id
                        ]); ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" minlength="5" value='<?php echo $FlowChart->cef_name; ?>' required name="cef_name" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type='number' name='cef_sort_order' value='<?php echo $FlowChart->cef_sort_order; ?>' class="form-control" required='' placeholder="Sort Order 1 to ~">
                                </div>
                                <div class="form-group col-md-1 pt-1 text-center">
                                    <div class="custom-control custom-switch">
                                        <input value='1' name='cef_status' <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="FlowChart<?php echo $FlowChart->cef_id; ?>">
                                        <label class="custom-control-label" for="FlowChart<?php echo $FlowChart->cef_id; ?>"></label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="submit" name="UpdateEnquiryFlowStep" class="btn btn-sm btn-success"><?php echo FontIcon("check"); ?> Update</button>
                                    <?php echo CONFIRM_DELETE_POPUP(
                                        "listofenuiryflowcharts",
                                        [
                                            "remove_enquiry_flow_chart_record" => true,
                                            "control_id" => $FlowChart->cef_id
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
                echo NoData("No Enquiry Flow Record Found!");
            } ?>


            <div class="row">
                <div class="col-md-12 text-right">
                    <hr>
                    <a href="#" onclick="Databar('UpdateEnquiryFlow')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</section>