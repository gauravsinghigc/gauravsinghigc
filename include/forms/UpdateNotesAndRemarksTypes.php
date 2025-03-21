<section class="pop-section hidden" id="UpdateNoteAndRemarkTypes_<?php echo $Data->cnrt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Note & Remark Type Records</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cnrt_id" => $Data->cnrt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Note-Remark Type Name</label>
                            <input type="text" minlength="5" required name="cnrt_name" value="<?php echo $Data->cnrt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Short Name</label>
                            <input type="text" required name="cnrt_shortname" value="<?php echo $Data->cnrt_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="cnrt_code" value="<?php echo $Data->cnrt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="cnrt_purpose" value="<?php echo $Data->cnrt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control" name='cnrt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cnrt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="cnrt_desc" class="form-control" rows="5"><?php echo $Data->cnrt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateNoteAndRemarksRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('UpdateNoteAndRemarkTypes_<?php echo $Data->cnrt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>