<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


//pagevariables
$PageName = "All Users";
$PageDescription = "Manage all customers";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>
    <?php echo $PageName; ?> | <?php echo APP_NAME; ?>
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta name="keywords" content="<?php echo APP_NAME; ?>">
  <meta name="description" content="<?php echo SECURE(SHORT_DESCRIPTION, "d"); ?>">
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("users").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <section class="content">
        <div class="shadow-sm rounded">
          <div class="container-fluid pt-2 pb-3">
            <div class="row">
              <div class="col-md-10">
                <h4 class="app-heading mt-0">
                  <i class='fa fa-users text-warning'></i>
                  <?php echo $PageName; ?>
                </h4>
              </div>
              <div class="col-md-2">
                <a href="#" onclick="Databar('AddNewUsers')" class="btn btn-md btn-block btn-danger"><i class="fa fa-plus"></i> New
                  Users</a>
              </div>
            </div>

            <div class="row">
              <?php
              $Start = START_FROM;
              $LISTING_END = DEFAULT_RECORD_LISTING;
              if (LOGIN_UserType == "RESELLER") {
                $UserSql = "SELECT * FROM users WHERE UserCreatedBy='" . LOGIN_UserId . "' ORDER BY DATE(UserCreatedAt) DESC";
              } else {
                $UserSql = "SELECT * FROM users ORDER BY DATE(UserCreatedAt) DESC";
              }
              $AllUsers = SET_SQL($UserSql . " limit $Start, $LISTING_END", true);
              if ($AllUsers != null) {
                $SERIAL_NO = SERIAL_NO;
                foreach ($AllUsers as $Users) {
                  $SERIAL_NO++;

                  $UserStatus = $Users->UserStatus;
                  $Status = StatusViewWithText($UserStatus);
                  $Selection = ReturnSelectionStatus($UserStatus);
                  if ($UserStatus == 1) {
                    $DivView = "active";
                  } else {
                    $DivView = "inactive";
                  } ?>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-12 RecordsList">
                    <div class="card p-2">
                      <div class="flex-s-b">
                        <div class="w-pr-30 p-1">
                          <img src="<?php echo UserDetails($Users->UserId, "UserProfileImage"); ?>" class="img-fluid circle">
                        </div>
                        <div class="w-pr-70 pl-1">
                          <span class='text-secondary small'>UID<?php echo $Users->UserId; ?>/<?php echo $SERIAL_NO; ?> - <?php echo $Users->UserType; ?></span>
                          <span class="pull-right small"><i class='fa fa-birthday-cake text-danger'></i> <?php echo DATE_FORMATES("d M, Y", $Users->UserDateOfBirth); ?></span>
                          <br>
                          <a onclick="Databar('update_users_records_<?php echo $Users->UserId; ?>')" class='text-underline'>
                            <b>
                              <?php echo StatusView($Users->UserStatus); ?>
                              <?php echo $Users->UserSalutation; ?>
                              <?php echo $Users->UserFullName; ?>
                            </b>
                          </a><br>
                          <div class="flex-col small mb-0 pb-0">
                            <span>
                              <?php echo $Users->UserCompanyName; ?>
                            </span>
                            <span>
                              <?php echo PHONE($Users->UserPhoneNumber, "link", "text-black", "fa fa-phone text-success"); ?>
                            </span>
                            <span>
                              <?php echo EMAIL($Users->UserEmailId, "link", "text-black", "fa fa-envelope text-danger"); ?>
                            </span>
                            <span><?php echo DATE_FORMATES("d M, Y", $Users->UserCreatedAt); ?></span>
                            <span>
                              <form action="<?php echo CONTROLLER; ?>" method="POST" class="pull-right user-status status-control">
                                <?php echo FormPrimaryInputs(true, [
                                  "UserId" => $Users->UserId,
                                  "UpdateUserStatus" => "true"
                                ]); ?>
                                <div class="custom-control custom-switch">
                                  <input onchange="form.submit()" value='1' name='UserStatus' <?php echo $Selection; ?> type="checkbox" class="custom-control-input" id="customSwitch<?php echo $Users->UserId; ?>">
                                  <label class="custom-control-label" for="customSwitch<?php echo $Users->UserId; ?>"></label>
                                </div>
                              </form>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                  include $Dir . "/include/forms/Update-Users-Details.php";
                }
              } else {
                NoDataTableView("No Users Found!", "");
              }
              ?>
            </div>
            <?php echo PaginationFooter(TOTAL($UserSql), "index.php"); ?>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php
  include $Dir . "/include/forms/Add-New-Users.php";
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>