<section class="pop-section hidden" id="UpdateWorkIndustry_<?php echo $Data->cwi_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Work Industry Name</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cwi_id" => $Data->cwi_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Work Industry Name</label>
                            <input type="text" minlength="5" required value="<?php echo $Data->cwi_name; ?>" name="cwi_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Short Name or Code</label>
                            <input type="text" minlength="5" required name="cwi_code" value="<?php echo $Data->cwi_code; ?>" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tags </label>
                            <input type="text" minlength="5" required name="cwi_tags" value="<?php echo $Data->cwi_tags; ?>" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='cwi_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cwi_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="cwi_desc" class="form-control" rows="5"><?php echo $Data->cwi_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateWorkIndustyRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('UpdateWorkIndustry_<?php echo $Data->cwi_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>