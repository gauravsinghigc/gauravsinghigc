<div class="row">
    <div class="col-md-6">
        <div class="shadow-sm p-2 b-r-1">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <input placeholder="Search..." type="search" id='EnquirySearching' oninput="SearchData('EnquirySearching', 'RecordsList')" onchange="form.submit()" value='<?php echo IfRequested("GET", "search_query", "", null); ?>' name='search_query' class="form-control form-control-lg">
                        </div>
                    </form>
                </div>
            </div>

            <?php echo ClearFilters("search_query"); ?>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $Start = START_FROM;
                    $EndLimit = DEFAULT_RECORD_LISTING;
                    if (isset($_GET['vendor_name'])) {
                        $VendorSQL = "SELECT * FROM vendor WHERE vendor_name LIKE '%" . $_GET['vendor_name'] . "%' ORDER BY vendor_id DESC";
                    } else {
                        $VendorSQL = "SELECT * FROM vendor ORDER BY vendor_id DESC";
                    }
                    $VendorHandler = SET_SQL($VendorSQL . " limit $Start, $EndLimit", true);
                    if ($VendorHandler != null) {
                        $SerialNo = SERIAL_NO;
                        foreach ($VendorHandler as $Data) {
                            $SerialNo++;
                            $Selection = ReturnSelectionStatus($Data->vendor_status); ?>
                            <div class="RecordsList">
                                <a href="<?php echo APP_URL; ?>/vendors/details/?vid=<?php echo SECURE($Data->vendor_id, "e"); ?>" class='w-100 text-black'>
                                    <div class="data-list flex-s-b">
                                        <div class="w-pr-15 p-1">
                                            <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid shadow-sm rounded-circle p-1 bg-white">
                                        </div>
                                        <div class="w-pr-85">
                                            <div class="pl-1">
                                                <span class="pull-right btn btn-xs btn-default high">High</span>
                                                <span class="pull-right btn btn-xs btn-success mr-1 high">FRESH</span>
                                                <h6 class="text-primary bold mb-0 fs-13">Gaurav Singh igc</h6>
                                                <p class="text-secondary mt-0 mb-0 line-height-normal">
                                                    <span>+91876546446</span><br>
                                                    <span class="pull-right high neg-mt-0-7">6 oct, 2024</span>
                                                    <span>gauravsinghigc@gmail.com</span><br>
                                                    <span class="mt-1">
                                                        <span class="btn btn-xs mb-0 btn-light">Support</span>
                                                        <span class="btn btn-xs mb-0 btn-light">Construction</span>
                                                    </span>

                                                    <span class='multiple-users pull-right'>
                                                        <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid">
                                                        <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid">
                                                        <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid">
                                                        <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid">
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    PaginationFooter(TOTAL($VendorSQL), "index.php"); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="rsor-chat-window">
            <div class="chat-header">
                <div class="profile">
                    <img src="<?php echo AuthAppUser("UserProfileImage"); ?>">
                    <h5>
                        <?php echo AuthAppUser("UserFullName"); ?><br>
                        <small><?php echo AuthAppUser("UserPhoneNumber"); ?></small>
                    </h5>
                </div>
                <div class="actions">
                    <a href="" class="btn btn-sm btn-default"><i class="fa fa-phone"></i></a>
                    <a href="" class="btn btn-sm btn-default"><i class="fa fa-video-call"></i></a>
                    <a href="" class="btn btn-sm btn-default"><i class="fa fa-user-plus"></i></a>
                    <a href="" class="btn btn-sm btn-default"><i class="fa fa-trash"></i></a>
                </div>
            </div>
            <div class="chat-body">

            </div>
            <div class="chat-actions">
                <div class="actions">
                    <a href=""></a>
                </div>
                <div class="InputArea">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type a message...">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>

            <div class="chat-sidebar"></div>
            <div class="detailed-view"></div>
        </div>
    </div>
</div>