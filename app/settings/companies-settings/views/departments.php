<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-30">Name</div>
            <div class="w-pr-10">ShortName</div>
            <div class="w-pr-10">Code</div>
            <div class="w-pr-10">Key</div>
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
            $RecordsSQL = "SELECT * FROM config_department WHERE ccd_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY ccd_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_department ORDER BY ccd_id DESC";
        }
        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;
            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->ccd_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5 p-1"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-30 bold text-primary text-left">
                            <a onclick="Databar('UpdateCompanyDepartment_<?php echo $Data->ccd_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->ccd_name), "_"); ?>
                                <span class="text-gray" title="<?php echo $Data->ccd_desc; ?>"><i class="fa fa-info-circle"></i></span><br>
                                <span class="text-gray font-weight-normal"><?php echo $Data->ccd_goals; ?></span>
                            </a>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo $Data->ccd_short_name; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo $Data->ccd_code; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo $Data->ccd_key; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo $Data->ccd_type; ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo DATE_FORMATES("d M, Y", $Data->ccd_created_at); ?>
                        </div>
                        <div class="w-pr-15 p-1">
                            <?php echo AttachUserEntity($Data->ccd_created_by); ?>
                        </div>
                        <div class="w-pr-5 p-1">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "ccd_id" => $Data->ccd_id,
                                    "UpdateCompanyDepartmentStatus" => $Data->ccd_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->ccd_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->ccd_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-7 p-1 text-right">
                            <a onclick="Databar('UpdateCompanyDepartment_<?php echo $Data->ccd_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateCompanyDepartmentRecords.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateCompanyDepartments.php";
?>