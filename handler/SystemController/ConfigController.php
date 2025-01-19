<?php
//initialize files
require "../../acm/SysFileAutoLoader.php";
require "../../acm/SystemReqHandler.php";
require "../../handler/AuthController/AuthAccessController.php";

//update primary details
if (isset($_POST['UpdatePrimaryConfigurations'])) {
  $APP_NAME = $_POST['APP_NAME'];
  $TAGLINE = htmlentities($_POST['TAGLINE']);
  $PRIMARY_PHONE = $_POST['PRIMARY_PHONE'];
  $PRIMARY_EMAIL = $_POST['PRIMARY_EMAIL'];
  $SHORT_DESCRIPTION = SECURE($_POST['SHORT_DESCRIPTION'], "e");
  $PRIMARY_ADDRESS = SECURE($_POST['PRIMARY_ADDRESS'], "e");
  $PRIMARY_MAP_LOCATION_LINK = SECURE($_POST['PRIMARY_MAP_LOCATION_LINK'], "e");
  $DOWNLOAD_ANDROID_APP_LINK = $_POST['DOWNLOAD_ANDROID_APP_LINK'];
  $DOWNLOAD_IOS_APP_LINK = $_POST['DOWNLOAD_IOS_APP_LINK'];
  $DOWNLOAD_BROCHER_LINK = $_POST['DOWNLOAD_BROCHER_LINK'];
  $PRIMARY_GST = $_POST['PRIMARY_GST'];

  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$APP_NAME' where configurationname='APP_NAME'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$DOWNLOAD_ANDROID_APP_LINK' where configurationname='DOWNLOAD_ANDROID_APP_LINK'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$DOWNLOAD_IOS_APP_LINK' where configurationname='DOWNLOAD_IOS_APP_LINK'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$DOWNLOAD_BROCHER_LINK' where configurationname='DOWNLOAD_BROCHER_LINK'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$TAGLINE' where configurationname='TAGLINE'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PRIMARY_GST' where configurationname='GST_NO'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PRIMARY_PHONE' where configurationname='PRIMARY_PHONE'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PRIMARY_EMAIL' where configurationname='PRIMARY_EMAIL'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SHORT_DESCRIPTION' where configurationname='SHORT_DESCRIPTION'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PRIMARY_ADDRESS' where configurationname='PRIMARY_ADDRESS'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PRIMARY_MAP_LOCATION_LINK' where configurationname='PRIMARY_MAP_LOCATION_LINK'");

  GENERATE_APP_LOGS("C_PROFILE_UPDATED", "Company Profile Updated", "UPDATE");
  RESPONSE($Update, "Company Profile Updated!", "Unable to Update Company profile!");

  //update api & key
} elseif (isset($_POST['UpdateApi&Keys'])) {
  $SMS_SENDER_ID = $_POST['SMS_SENDER_ID'];
  $SMS_API_KEY = $_POST['SMS_API_KEY'];
  $SMS_OTP_TEMP_ID_VALUE = $_POST['SMS_OTP_TEMP_ID_VALUE'];
  $SMS_OTP_TEMP_ID_SUPPORTIVE_TEXT = $_POST['SMS_OTP_TEMP_ID_SUPPORTIVE_TEXT'];
  $PASS_RESET_OTP_TEMP_VALUE = $_POST['PASS_RESET_OTP_TEMP_VALUE'];
  $PASS_RESET_OTP_TEMP_SUPPORTIVE_TEXT = $_POST['PASS_RESET_OTP_TEMP_SUPPORTIVE_TEXT'];
  $CONTROL_SMS = $_POST['CONTROL_SMS'];

  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_SMS' where configurationname='CONTROL_SMS'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SMS_SENDER_ID' where configurationname='SMS_SENDER_ID'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SMS_API_KEY' where configurationname='SMS_API_KEY'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SMS_OTP_TEMP_ID_VALUE', configurationsupportivetext='$SMS_OTP_TEMP_ID_SUPPORTIVE_TEXT' where configurationname='SMS_OTP_TEMP_ID'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PASS_RESET_OTP_TEMP_VALUE', configurationsupportivetext='$PASS_RESET_OTP_TEMP_SUPPORTIVE_TEXT' where configurationname='PASS_RESET_OTP_TEMP'");

  GENERATE_APP_LOGS("SMS_API_KEY", "SMS api & key are $CONTROL_SMS", "API_KEY");
  RESPONSE($Update, "SMS & API are Updated Successfully!", "Unable to Update SMS & API Keys Details");

  //update mail configs
} elseif (isset($_POST['UpdateMailConfigs'])) {
  $CONTROL_MAILS = $_POST['CONTROL_MAILS'];
  $SENDER_MAIL_ID = $_POST['SENDER_MAIL_ID'];
  $RECEIVER_MAIL = $_POST['RECEIVER_MAIL'];
  $SUPPORT_MAIL = $_POST['SUPPORT_MAIL'];
  $ENQUIRY_MAIL = $_POST['ENQUIRY_MAIL'];
  $ADMIN_MAIL = $_POST['ADMIN_MAIL'];

  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_MAILS' where configurationname='CONTROL_MAILS'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SENDER_MAIL_ID' where configurationname='SENDER_MAIL_ID'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$RECEIVER_MAIL' where configurationname='RECEIVER_MAIL'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$SUPPORT_MAIL' where configurationname='SUPPORT_MAIL'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$ENQUIRY_MAIL' where configurationname='ENQUIRY_MAIL'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$ADMIN_MAIL' where configurationname='ADMIN_MAIL'");

  GENERATE_APP_LOGS("MAIL_CONFIGS", "Mail Configurations Updated & Status: $CONTROL_MAILS", "MAIL_SETTINGS");
  RESPONSE($Update, "Mailing Configurations are Updated Successfully!", "Unable to update Mailing configurations");

  //update pg details
} elseif (isset($_POST['UpdatePgDetails'])) {
  $ONLINE_PAYMENT_OPTION = $_POST['ONLINE_PAYMENT_OPTION'];
  $PG_PROVIDER = $_POST['PG_PROVIDER'];
  $PG_MODE = $_POST['PG_MODE'];
  $MERCHENT_ID = $_POST['MERCHENT_ID'];
  $MERCHANT_KEY = $_POST['MERCHANT_KEY'];


  $config_pgs = [
    "ConfigPgMode" => $PG_MODE,
    "ConfigPgProvider" => $PG_PROVIDER,
    "ConfigPgMerchantId" => $MERCHENT_ID,
    "ConfigPgMerchantKey" => $MERCHANT_KEY
  ];

  //save latest details to PG config table
  $Update = UPDATE("config_pgs", $config_pgs, "ConfigPgProvider='$PG_PROVIDER'");

  //update default pg details
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$ONLINE_PAYMENT_OPTION' where configurationname='ONLINE_PAYMENT_OPTION'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PG_PROVIDER' where configurationname='PG_PROVIDER'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$PG_MODE' where configurationname='PG_MODE'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$MERCHENT_ID' where configurationname='MERCHENT_ID'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$MERCHANT_KEY' where configurationname='MERCHANT_KEY'");

  GENERATE_APP_LOGS("PAYMENT_GATEWAY_UPDATED", "Payment Gateway Updated & Status : $ONLINE_PAYMENT_OPTION & Provider : $PG_PROVIDER", "PG_SETTINGS");
  RESPONSE($Update, "Payment Gateway Details are updated successfully!", "Unable to Update Payment Gateway Details!");

  //enable features
} elseif (isset($_POST['UpdateFeatures'])) {
  $CONTROL_WORK_ENV = $_POST['CONTROL_WORK_ENV'];
  $CONTROL_NOTIFICATION = $_POST['CONTROL_NOTIFICATION'];
  $CONTROL_MSG_DISPLAY_TIME = $_POST['CONTROL_MSG_DISPLAY_TIME'];
  $CONTROL_APP_LOGS = $_POST['CONTROL_APP_LOGS'];
  $CONTROL_NOTIFICATION_SOUND = $_POST['CONTROL_NOTIFICATION_SOUND'];
  $WEBSITE = $_POST['WEBSITE'];
  $APP = $_POST['APP'];
  $DEFAULT_RECORD_LISTING = $_POST['DEFAULT_RECORD_LISTING'];

  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_WORK_ENV' where configurationname='CONTROL_WORK_ENV'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_NOTIFICATION' where configurationname='CONTROL_NOTIFICATION'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_MSG_DISPLAY_TIME' where configurationname='CONTROL_MSG_DISPLAY_TIME'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_APP_LOGS' where configurationname='CONTROL_APP_LOGS'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$CONTROL_NOTIFICATION_SOUND' where configurationname='CONTROL_NOTIFICATION_SOUND'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$WEBSITE' where configurationname='WEBSITE'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$APP' where configurationname='APP'");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$DEFAULT_RECORD_LISTING' where configurationname='DEFAULT_RECORD_LISTING'");
  GENERATE_APP_LOGS("FEATURE_UPDATED", "WORK_ENV: $CONTROL_WORK_ENV, ALERT: $CONTROL_NOTIFICATION, ALERT_TIME: $CONTROL_MSG_DISPLAY_TIME, LOGS: $CONTROL_APP_LOGS", "FEATURE_UPDATED");
  RESPONSE($Update, "Selected features are Updated successfully!", "Unable to Update selected features!");

  //update app logo 
} elseif (isset($_POST['UPDATE_APP_LOGO'])) {
  $APP_LOGO = UPLOAD_FILES("../../storage/app/img/logo", false, APP_NAME . "", "APP_LOGO");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$APP_LOGO' where configurationname='APP_LOGO'");
  GENERATE_APP_LOGS("LOGO_CHANGED", "$APP_LOGO", "LOGO_UPDATED");
  RESPONSE($Update, "Logo Updated Successfully!", "Unable to Update Logo!");

  //update website sq logo 
} elseif (isset($_POST['UPDATE_WEBSITE_LOGO_SQ'])) {
  $WEBSITE_LOGO_SQ = UPLOAD_FILES("../../storage/app/img/logo", false, APP_NAME . "", "WEBSITE_LOGO_SQ");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$WEBSITE_LOGO_SQ' where configurationname='WEBSITE_LOGO_SQ'");
  GENERATE_APP_LOGS("WEBSITE_LOGO_SQ_CHANGED", "$WEBSITE_LOGO_SQ", "WEBSITE_LOGO_SQ_UPDATED");
  RESPONSE($Update, "Website Logo Updated Successfully!", "Unable to Update Logo!");

  //update website rec logo 
} elseif (isset($_POST['UPDATE_WEBSITE_LOGO_REC'])) {
  $WEBSITE_LOGO_REC = UPLOAD_FILES("../../storage/app/img/logo", false, APP_NAME . "", "WEBSITE_LOGO_REC");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$WEBSITE_LOGO_REC' where configurationname='WEBSITE_LOGO_REC'");
  GENERATE_APP_LOGS("WEBSITE_LOGO_REC_CHANGED", "$WEBSITE_LOGO_REC", "WEBSITE_LOGO_REC_UPDATED");
  RESPONSE($Update, "Website Logo Updated Successfully!", "Unable to Update Logo!");

  //update favicon icon 
} elseif (isset($_POST['UPDATE_FAVICON_ICON'])) {
  $FAVICON_ICON = UPLOAD_FILES("../../storage/app/img/logo", false, APP_NAME . "", "FAVICON_ICON");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$FAVICON_ICON' where configurationname='FAVICON_ICON'");
  GENERATE_APP_LOGS("UPDATE_FAVICON_ICON_CHANGED", "$FAVICON_ICON", "FAVICON_ICON_UPDATED");
  RESPONSE($Update, "Favicon Icon Updated Successfully!", "Unable to Update Favicon Icon!");

  //update bg image
} elseif (isset($_POST['Update_LOGIN_BG_IMAGE'])) {
  $CurrentFile = SECURE($_POST['CurrentFile'], "d");
  $LOGIN_BG_IMAGE = UPLOAD_FILES("../../storage/app/img/bg", false, APP_NAME . "", "LOGIN_BG_IMAGE");
  $Update = UPDATE_SQL("UPDATE configurations SET configurationvalue='$LOGIN_BG_IMAGE' where configurationname='LOGIN_BG_IMAGE'");
  GENERATE_APP_LOGS("LOGIN_BG_CHANGED", "$LOGIN_BG_IMAGE", "IMG_UPDATED");
  RESPONSE($Update, "Log in Bg Updated Successfully! Updated Successfully!", "Unable to Update Login Background Image!");


  //add office locations
} elseif (isset($_POST['CreateOfficeLocations'])) {
  $config_locations = [
    "config_location_name" =>  strtoupper($_POST['config_location_name']),
    "config_location_address" => SECURE($_POST['config_location_address'], "e"),
    "config_location_Latitude" => $_POST['config_location_Latitude'],
    "config_location_Longitude" => $_POST['config_location_Longitude'],
    "config_location_status" => $_POST['config_location_status'],
    "config_location_created_at" => CURRENT_DATE_TIME,
    "config_location_updated_at" => CURRENT_DATE_TIME,
    "config_location_created_by" => LOGIN_UserId,
    "config_location_updated_by" => LOGIN_UserId
  ];

  $Response = INSERT("config_locations", $config_locations);
  RequestHandler($Response, [
    "true" => "<b>" . $_POST['config_location_name'] . "</b> is saved successfully!",
    "false" => "Unable to save <b>" . $_POST['config_location_name'] . "</b> location at the momemnt!",
  ]);

  //update other configurations
} elseif (isset($_POST['UpdateOtherConfigurations'])) {

  //get all other configurations
  foreach (CONFIG_CONSTANTS as $values) {
    $GetValues = $_POST["$values"];
    $Response = UPDATE_SQL("UPDATE configurations SET configurationvalue='$GetValues' where configurationname='$values'");
  }

  //Send repsone
  RequestHandler($Response, [
    "true" => "Configuration updated successfully!",
    "false" => "Unable to update configuration at the moment!"
  ]);

  //update office locations
} elseif (isset($_POST['UpdateOfficeLocations'])) {
  $config_location_id = SECURE($_POST['config_location_id'], "d");

  $config_locations = [
    "config_location_name" =>  strtoupper($_POST['config_location_name']),
    "config_location_address" => SECURE($_POST['config_location_address'], "e"),
    "config_location_Latitude" => $_POST['config_location_Latitude'],
    "config_location_Longitude" => $_POST['config_location_Longitude'],
    "config_location_status" => $_POST['config_location_status'],
    "config_location_updated_at" => CURRENT_DATE_TIME,
    "config_location_updated_by" => LOGIN_UserId
  ];

  $Response = UPDATE("config_locations", $config_locations, "config_location_id='$config_location_id'");
  RequestHandler($Response, [
    "true" => "<b>" . $_POST['config_location_name'] . "</b> is updated successfully!",
    "false" => "Unable to update <b>" . $_POST['config_location_name'] . "</b> location at the momemnt!",
  ]);

  //remove old locations
} elseif (isset($_GET['remove_app_location'])) {
  DeleteReqHandler("remove_app_location", [
    "config_locations" => "config_location_id='" . SECURE($_GET['config_location_id'], "d") . "'"
  ], [
    "true" => "Location removed successfully!",
    "false" => "Unable to remove location at the moment!"
  ]);

  //save vendor type informations
} elseif (isset($_POST['SaveVendorTypeNewRecords'])) {

  $config_vendor_types = [
    "vendor_type_name" => $_POST['vendor_type_name'],
    "vendor_type_desc" => SECURE($_POST['vendor_type_desc'], "e"),
    "vendor_type_created_at" => CURRENT_DATE_TIME,
    "vendor_type_updated_at" => CURRENT_DATE_TIME,
    "vendor_type_created_by" => LOGIN_UserId,
    "vendor_type_updated_by" => LOGIN_UserId,
    "vendor_type_status" => $_POST['vendor_type_status']
  ];

  $Check = CHECK("SELECT vendor_type_name FROM config_vendor_types where vendor_type_name='" . $_POST['vendor_type_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_vendor_types", $config_vendor_types);
    $Error = "Unable to save vendor type";
  } else {
    $Response = false;
    $Error = "Vendor type already exists";
  }
  RequestHandler($Response, [
    "true" => "Vendor type saved successfully!",
    "false" => $Error
  ]);

  //vendor type update
} elseif (isset($_POST['UpdateVendorTypeRecords'])) {
  $vendor_type_id = SECURE($_POST['vendor_type_id'], "d");

  $config_vendor_types = [
    "vendor_type_name" => $_POST['vendor_type_name'],
    "vendor_type_desc" => SECURE($_POST['vendor_type_desc'], "e"),
    "vendor_type_updated_at" => CURRENT_DATE_TIME,
    "vendor_type_updated_by" => LOGIN_UserId,
    "vendor_type_status" => $_POST['vendor_type_status']
  ];
  $Response = UPDATE("config_vendor_types", $config_vendor_types, "vendor_type_id='$vendor_type_id'");
  RequestHandler($Response, [
    "true" => "Vendor type updated successfully!",
    "false" => "Unable to update vendor type at the moment!"
  ]);

  //update status
} elseif (isset($_POST['UpdateVendorTypeStatus'])) {
  $vendor_type_id = SECURE($_POST['vendor_type_id'], "d");
  $vendor_type_status = SECURE($_POST['UpdateVendorTypeStatus'], "d");

  if ($vendor_type_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  $Response = UPDATE_SQL("UPDATE config_vendor_types SET vendor_type_status='$status' WHERE vendor_type_id='$vendor_type_id'");
  RequestHandler($Response, [
    "true" => "Vendor type status updated successfully!",
    "false" => "Unable to update vendor type status at the moment!"
  ]);

  //remove vendor type record
} elseif (isset($_GET['remove_vendor_records'])) {
  DeleteReqHandler(
    "remove_vendor_records",
    [
      "config_vendor_types" => "vendor_type_id='" . SECURE($_GET['control_id'], "d") . "'"
    ],
    [
      "true" => "Vendor type removed successfully!",
      "false" => "Unable to remove vendor type at the moment!"
    ]
  );

  //create new vendor category
} elseif (isset($_POST['SaveVendorCategoryRecords'])) {
  $config_vendor_categories = [
    "cvc_name" => $_POST['cvc_name'],
    "cvc_desc" => SECURE($_POST['cvc_desc'], "e"),
    "cvc_created_at" => CURRENT_DATE_TIME,
    "cvc_updated_at" => CURRENT_DATE_TIME,
    "cvc_created_by" => LOGIN_UserId,
    "cvc_updated_by" => LOGIN_UserId,
    "cvc_status" => $_POST['cvc_status']
  ];

  $Check = CHECK("SELECT cvc_name FROM config_vendor_categories where cvc_name='" . $_POST['cvc_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_vendor_categories", $config_vendor_categories);
    $Error = "Unable to save vendor category";
  } else {
    $Response = false;
    $Error = "Vendor category already exists";
  }
  RequestHandler($Response, [
    "true" => "Vendor category saved successfully!",
    "false" => $Error
  ]);

  //update vendor categories
} elseif (isset($_POST['UpdateVendorCategoryRecords'])) {
  $cvc_id = SECURE($_POST['cvc_id'], "d");
  $config_vendor_categories = [
    "cvc_name" => $_POST['cvc_name'],
    "cvc_desc" => SECURE($_POST['cvc_desc'], "e"),
    "cvc_updated_at" => CURRENT_DATE_TIME,
    "cvc_updated_by" => LOGIN_UserId,
    "cvc_status" => $_POST['cvc_status']
  ];
  $Response = UPDATE("config_vendor_categories", $config_vendor_categories, "cvc_id='$cvc_id'");
  RequestHandler($Response, [
    "true" => "Vendor category updated successfully!",
    "false" => "Unable to update vendor category at the moment!"
  ]);

  //remove vendor categories
} elseif (isset($_GET['remove_vendor_category_records'])) {
  DeleteReqHandler(
    "remove_vendor_category_records",
    [
      "config_vendor_categories" => "cvc_id='" . SECURE($_GET['control_id'], "d") . "'"
    ],
    [
      "true" => "Vendor category removed successfully!",
      "false" => "Unable to remove vendor category at the moment!"
    ]
  );

  //update vendor category status
} elseif (isset($_POST['UpdateVendorCategoryStatus'])) {
  $cvc_id = SECURE($_POST['cvc_id'], "d");
  $cvc_status = SECURE($_POST['UpdateVendorCategoryStatus'], "d");
  if ($cvc_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_vendor_categories SET cvc_status='$status' WHERE cvc_id='$cvc_id'");
  RequestHandler($Response, [
    "true" => "Vendor category status updated successfully!",
    "false" => "Unable to update vendor category status at the moment!"
  ]);

  //save config urls
} elseif (isset($_POST['SaveConfigUrlRecords'])) {
  $config_url_types = [
    "cut_name" => $_POST['cut_name'],
    "cut_icon" => $_POST['cut_icon'],
    "cut_status" => $_POST['cut_status'],
    "cut_created_at" => CURRENT_DATE_TIME,
    "cut_updated_at" => CURRENT_DATE_TIME,
    "cut_created_by" => LOGIN_UserId,
    "cut_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cut_name FROM config_url_types WHERE cut_name='" . $_POST['cut_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_url_types", $config_url_types);
    $Error = "Unable to save config url";
  } else {
    $Response = false;
    $Error = "Config url already exists";
  }
  RequestHandler($Response, [
    "true" => "Config url saved successfully!",
    "false" => $Error
  ]);

  //update config urls
} elseif (isset($_POST['UpdateConfigUrlRecords'])) {
  $cut_id = SECURE($_POST['cut_id'], "d");
  $config_url_types = [
    "cut_name" => $_POST['cut_name'],
    "cut_icon" => $_POST['cut_icon'],
    "cut_status" => $_POST['cut_status'],
    "cut_updated_at" => CURRENT_DATE_TIME,
    "cut_updated_by" => LOGIN_UserId,
  ];
  $Response = UPDATE("config_url_types", $config_url_types, "cut_id='$cut_id'");
  RequestHandler($Response, [
    "true" => "Config url updated successfully!",
    "false" => "Unable to update config url at the moment!"
  ]);

  //remove config urls
} elseif (isset($_GET['remove_config_urls_records'])) {
  DeleteReqHandler(
    "remove_config_urls_records",
    [
      "config_url_types" => "cut_id='" . SECURE($_GET['control_id'], "d") . "'"
    ],
    [
      "true" => "Config url removed successfully!",
      "false" => "Unable to remove config url at the moment!"
    ]
  );

  //UPDATE config urls status
} elseif (isset($_POST['UpdateConfigUrlStatus'])) {
  $cut_id = SECURE($_POST['cut_id'], "d");
  $cut_status = SECURE($_POST['UpdateConfigUrlStatus'], "d");
  if ($cut_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_url_types SET cut_status='$status' WHERE cut_id='$cut_id'");
  RequestHandler($Response, [
    "true" => "Config url status updated successfully!",
    "false" => "Unable to update config url status at the moment!"
  ]);

  // Save Company Type Records
} elseif (isset($_POST['SaveCompanyTypeRecords'])) {
  $config_company_types = [
    "cct_name" => $_POST['cct_name'],
    "cct_registration_act" => $_POST['cct_registration_act'],
    "cct_legal_structure" => $_POST['cct_legal_structure'],
    "cct_desc" => $_POST['cct_desc'],
    "cct_status" => $_POST['cct_status'],
    "cct_created_at" => CURRENT_DATE_TIME,
    "cct_updated_at" => CURRENT_DATE_TIME,
    "cct_created_by" => LOGIN_UserId,
    "cct_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cct_name FROM config_company_types WHERE cct_name='" . $_POST['cct_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_company_types", $config_company_types);
    $Error = "Unable to save company type";
  } else {
    $Response = false;
    $Error = "Company type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company type saved successfully!",
    "false" => $Error
  ]);

  //update company type records
} elseif (isset($_POST['UpdateCompanyTypeRecords'])) {
  $cct_id = SECURE($_POST['cct_id'], "d");
  $config_company_types = [
    "cct_name" => $_POST['cct_name'],
    "cct_registration_act" => $_POST['cct_registration_act'],
    "cct_legal_structure" => $_POST['cct_legal_structure'],
    "cct_desc" => $_POST['cct_desc'],
    "cct_status" => $_POST['cct_status'],
    "cct_updated_at" => CURRENT_DATE_TIME,
    "cct_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cct_name FROM config_company_types WHERE cct_name='" . $_POST['cct_name'] . "' AND cct_id!='" . $cct_id . "'");
  if ($Check == null) {
    $Response = UPDATE("config_company_types", $config_company_types, "cct_id='$cct_id'");
    $Error = "Unable to update company type";
  } else {
    $Response = false;
    $Error = "Company type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company type updated successfully!",
    "false" => $Error
  ]);

  //update company type status
} elseif (isset($_POST['UpdateCompanyTypeRecordStatus'])) {
  $cct_id = SECURE($_POST['cct_id'], "d");
  $cct_status = SECURE($_POST['UpdateCompanyTypeRecordStatus'], "d");

  if ($cct_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  $Response = UPDATE_SQL("UPDATE config_company_types SET cct_status='$status' WHERE cct_id='$cct_id'");
  RequestHandler($Response, [
    "true" => "Company Type status updated successfully!",
    "false" => "Unable to update company type status at the moment!"
  ]);

  //save new work industry record
} elseif (isset($_POST['SaveWorkIndustyRecords'])) {
  $config_work_industries = [
    "cwi_name" => $_POST['cwi_name'],
    "cwi_code" => $_POST['cwi_code'],
    "cwi_tags" => $_POST['cwi_tags'],
    "cwi_desc" => $_POST['cwi_desc'],
    "cwi_status" => $_POST['cwi_status'],
    "cwi_created_at" => CURRENT_DATE_TIME,
    "cwi_updated_at" => CURRENT_DATE_TIME,
    "cwi_created_by" => LOGIN_UserId,
    "cwi_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cwi_name FROM config_work_industries WHERE cwi_name='" . $_POST['cwi_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_work_industries", $config_work_industries);
    $Error = "Unable to save work industry";
  } else {
    $Response = false;
    $Error = "Work industry already exists";
  }
  RequestHandler($Response, [
    "true" => "Work industry saved successfully!",
    "false" => $Error
  ]);

  //update work industry records
} elseif (isset($_POST['UpdateWorkIndustyRecords'])) {
  $cwi_id = SECURE($_POST['cwi_id'], "d");
  $config_work_industries = [
    "cwi_name" => $_POST['cwi_name'],
    "cwi_code" => $_POST['cwi_code'],
    "cwi_tags" => $_POST['cwi_tags'],
    "cwi_desc" => $_POST['cwi_desc'],
    "cwi_status" => $_POST['cwi_status'],
    "cwi_updated_at" => CURRENT_DATE_TIME,
    "cwi_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cwi_name FROM config_work_industries WHERE cwi_name='" . $_POST['cwi_name'] . "' AND cwi_id!='$cwi_id'");
  if ($Check == null) {
    $Response = UPDATE("config_work_industries", $config_work_industries, "cwi_id='$cwi_id'");
    $Error = "Unable to update work industry";
  } else {
    $Response = false;
    $Error = "Work industry already exists";
  }
  RequestHandler($Response, [
    "true" => "Work industry updated successfully!",
    "false" => $Error
  ]);

  //update work industry status
} elseif (isset($_POST['UpdateWorkIndustryStatus'])) {
  $cwi_id = SECURE($_POST['cwi_id'], "d");
  $cwi_status = SECURE($_POST['UpdateWorkIndustryStatus'], "d");

  if ($cwi_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_work_industries SET cwi_status='$status' WHERE cwi_id='$cwi_id'");
  RequestHandler($Response, [
    "true" => "Work Industry status updated successfully!",
    "false" => "Unable to update work industry status at the moment!"
  ]);

  //create work types
} elseif (isset($_POST['SaveWorkTypeRecords'])) {
  $config_work_types = [
    "cwt_name" => $_POST['cwt_name'],
    "cwt_shortname" => UpperCase(RemoveAllSpecialCharacters($_POST['cwt_name'])),
    "cwt_desc" => $_POST['cwt_desc'],
    "cwt_status" => $_POST['cwt_status'],
    "cwt_created_at" => CURRENT_DATE_TIME,
    "cwt_updated_at" => CURRENT_DATE_TIME,
    "cwt_created_by" => LOGIN_UserId,
    "cwt_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cwt_name FROM config_work_types WHERE cwt_name='" . $_POST['cwt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_work_types", $config_work_types);
    $Error = "Unable to save work type";
  } else {
    $Response = false;
    $Error = "Work type already exists";
  }
  RequestHandler($Response, [
    "true" => "Work type saved successfully!",
    "false" => $Error
  ]);

  //update work type records
} elseif (isset($_POST['UpdateWorkTypeRecords'])) {
  $cwt_id = SECURE($_POST['cwt_id'], "d");
  $config_work_types = [
    "cwt_name" => $_POST['cwt_name'],
    "cwt_shortname" => UpperCase(RemoveAllSpecialCharacters($_POST['cwt_name'])),
    "cwt_desc" => $_POST['cwt_desc'],
    "cwt_status" => $_POST['cwt_status'],
    "cwt_updated_at" => CURRENT_DATE_TIME,
    "cwt_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT cwt_name FROM config_work_types WHERE cwt_name='" . $_POST['cwt_name'] . "' AND cwt_id!='$cwt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_work_types", $config_work_types, "cwt_id='$cwt_id'");
    $Error = "Unable to update work type";
  } else {
    $Response = false;
    $Error = "Work type already exists";
  }
  RequestHandler($Response, [
    "true" => "Work type updated successfully!",
    "false" => $Error
  ]);

  //update work type status
} elseif (isset($_POST['UpdateWorkTypeStatusRecords'])) {
  $cwt_id = SECURE($_POST['cwt_id'], "d");
  $cwt_status = SECURE($_POST['UpdateWorkTypeStatusRecords'], "d");
  if ($cwt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_work_types SET cwt_status='$status' WHERE cwt_id='$cwt_id'");
  RequestHandler($Response, [
    "true" => "Work Type status updated successfully!",
    "false" => "Unable to update work type status at the moment!"
  ]);

  //save company department record
} elseif (isset($_POST['SaveCompanyDepartmentRecords'])) {
  $config_company_department = [
    "ccd_name" => $_POST['ccd_name'],
    "ccd_short_name" => $_POST['ccd_short_name'],
    "ccd_code" => $_POST['ccd_code'],
    "ccd_desc" => $_POST['ccd_desc'],
    "ccd_status" => $_POST['ccd_status'],
    "ccd_type" => $_POST['ccd_type'],
    "ccd_key" => $_POST['ccd_key'],
    "ccd_goals" => $_POST['ccd_goals'],
    "ccd_created_at" => CURRENT_DATE_TIME,
    "ccd_updated_at" => CURRENT_DATE_TIME,
    "ccd_created_by" => LOGIN_UserId,
    "ccd_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT ccd_name FROM config_company_department WHERE ccd_name='" . $_POST['ccd_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_company_department", $config_company_department);
    $Error = "Unable to save company department";
  } else {
    $Response = false;
    $Error = "Company department already exists";
  }
  RequestHandler($Response, [
    "true" => "Company department saved successfully!",
    "false" => $Error
  ]);

  //update company department record
} elseif (isset($_POST['UpdateCompanyDepartmentRecords'])) {
  $ccd_id = SECURE($_POST['ccd_id'], "d");
  $config_company_department = [
    "ccd_name" => $_POST['ccd_name'],
    "ccd_short_name" => $_POST['ccd_short_name'],
    "ccd_code" => $_POST['ccd_code'],
    "ccd_desc" => $_POST['ccd_desc'],
    "ccd_status" => $_POST['ccd_status'],
    "ccd_type" => $_POST['ccd_type'],
    "ccd_key" => $_POST['ccd_key'],
    "ccd_goals" => $_POST['ccd_goals'],
    "ccd_updated_at" => CURRENT_DATE_TIME,
    "ccd_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT ccd_name FROM config_company_department WHERE ccd_name='" . $_POST['ccd_name'] . "' AND ccd_id!='$ccd_id'");
  if ($Check == null) {
    $Response = UPDATE("config_company_department", $config_company_department, "ccd_id='$ccd_id'");
    $Error = "Unable to update company department";
  } else {
    $Response = false;
    $Error = "Company department already exists";
  }
  RequestHandler($Response, [
    "true" => "Company department updated successfully!",
    "false" => $Error
  ]);

  //update company department status
} elseif (isset($_POST['UpdateCompanyDepartmentStatus'])) {
  $ccd_id = SECURE($_POST['ccd_id'], "d");
  $ccd_status = SECURE($_POST['UpdateCompanyDepartmentStatus'], "d");
  if ($ccd_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_company_department SET ccd_status='$status' WHERE ccd_id='$ccd_id'");
  RequestHandler($Response, [
    "true" => "Company Department status updated successfully!",
    "false" => "Unable to update company department status at the moment!"
  ]);

  //save company compliance records
} elseif (isset($_POST['SaveCompanyComplianceTypeRecords'])) {
  $config_company_compliance_types = [
    "ccct_name" => $_POST['ccct_name'],
    "ccct_short_name" => $_POST['ccct_short_name'],
    "ccct_code" => $_POST['ccct_code'],
    "ccct_desc" => $_POST['ccct_desc'],
    "ccct_key" => $_POST['ccct_key'],
    "ccct_status" => $_POST['ccct_status'],
    "ccct_created_at" => CURRENT_DATE_TIME,
    "ccct_updated_at" => CURRENT_DATE_TIME,
    "ccct_created_by" => LOGIN_UserId,
    "ccct_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT ccct_name FROM config_company_compliance_types WHERE ccct_name='" . $_POST['ccct_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_company_compliance_types", $config_company_compliance_types);
    $Error = "Unable to save company compliance type";
  } else {
    $Response = false;
    $Error = "Company compliance type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company compliance type saved successfully!",
    "false" => $Error
  ]);

  //update company compliance records $ccct_id
} elseif (isset($_POST['UpdateCompanyComplianceTypeRecords'])) {
  $ccct_id = SECURE($_POST['ccct_id'], "d");
  $config_company_compliance_types = [
    "ccct_name" => $_POST['ccct_name'],
    "ccct_short_name" => $_POST['ccct_short_name'],
    "ccct_code" => $_POST['ccct_code'],
    "ccct_desc" => $_POST['ccct_desc'],
    "ccct_key" => $_POST['ccct_key'],
    "ccct_status" => $_POST['ccct_status'],
    "ccct_updated_at" => CURRENT_DATE_TIME,
    "ccct_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT ccct_name FROM config_company_compliance_types WHERE ccct_name='" . $_POST['ccct_name'] . "' AND ccct_id!='$ccct_id'");
  if ($Check == null) {
    $Response = UPDATE("config_company_compliance_types", $config_company_compliance_types, "ccct_id='$ccct_id'");
    $Error = "Unable to update company compliance type";
  } else {
    $Response = false;
    $Error = "Company compliance type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company compliance type updated successfully!",
    "false" => $Error
  ]);

  //update company compliance status
} elseif (isset($_POST['UpdateCompanyComplianceStatus'])) {
  $ccct_id = SECURE($_POST['ccct_id'], "d");
  $ccct_status = SECURE($_POST['UpdateCompanyComplianceStatus'], "d");
  if ($ccct_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_company_compliance_types SET ccct_status='$status' WHERE ccct_id='$ccct_id'");
  RequestHandler($Response, [
    "true" => "Company Compliance Type status updated successfully!",
    "false" => "Unable to update company compliance type status at the moment!"
  ]);

  //save company document types
} elseif (isset($_POST['SaveCompanyDocumentTypes'])) {
  $config_company_document_types = [
    "ccdt_name" => $_POST['ccdt_name'],
    "ccdt_shortname" => $_POST['ccdt_shortname'],
    "ccdt_code" => $_POST['ccdt_code'],
    "ccdt_tags" => $_POST['ccdt_tags'],
    "ccdt_desc" => $_POST['ccdt_desc'],
    "ccdt_status" => $_POST['ccdt_status'],
    "ccdt_purpose" => $_POST['ccdt_purpose'],
    "ccdt_created_at" => CURRENT_DATE_TIME,
    "ccdt_updated_at" => CURRENT_DATE_TIME,
    "ccdt_created_by" => LOGIN_UserId,
    "ccdt_updated_by" => LOGIN_UserId
  ];
  $Check = CHECK("SELECT ccdt_name FROM config_company_document_types WHERE ccdt_name='" . $_POST['ccdt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_company_document_types", $config_company_document_types);
    $Error = "Unable to save company document type";
  } else {
    $Response = false;
    $Error = "Company document type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company document type saved successfully!",
    "false" => $Error
  ]);

  //update company document records $ccdt_id
} elseif (isset($_POST['UpdateCompanyDocumentTypes'])) {
  $ccdt_id = SECURE($_POST['ccdt_id'], "d");
  $config_company_document_types = [
    "ccdt_name" => $_POST['ccdt_name'],
    "ccdt_shortname" => $_POST['ccdt_shortname'],
    "ccdt_code" => $_POST['ccdt_code'],
    "ccdt_tags" => $_POST['ccdt_tags'],
    "ccdt_desc" => $_POST['ccdt_desc'],
    "ccdt_status" => $_POST['ccdt_status'],
    "ccdt_purpose" => $_POST['ccdt_purpose'],
    "ccdt_updated_at" => CURRENT_DATE_TIME,
    "ccdt_updated_by" => LOGIN_UserId
  ];
  $Check = CHECK("SELECT ccdt_name FROM config_company_document_types WHERE ccdt_name='" . $_POST['ccdt_name'] . "' AND ccdt_id!='$ccdt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_company_document_types", $config_company_document_types, "ccdt_id='$ccdt_id'");
    $Error = "Unable to update company document type";
  } else {
    $Response = false;
    $Error = "Company document type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company document type updated successfully!",
    "false" => $Error
  ]);

  //update company document status
} elseif (isset($_POST['UpdateCompanyDocumentTypeStatus'])) {
  $ccdt_id = SECURE($_POST['ccdt_id'], "d");
  $ccdt_status = SECURE($_POST['UpdateCompanyDocumentTypeStatus'], "d");
  if ($ccdt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }
  $Response = UPDATE_SQL("UPDATE config_company_document_types SET ccdt_status='$status' WHERE ccdt_id='$ccdt_id'");
  RequestHandler($Response, [
    "true" => "Company Document Type status updated successfully!",
    "false" => "Unable to update company document type status at the moment!"
  ]);
}
