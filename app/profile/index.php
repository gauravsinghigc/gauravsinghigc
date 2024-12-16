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
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Profile").classList.add("active");
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
        <div class="">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 col-lg-8 col-sm-7 col-12">
                <form class="form" action="<?php echo CONTROLLER("AuthController/AuthController.php"); ?>" method="POST">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h4 class="app-sub-heading">Personal Details</h4>
                    </div>
                    <?php echo FormPrimaryInputs(true); ?>
                    <div class="form-group col-md-6 col-sm-6">
                      <label>Full Name</label>
                      <input type="text" name="UserName" value="<?php echo LOGIN_UserFullName; ?>" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                      <label>Phone Number</label>
                      <input type="text" name="UserPhone" value="<?php echo LOGIN_UserPhoneNumber; ?>" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                      <label>Email Id</label>
                      <input type="email" name="UserEmailId" value="<?php echo LOGIN_UserEmailId; ?>" class="form-control" required="">
                    </div>
                    <br>
                    <div class="col-md-12">
                      <br>
                      <button type="Submit" name="UpdateProfile" value="<?php echo LOGIN_UserId; ?>" class="btn btn-md btn-success">Update Details</button>
                    </div>
                  </div>
                </form>
                <hr>
                <form class="form" action="<?php echo CONTROLLER("AuthController/AuthController.php"); ?>" method="POST">
                  <?php echo FormPrimaryInputs(true); ?>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h4 class="app-sub-heading">Update Password <span id="passmsg"></span></h4>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                      <label>Enter New Password</label>
                      <input type="password" name="UserPassword" oninput="checkpass()" id="pass1" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                      <label>Re-Enter New Password</label>
                      <input type="password" name="UserPassword_2" oninput="checkpass()" id="pass2" class="form-control" required="">
                    </div>
                    <br>
                    <div class="col-md-12">
                      <button type="Submit" id="passbtn" name="UpdatePassword" class="btn btn-md btn-success disabled">Update Password</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-5 col-12">
                <div class="p-2 border-success">
                  <div class="br10 app-bg-light p-3 text-center">
                    <center>
                      <img src="<?php echo LOGIN_UserProfileImage; ?>" class="w-25 mx-auto d-block rounded config-logo" style="border-radius:100% !important;">
                    </center>
                    <form class="form m-t-3" action="<?php echo CONTROLLER; ?>" method="POST" enctype="multipart/form-data">
                      <input type="text" name="updateprofileimage" value="<?php echo LOGIN_UserId; ?>" hidden="">
                      <?php echo FormPrimaryInputs(true); ?>
                      <label for="UploadProfileimg">
                        <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 upload-icon">
                      </label>
                      <input type="file" class="hidden" onchange="form.submit()" hidden="" name="UserProfileImage" id="UploadProfileimg" value="<?php echo APP_LOGO; ?>" accept="images/*">
                    </form>
                  </div>
                  <p class="m-t-10">
                    <span class="fs-20"> <?php echo LOGIN_UserFullName; ?></span><br>
                    <span><i class="fa fa-phone text-info"></i> <?php echo LOGIN_UserPhoneNumber; ?></span><br>
                    <span><i class="fa fa-envelope text-danger"></i> <?php echo LOGIN_UserEmailId; ?></span><br>
                    <span><i class="fa fa-user text-warning"></i> <?php echo LOGIN_UserType; ?></span><br>
                    <span><i class="fa fa-calendar text-primary"></i> CreatedAt: <?php echo LOGIN_UserCreatedAt; ?></span><br>
                    <span><i class="fa fa-calendar text-primary"></i> UpdatedAt: <?php echo LOGIN_UserUpdatedAt; ?></span><br>
                  </p>
                </div>
              </div>
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