<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-60">UrlTypeName</div>
            <div class="w-pr-10 text-left">Icon</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-7 text-right">Actions</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $RecordsSQL = "SELECT * FROM config_url_types WHERE cut_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY cut_id DESC";
        } else {
            $RecordsSQL = "SELECT * FROM config_url_types ORDER BY cut_id DESC";
        }
        $RecordsProcessesSQL = SET_SQL($RecordsSQL . " limit $Start, $EndLimit", true);
        if ($RecordsProcessesSQL != null) {
            $SerialNo = SERIAL_NO;
            foreach ($RecordsProcessesSQL as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cut_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5 p-1"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-60 bold text-primary text-left">
                            <a onclick="Databar('UpdateConfigUrls_<?php echo $Data->cut_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cut_name), "_"); ?>
                                <br>
                                <span class="text-gray font-weight-normal"><?php echo $Data->cut_purpose; ?></span>
                            </a>
                        </div>
                        <div class="w-pr-10 p-1 text-left">
                            <?php
                            $Text = "<i class='" . $Data->cut_icon . " fs-20'></i>";
                            echo RandomColorText($Text); ?>
                        </div>
                        <div class="w-pr-10 p-1">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cut_created_at); ?>
                        </div>
                        <div class="w-pr-15 p-1">
                            <?php echo AttachUserEntity($Data->cut_created_by); ?>
                        </div>
                        <div class="w-pr-5 p-1">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cut_id" => $Data->cut_id,
                                    "UpdateConfigUrlStatus" => $Data->cut_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cut_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cut_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-7 p-1 text-right">
                            <a onclick="Databar('UpdateConfigUrls_<?php echo $Data->cut_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>

        <?php
                include $Dir . "/include/forms/UpdateConfigUrlsForm.php";
            }
        }
        PaginationFooter(TOTAL($RecordsSQL), "index.php"); ?>
    </div>
</div>

<?php include $Dir . "/include/forms/CreateNewConfigUrls.php"; ?>