<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-20">WorkTypeName</div>
            <div class="w-pr-20">ShortName</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-5 text-right">Records</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $RecordsSQL = "SELECT * FROM config_work_types WHERE cwt_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cwt_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_work_types ORDER BY cwt_id DESC";
        }
        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;
            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cwt_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-20 bold text-primary text-left">
                            <a onclick="Databar('UpdateWorkTypes_<?php echo $Data->cwt_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cwt_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->cwt_desc; ?>"><i class="fa fa-info-circle"></i></span>
                            </a>
                        </div>
                        <div class="w-pr-20">
                            <?php echo $Data->cwt_shortname; ?>
                        </div>
                        <div class="w-pr-10">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cwt_created_at); ?>
                        </div>
                        <div class="w-pr-15">
                            <?php echo AttachUserEntity($Data->cwt_created_by); ?>
                        </div>
                        <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cwt_id" => $Data->cwt_id,
                                    "UpdateWorkTypeStatusRecords" => $Data->cwt_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cwt_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cwt_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-5 text-right">
                            <a onclick="Databar('UpdateWorkTypes_<?php echo $Data->cwt_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateWorkTypeRecords.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateWorkTypes.php";
?>