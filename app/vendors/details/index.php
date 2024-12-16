<?php
$Dir = "../../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';
require __DIR__ . "/Handler/HeaderRequest.php";

$PageName = "Vendor Dashboard @ " . FETCH($VendorSQL, "vendor_name");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo FETCH($VendorSQL, "vendor_name"); ?> @ <?php echo APP_NAME; ?></title>
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Vendors").classList.add("active");
      document.getElementById("<?php echo $_SESSION['VIEW_MODULE_FOR_VENDOR']; ?>").classList.add("active");
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
          <div class="col-md-12 mt-1 mb-1">
            <div class="flex-s-b">
              <a href="../index.php" class="btn btn-sm btn-danger btn-block mr-1 w-pr-15"><i class="fa fa-angle-left"></i> Back to All</a>
              <h4 class="app-heading w-100 mb-0"><i class='fa fa-edit text-warning'></i> <?php echo $PageName; ?> </h4>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt-2 mb-4">
        <div class="row">
          <div class="col-md-3">
            <?php include __DIR__ . "/sections/VendorProfile.php"; ?>
          </div>

          <div class="col-md-9">
            <div class="shadow-sm p-2 b-r-1 bg-white">
              <div class="row">
                <div class="col-md-3">
                  <?php include __DIR__ . "/sections/VendorMenus.php"; ?>
                </div>
                <div class="col-md-9">
                  <h6 class="app-sub-heading">
                    <i class="fa <?php echo $ModuleViewIcon; ?> text-warning"></i> <?php echo $ModuleViewName; ?>
                  </h6>
                  <?php include __DIR__ . "/views/$ModuleView"; ?>
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