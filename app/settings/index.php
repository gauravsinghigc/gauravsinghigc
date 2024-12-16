<?php
$Dir = "../../";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

//pagevariables
$PageName = "System Profile";
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
      document.getElementById("config_profile").classList.add("active");
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
                      <?php include "sections/common.php"; ?>
                    </div>
                    <div class="col-md-10">
                      <h4 class="app-heading"><?php echo $PageName; ?></h4>
                      <div class="row">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-12">
                          <form class="form row mb-50px" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST">
                            <?php echo FormPrimaryInputs(true); ?>
                            <div class="form-group col-md-6 col-sm-6">
                              <label>Company Name</label>
                              <input type="text" name="APP_NAME" value="<?php echo APP_NAME; ?>" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                              <label>Tagline</label>
                              <input type="text" name="TAGLINE" value="<?php echo TAGLINE; ?>" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                              <label>Phone Number</label>
                              <input type="text" name="PRIMARY_PHONE" value="<?php echo PRIMARY_PHONE; ?>" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                              <label>Email-ID</label>
                              <input type="text" name="PRIMARY_EMAIL" value="<?php echo PRIMARY_EMAIL; ?>" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                              <label>GST No</label>
                              <input type="text" name="PRIMARY_GST" value="<?php echo PRIMARY_GST; ?>" class="form-control" required="">
                            </div>
                            <div class="form-group col-md-12">
                              <label>Short Descriptions</label>
                              <textarea class="form-control" name="SHORT_DESCRIPTION" required="" rows="2"><?php echo SECURE(SHORT_DESCRIPTION, "d"); ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                              <label>Complete Address (Primary)</label>
                              <textarea class="form-control" name="PRIMARY_ADDRESS" required="" rows="3"><?php echo SECURE(PRIMARY_ADDRESS, 'd'); ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                              <label>Map Location Url</label>
                              <textarea type="url" class="form-control" name="PRIMARY_MAP_LOCATION_LINK" required="" rows="5"><?php echo SECURE(PRIMARY_MAP_LOCATION_LINK, 'd'); ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                              <label>Android APP Link (Play store App link)</label>
                              <textarea type="url" class="form-control" name="DOWNLOAD_ANDROID_APP_LINK" required="" rows="2"><?php echo DOWNLOAD_ANDROID_APP_LINK; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                              <label>iOS App Link</label>
                              <textarea type="url" class="form-control" name="DOWNLOAD_IOS_APP_LINK" required="" rows="2"><?php echo DOWNLOAD_IOS_APP_LINK; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                              <label>Brocher or Pdf File Link</label>
                              <textarea type="url" class="form-control" name="DOWNLOAD_BROCHER_LINK" required="" rows="2"><?php echo DOWNLOAD_BROCHER_LINK; ?></textarea>
                            </div>
                            <div class="col-md-12 mt-15px">
                              <button type="Submit" name="UpdatePrimaryConfigurations" class="btn btn-md btn-dark">Update Details</button>
                            </div>
                          </form>
                        </div>
                        <div class="col-md-5 col-lg-5 col-12">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12 mb-2">
                              <div class="br10 rounded shadow-sm p-1">
                                <div class="text-center br10 app-bg-light">
                                  <h6 class="text-left app-heading">APP Admin Logo</h6>
                                  <center>
                                    <img src="<?php echo MAIN_LOGO; ?>" class="w-100 mx-auto d-block rounded config-logo">
                                  </center>
                                  <form class="form m-t-3" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="UPDATE_APP_LOGO" value="true" hidden="">
                                    <?php echo FormPrimaryInputs(true); ?>
                                    <label for="UploadAppLogo">
                                      <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 w-25 upload-icon">
                                    </label>
                                    <input type="file" class="hidden" onchange="form.submit()" hidden="" name="APP_LOGO" id="UploadAppLogo" value="<?php echo APP_LOGO; ?>" accept="images/*">
                                  </form>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12">
                              <div class="br10 rounded shadow-sm p-1">
                                <div class="text-center br10 app-bg-light">
                                  <h6 class="text-left app-heading">Website Logo Sq.</h6>
                                  <center>
                                    <img src="<?php echo WEBSITE_LOGO_SQ; ?>" class="w-100 mx-auto d-block rounded config-logo">
                                  </center>
                                  <form class="form m-t-3" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="UPDATE_WEBSITE_LOGO_SQ" value="true" hidden="">
                                    <?php echo FormPrimaryInputs(true); ?>
                                    <label for="UploadWebsiteLogoSq">
                                      <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 w-25 upload-icon">
                                    </label>
                                    <input type="file" class="hidden" onchange="form.submit()" hidden="" name="WEBSITE_LOGO_SQ" id="UploadWebsiteLogoSq" value="<?php echo WEBSITE_LOGO_SQ; ?>" accept="images/*">
                                  </form>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12">
                              <div class="br10 rounded shadow-sm p-1">
                                <div class="text-center br10 app-bg-light">
                                  <h6 class="text-left app-heading">Website Logo Rec</h6>
                                  <center>
                                    <img src="<?php echo WEBSITE_LOGO_REC; ?>" class="w-100 mx-auto d-block rounded config-logo">
                                  </center>
                                  <form class="form m-t-3" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="UPDATE_WEBSITE_LOGO_REC" value="true" hidden="">
                                    <?php echo FormPrimaryInputs(true); ?>
                                    <label for="UploadWebsiteLogoRec">
                                      <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 w-25 upload-icon">
                                    </label>
                                    <input type="file" class="hidden" onchange="form.submit()" hidden="" name="WEBSITE_LOGO_REC" id="UploadWebsiteLogoRec" value="<?php echo WEBSITE_LOGO_REC; ?>" accept="images/*">
                                  </form>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-xs-12">
                              <div class="br10 rounded shadow-sm p-1">
                                <div class="text-center br10 app-bg-light">
                                  <h6 class="text-left app-heading">Website Favicon Icon</h6>
                                  <center>
                                    <img src="<?php echo FAVICON_ICON; ?>" class="w-100 mx-auto d-block rounded config-logo">
                                  </center>
                                  <form class="form m-t-3" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="UPDATE_FAVICON_ICON" value="true" hidden="">
                                    <?php echo FormPrimaryInputs(true); ?>
                                    <label for="UploadFaviconIcon">
                                      <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 w-25 upload-icon">
                                    </label>
                                    <input type="file" class="hidden" onchange="form.submit()" hidden="" name="FAVICON_ICON" id="UploadFaviconIcon" value="<?php echo FAVICON_ICON; ?>" accept="images/*">
                                  </form>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-xs-12">
                              <div class="br10 rounded shadow-sm p-1">
                                <div class="text-center br10 app-bg-light">
                                  <h6 class="text-left app-heading">Background Image</h6>
                                  <center>
                                    <img src="<?php echo LOGIN_BG_IMAGE; ?>" class="w-100 mx-auto d-block rounded config-logo">
                                  </center>
                                  <form class="form m-t-3" action="<?php echo CONTROLLER("SystemController/ConfigController.php"); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="Update_LOGIN_BG_IMAGE" value="true" hidden="">
                                    <?php echo FormPrimaryInputs(true); ?>
                                    <label for="UploadLoginBg">
                                      <img src="<?php echo STORAGE_URL_D; ?>/tool-img/img-upload.png" class="w-pr-10 w-25 upload-icon">
                                    </label>
                                    <input type="file" class="hidden" onchange="form.submit()" hidden="" name="LOGIN_BG_IMAGE" id="UploadLoginBg" value="<?php echo LOGIN_BG_IMAGE; ?>" accept="images/*">
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