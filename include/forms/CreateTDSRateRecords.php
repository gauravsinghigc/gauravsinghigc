<section class="pop-section hidden" id="AddTDSRecords">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Add New TDS Rate Rule</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>TDS Rate Name</label>
                            <input type="text" minlength="5" required name="ctrs_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" minlength="5" required name="ctrs_code" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nature of Payment</label>
                            <input type="text" minlength="5" required name="ctrs_nature_of_payments" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Min Threshold Limit</label>
                            <input type="text" minlength="5" required name="ctrs_threshold_limit" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>TDS Rate in Percentage</label>
                            <input type="text" minlength="5" required name="ctrs_rates" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Applicable to</label>
                            <input type="text" minlength="5" required name="ctrs_applicable_to" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Deducted by</label>
                            <input type="text" minlength="5" required name="ctrs_deductor" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Financial Year</label>
                            <select name="ctrs_finanical_year_id" class="form-control">
                                <?php
                                $AllFinancialYears = SET_SQL("SELECT * FROM config_finanical_years ORDER BY cfy_id DESC", true);
                                if ($AllFinancialYears != null) {
                                    foreach ($AllFinancialYears as $FinancialYear) {
                                        echo "<option value='" . $FinancialYear->cfy_id . "'>" . $FinancialYear->cfy_name . "</option>";
                                    }
                                } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='ctrs_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, "1"); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Purpose</label>
                            <input type="text" required name="ctrs_purpose" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="ctrs_detailed_desc" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="AddTDSRateRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                    <a href="#" onclick="Databar('AddTDSRecords')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>