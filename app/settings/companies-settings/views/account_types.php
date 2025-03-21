<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-40">Name</div>
            <div class="w-pr-20">ShortName/Code</div>
            <div class="w-pr-10">Type</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-7 text-right">Actions</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $RecordsSQL = "SELECT * FROM config_accounts_types WHERE ccat_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY ccat_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_accounts_types ORDER BY ccat_id DESC";
        }
        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;
            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->ccat_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5 p-1"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-40 bold text-primary text-left">
                            <a onclick="Databar('UpdateCompanyAccountTypes_<?php echo $Data->ccat_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->ccat_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->ccat_desc; ?>"><i class="fa fa-info-circle"></i></span><br>
                                <span class="text-gray font-weight-normal"><?php echo $Data->ccat_purpose; ?></span>
                            </a>
                        </div>
                        <div class="w-pr-20 p-1">
                            <?php echo $Data->ccat_shortname; ?>/<?php echo $Data->ccat_code; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo $Data->ccat_type; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo DATE_FORMATES("d M, Y", $Data->ccat_created_at); ?>
                        </div>
                        <div class="w-pr-15 p-1">
                            <?php echo AttachUserEntity($Data->ccat_created_by); ?>
                        </div>
                        <div class="w-pr-5 p-1">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "ccat_id" => $Data->ccat_id,
                                    "UpdateCompanyAccountTypeStatus" => $Data->ccat_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->ccat_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->ccat_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-7 p-1 text-right">
                            <a onclick="Databar('UpdateCompanyAccountTypes_<?php echo $Data->ccat_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateCompanyAccountTypeRecords.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateCompanyAccountTypeRecords.php";
?>