<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-40">Vendor Type</div>
            <div class="w-pr-15">NoOfRecords</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-10 text-right">Records</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['search_data'])) {
            $VendorSQL = "SELECT * FROM config_vendor_types WHERE vendor_type_name LIKE '%" . $_GET['search_data'] . "%' ORDER BY vendor_type_id DESC";
        } else {
            $VendorSQL = "SELECT * FROM config_vendor_types ORDER BY vendor_type_id DESC";
        }
        $VendorTypes = SET_SQL($VendorSQL . " limit $Start, $EndLimit", true);
        if ($VendorTypes != null) {
            $SerialNo = SERIAL_NO;
            foreach ($VendorTypes as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->vendor_type_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-40 bold text-primary text-left">
                            <a onclick="Databar('UpdateVendorType_<?php echo $Data->vendor_type_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->vendor_type_name), "_"); ?>
                                <span class="text-gray" title="<?php echo SECURE($Data->vendor_type_desc, "d"); ?>"><i class="fa fa-info-circle"></i></span>
                            </a>
                        </div>
                        <div class="w-pr-15">
                            <b><?php echo TOTAL("SELECT vendor_id FROM vendor WHERE vendor_type_id='" . $Data->vendor_type_id . "'"); ?></b> Vendors
                        </div>
                        <div class="w-pr-10">
                            <?php echo DATE_FORMATES("d M, Y", $Data->vendor_type_created_at); ?>
                        </div>
                        <div class="w-pr-15">
                            <?php echo AttachUserEntity($Data->vendor_type_created_by); ?>
                        </div>
                        <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "vendor_type_id" => $Data->vendor_type_id,
                                    "UpdateVendorTypeStatus" => $Data->vendor_type_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->vendor_type_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->vendor_type_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-10 text-right">
                            <a onclick="Databar('UpdateVendorType_<?php echo $Data->vendor_type_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateVendorTypeForm.php";
            }
        }
        PaginationFooter(TOTAL($VendorSQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateVendorTypes.php"; ?>