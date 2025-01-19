<section class="pop-section hidden" id="UpdateVendorType_<?php echo $Data->vendor_type_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Vendor Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "vendor_type_id" => $Data->vendor_type_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Vendor Type Name</label>
                            <input type="text" minlength="5" value='<?php echo $Data->vendor_type_name; ?>' required name="vendor_type_name" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Vendor Type Status</label>
                            <select class="form-control " name='vendor_type_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->vendor_type_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Vendor Type Desc</label>
                            <textarea name="vendor_type_desc" class="form-control" rows="5"><?php echo SECURE($Data->vendor_type_desc, "d"); ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <?php echo CONFIRM_DELETE_POPUP(
                        "VendorTypes",
                        [
                            "remove_vendor_records" => true,
                            "control_id" => $Data->vendor_type_id
                        ],
                        "SystemController/ConfigController",
                        "<i class='fa fa-trash'></i> Remove Record Permanently",
                        "btn btn-md text-danger pull-left"
                    ); ?>
                    <button type="submit" name="UpdateVendorTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateVendorType_<?php echo $Data->vendor_type_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>