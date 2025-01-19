<section class="pop-section hidden" id="UpdateVendorCategory_<?php echo $Data->cvc_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Vendor Category</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cvc_id" => $Data->cvc_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Vendor Category Name</label>
                            <input type="text" minlength="5" required name="cvc_name" value='<?php echo $Data->cvc_name; ?>' class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Vendor Category Status</label>
                            <select class="form-control " name='cvc_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cvc_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Vendor Category Desc</label>
                            <textarea name="cvc_desc" class="form-control" rows="5"><?php echo SECURE($Data->cvc_desc, "d"); ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <?php echo CONFIRM_DELETE_POPUP(
                        "VendorCategories",
                        [
                            "remove_vendor_category_records" => true,
                            "control_id" => $Data->cvc_id
                        ],
                        "SystemController/ConfigController",
                        "<i class='fa fa-trash'></i> Remove Record Permanently",
                        "btn btn-md text-danger pull-left"
                    ); ?>
                    <button type="submit" name="UpdateVendorCategoryRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateVendorCategory_<?php echo $Data->cvc_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>