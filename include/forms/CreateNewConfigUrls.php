<section class="pop-section hidden" id="AddNewUrl">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New Social Icon & Url</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Social & Web Url Name</label>
                            <input type="text" minlength="5" required name="cut_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='cut_status' required>
                                <?php echo InputOptionsWithKey([], "1"); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Icon Class</label>
                            <select name="cut_icon" class="form-control" required>
                                <?php echo InputOptions(ALL_FONT_ICONS, ""); ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="SaveConfigUrlRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('AddNewUrl')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>