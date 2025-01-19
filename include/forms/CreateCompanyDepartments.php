<section class="pop-section hidden" id="AddNewRecords">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New Company Department</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Department Name</label>
                            <input type="text" minlength="5" required name="ccd_name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Short Name</label>
                            <input type="text" required name="ccd_short_name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Code</label>
                            <input type="text" required name="ccd_code" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Type</label>
                            <input type="text" required name="ccd_type" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Key</label>
                            <input type="text" required name="ccd_key" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Department Goals</label>
                            <input type="text" required name="ccd_goals" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='ccd_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, "1"); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccd_desc" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="SaveCompanyDepartmentRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('AddNewRecords')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>