<section class="pop-section hidden" id="CreateVendorContract">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='app-heading'>New Contracts</h4>
                </div>
            </div>
            <form class="row" action="<?php echo CONTROLLER; ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "vendor_main_id" => $REQ_VendorId
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>Contract Name</label>
                            <input type="text" minlength="10" required name="vendor_contract_name" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Contract Type</label>
                            <select class="form-control " name='vendor_contract_type' required>
                                <?php echo InputOptionsWithKey(VENDOR_CONTRACT_TYPES, ""); ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Working/Highlights Tags</label>
                            <input type="text" required id="tags-input" name="vendor_contract_working_tags" class="form-control" data-role="tagsinput" />
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Contract Start Date</label>
                            <input type="date" value="<?php echo DATE('Y-m-d'); ?>" required name="vendor_contract_start_date" class="form-control datepicker">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Internal Due Date</label>
                            <input type="date" required name="vendor_contract_due_date" class="form-control datepicker">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Contract End Date</label>
                            <input type="date" required name="vendor_contract_end_date" class="form-control datepicker">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Contract Status</label>
                            <select name='vendor_contract_status' class="form-control">
                                <?php echo InputOptionsWithKey(CONTRACT_STATUS, 0); ?>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Net Order Amount</label>
                            <input type="number" required name="vendor_contract_net_order_amount" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Contract Amount</label>
                            <input type="number" required name="vendor_contract_amount" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Estimate Revenue</label>
                            <input type="number" readonly class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Contract details like, what vendor have to do.</label>
                            <textarea name="vendor_contract_details" class="form-control editor" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <button type="submit" name="CreateVendorContracts" class="btn btn-md btn-success"><i class="fa fa-check"></i> Create Contracts</button>
                    <a href="#" onclick="Databar('CreateVendorContract')" class="btn btn-md btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>