<section class="pop-section hidden" id="UpdateCompanyDepartment_<?php echo $Data->ccd_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New Company Department</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ccd_id" => $Data->ccd_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Department Name</label>
                            <input type="text" minlength="5" required name="ccd_name" value="<?php echo $Data->ccd_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Short Name</label>
                            <input type="text" required value="<?php echo $Data->ccd_short_name; ?>" name="ccd_short_name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Code</label>
                            <input type="text" required name="ccd_code" value="<?php echo $Data->ccd_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Type</label>
                            <input type="text" required name="ccd_type" value="<?php echo $Data->ccd_type; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Key</label>
                            <input type="text" required name="ccd_key" value='<?php echo $Data->ccd_key; ?>' class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Department Goals</label>
                            <input type="text" required name="ccd_goals" value='<?php echo $Data->ccd_goals; ?>' class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='ccd_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ccd_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccd_desc" class="form-control" rows="5"><?php echo $Data->ccd_status; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyDepartmentRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyDepartment_<?php echo $Data->ccd_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>