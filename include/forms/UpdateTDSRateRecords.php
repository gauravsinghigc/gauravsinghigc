<section class="pop-section hidden" id="UpdateTDSRate_<?php echo $Data->ctrs_id; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>Update TDS Rate Rule</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "ctrs_id" => $Data->ctrs_id
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>TDS Rate Name</label>
                            <input type="text" required name="ctrs_name" value="<?php echo $Data->ctrs_name; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Code</label>
                            <input type="text" required name="ctrs_code" value="<?php echo $Data->ctrs_code; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nature of Payment</label>
                            <input type="text" required name="ctrs_nature_of_payments" value="<?php echo $Data->ctrs_nature_of_payments; ?>" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Min Threshold Limit</label>
                            <input type="number" required name="ctrs_threshold_limit" value="<?php echo $Data->ctrs_threshold_limit; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>TDS Rate in Percentage</label>
                            <input type="text" required name="ctrs_rates" value="<?php echo $Data->ctrs_rates; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Applicable to</label>
                            <input type="text" required name="ctrs_applicable_to" value="<?php echo $Data->ctrs_applicable_to; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Deducted by</label>
                            <input type="text" required name="ctrs_deductor" value="<?php echo $Data->ctrs_deductor; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Financial Year</label>
                            <select name="ctrs_finanical_year_id" class="form-control">
                                <?php
                                $AllFinancialYears = SET_SQL("SELECT * FROM config_finanical_years ORDER BY cfy_id DESC", true);
                                if ($AllFinancialYears != null) {
                                    foreach ($AllFinancialYears as $FinancialYear) {
                                        $CheckSelectedYear = CheckEquality($FinancialYear->cfy_id, $Data->ctrs_finanical_year_id, "select");
                                        echo "<option value='" . $FinancialYear->cfy_id . "' " . $CheckSelectedYear . ">" . $FinancialYear->cfy_name . "</option>";
                                    }
                                } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control " name='ctrs_status' required>
                                <?php echo InputOptionsWithKey(COMMON_STATUS, $Data->ctrs_status); ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Purpose</label>
                            <input type="text" required name="ctrs_purpose" value="<?php echo $Data->ctrs_purpose; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="ctrs_detailed_desc" class="form-control" rows="5"><?php echo $Data->ctrs_detailed_desc; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="UpdateTDSRateRecords" class="btn btn-md btn-primary"><i class="fa fa-check"></i> Update Details</button>
                    <a href="#" onclick="Databar('UpdateTDSRate_<?php echo $Data->ctrs_id; ?>')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>