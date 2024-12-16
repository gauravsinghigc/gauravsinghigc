<section class="pop-section hidden" id="UpdateConfigUrls_<?php echo $Data->cut_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Social Icon & Url</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cut_id" => $Data->cut_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Social & Web Url Name</label>
                            <input type="text" minlength="5" value='<?php echo $Data->cut_name; ?>' required name="cut_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='cut_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cut_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Icon Class</label>
                            <select name="cut_icon" class="form-control" required>
                                <?php echo InputOptions(ALL_FONT_ICONS, $Data->cut_icon); ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <?php echo CONFIRM_DELETE_POPUP(
                        "ConfigUrls",
                        [
                            "remove_config_urls_records" => true,
                            "control_id" => $Data->cut_id
                        ],
                        "SystemController/ConfigController",
                        "<i class='fa fa-trash'></i> Remove Record Permanently",
                        "btn btn-md text-danger pull-left"
                    ); ?>
                    <button type="submit" name="UpdateConfigUrlRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateConfigUrls_<?php echo $Data->cut_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>