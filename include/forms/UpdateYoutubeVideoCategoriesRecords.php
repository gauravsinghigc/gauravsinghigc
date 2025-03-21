<section class="pop-section hidden" id="UpdateYoutubeVideoCategory_<?php echo $Data->cyvt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Youtube Video Category</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cyvt_id" => $Data->cyvt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>Youtube Category Name</label>
                            <input type="text" minlength="5" required name="cyvt_name" value="<?php echo  $Data->cyvt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="cyvt_code" value="<?php echo $Data->cyvt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label>Purpose</label>
                            <input type="text" required name="cyvt_purpose" value="<?php echo $Data->cyvt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Status</label>
                            <select class="form-control " name='cyvt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cyvt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>More details</label>
                            <textarea name="cyvt_desc" class="form-control form-control-sm" rows="5"><?php echo $Data->cyvt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateYoutubeVideoCategoryVideo" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateYoutubeVideoCategory_<?php echo $Data->cyvt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>