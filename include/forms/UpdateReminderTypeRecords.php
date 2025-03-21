<section class="pop-section hidden" id="UpdateReminderTypeRecords_<?php echo $Data->crt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Reminder Type Records</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "crt_id" => $Data->crt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Note-Remark Type Name</label>
                            <input type="text" minlength="5" required name="crt_name" value="<?php echo $Data->crt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Short Name</label>
                            <input type="text" required name="crt_shortname" value="<?php echo $Data->crt_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="crt_code" value="<?php echo $Data->crt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="crt_purpose" value="<?php echo $Data->crt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control" name='crt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->crt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="crt_desc" class="form-control" rows="5"><?php echo $Data->crt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateReminderTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('UpdateReminderTypeRecords_<?php echo $Data->crt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>