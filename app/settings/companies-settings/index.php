<?php
$Dir = "../../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

$ViewID = ReturnSessionalValues("view", 'VIEW_COMPANY_SETTING_MENU', 'company_types');

//pagevariables
$PageName = COMPANY_CONFIGURATION_MENU[$ViewID]['name'];
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
      document.getElementById("config_companies").classList.add("active");
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
                      <?php include $Dir . "/app/settings/sections/common.php"; ?>
                    </div>

                    <div class="col-md-2">
                      <h6 class="app-sub-heading"><i class='fa fa-building'></i> Company Details</h6>
                      <div class='app-setting-menus'>
                        <?php
                        foreach (COMPANY_CONFIGURATION_MENU as $Key => $CompanySettingMenus) {
                          $SelectionStatus = GetActiveStatus($Key, $ViewID, "active"); ?>
                          <a href="<?php echo APP_URL; ?>/settings/companies-settings/?view=<?php echo $Key; ?>" class="<?php echo $SelectionStatus; ?>" id='<?php echo $Key; ?>'>
                            <i class="fa <?php echo $CompanySettingMenus['icon']; ?> text-danger"></i> <?php echo $CompanySettingMenus['name']; ?> <i class="fa fa-angle-right"></i>
                          </a>
                        <?php } ?>
                      </div>
                    </div>

                    <div class="col-md-8">
                      <div class="flex-s-b">
                        <h4 class="app-heading mb-0 w-100 mt-2"><i class="fa <?php echo COMPANY_CONFIGURATION_MENU[$ViewID]['icon']; ?>"></i> <?php echo $PageName; ?></h4>
                        <a onclick="Databar('AddNewRecords')" class="btn ml-1 mt-2 btn-sm btn-block w-pr-20 btn-danger"><i class='fa fa-plus'></i> Add Record</a>
                      </div>

                      <div class="row mt-3">
                        <div class="col-md-12">
                          <form>
                            <div class="form-group">
                              <input type="search" onchange="form.submit()" list='search_data' value='<?php echo IfRequested("GET", "search_data", "", null); ?>' name='search_data' placeholder="Search <?php echo COMPANY_CONFIGURATION_MENU[$ViewID]['name']; ?>..." class="form-control">
                            </div>
                          </form>
                        </div>
                      </div>

                      <?php echo ClearFilters("search_data"); ?>

                      <?php include $Dir . "/app/settings/companies-settings/views/" . COMPANY_CONFIGURATION_MENU[$ViewID]['module']; ?>
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