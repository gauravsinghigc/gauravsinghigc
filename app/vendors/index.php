<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Vendors @ <?php echo APP_NAME; ?></title>
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Vendors").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper pb-5">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class='app-heading'><i class='fa fa-<?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['icon']; ?>'></i> All <?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['title']; ?></h4>
          </div>
        </div>
        <?php include $Dir . "/app/vendors/sections/HeaderWidgets.php"; ?>
      </div>

      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-md-3">
            <div class="shadow-sm p-3 b-r-1 bg-white">
              <h5 class="app-sub-heading">Vendor Activities</h5>

              <marquee onmouseover="this.stop()" direction='up' onmouseleave="this.start()" scrollamount='3'>
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-bell blink-data text-danger"></i>
                      Attention: Due to scheduled maintenance, our online services will be temporarily unavailable on [Date] from [Start Time] to [End Time]. We apologize for any inconvenience this may cause and appreciate your understanding. If you have urgent matters during this period, please contact our support team at [Support Email/Phone]. Thank you for your patience.
                      <span><i class="fa fa-clock"></i> 13 feb, 2024, 17:00 PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-bell blink-data text-danger"></i>
                      Urgent Notice: We have detected unusual activity on your account. To ensure the security of your information, we recommend changing your password immediately. Log in to your account and follow the password reset instructions. If you did not initiate this action, please contact our support team at [Support Email/Phone]. Your account safety is our top priority. Thank you for your prompt attention to this matter.
                      <span><i class="fa fa-clock"></i> 13 feb, 2024, 17:00 PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-bell blink-data text-danger"></i>
                      Urgent Notice: We have detected unusual activity on your account. To ensure the security of your information, we recommend changing your password immediately. Log in to your account and follow the password reset instructions. If you did not initiate this action, please contact our support team at [Support Email/Phone]. Your account safety is our top priority. Thank you for your prompt attention to this matter.
                      <span><i class="fa fa-clock"></i> 13 feb, 2024, 17:00 PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-bell blink-data text-danger"></i>
                      Urgent Notice: We have detected unusual activity on your account. To ensure the security of your information, we recommend changing your password immediately. Log in to your account and follow the password reset instructions. If you did not initiate this action, please contact our support team at [Support Email/Phone]. Your account safety is our top priority. Thank you for your prompt attention to this matter.
                      <span><i class="fa fa-clock"></i> 13 feb, 2024, 17:00 PM</span>
                    </a>
                  </li>
                </ul>
              </marquee>
            </div>
          </div>

          <div class="col-md-9">
            <div class="shadow-sm p-3 b-r-1 bg-white">
              <div class="row mt-2">
                <div class="col-md-12 pl-1 pr-1">
                  <form>
                    <div class="form-group">
                      <input placeholder="Search Vendor..." type="search" id='VendorSearchInput' oninput="SearchData('VendorSearchInput', 'RecordsList')" onchange="form.submit()" list='vendor_name' value='<?php echo IfRequested("GET", "vendor_name", "", null); ?>' name='vendor_name' class="form-control">
                      <?php echo SUGGEST("vendor", "vendor_name", "ASC"); ?>
                    </div>
                  </form>
                </div>
              </div>

              <?php echo ClearFilters("vendor_name"); ?>
              <div class="row">
                <div class="col-md-12 pl-1 pr-1">
                  <div class="data-list flex-s-b bg-dark">
                    <div class="w-pr-5">S.No.</div>
                    <div class="w-pr-20">Vendor Name/Type</div>
                    <div class="w-pr-20">Phone/Email</div>
                    <div class="w-pr-15">Biz Name/GSTNo</div>
                    <div class="w-pr-10">Contracts/Active</div>
                    <div class="w-pr-10">Payments</div>
                    <div class="w-pr-10">CreatedAt/By</div>
                    <div class="w-pr-5">Status</div>
                  </div>
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
                        <div class="data-list flex-s-b">
                          <div class="w-pr-5">
                            <span class=""><?php echo $SerialNo; ?></span><br>
                            <span class='text-secondary'>#<?php echo $Data->vendor_id; ?></span>
                          </div>
                          <div class="w-pr-20 bold text-primary text-left">
                            <a href="<?php echo APP_URL; ?>/vendors/details/?vid=<?php echo SECURE($Data->vendor_id, "e"); ?>" class="text-primary">
                              <div class="flex-s-b w-100 text-left">
                                <span class="w-pr-15 mr-1">
                                  <img src="<?php echo STORAGE_URL; ?>/vendor/dp/<?php echo $Data->vendor_logo; ?>" class="img-fluid shadow-sm b-r-1">
                                </span>
                                <span class="w-pr-85 text-left">
                                  <span><?php echo ReplaceSpecialCharacters(LimitText(UpperCase($Data->vendor_name), 0, 20), "_"); ?></span>
                                  <span class="text-gray" title="<?php echo $Data->vendor_biz_name; ?>"><i class="fa fa-info-circle"></i></span><br>
                                  <span class="text-secondary fs-10"><?php echo ReplaceSpecialCharacters(LimitText(VendorTypeDetails($Data->vendor_type_id, "vendor_type_name"), 0, 28), "_"); ?></span>
                                </span>
                              </div>
                            </a>
                          </div>
                          <div class="w-pr-20">
                            <a href="tel:<?php echo $Data->vendor_phone_code; ?><?php echo $Data->vendor_phone; ?>">
                              <i class="fa fa-phone text-success"></i>
                              <?php echo $Data->vendor_phone_code; ?>-<?php echo $Data->vendor_phone; ?>
                            </a><br>
                            <a href="mailto:<?php echo $Data->vendor_email; ?>">
                              <i class="fa fa-envelope text-danger"></i>
                              <?php echo LimitText($Data->vendor_email, 0, 30); ?>
                            </a>
                          </div>
                          <div class="w-pr-15">
                            <?php echo LimitText($Data->vendor_biz_name, 0, 20); ?><br>
                            <?php echo VendorAddressDetails($Data->vendor_id, "vendor_address_gst_no"); ?>
                          </div>
                          <div class="w-pr-10">
                            <a href="<?php echo APP_URL; ?>/vendors/details/?vid=<?php echo SECURE($Data->vendor_id, "e"); ?>">
                              <span class="text-primary">
                                <?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts where vendor_main_id='" . $Data->vendor_id . "'"); ?> Contracts
                              </span><br>
                              <span class="text-success">
                                <?php echo TOTAL("SELECT vendor_contract_id FROM vendor_contracts where vendor_contract_status='1' and vendor_main_id='" . $Data->vendor_id . "'"); ?> Active
                              </span>
                            </a>
                          </div>
                          <div class="w-pr-10">
                            <a href="<?php echo APP_URL; ?>vendors/details/?vid=<?php echo SECURE($Data->vendor_id, "e"); ?>">
                              <span class="text-primary">
                                <?php
                                $TotalPayment = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts where vendor_main_id='" . $Data->vendor_id . "'", "vendor_contract_amount");
                                echo Price($TotalPayment, "text-primary", "Rs."); ?>
                              </span><br>
                              <span class="text-success">
                                <?php
                                $Paid = AMOUNT("SELECT vendor_contract_amount FROM vendor_contracts where vendor_contract_status='2' and vendor_main_id='" . $Data->vendor_id . "'", "vendor_contract_amount");
                                echo Price($TotalPayment - $Paid, "text-warning", "Rs.");
                                ?>
                              </span>
                            </a>
                          </div>
                          <div class="w-pr-10 text-left">
                            <?php echo DATE_FORMATES("d M, Y", $Data->vendor_created_at); ?><br>
                            <?php echo AttachUserEntity($Data->vendor_created_by); ?>
                          </div>
                          <div class="w-pr-5">
                            <form action="<?php echo CONTROLLER; ?>" method="POST" class="user-status">
                              <?php echo FormPrimaryInputs(true, [
                                "vendor_id" => $Data->vendor_id,
                                "UpdateVendorStatus" => $Data->vendor_status
                              ]); ?>
                              <div class="custom-control custom-switch">
                                <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->vendor_id; ?>">
                                <label class="custom-control-label" for="customSwitch<?php echo $Data->vendor_id; ?>"></label>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                  <?php
                    }
                  }
                  PaginationFooter(TOTAL($VendorSQL), "index.php"); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>