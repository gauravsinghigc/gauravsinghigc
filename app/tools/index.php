<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

$PageActiveKey = IfRequested("GET", "key", IfSessionExists("key", "0"), false);
$PageHeading = IfRequested("GET", "v", "All Available Calculators", false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageHeading; ?> @ <?php echo APP_NAME; ?></title>
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Tools").classList.add("active");
      document.getElementById("<?php echo $PageActiveKey; ?>").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="flex-s-b">
              <h4 class="app-heading w-100 mb-0"><i class='fa fa-calculator text-warning'></i> <?php echo $PageHeading; ?> </h4>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <?php foreach (TOOLS_MENU as $CalculatorKeys => $CalValues) {
            if ($CalculatorKeys != "all_available_tools") { ?>
              <div class='RecordsList col-lg-2 col-md-3 col-sm-4 col-6 col-xs-6 mb-4 text-center'>
                <div class="cals shadow-sm p-2 m-1">
                  <a href="<?php echo APP_URL . "/" . $CalValues['url']; ?>?v=<?php echo $CalValues['name']; ?>&key=<?php echo $CalculatorKeys; ?>">
                    <img loading="lazy" src="<?php echo STORAGE_URL; ?>/cal-icons/<?php echo $CalValues['icon']; ?>">
                    <h6><?php echo $CalValues['name']; ?></h6>
                    <p class="text-secondary mb-1"><?php echo $CalValues['desc']; ?></p>
                  </a>
                </div>
              </div>
          <?php }
          } ?>
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