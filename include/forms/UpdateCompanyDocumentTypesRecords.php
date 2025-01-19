<section class="pop-section hidden" id="UpdateCompanyDocumentTypes_<?php echo $Data->ccdt_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Company Documents Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ccdt_id" => $Data->ccdt_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Document Name</label>
                            <input type="text" minlength="5" required name="ccdt_name" value="<?php echo $Data->ccdt_name; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Short Name</label>
                            <input type="text" required name="ccdt_shortname" value="<?php echo $Data->ccdt_shortname; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Code</label>
                            <input type="text" required name="ccdt_code" value="<?php echo $Data->ccdt_code; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tags</label>
                            <input type="text" required name="ccdt_tags" value="<?php echo $Data->ccdt_tags; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Purpose</label>
                            <input type="text" required name="ccdt_purpose" value="<?php echo $Data->ccdt_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control" name='ccdt_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ccdt_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="ccdt_desc" class="form-control" rows="5"><?php echo $Data->ccdt_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyDocumentTypes" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyDocumentTypes_<?php echo $Data->ccdt_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>