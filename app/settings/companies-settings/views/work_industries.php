<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-20">IndustryName</div>
            <div class="w-pr-10">Ind. Code</div>
            <div class="w-pr-25">Tags</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-5 text-right">Records</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $IndustrySQL = "SELECT * FROM config_work_industries WHERE cwi_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cwi_id DESC";
        } else {
            $IndustrySQL = "SELECT * FROM config_work_industries ORDER BY cwi_id DESC";
        }
        $IndustryRecords = SET_SQL($IndustrySQL . " limit $Start, $EndLimit", true);
        if ($IndustryRecords != null) {
            $SerialNo = SERIAL_NO;
            foreach ($IndustryRecords as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cwi_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-20 bold text-primary text-left">
                            <a onclick="Databar('UpdateWorkIndustry_<?php echo $Data->cwi_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cwi_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->cwi_desc; ?>"><i class="fa fa-info-circle"></i></span>
                            </a>
                        </div>
                        <div class="w-pr-10">
                            <?php echo $Data->cwi_code; ?>
                        </div>
                        <div class="w-pr-25">
                            <?php echo $Data->cwi_tags; ?>
                        </div>
                        <div class="w-pr-10">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cwi_created_at); ?>
                        </div>
                        <div class="w-pr-15">
                            <?php echo AttachUserEntity($Data->cwi_created_by); ?>
                        </div>
                        <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cwi_id" => $Data->cwi_id,
                                    "UpdateWorkIndustryStatus" => $Data->cwi_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cwi_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cwi_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-5 text-right">
                            <a onclick="Databar('UpdateWorkIndustry_<?php echo $Data->cwi_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateWorkIndustryRecords.php";
            }
        }
        PaginationFooter(TOTAL($IndustrySQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateWorkIndustries.php";
?>