<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';
require $Dir . "/app/enquiries/HeaderRequest/HeaderRequest.php";

//pagevariables
$PageName = "Add New Enquiries";
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
        <div class="mt-1">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-md-12">
                <a href="../" class="btn btn-block btn-default w-pr-15 mr-1 d-block"><i class="fa fa-angle-left"></i> Back to All Enquiries</a>
              </div>
            </div>

            <form class="row">
              <div class="col-md-3">
                <div class="card p-2 rounded d-block">
                  <h4 class="app-heading">Customer Details</h4>
                  <div class="flex-s-b">
                    <div class="form-group mr-1 w-pr-40">
                      <label>Salutations</label>
                      <select class="form-control" name="customer_salutation">
                        <?php echo InputOptions(SALUTATION, "Select Salutation"); ?>
                      </select>
                    </div>
                    <div class="form-group ml-1 w-pr-60">
                      <label>Customer Name</label>
                      <input type="text" class="form-control" placeholder="Enter Customer Name" name="customer_name" required>
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group mr-1 w-pr-35">
                      <label>Phone Code</label>
                      <select class="form-control" name="customer_salutation">
                        <?php echo InputOptionsWithKey(PHONE_CODES, "91"); ?>
                      </select>
                    </div>
                    <div class="form-group ml-1 w-pr-65">
                      <label>Phone Number</label>
                      <input type="tel" class="form-control" placeholder="Phone Number" name="customer_phone_number" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email-Id</label>
                    <input type="email" class="form-control" placeholder="Enter Email-Id" name="customer_email" required>
                  </div>
                </div>
                <div class="card p-2 rounded">
                  <h4 class="app-heading">Address Details</h4>
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" name="ca_company_name">
                  </div>
                  <div class="form-group">
                    <label>Address Line-1</label>
                    <input type="text" class="form-control" placeholder="Enter Address line 1" name="ca_address_line_1">
                  </div>
                  <div class="form-group">
                    <label>Address Line-2</label>
                    <input type="text" class="form-control" placeholder="Enter Address line 2" name="ca_address_line_2">
                  </div>
                  <div class="form-group">
                    <label>Landmark or Nearby</label>
                    <input type="text" class="form-control" placeholder="Landmark" name="ca_landmark">
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Sector/Area/Locality</label>
                      <input type="text" class="form-control" placeholder="" name="ca_sector_area_locality">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="" name="ca_city">
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>State</label>
                      <input type="text" class="form-control" placeholder="" name="ca_state">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="" name="ca_country">
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Pincode</label>
                      <input type="number" minlength="6" maxlength="6" class="form-control" placeholder="" name="ca_pincode">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Address Type</label>
                      <select class="form-control" name="ca_address_type">
                        <?php echo InputOptions(ADDRESS_TYPE, "Select Address Type"); ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card p-2 rounded d-block">
                  <h4 class="app-heading">Enquiry Type/Category Details</h4>

                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Enquiry Source</label>
                      <select class="form-control" name="enquiry_sources">
                        <?php
                        $GetEnquiryTypes = SET_SQL("SELECT cet_id, cet_name, cet_icon FROM config_enquiry_types where cet_user_id='" . LOGIN_UserId . "' and cet_status='1' ORDER BY cet_id ASC", true);
                        if ($GetEnquiryTypes != null) {
                          foreach ($GetEnquiryTypes as $Types) {
                            $ActiveRecordStatus = GetActiveStatus(SECURE($ActiveRecord, "D"), $Types->cet_id, "selected"); ?>
                            <option value="<?php echo $Types->cet_id; ?>" <?php echo $ActiveRecordStatus; ?>>
                              <?php echo $Types->cet_name; ?>
                            </option>
                        <?php  }
                        } ?>
                      </select>
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Enquiry Status</label>
                      <select class="form-control" name="enquiry_status">
                        <?php
                        $AllFlowSteps = SET_SQL("SELECT cef_id, cef_name, cef_short_name FROM config_enquiry_flow where cef_user_id='" . LOGIN_UserId . "' ORDER BY cef_sort_order ASC", true);
                        if ($AllFlowSteps != null) {
                          foreach ($AllFlowSteps as $Steps) { ?>
                            <option value="<?php echo $Steps->cef_id; ?>"> <?php echo $Steps->cef_name; ?></option>
                        <?php }
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Priority Level</label>
                      <select class="form-control" name="enquiry_priority_level">
                        <?php echo InputOptions(PRIORITY_LEVEL, "Select Priority Level"); ?>
                      </select>
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Enquiry Type</label>
                      <select class="form-control" name="enquiry_types">
                        <?php echo InputOptions(ENQUIRY_FOR_LIST, "Select Enquiry Type"); ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card p-2 rounded">
                  <h4 class="app-heading">Requirement/Suggestion/Query Details</h4>
                  <div class="form-group">
                    <label>Requirement/feedback/Suggestion/Query Title</label>
                    <input type="text" class="form-control" placeholder="" name="er_title">
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Location</label>
                      <input type="text" class="form-control" placeholder="" name="ca_sector_area_locality">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Budget</label>
                      <input type="text" class="form-control" placeholder="" name="ca_city">
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Estimate Date</label>
                      <input type="date" value='<?php echo CURRENT_DATE; ?>' class="form-control" placeholder="" name="ca_sector_area_locality">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Quantity</label>
                      <input type="text" class="form-control" placeholder="" name="ca_city">
                    </div>
                  </div>
                  <div class="flex-s-b">
                    <div class="form-group w-50 mr-1">
                      <label>Highlight Tags</label>
                      <input type="text" class="form-control" placeholder="" name="ca_sector_area_locality">
                    </div>
                    <div class="form-group w-50 ml-1">
                      <label>Keypoint</label>
                      <input type="text" class="form-control" placeholder="" name="ca_city">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Remarks</label>
                    <textarea class="form-control editor" rows="3" placeholder="Enter Remarks" name="er_description"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card p-2 rounded d-block">
                      <h4 class="app-heading">Add/Assign Team Members</h4>

                      <form class="p-2 mb-3">
                        <input type="search" id='SearchUsers' oninput="SearchData('SearchUsers', 'AllAdminUsers')" class="form-control mb-2" placeholder="Search Member...">
                      </form>
                      <!-- Assign to users -->
                      <div class="height-15rem">
                        <?php
                        $GetAllTeamUsers = SET_SQL("SELECT * FROM users where UserCreatedBy='" . LOGIN_UserId . "' and UserStatus='1'", true);
                        if ($GetAllTeamUsers != null) {
                          foreach ($GetAllTeamUsers as $Users) { ?>
                            <div class="data-list mb-1 AllAdminUsers">
                              <div class="d-block option-checkbox">
                                <label class="form-check-label h6 mb-0 p-1" for="user_<?php echo $Users->UserId; ?>">
                                  <div class="flex-s-b">
                                    <div class="w-pr-10">
                                      <img src="<?php echo UserDetails($Users->UserId, "UserProfileImage"); ?>" class="img-fluid circle">
                                    </div>
                                    <div class="w-pr-90 pl-2">
                                      <small class="fs-10 text-secondary">(UID<?php echo $Users->UserId; ?>)</small>
                                      <?php echo $Users->UserSalutation; ?>
                                      <?php echo $Users->UserFullName; ?><br>
                                      <small class='text-secondary'>
                                        <span> <?php echo $Users->UserCompanyName; ?> </span>
                                        <span> - <?php echo $Users->UserDesignation; ?> </span><br>
                                        <span><?php echo $Users->UserPhoneNumber; ?></span> -
                                        <span><?php echo $Users->UserEmailId; ?></span> <br>
                                      </small>
                                    </div>
                                  </div>
                                  <input class="form-check-input mr-2 list-checkbox pull-right" type="checkbox" value="<?php echo $Users->UserId; ?>" id="user_<?php echo $Users->UserId; ?>" name="user_ids[]">
                                </label>
                              </div>
                            </div>
                          <?php }
                        } else {
                          echo "<p>No team members found.</p>";
                          ?>
                          <a href="#" onclick="Databar('AddNewUsers')" class="btn btn-md btn-block btn-danger"><i class="fa fa-plus"></i> New
                            Users</a>
                        <?php } ?>
                      </div>
                      <div class="form-group mt-3">
                        <label>Assign Notes</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Remarks" name="er_description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card p-2 rounded">
                      <h4 class="app-heading">Add More Details</h4>
                    </div>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </section>
    </div>
  </div>

</body>
<?php
include $Dir . "/include/forms/Add-New-Users.php";
include $Dir . "/include/common/Footer.php";
include $Dir . "/assets/FooterFiles.php"; ?>

</html>