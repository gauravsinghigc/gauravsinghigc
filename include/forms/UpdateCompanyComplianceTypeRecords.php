<section class="pop-section hidden" id="UpdateComplianceTypeRecord_<?php echo $Data->ccct_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Company Compliance Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ccct_id" => $Data->ccct_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Compliance Type Name</label>
                            <input type="text" minlength="5" required name="ccct_name" value="<?php echo $Data->ccct_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Short Name</label>
                            <input type="text" required name="ccct_short_name" value="<?php echo $Data->ccct_short_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Code</label>
                            <input type="text" required name="ccct_code" value="<?php echo $Data->ccct_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Key</label>
                            <input type="text" required name="ccct_key" value="<?php echo $Data->ccct_key; ?>" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='ccct_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ccct_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccct_desc" class="form-control" rows="5"><?php echo $Data->ccct_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyComplianceTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateComplianceTypeRecord_<?php echo $Data->ccct_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>