<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-50">AssetCategory</div>
            <div class="w-pr-15 text-left">Code</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-7 text-right">Actions</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $RecordsSQL = "SELECT * FROM config_credentials_categories WHERE cccc_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cccc_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_credentials_categories ORDER BY cccc_id DESC";
        }
        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;
            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cccc_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5 p-1"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-50 bold text-primary text-left">
                            <a onclick="Databar('UpdateCredentialCategories_<?php echo $Data->cccc_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cccc_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->cccc_desc; ?>"><i class="fa fa-info-circle"></i></span><br>
                                <span class="text-gray font-weight-normal"><?php echo $Data->cccc_purpose; ?></span>
                            </a>
                        </div>
                        <div class="w-pr-15 p-1 text-left">
                            <?php echo $Data->cccc_code; ?>/<?php echo $Data->cccc_shortname; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cccc_created_at); ?>
                        </div>
                        <div class="w-pr-15 p-1">
                            <?php echo AttachUserEntity($Data->cccc_created_by); ?>
                        </div>
                        <div class="w-pr-5 p-1">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cccc_id" => $Data->cccc_id,
                                    "UpdateCredentialCategoriesStatus" => $Data->cccc_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cccc_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cccc_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-7 p-1 text-right">
                            <a onclick="Databar('UpdateCredentialCategories_<?php echo $Data->cccc_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>

        <?php
                include $Dir . "/include/forms/UpdateCompanyCredentialRecords.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>

<?php include $Dir . "/include/forms/CreateCompanyCredentialsCategoryRecord.php"; ?>