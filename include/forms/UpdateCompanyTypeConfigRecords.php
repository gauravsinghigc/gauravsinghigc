<section class="pop-section hidden" id="UpdateCompanyType_<?php echo $Data->cct_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update Company Type</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "cct_id" => $Data->cct_id,
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Company Type Name</label>
                            <input type="text" minlength="5" required name="cct_name" value='<?php echo $Data->cct_name; ?>' class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Legal Reg. Structure</label>
                            <input type="text" minlength="5" required value='<?php echo $Data->cct_legal_structure; ?>' name="cct_legal_structure" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Registration Act</label>
                            <input type="text" minlength="5" required value='<?php echo $Data->cct_registration_act; ?>' name="cct_registration_act" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <select class="form-control " name='cct_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->cct_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Desc</label>
                            <textarea name="cct_desc" class="form-control" rows="5"><?php echo $Data->cct_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateCompanyTypeRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateCompanyType_<?php echo $Data->cct_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>