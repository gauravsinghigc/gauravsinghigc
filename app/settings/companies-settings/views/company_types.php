<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-30">Company Type</div>
            <div class="w-pr-25">Registration Act</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-5 text-right">Records</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $CompanySQL = "SELECT * FROM config_company_types WHERE cct_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cct_id DESC";
        } else {
            $CompanySQL = "SELECT * FROM config_company_types ORDER BY cct_id DESC";
        }
        $CompanyTypes = SET_SQL($CompanySQL . " limit $Start, $EndLimit", true);
        if ($CompanyTypes != null) {
            $SerialNo = SERIAL_NO;
            foreach ($CompanyTypes as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cct_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-30 bold text-primary text-left">
                            <a onclick="Databar('UpdateCompanyType_<?php echo $Data->cct_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cct_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->cct_desc; ?>"><i class="fa fa-info-circle"></i></span>
                            </a>
                        </div>
                        <div class="w-pr-25">
                            <?php echo $Data->cct_registration_act; ?>
                        </div>
                        <div class="w-pr-10">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cct_created_at); ?>
                        </div>
                        <div class="w-pr-15">
                            <?php echo AttachUserEntity($Data->cct_created_by); ?>
                        </div>
                        <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cct_id" => $Data->cct_id,
                                    "UpdateCompanyTypeRecordStatus" => $Data->cct_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cct_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cct_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-5 text-right">
                            <a onclick="Databar('UpdateCompanyType_<?php echo $Data->cct_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateCompanyTypeConfigRecords.php";
            }
        }
        PaginationFooter(TOTAL($CompanySQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateCompanyTypeConfigRecord.php";
?>