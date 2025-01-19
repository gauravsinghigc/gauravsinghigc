<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "ADD New Company";
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
              <h4 class='app-heading'>
                <i class='fa fa-<?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['icon']; ?>'></i> All <?php echo NAVIGATION_MENUS[$ActiveRequestedTab]['title']; ?>
                <i class="fa fa-angle-right w-pr-2 text-center"></i> <?php echo $PageName; ?>
              </h4>
            </div>

            <div class="col-md-12">
              <ul class="flow-steps">
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Company Types
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Working Industries
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Work Types (Business Focus)
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Client Types
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Vendor Categories
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Departments
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Products & Services
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Compliance Types
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Operational Areas
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Branch Types
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Document Categories
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Account Types
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-edit"></i> Expanses Types
                  </a>
                </li>
              </ul>
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