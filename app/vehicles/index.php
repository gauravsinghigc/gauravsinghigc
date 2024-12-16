<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Customers";
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h4 class='app-heading'><i class='fa fa-<?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['icon']; ?>'></i> All <?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['title']; ?></h4>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
<?php
include $Dir . "/include/common/Footer.php";
include $Dir . "/assets/FooterFiles.php"; ?>

</html>