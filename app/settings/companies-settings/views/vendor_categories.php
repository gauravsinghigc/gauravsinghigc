<div class="row">
    <div class="col-md-12">
        <div class="data-list flex-s-b bg-dark">
            <div class="w-pr-5">S.No.</div>
            <div class="w-pr-40">Category Name</div>
            <div class="w-pr-15">NoOfRecords</div>
            <div class="w-pr-10">CreatedAt</div>
            <div class="w-pr-15">CreatedBy</div>
            <div class="w-pr-5">Status</div>
            <div class="w-pr-10 text-right">Records</div>
        </div>
        <?php
        $Start = START_FROM;
        $EndLimit = DEFAULT_RECORD_LISTING;
        if (isset($_GET['cvc_name'])) {
            $VendorSQL = "SELECT * FROM config_vendor_categories WHERE cvc_name LIKE '%" . $_GET['cvc_name'] . "%' ORDER BY cvc_id DESC";
        } else {
            $VendorSQL = "SELECT * FROM config_vendor_categories ORDER BY cvc_id DESC";
        }
        $VendorCategory = SET_SQL($VendorSQL . " limit $Start, $EndLimit", true);
        if ($VendorCategory != null) {
            $SerialNo = SERIAL_NO;
            foreach ($VendorCategory as $Data) {
                $SerialNo++;
                $Selection = ReturnSelectionStatus($Data->cvc_status); ?>
                <div class="RecordsList">
                    <div class="data-list flex-s-b">
                        <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                        <div class="w-pr-40 bold text-primary text-left">
                            <a onclick="Databar('UpdateVendorCategory_<?php echo $Data->cvc_id; ?>')">
                                <?php echo ReplaceSpecialCharacters(UpperCase($Data->cvc_name), "_"); ?>
                                <span class="text-gray" title="<?php echo SECURE($Data->cvc_desc, "d"); ?>"><i class="fa fa-info-circle"></i></span>
                            </a>
                        </div>
                        <div class="w-pr-15">
                            <b><?php echo TOTAL("SELECT vps_main_category_id FROM vendor_products_services WHERE vps_main_category_id='" . $Data->cvc_id . "'"); ?></b> Records
                        </div>
                        <div class="w-pr-10">
                            <?php echo DATE_FORMATES("d M, Y", $Data->cvc_created_at); ?>
                        </div>
                        <div class="w-pr-15">
                            <?php echo AttachUserEntity($Data->cvc_created_by); ?>
                        </div>
                        <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                <?php echo FormPrimaryInputs(true, [
                                    "cvc_id" => $Data->cvc_id,
                                    "UpdateVendorCategoryStatus" => $Data->cvc_status
                                ]); ?>
                                <div class="custom-control custom-switch">
                                    <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->cvc_id; ?>">
                                    <label class="custom-control-label" for="customSwitch<?php echo $Data->cvc_id; ?>"></label>
                                </div>
                            </form>
                        </div>
                        <div class="w-pr-10 text-right">
                            <a onclick="Databar('UpdateVendorCategory_<?php echo $Data->cvc_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                        </div>
                    </div>
                </div>
        <?php
                include $Dir . "/include/forms/UpdateVendorCategoriesForm.php";
            }
        }
        PaginationFooter(TOTAL($VendorSQL), "index.php"); ?>
    </div>
</div>
<?php include $Dir . "/include/forms/CreateVendorProductServiceCategories.php"; ?>