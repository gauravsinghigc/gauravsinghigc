<section class="pop-section hidden" id="UpdateCompanyPurchaseTypes_<?php echo $Data->ccpt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Company Purchase Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ccpt_id" => $Data->ccpt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Purchase Type Name</label>
                            <input type="text" minlength="5" required name="ccpt_name" value="<?php echo $Data->ccpt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Short Name</label>
                            <input type="text" required name="ccpt_shortname" value="<?php echo $Data->ccpt_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="ccpt_code" value="<?php echo $Data->ccpt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="ccpt_purpose" value="<?php echo $Data->ccpt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control" name='ccpt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ccpt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccpt_desc" class="form-control" rows="5"><?php echo $Data->ccpt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyPurchaseTypes" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyPurchaseTypes_<?php echo $Data->ccpt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>