<section class="pop-section hidden" id="UpdateCompanyAccountTypes_<?php echo $Data->ccat_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Company Account Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ccat_id" => $Data->ccat_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Account Type Name</label>
                            <input type="text" minlength="5" required name="ccat_name" value="<?php echo $Data->ccat_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Short Name</label>
                            <input type="text" required name="ccat_shortname" value="<?php echo $Data->ccat_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="ccat_code" value="<?php echo $Data->ccat_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Key Name</label>
                            <input type="text" required name="ccat_key" value="<?php echo $Data->ccat_key; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Type</label>
                            <input type="text" required name="ccat_type" value="<?php echo $Data->ccat_type; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="ccat_purpose" value="<?php echo $Data->ccat_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control" name='ccat_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ccat_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccat_desc" class="form-control" rows="5"><?php echo $Data->ccat_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyAccountTypes" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyAccountTypes_<?php echo $Data->ccat_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>