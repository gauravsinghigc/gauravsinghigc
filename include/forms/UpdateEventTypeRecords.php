<section class="pop-section hidden" id="UpdateEventsTypeRecord_<?php echo $Data->cent_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Event Types</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cent_id" => $Data->cent_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>Event Type Name</label>
                            <input type="text" minlength="5" required name="cent_name" value="<?php echo  $Data->cent_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="cent_code" value="<?php echo $Data->cent_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="cent_purpose" value="<?php echo $Data->cent_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control " name='cent_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cent_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>More details</label>
                            <textarea name="cent_desc" class="form-control form-control-sm" rows="5"><?php echo $Data->cent_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateEventTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateEventsTypeRecord_<?php echo $Data->cent_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>