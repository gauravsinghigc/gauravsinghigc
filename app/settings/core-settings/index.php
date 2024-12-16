<?php
$Dir = "../../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "Core Settings";
$PageDescription = "Manage your application Advance Settings";


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
      document.getElementById("configs_core").classList.add("active");
      document.getElementById("settings").classList.add("active");
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
                      <?php include "../sections/common.php"; ?>
                    </div>

                    <div class="col-md-10">
                      <h4 class="app-heading"><?php echo $PageName; ?></h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                          <div class="shadow-sm p-2 rounded">
                            <form class="form row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                              <?php echo FormPrimaryInputs(true); ?>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Work Environment</label>
                                <?php if (CONTROL_WORK_ENV == "PROD") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_WORK_ENV" Value="PROD" checked=""> <span class="fs-17">Production</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_WORK_ENV" Value="DEV"> <span class="fs-17">Development</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_WORK_ENV" Value="PROD"> <span class="fs-17">Production</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_WORK_ENV" Value="DEV" checked=""> <span class="fs-17">Development</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Desktop Notifications</label>
                                <?php if (CONTROL_NOTIFICATION == "true") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION" Value="true" checked=""> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION" Value="false"> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION" Value="true"> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION" Value="false" checked=""> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Desktop Notifications Sound</label>
                                <?php if (CONTROL_NOTIFICATION_SOUND == "true") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION_SOUND" Value="true" checked=""> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION_SOUND" Value="false"> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION_SOUND" Value="true"> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_NOTIFICATION_SOUND" Value="false" checked=""> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="form-group form-group-2 col-md-7">
                                <label>Alert Display Time (1000x1 = 1sec)</label>
                                <input type="number" name="CONTROL_MSG_DISPLAY_TIME" class="form-control " required="" value="<?php echo CONTROL_MSG_DISPLAY_TIME; ?>">
                              </div>
                              <div class="form-group form-group-2 col-md-5">
                                <label>Listing Limit</label>
                                <input type="number" name="DEFAULT_RECORD_LISTING" class="form-control " required="" value="<?php echo DEFAULT_RECORD_LISTING; ?>">
                              </div>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Activity Logs</label>
                                <?php if (CONTROL_APP_LOGS == "true") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_APP_LOGS" Value="true" checked=""> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_APP_LOGS" Value="false"> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="CONTROL_APP_LOGS" Value="true"> <span class="fs-17">Enable</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="CONTROL_APP_LOGS" Value="false" checked=""> <span class="fs-17">Disabled</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Website Status</label>
                                <?php if (WEBSITE == "true") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="WEBSITE" Value="true" checked=""> <span class="fs-17">Live</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="WEBSITE" Value="false"> <span class="fs-17">Coming Soon</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="WEBSITE" Value="true"> <span class="fs-17">Live</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="WEBSITE" Value="false" checked=""> <span class="fs-17">Coming Soon</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Mobile App Status</label>
                                <?php if (WEBSITE == "true") { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="APP" Value="true" checked=""> <span class="fs-17">Live</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="APP" Value="false"> <span class="fs-17">Coming Soon</span>
                                    </span>
                                  </div>
                                <?php } else { ?>
                                  <div class="flex-s-b">
                                    <span>
                                      <input type="radio" name="APP" Value="true"> <span class="fs-17">Live</span>
                                    </span>
                                    <span>
                                      <input type="radio" name="APP" Value="false" checked=""> <span class="fs-17">Coming Soon</span>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                              <div class="col-md-12 m-t-10 text-right">
                                <button type="Submit" name="UpdateFeatures" class="btn btn-md btn-primary"><i class="fa fa-check"></i> Update Details</button>
                              </div>
                            </form>
                          </div>
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
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php"; ?>

</body>

</html>