<section class="pop-section hidden" id="UpdateCompanyMeetingType_<?php echo $Data->cmt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Meeting Type Records</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cmt_id" => $Data->cmt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Credential Category Name</label>
                            <input type="text" minlength="5" required name="cmt_name" value="<?php echo $Data->cmt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Short Name</label>
                            <input type="text" required name="cmt_shortname" value="<?php echo $Data->cmt_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="cmt_code" value="<?php echo $Data->cmt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="cmt_purpose" value="<?php echo $Data->cmt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control" name='cmt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cmt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="cmt_desc" class="form-control" rows="5"><?php echo $Data->cmt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateMeetingTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyMeetingType_<?php echo $Data->cmt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>