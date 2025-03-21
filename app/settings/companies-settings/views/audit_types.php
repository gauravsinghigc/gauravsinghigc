<div class="row">
    <div class="col-md-12">

        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-50">TypeOfEvents</div>
            <div class="w-pr-15 text-left">Code/Shortname</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-7 text-right">Actions</div>
        </div>

        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $RecordsSQL = "SELECT * FROM config_audit_types WHERE cadt_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cadt_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_audit_types ORDER BY cadt_id DESC";
        }

        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;

            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cadt_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5 p-1"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-50 bold text-primary text-left">
                            <a onclick="Databar('UpdateAuditTypeRecord_<?php echo $Data->cadt_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cadt_name), "_"); ?>
                                <br>
                                <span class="text-gray font-weight-normal"><?php echo $Data->cadt_purpose; ?></span>
                            </a>
                        </div>
                        <div class="w-pr-15 p-1 text-left">
                            <?php echo $Data->cadt_code; ?>/<?php echo $Data->cadt_shortname; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cadt_created_at); ?>
                        </div>
                        <div class="w-pr-15 p-1">
                            <?php echo AttachUserEntity($Data->cadt_created_by); ?>
                        </div>
                        <div class="w-pr-5 p-1">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cadt_id" => $Data->cadt_id,
                                    "UpdateAuditTypeRecordsStatus" => $Data->cadt_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cadt_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cadt_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-7 p-1 text-right">
                            <a onclick="Databar('UpdateAuditTypeRecord_<?php echo $Data->cadt_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>

        <?php
                include $Dir . "/include/forms/UpdateTypesOfAuditRecords.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>

<?php include $Dir . "/include/forms/CreatedTypesOfAuditRecords.php"; ?>