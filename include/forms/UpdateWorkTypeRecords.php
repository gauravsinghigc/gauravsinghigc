<section class="pop-section hidden" id="UpdateWorkTypes_<?php echo $Data->cwt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Work Types</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cwt_id" => $Data->cwt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Work Type Name</label>
                            <input type="text" minlength="5" required name="cwt_name" value='<?php echo $Data->cwt_name; ?>' class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='cwt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cwt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="cwt_desc" class="form-control" rows="5"><?php echo $Data->cwt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateWorkTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateWorkTypes_<?php echo $Data->cwt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>