<?php
$Dir = "../../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "Payment Gateway Settings";
$PageDescription = "Manage your application Advance Settings";

if (isset($_GET['PG_PROVIDER'])) {
  $PG_PROVIDER = $_GET['PG_PROVIDER'];
  $PG_MODE = FETCH("SELECT * FROM config_pgs where ConfigPgProvider='$PG_PROVIDER'", "ConfigPgMode");
  $MERCHENT_ID = FETCH("SELECT * FROM config_pgs where ConfigPgProvider='$PG_PROVIDER'", "ConfigPgMerchantId");
  $MERCHANT_KEY = FETCH("SELECT * FROM config_pgs where ConfigPgProvider='$PG_PROVIDER'", "ConfigPgMerchantKey");
} else {
  $PG_PROVIDER = PG_PROVIDER;
  $PG_MODE = PG_MODE;
  $MERCHENT_ID = MERCHENT_ID;
  $MERCHANT_KEY = MERCHANT_KEY;
}

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
      document.getElementById("config_pg").classList.add("active");
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
                          <div class="">
                            <form action="" method="GET" class="row form">
                              <div class="form-group form-group col-md-12">
                                <label>Select Payment Gateway Provider</label>
                                <select name="PG_PROVIDER" class="form-control " required="" onchange="form.submit()">
                                  <?php foreach (PG_OPTIONS as $pgoptions) {
                                    if (isset($_GET['PG_PROVIDER'])) {
                                      if ($_GET['PG_PROVIDER'] == $pgoptions) {
                                        $selected = "selected";
                                      } else {
                                        $selected = "";
                                      }
                                    } else {
                                      if (PG_PROVIDER == $pgoptions) {
                                        $selected = "selected";
                                      } else {
                                        $selected = "";
                                      }
                                    } ?>
                                    <option value="<?php echo $pgoptions; ?>" <?php echo $selected; ?>><?php echo $pgoptions; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </form>
                            <form class="form row" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                              <?php if (isset($_GET['PG_PROVIDER'])) {
                                $PG_PROVIDER = $_GET['PG_PROVIDER'];
                              } else {
                                $PG_PROVIDER = PG_PROVIDER;
                              } ?>
                              <input type="hidden" name="PG_PROVIDER" value="<?php echo $PG_PROVIDER; ?>">
                              <?php echo FormPrimaryInputs(true); ?>
                              <div class="form-group form-group-2 col-md-12">
                                <label>Enable/Disable Online Payments</label>
                                <select name="ONLINE_PAYMENT_OPTION" onchange="enablepaymentgateway()" id="pgstatus" class="form-control " required="">
                                  <?php
                                  $pgstatus = ONLINE_PAYMENT_OPTION;
                                  if ($pgstatus == "true") { ?>
                                    <option value="false">Disabled</option>
                                    <option value="true" selected="">Enabled</option>
                                  <?php } else { ?>
                                    <option value="false" selected="">Disabled</option>
                                    <option value="true">Enabled</option>
                                  <?php  } ?>

                                </select>
                              </div>
                              <?php if ($pgstatus == "true") {
                                $pgstatus = ""; ?>
                              <?php } else {
                                $pgstatus = "style='display:none;'";  ?>
                              <?php } ?>
                              <div id="pgoptions" <?php echo $pgstatus; ?>>
                                <div class="p-2">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <h6 class='text-success'><i class='fa fa-check'></i> Active Payment Gateway Details:</h6>
                                    </div>
                                    <div class="form-group form-group-2 col-md-12">
                                      <label for="PG_MODE">PG Mode <small><i class="fa fa-angle-right"></i> eg: prod, test, dev, live</small></label>
                                      <input type="text" name="PG_MODE" value="<?php echo $PG_MODE; ?>" class="form-control  text-uppercase">
                                    </div>
                                    <div class="form-group form-group-2 col-md-12">
                                      <label for="MERCHENT_ID">Merchant ID</label>
                                      <input type="text" name="MERCHENT_ID" value="<?php echo $MERCHENT_ID; ?>" class="form-control ">
                                    </div>
                                    <div class="form-group form-group-2 col-md-12">
                                      <label for="MERCHANT_KEY">Merchant Key</label>
                                      <input type="text" name="MERCHANT_KEY" value="<?php echo $MERCHANT_KEY; ?>" class="form-control ">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12 m-t-10 text-right">
                                <button type="Submit" name="UpdatePgDetails" class="btn btn-md btn-primary"><i class='fa fa-check'></i> Update Details</button>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <script>
                function enablepaymentgateway() {
                  var pgstatus = document.getElementById("pgstatus");
                  if (pgstatus.value == "true") {
                    document.getElementById("pgoptions").style.display = "block";
                  } else {
                    document.getElementById("pgoptions").style.display = "none";
                  }
                }
              </script>
            </div>
          </div>
        </div>
      </section>
    </div>


  </div>

  <?php include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php"; ?>

</body>

</html>