<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';
require $Dir . "/app/enquiries/HeaderRequest/HeaderRequest.php";


//pagevariables
$PageName = "All Enquiries";
$PageDescription = "Manage all customers";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?php echo $PageName; ?> | <?php echo APP_NAME; ?></title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <section class="content">
        <div class="mt-1">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-md-12">
                <ul class="flow-steps">
                  <?php
                  $AllFlowSteps = SET_SQL("SELECT cef_id, cef_name, cef_short_name FROM config_enquiry_flow where cef_user_id='" . LOGIN_UserId . "' ORDER BY cef_sort_order ASC", true);
                  if ($AllFlowSteps != null) {
                    foreach ($AllFlowSteps as $Steps) {
                      $GetActiveStepRecords = IfRequested("GET", "get_records", ReturnSessionalValues("get_records", "ACTIVE_STEP_RECORDS", ""), false);
                      $SelectActive = GetActiveStatus(SECURE($GetActiveStepRecords, "d"), $Steps->cef_id); ?>
                      <li class='RecordsList'>
                        <a class="<?php echo $SelectActive; ?>" href="?get_records=<?php echo SECURE($Steps->cef_id, "e"); ?>">
                          <?php echo $Steps->cef_name; ?>
                        </a>
                      </li>
                  <?php }
                  } ?>
                  <li><a class="active"><i class="fa fa-gear"></i></a></li>
                  <li>
                    <a href="#" onclick="Databar('UpdateEnquiryFlow')"><?php echo FontIcon("refresh"); ?> Edit Enquiry Flow Steps</a>
                  </li>
                  <li>
                    <a href="#" onclick="Databar('UpdateEnquiryTypes')"><?php echo FontIcon("edit"); ?> Edit Enquiry Types</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="shadow-sm p-2 b-r-1">
                  <h6 class="app-sub-heading">
                    <i class="fa fa-info-circle"></i> <?php echo $PageName; ?> Sources
                  </h6>
                  <div class='app-setting-menus'>
                    <?php
                    $GetEnquiryTypes = SET_SQL("SELECT cet_id, cet_name, cet_icon FROM config_enquiry_types where cet_user_id='" . LOGIN_UserId . "' and cet_status='1' ORDER BY cet_id ASC", true);
                    if ($GetEnquiryTypes != null) {
                      foreach ($GetEnquiryTypes as $Types) {
                        $ActiveRecordStatus = GetActiveStatus(SECURE($ActiveRecord, "D"), $Types->cet_id);
                    ?>
                        <a href='?get_enquiry_from=<?php echo SECURE($Types->cet_id, "e"); ?>' class="<?php echo $ActiveRecordStatus; ?> RecordsList">
                          <?php echo RandomColorText("<i class='fa " . $Types->cet_icon . "'></i>"); ?> <?php echo $Types->cet_name; ?> <i class="fa fa-angle-right"></i>
                        </a>
                      <?php }
                    } else { ?>
                      <a href='#'>
                        <?php echo RandomColorText("<i class='fa fa-warning'></i>"); ?> No Enquiry Type Found! <i class="fa fa-angle-right"></i>
                      </a>
                    <?php  } ?>
                  </div>
                </div>
              </div>

              <div class="col-md-7">
                <?php include __DIR__ . "/views/enquiries.php"; ?>
              </div>

              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
<?php
include $Dir . "/include/forms/Update-Enquiry-Types.php";
include $Dir . "/include/forms/Update-Enquiry-Flow-Chart.php";
include $Dir . "/include/common/Footer.php";
include $Dir . "/assets/FooterFiles.php"; ?>

</html>