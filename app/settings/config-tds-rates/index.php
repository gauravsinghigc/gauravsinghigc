<?php
$Dir = "../../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "TDS Rates & Slabs";
$PageDescription = "Manage System Profile, address, logo";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?php echo $PageName; ?> | <?php echo APP_NAME; ?></title>
  <meta content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("config_tds_rates").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>


    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-2">
                      <?php include $Dir . "/app/settings/sections/common.php"; ?>
                    </div>

                    <div class="col-md-10">
                      <div class="flex-s-b">
                        <h4 class="app-heading mb-0 w-100"><?php echo $PageName; ?></h4>
                        <a onclick="Databar('AddTDSRecords')" class="btn ml-1 btn-sm btn-block w-pr-20 btn-danger"><i class='fa fa-plus'></i> Add Record</a>
                      </div>

                      <div class="row mt-3">
                        <div class="col-md-12">
                          <form>
                            <div class="form-group">
                              <input type="search" onchange="form.submit()" list='ctrs_name' value='<?php echo IfRequested("GET", "ctrs_name", "", null); ?>' name='ctrs_name' placeholder="Search <?php echo $PageName; ?>..." class="form-control">
                              <?php echo SUGGEST("config_tds_rates_slabs", "ctrs_name", "ASC"); ?>
                            </div>
                          </form>
                        </div>
                      </div>

                      <?php echo ClearFilters("ctrs_name"); ?>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="data-list flex-s-b bg-dark">
                            <div class="w-pr-5">S.No.</div>
                            <div class="w-pr-30">TDS Rate Name</div>
                            <div class="w-pr-20">Code/Nature</div>
                            <div class="w-pr-15">MinLimit/month</div>
                            <div class="w-pr-5">Rates</div>
                            <div class="w-pr-10">ApplicableAt</div>
                            <div class="w-pr-15">Deductor</div>
                            <div class="w-pr-10">FY-Year</div>
                            <div class="w-pr-10">CreatedAt</div>
                            <div class="w-pr-10">CreatedBy</div>
                            <div class="w-pr-5 text-right">Status</div>
                            <div class="w-pr-10 text-right">Records</div>
                          </div>
                          <?php
                          $Start = START_FROM;
                          $EndLimit = DEFAULT_RECORD_LISTING;
                          if (isset($_GET['ctrs_name'])) {
                            $ConfigUrlSQL = "SELECT * FROM config_tds_rates_slabs WHERE ctrs_name LIKE '%" . $_GET['ctrs_name'] . "%' ORDER BY ctrs_id  DESC";
                          } else {
                            $ConfigUrlSQL = "SELECT * FROM config_tds_rates_slabs ORDER BY ctrs_id  DESC";
                          }
                          $VendorTypes = SET_SQL($ConfigUrlSQL . " limit $Start, $EndLimit", true);
                          if ($VendorTypes != null) {
                            $SerialNo = SERIAL_NO;
                            foreach ($VendorTypes as $Data) {
                              $SerialNo++;
                              $Selection = ReturnSelectionStatus($Data->ctrs_status); ?>
                              <div class="RecordsList">
                                <div class="data-list flex-s-b">
                                  <div class="w-pr-5"><?php echo $SerialNo; ?></div>
                                  <div class="w-pr-30 bold text-primary text-left">
                                    <a onclick="Databar('UpdateTDSRate_<?php echo $Data->ctrs_id; ?>')">
                                      <?php echo ReplaceSpecialCharacters(UpperCase($Data->ctrs_name), "_"); ?>
                                      <span class="text-gray" title="<?php echo $Data->ctrs_detailed_desc; ?>"><i class="fa fa-info-circle"></i></span><br>
                                      <span class='text-grey'><?php echo $Data->ctrs_purpose; ?></span>
                                    </a>
                                  </div>
                                  <div class="w-pr-20">
                                    <span class="text-black bold"><?php echo $Data->ctrs_code; ?></span><br>
                                    <span class="text-grey"><?php echo $Data->ctrs_nature_of_payments; ?></span>
                                  </div>
                                  <div class="w-pr-15">
                                    <?php echo Price($Data->ctrs_threshold_limit, "btn btn-xs btn-success fs-10", "Rs."); ?> <i class="fa fa-arrow-circle-up text-black"></i>
                                  </div>
                                  <div class="w-pr-5">
                                    <span class='btn btn-xs btn-warning mb-0 fs-10'> <b><?php echo $Data->ctrs_rates; ?> <i class="fa fa-percent"></i></b></span>
                                  </div>
                                  <div class="w-pr-10">
                                    <?php echo $Data->ctrs_applicable_to; ?>
                                  </div>
                                  <div class="w-pr-15">
                                    <?php echo $Data->ctrs_deductor; ?>
                                  </div>
                                  <div class="w-pr-10">
                                    <span class="text-primary bold"><i class="fa fa-calendar text-info"></i> <?php echo FinanicalYear($Data->ctrs_finanical_year_id, "cfy_name"); ?></span>
                                  </div>
                                  <div class="w-pr-10">
                                    <?php echo DATE_FORMATES("d M, Y", $Data->ctrs_created_at); ?>
                                  </div>
                                  <div class="w-pr-10">
                                    <?php echo AttachUserEntity($Data->ctrs_created_by); ?>
                                  </div>
                                  <div class="w-pr-5 text-right">
                                    <form action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" class="user-status">
                                      <?php echo FormPrimaryInputs(true, [
                                        "ctrs_id" => $Data->ctrs_id,
                                        "UpdateTDSRateStatus" => $Data->ctrs_status
                                      ]); ?>
                                      <div class="custom-control custom-switch">
                                        <input onchange="form.submit()" <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Data->ctrs_id; ?>">
                                        <label class="custom-control-label" for="customSwitch<?php echo $Data->ctrs_id; ?>"></label>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="w-pr-10 text-right">
                                    <a onclick="Databar('UpdateTDSRate_<?php echo $Data->ctrs_id; ?>')" class="btn btn-dark btn-xs"><i class='fa fa-edit'></i> Update</a>
                                  </div>
                                </div>
                              </div>
                          <?php
                              include $Dir . "/include/forms/UpdateTDSRateRecords.php";
                            }
                          }
                          PaginationFooter(TOTAL($ConfigUrlSQL), "index.php"); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php
  include $Dir . "/include/forms/CreateTDSRateRecords.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php"; ?>

</body>

</html>