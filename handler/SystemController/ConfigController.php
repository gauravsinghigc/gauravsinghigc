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
    "cut_purpose" => $_POST['cut_purpose'],
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
    "cut_purpose" => $_POST['cut_purpose'],
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
  $config_department = [
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
  $Check = CHECK("SELECT ccd_name FROM config_department WHERE ccd_name='" . $_POST['ccd_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_department", $config_department);
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
  $config_department = [
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
  $Check = CHECK("SELECT ccd_name FROM config_department WHERE ccd_name='" . $_POST['ccd_name'] . "' AND ccd_id!='$ccd_id'");
  if ($Check == null) {
    $Response = UPDATE("config_department", $config_department, "ccd_id='$ccd_id'");
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
  $Response = UPDATE_SQL("UPDATE config_department SET ccd_status='$status' WHERE ccd_id='$ccd_id'");
  RequestHandler($Response, [
    "true" => "Company Department status updated successfully!",
    "false" => "Unable to update company department status at the moment!"
  ]);

  //save company compliance records
} elseif (isset($_POST['SaveCompanyComplianceTypeRecords'])) {
  $config_compliance_types = [
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
  $Check = CHECK("SELECT ccct_name FROM config_compliance_types WHERE ccct_name='" . $_POST['ccct_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_compliance_types", $config_compliance_types);
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
  $config_compliance_types = [
    "ccct_name" => $_POST['ccct_name'],
    "ccct_short_name" => $_POST['ccct_short_name'],
    "ccct_code" => $_POST['ccct_code'],
    "ccct_desc" => $_POST['ccct_desc'],
    "ccct_key" => $_POST['ccct_key'],
    "ccct_status" => $_POST['ccct_status'],
    "ccct_updated_at" => CURRENT_DATE_TIME,
    "ccct_updated_by" => LOGIN_UserId,
  ];
  $Check = CHECK("SELECT ccct_name FROM config_compliance_types WHERE ccct_name='" . $_POST['ccct_name'] . "' AND ccct_id!='$ccct_id'");
  if ($Check == null) {
    $Response = UPDATE("config_compliance_types", $config_compliance_types, "ccct_id='$ccct_id'");
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
  $Response = UPDATE_SQL("UPDATE config_compliance_types SET ccct_status='$status' WHERE ccct_id='$ccct_id'");
  RequestHandler($Response, [
    "true" => "Company Compliance Type status updated successfully!",
    "false" => "Unable to update company compliance type status at the moment!"
  ]);

  //save company document types
} elseif (isset($_POST['SaveCompanyDocumentTypes'])) {
  $config_document_types = [
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
  $Check = CHECK("SELECT ccdt_name FROM config_document_types WHERE ccdt_name='" . $_POST['ccdt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_document_types", $config_document_types);
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
  $config_document_types = [
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
  $Check = CHECK("SELECT ccdt_name FROM config_document_types WHERE ccdt_name='" . $_POST['ccdt_name'] . "' AND ccdt_id!='$ccdt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_document_types", $config_document_types, "ccdt_id='$ccdt_id'");
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

  //update company document type status in database table 'config_document_types'
  $Response = UPDATE_SQL("UPDATE config_document_types SET ccdt_status='$status' WHERE ccdt_id='$ccdt_id'");
  RequestHandler($Response, [
    "true" => "Company Document Type status updated successfully!",
    "false" => "Unable to update company document type status at the moment!"
  ]);

  //save company account types
} elseif (isset($_POST['SaveCompanyAccountTypes'])) {
  $config_accounts_types = [
    "ccat_name" => $_POST['ccat_name'],
    "ccat_shortname" => $_POST['ccat_shortname'],
    "ccat_code" => $_POST['ccat_code'],
    "ccat_key" => $_POST['ccat_key'],
    "ccat_purpose" => $_POST['ccat_purpose'],
    "ccat_type" => $_POST['ccat_type'],
    "ccat_desc" => $_POST['ccat_desc'],
    "ccat_status" => $_POST['ccat_status'],
    "ccat_created_at" => CURRENT_DATE_TIME,
    "ccat_updated_at" => CURRENT_DATE_TIME,
    "ccat_created_by" => LOGIN_UserId,
    "ccat_updated_by" => LOGIN_UserId
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccat_name FROM config_accounts_types WHERE ccat_name='" . $_POST['ccat_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_accounts_types", $config_accounts_types);
    $Error = "Unable to save company account type";
  } else {
    $Response = false;
    $Error = "Company account type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company account type saved successfully!",
    "false" => $Error
  ]);

  //update company account records $ccat_id
} elseif (isset($_POST['UpdateCompanyAccountTypes'])) {
  $ccat_id = SECURE($_POST['ccat_id'], "d");
  $config_accounts_types = [
    "ccat_name" => $_POST['ccat_name'],
    "ccat_shortname" => $_POST['ccat_shortname'],
    "ccat_code" => $_POST['ccat_code'],
    "ccat_key" => $_POST['ccat_key'],
    "ccat_purpose" => $_POST['ccat_purpose'],
    "ccat_type" => $_POST['ccat_type'],
    "ccat_desc" => $_POST['ccat_desc'],
    "ccat_status" => $_POST['ccat_status'],
    "ccat_updated_at" => CURRENT_DATE_TIME,
    "ccat_updated_by" => LOGIN_UserId
  ];
  //check duplicates values
  $Check = CHECK("SELECT ccat_name FROM config_accounts_types WHERE ccat_name='" . $_POST['ccat_name'] . "' AND ccat_id!='$ccat_id'");
  if ($Check == null) {
    $Response = UPDATE("config_accounts_types", $config_accounts_types, "ccat_id='$ccat_id'");
    $Error = "Unable to update company account type";
  } else {
    $Response = false;
    $Error = "Company account type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company account type updated successfully!",
    "false" => $Error
  ]);

  //update company account status
} elseif (isset($_POST['UpdateCompanyAccountTypeStatus'])) {
  $ccat_id = SECURE($_POST['ccat_id'], "d");
  $ccat_status = SECURE($_POST['UpdateCompanyAccountTypeStatus'], "d");
  if ($ccat_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update company account type status in database table 'config_accounts_types'
  $Response = UPDATE_SQL("UPDATE config_accounts_types SET ccat_status='$status' WHERE ccat_id='$ccat_id'");
  RequestHandler($Response, [
    "true" => "Company Account Type status updated successfully!",
    "false" => "Unable to update company account type status at the moment!"
  ]);

  //create company account expanses
} elseif (isset($_POST['SaveCompanyExpanceTypes'])) {

  $config_expanses_types = [
    "ccet_name" => $_POST['ccet_name'],
    "ccet_shortname" => $_POST['ccet_shortname'],
    "ccet_code" => $_POST['ccet_code'],
    "ccet_purpose" => $_POST['ccet_purpose'],
    "ccet_desc" => $_POST['ccet_desc'],
    "ccet_status" => $_POST['ccet_status'],
    "ccet_created_at" => CURRENT_DATE_TIME,
    "ccet_created_by" => LOGIN_UserId,
    "ccet_updated_at" => CURRENT_DATE_TIME,
    "ccet_updated_by" => LOGIN_UserId
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccet_name FROM config_expanses_types WHERE ccet_name='" . $_POST['ccet_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_expanses_types", $config_expanses_types);
    $Error = "Unable to save company expense type";
  } else {
    $Response = false;
    $Error = "Company expense type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company expense type saved successfully!",
    "false" => $Error
  ]);

  //update company expense records $ccet_id
} elseif (isset($_POST['UpdateCompanyExpanceTypes'])) {
  $ccet_id = SECURE($_POST['ccet_id'], "d");
  $config_expanses_types = [
    "ccet_name" => $_POST['ccet_name'],
    "ccet_shortname" => $_POST['ccet_shortname'],
    "ccet_code" => $_POST['ccet_code'],
    "ccet_purpose" => $_POST['ccet_purpose'],
    "ccet_desc" => $_POST['ccet_desc'],
    "ccet_status" => $_POST['ccet_status'],
    "ccet_updated_at" => CURRENT_DATE_TIME,
    "ccet_updated_by" => LOGIN_UserId
  ];
  //check duplicates values
  $Check = CHECK("SELECT ccet_name FROM config_expanses_types WHERE ccet_name='" . $_POST['ccet_name'] . "' AND ccet_id!='$ccet_id'");
  if ($Check == null) {
    $Response = UPDATE("config_expanses_types", $config_expanses_types, "ccet_id='$ccet_id'");
    $Error = "Unable to update company expense type";
  } else {
    $Response = false;
    $Error = "Company expense type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company expense type updated successfully!",
    "false" => $Error
  ]);

  //update company expense status
} elseif (isset($_POST['UpdateCompanyExpanseTypesStatus'])) {
  $ccet_id = SECURE($_POST['ccet_id'], "d");
  $ccet_status = SECURE($_POST['UpdateCompanyExpanseTypesStatus'], "d");

  //update company expense type status in database table 'config_expanses_types'
  if ($ccet_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update company expense type status in database table 'config_expanses_types'
  $Response = UPDATE_SQL("UPDATE config_expanses_types SET ccet_status='$status' WHERE ccet_id='$ccet_id'");
  RequestHandler($Response, [
    "true" => "Company Expense Type status updated successfully!",
    "false" => "Unable to update company expense type status at the moment!"
  ]);

  //save company purchase type
} elseif (isset($_POST['SaveCompanyPurchaseTypes'])) {
  $config_purchase_types = [
    "ccpt_name" => $_POST['ccpt_name'],
    "ccpt_shortname" => $_POST["ccpt_shortname"],
    "ccpt_code" => $_POST["ccpt_code"],
    "ccpt_purpose" => $_POST["ccpt_purpose"],
    "ccpt_status" => $_POST["ccpt_status"],
    "ccpt_created_at" => CURRENT_DATE_TIME,
    "ccpt_created_by" => LOGIN_UserId,
    "ccpt_updated_at" => CURRENT_DATE_TIME,
    "ccpt_updated_by" => LOGIN_UserId
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccpt_name FROM config_purchase_types WHERE ccpt_name='" . $_POST['ccpt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_purchase_types", $config_purchase_types);
    $Error = "Unable to save company purchase type";
  } else {
    $Response = false;
    $Error = "Company purchase type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company purchase type saved successfully!",
    "false" => $Error
  ]);

  //update company purchase records $ccpt_id
} elseif (isset($_POST["UpdateCompanyPurchaseTypes"])) {
  $ccpt_id = SECURE($_POST["ccpt_id"], "d");
  $config_purchase_types = [
    "ccpt_name" => $_POST["ccpt_name"],
    "ccpt_shortname" => $_POST["ccpt_shortname"],
    "ccpt_code" => $_POST["ccpt_code"],
    "ccpt_purpose" => $_POST["ccpt_purpose"],
    "ccpt_status" => $_POST["ccpt_status"],
    "ccpt_updated_at" => CURRENT_DATE_TIME,
    "ccpt_updated_by" => LOGIN_UserId
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccpt_name FROM config_purchase_types WHERE ccpt_name='" . $_POST["ccpt_name"] . "' AND ccpt_id!='$ccpt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_purchase_types", $config_purchase_types, "ccpt_id='$ccpt_id'");
    $Error = "Unable to update company purchase type";
  } else {
    $Response = false;
    $Error = "Company purchase type already exists";
  }
  RequestHandler($Response, [
    "true" => "Company purchase type updated successfully!",
    "false" => $Error
  ]);

  //update company purchase status
} elseif (isset($_POST["UpdateCompanyPurchaseTypesStatus"])) {
  $ccpt_id = SECURE($_POST["ccpt_id"], "d");
  $ccpt_status = SECURE($_POST["UpdateCompanyPurchaseTypesStatus"], "d");

  //update company purchase type status in database table 'config_purchase_types'
  if ($ccpt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update company purchase type status in database table 'config_purchase_types'
  $Response = UPDATE_SQL("UPDATE config_purchase_types SET ccpt_status='$status' WHERE ccpt_id='$ccpt_id'");
  RequestHandler($Response, [
    "true" => "Company Purchase Type status updated successfully!",
    "false" => "Unable to update company purchase type status at the moment!"
  ]);

  //save company assets categories
} elseif (isset($_POST['SaveCompanyAssetCategory'])) {
  $config_assets_categories = [
    "ccat_name" => $_POST['ccat_name'],
    "ccat_shortname" => $_POST['ccat_shortname'],
    "ccat_status" => $_POST['ccat_status'],
    "ccat_created_at" => CURRENT_DATE_TIME,
    "ccat_created_by" => LOGIN_UserId,
    "ccat_updated_at" => CURRENT_DATE_TIME,
    "ccat_updated_by" => LOGIN_UserId,
    "ccat_code" => $_POST["ccat_code"],
    "ccat_desc" => $_POST["ccat_desc"],
    "ccat_purpose" => $_POST["ccat_purpose"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccat_name FROM config_assets_categories WHERE ccat_name='" . $_POST['ccat_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_assets_categories", $config_assets_categories);
    $Error = "Unable to save company asset category";
  } else {
    $Response = false;
    $Error = "Company asset category already exists";
  }
  RequestHandler($Response, [
    "true" => "Company asset category saved successfully!",
    "false" => $Error
  ]);

  //update company assets categories $ccat_id
} elseif (isset($_POST["UpdateCompanyAssetsCategories"])) {
  $ccat_id = SECURE($_POST["ccat_id"], "d");
  $config_assets_categories = [
    "ccat_name" => $_POST["ccat_name"],
    "ccat_shortname" => $_POST["ccat_shortname"],
    "ccat_status" => $_POST["ccat_status"],
    "ccat_updated_at" => CURRENT_DATE_TIME,
    "ccat_updated_by" => LOGIN_UserId,
    "ccat_code" => $_POST["ccat_code"],
    "ccat_desc" => $_POST["ccat_desc"],
    "ccat_purpose" => $_POST["ccat_purpose"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT ccat_name FROM config_assets_categories WHERE ccat_name='" . $_POST["ccat_name"] . "' AND ccat_id!='$ccat_id'");
  if ($Check == null) {
    $Response = UPDATE("config_assets_categories", $config_assets_categories, "ccat_id='$ccat_id'");
    $Error = "Unable to update company asset category";
  } else {
    $Response = false;
    $Error = "Company asset category already exists";
  }

  RequestHandler($Response, [
    "true" => "Company asset category updated successfully!",
    "false" => $Error
  ]);

  //update company assets categories status
} elseif (isset($_POST["UpdateCompanyAssetsCategoryStatus"])) {
  $ccat_id = SECURE($_POST["ccat_id"], "d");
  $ccat_status = SECURE($_POST["UpdateCompanyAssetsCategoryStatus"], "d");

  //update company assets categories status in database table 'config_assets_categories'
  if ($ccat_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update company assets categories status in database table 'config_assets_categories'
  $Response = UPDATE_SQL("UPDATE config_assets_categories SET ccat_status='$status' WHERE ccat_id='$ccat_id'");
  RequestHandler($Response, [
    "true" => "Company Asset Category status updated successfully!",
    "false" => "Unable to update company asset category status at the moment!"
  ]);

  //create credentals categories
} elseif (isset($_POST["SaveCredentialCategories"])) {
  $config_credentials_categories = [
    "cccc_name" => $_POST["cccc_name"],
    "cccc_status" => $_POST["cccc_status"],
    "cccc_created_at" => CURRENT_DATE_TIME,
    "cccc_created_by" => LOGIN_UserId,
    "cccc_updated_at" => CURRENT_DATE_TIME,
    "cccc_updated_by" => LOGIN_UserId,
    "cccc_purpose" => $_POST["cccc_purpose"],
    "cccc_desc" => $_POST["cccc_desc"],
    "cccc_code" => $_POST["cccc_code"],
    "cccc_shortname" => $_POST["cccc_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cccc_name FROM config_credentials_categories WHERE cccc_name='" . $_POST['cccc_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_credentials_categories", $config_credentials_categories);
    $Error = "Unable to save credential categories";
  } else {
    $Response = false;
    $Error = "Credential categories already exists";
  }
  RequestHandler($Response, [
    "true" => "Credential categories saved successfully!",
    "false" => $Error
  ]);

  //update credentals categories $cccc_id
} elseif (isset($_POST["UpdateCredentialCategories"])) {
  $cccc_id = SECURE($_POST["cccc_id"], "d");
  $config_credentials_categories = [
    "cccc_name" => $_POST["cccc_name"],
    "cccc_status" => $_POST["cccc_status"],
    "cccc_updated_at" => CURRENT_DATE_TIME,
    "cccc_updated_by" => LOGIN_UserId,
    "cccc_purpose" => $_POST["cccc_purpose"],
    "cccc_desc" => $_POST["cccc_desc"],
    "cccc_code" => $_POST["cccc_code"],
    "cccc_shortname" => $_POST["cccc_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cccc_name FROM config_credentials_categories WHERE cccc_name='" . $_POST["cccc_name"] . "' AND cccc_id!='$cccc_id'");
  if ($Check == null) {
    $Response = UPDATE("config_credentials_categories", $config_credentials_categories, "cccc_id='$cccc_id'");
    $Error = "Unable to update credential categories";
  } else {
    $Response = false;
    $Error = "Credential categories already exists";
  }
  RequestHandler($Response, [
    "true" => "Credential categories updated successfully!",
    "false" => $Error
  ]);

  //update credentals categories status
} elseif (isset($_POST["UpdateCredentialCategoriesStatus"])) {
  $cccc_id = SECURE($_POST["cccc_id"], "d");
  $cccc_status = SECURE($_POST["UpdateCredentialCategoriesStatus"], "d");

  //update credentals categories status in database table 'config_credentials_categories'
  if ($cccc_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update credentals categories status in database table 'config_credentials_categories'
  $Response = UPDATE_SQL("UPDATE config_credentials_categories SET cccc_status='$status' WHERE cccc_id='$cccc_id'");
  RequestHandler($Response, [
    "true" => "Credential Categories status updated successfully!",
    "false" => "Unable to update credential categories status at the moment!"
  ]);

  //create meeting types records
} elseif (isset($_POST["SaveMeetingTypeRecords"])) {
  $config_meeting_types = [
    "cmt_name" => $_POST["cmt_name"],
    "cmt_status" => $_POST["cmt_status"],
    "cmt_created_at" => CURRENT_DATE_TIME,
    "cmt_created_by" => LOGIN_UserId,
    "cmt_updated_at" => CURRENT_DATE_TIME,
    "cmt_updated_by" => LOGIN_UserId,
    "cmt_purpose" => $_POST["cmt_purpose"],
    "cmt_desc" => $_POST["cmt_desc"],
    "cmt_code" => $_POST["cmt_code"],
    "cmt_shortname" => $_POST["cmt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cmt_name FROM config_meeting_types WHERE cmt_name='" . $_POST['cmt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_meeting_types", $config_meeting_types);
    $Error = "Unable to save meeting types";
  } else {
    $Response = false;
    $Error = "Meeting types already exists";
  }
  RequestHandler($Response, [
    "true" => "Meeting types saved successfully!",
    "false" => $Error
  ]);

  //update meeting types $cmt_id
} elseif (isset($_POST["UpdateMeetingTypeRecords"])) {
  $cmt_id = SECURE($_POST["cmt_id"], "d");
  $config_meeting_types = [
    "cmt_name" => $_POST["cmt_name"],
    "cmt_status" => $_POST["cmt_status"],
    "cmt_updated_at" => CURRENT_DATE_TIME,
    "cmt_updated_by" => LOGIN_UserId,
    "cmt_purpose" => $_POST["cmt_purpose"],
    "cmt_desc" => $_POST["cmt_desc"],
    "cmt_code" => $_POST["cmt_code"],
    "cmt_shortname" => $_POST["cmt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cmt_name FROM config_meeting_types WHERE cmt_name='" . $_POST["cmt_name"] . "' AND cmt_id!='$cmt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_meeting_types", $config_meeting_types, "cmt_id='$cmt_id'");
    $Error = "Unable to update meeting types";
  } else {
    $Response = false;
    $Error = "Meeting types already exists";
  }
  RequestHandler($Response, [
    "true" => "Meeting types updated successfully!",
    "false" => $Error
  ]);

  //update meeting types status
} elseif (isset($_POST["UpdateMeetingTypeStatus"])) {
  $cmt_id = SECURE($_POST["cmt_id"], "d");
  $cmt_status = SECURE($_POST["UpdateMeetingTypeStatus"], "d");

  //update meeting types status in database table 'config_meeting_types'
  if ($cmt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update meeting types status in database table 'config_meeting_types'
  $Response = UPDATE_SQL("UPDATE config_meeting_types SET cmt_status='$status' WHERE cmt_id='$cmt_id'");
  RequestHandler($Response, [
    "true" => "Meeting Types status updated successfully!",
    "false" => "Unable to update meeting types status at the moment!"
  ]);

  //create note and remark type
} elseif (isset($_POST["SaveNoteRemarkTypeRecords"])) {
  $config_note_remarks_types = [
    "cnrt_name" => $_POST["cnrt_name"],
    "cnrt_status" => $_POST["cnrt_status"],
    "cnrt_created_at" => CURRENT_DATE_TIME,
    "cnrt_created_by" => LOGIN_UserId,
    "cnrt_updated_at" => CURRENT_DATE_TIME,
    "cnrt_updated_by" => LOGIN_UserId,
    "cnrt_purpose" => $_POST["cnrt_purpose"],
    "cnrt_desc" => $_POST["cnrt_desc"],
    "cnrt_code" => $_POST["cnrt_code"],
    "cnrt_shortname" => $_POST["cnrt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cnrt_name FROM config_note_remarks_types WHERE cnrt_name='" . $_POST['cnrt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_note_remarks_types", $config_note_remarks_types);
    $Error = "Unable to save note and remark type";
  } else {
    $Response = false;
    $Error = "Note and remark type already exists";
  }
  RequestHandler($Response, [
    "true" => "Note and remark type saved successfully!",
    "false" => $Error
  ]);

  //update note and remark type $cnrt_id
} elseif (isset($_POST["UpdateNoteAndRemarksRecords"])) {
  $cnrt_id = SECURE($_POST["cnrt_id"], "d");
  $config_note_remarks_types = [
    "cnrt_name" => $_POST["cnrt_name"],
    "cnrt_status" => $_POST["cnrt_status"],
    "cnrt_updated_at" => CURRENT_DATE_TIME,
    "cnrt_updated_by" => LOGIN_UserId,
    "cnrt_purpose" => $_POST["cnrt_purpose"],
    "cnrt_desc" => $_POST["cnrt_desc"],
    "cnrt_code" => $_POST["cnrt_code"],
    "cnrt_shortname" => $_POST["cnrt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cnrt_name FROM config_note_remarks_types WHERE cnrt_name='" . $_POST["cnrt_name"] . "' AND cnrt_id!='$cnrt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_note_remarks_types", $config_note_remarks_types, "cnrt_id='$cnrt_id'");
    $Error = "Unable to update note and remark type";
  } else {
    $Response = false;
    $Error = "Note and remark type already exists";
  }
  RequestHandler($Response, [
    "true" => "Note and remark type updated successfully!",
    "false" => $Error
  ]);

  //update note and remark type status
} elseif (isset($_POST["UpdateNoteAndRemarkStatus"])) {
  $cnrt_id = SECURE($_POST["cnrt_id"], "d");
  $cnrt_status = SECURE($_POST["UpdateNoteAndRemarkStatus"], "d");

  //update note and remark type status in database table 'config_note_remarks_types'
  if ($cnrt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update note and remark type status in database table 'config_note_remarks_types'
  $Response = UPDATE_SQL("UPDATE config_note_remarks_types SET cnrt_status='$status' WHERE cnrt_id='$cnrt_id'");
  RequestHandler($Response, [
    "true" => "Note and Remark type status updated successfully!",
    "false" => "Unable to update note and remark type status at the moment!"
  ]);

  //create reminder type records crt_
} elseif (isset($_POST["SaveReminderTypeRecords"])) {
  $config_reminder_types = [
    "crt_name" => $_POST["crt_name"],
    "crt_status" => $_POST["crt_status"],
    "crt_created_at" => CURRENT_DATE_TIME,
    "crt_created_by" => LOGIN_UserId,
    "crt_updated_at" => CURRENT_DATE_TIME,
    "crt_updated_by" => LOGIN_UserId,
    "crt_purpose" => $_POST["crt_purpose"],
    "crt_desc" => $_POST["crt_desc"],
    "crt_code" => $_POST["crt_code"],
    "crt_shortname" => $_POST["crt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT crt_name FROM config_reminder_types WHERE crt_name='" . $_POST['crt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_reminder_types", $config_reminder_types);
    $Error = "Unable to save reminder type";
  } else {
    $Response = false;
    $Error = "Reminder type already exists";
  }
  RequestHandler($Response, [
    "true" => "Reminder type saved successfully!",
    "false" => $Error
  ]);

  //update reminder type $crt_id
} elseif (isset($_POST["UpdateReminderTypeRecords"])) {
  $crt_id = SECURE($_POST["crt_id"], "d");
  $config_reminder_types = [
    "crt_name" => $_POST["crt_name"],
    "crt_status" => $_POST["crt_status"],
    "crt_updated_at" => CURRENT_DATE_TIME,
    "crt_updated_by" => LOGIN_UserId,
    "crt_purpose" => $_POST["crt_purpose"],
    "crt_desc" => $_POST["crt_desc"],
    "crt_code" => $_POST["crt_code"],
    "crt_shortname" => $_POST["crt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT crt_name FROM config_reminder_types WHERE crt_name='" . $_POST["crt_name"] . "' AND crt_id!='$crt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_reminder_types", $config_reminder_types, "crt_id='$crt_id'");
    $Error = "Unable to update reminder type";
  } else {
    $Response = false;
    $Error = "Reminder type already exists";
  }
  RequestHandler($Response, [
    "true" => "Reminder type updated successfully!",
    "false" => $Error
  ]);

  //update reminder type status
} elseif (isset($_POST["UpdateReminderTypeStatus"])) {
  $crt_id = SECURE($_POST["crt_id"], "d");
  $crt_status = SECURE($_POST["UpdateReminderTypeStatus"], "d");

  //update reminder type status in database table 'config_reminder_types'
  if ($crt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update reminder type status in database table 'config_reminder_types'
  $Response = UPDATE_SQL("UPDATE config_reminder_types SET crt_status='$status' WHERE crt_id='$crt_id'");
  RequestHandler($Response, [
    "true" => "Reminder type status updated successfully!",
    "false" => "Unable to update reminder type status at the moment!"
  ]);

  //create youtube video category name cyvt
} elseif (isset($_POST['SaveYoutubeVideoCategoryVideo'])) {
  $config_youtube_video_types = [
    "cyvt_name" => $_POST['cyvt_name'],
    "cyvt_status" => $_POST['cyvt_status'],
    "cyvt_created_at" => CURRENT_DATE_TIME,
    "cyvt_created_by" => LOGIN_UserId,
    "cyvt_updated_at" => CURRENT_DATE_TIME,
    "cyvt_updated_by" => LOGIN_UserId,
    "cyvt_purpose" => $_POST['cyvt_purpose'],
    "cyvt_desc" => $_POST['cyvt_desc'],
    "cyvt_code" => $_POST['cyvt_code'],
    "cyvt_shortname" => $_POST['cyvt_shortname']
  ];

  //check duplicates values
  $Check = CHECK("SELECT cyvt_name FROM config_youtube_video_types WHERE cyvt_name='" . $_POST['cyvt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_youtube_video_types", $config_youtube_video_types);
    $Error = "Unable to save YouTube video category name";
  } else {
    $Response = false;
    $Error = "YouTube video category name already exists";
  }
  RequestHandler($Response, [
    "true" => "YouTube video category name saved successfully!",
    "false" => $Error
  ]);

  //update youtube video category name $cyvt_id   
} elseif (isset($_POST["UpdateYoutubeVideoCategoryVideo"])) {
  $cyvt_id = SECURE($_POST["cyvt_id"], "d");
  $config_youtube_video_types = [
    "cyvt_name" => $_POST["cyvt_name"],
    "cyvt_status" => $_POST["cyvt_status"],
    "cyvt_updated_at" => CURRENT_DATE_TIME,
    "cyvt_updated_by" => LOGIN_UserId,
    "cyvt_purpose" => $_POST["cyvt_purpose"],
    "cyvt_desc" => $_POST["cyvt_desc"],
    "cyvt_code" => $_POST["cyvt_code"],
    "cyvt_shortname" => $_POST["cyvt_shortname"],
  ];

  //check duplicates values
  $Check = CHECK("SELECT cyvt_name FROM config_youtube_video_types WHERE cyvt_name='" . $_POST["cyvt_name"] . "' AND cyvt_id!='$cyvt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_youtube_video_types", $config_youtube_video_types, "cyvt_id='$cyvt_id'");
    $Error = "Unable to update YouTube video category name";
  } else {
    $Response = false;
    $Error = "YouTube video category name already exists";
  }
  RequestHandler($Response, [
    "true" => "YouTube video category name updated successfully!",
    "false" => $Error
  ]);

  //update youtube video category name status
} elseif (isset($_POST["UpdateYoutubeVideoCategoryStatus"])) {
  $cyvt_id = SECURE($_POST["cyvt_id"], "d");
  $cyvt_status = SECURE($_POST["UpdateYoutubeVideoCategoryStatus"], "d");

  //update youtube video category name status in database table 'config_youtube_video_types'
  if ($cyvt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update youtube video category name status in database table 'config_youtube_video_types'
  $Response = UPDATE_SQL("UPDATE config_youtube_video_types SET cyvt_status='$status' WHERE cyvt_id='$cyvt_id'");
  RequestHandler($Response, [
    "true" => "YouTube video category name status updated successfully!",
    "false" => "Unable to update YouTube video category name status at the moment!"
  ]);

  //update event types
} elseif (isset($_POST['SaveEventTypeRecords'])) {
  $config_events_types = [
    "cent_name" => $_POST["cent_name"],
    "cent_status" => $_POST["cent_status"],
    "cent_created_at" => CURRENT_DATE_TIME,
    "cent_created_by" => LOGIN_UserId,
    "cent_updated_at" => CURRENT_DATE_TIME,
    "cent_updated_by" => LOGIN_UserId,
    "cent_purpose" => $_POST["cent_purpose"],
    "cent_desc" => $_POST["cent_desc"],
    "cent_code" => $_POST["cent_code"],
    "cent_shortname" => $_POST["cent_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cent_name FROM config_events_types WHERE cent_name='" . $_POST['cent_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_events_types", $config_events_types);
    $Error = "Unable to save event type";
  } else {
    $Response = false;
    $Error = "Event type already exists";
  }
  RequestHandler($Response, [
    "true" => "Event type saved successfully!",
    "false" => $Error
  ]);

  //update event types $cent_id
} elseif (isset($_POST['UpdateEventTypeRecords'])) {
  $cent_id = SECURE($_POST["cent_id"], "d");
  $config_events_types = [
    "cent_name" => $_POST["cent_name"],
    "cent_status" => $_POST["cent_status"],
    "cent_updated_at" => CURRENT_DATE_TIME,
    "cent_updated_by" => LOGIN_UserId,
    "cent_purpose" => $_POST["cent_purpose"],
    "cent_desc" => $_POST["cent_desc"],
    "cent_code" => $_POST["cent_code"],
    "cent_shortname" => $_POST["cent_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cent_name FROM config_events_types WHERE cent_name='" . $_POST["cent_name"] . "' AND cent_id!='$cent_id'");
  if ($Check == null) {
    $Response = UPDATE("config_events_types", $config_events_types, "cent_id='$cent_id'");
    $Error = "Unable to update event type";
  } else {
    $Response = false;
    $Error = "Event type already exists";
  }
  RequestHandler($Response, [
    "true" => "Event type updated successfully!",
    "false" => $Error
  ]);

  //update event types status
} elseif (isset($_POST["UpdateEventsTypeRecordsStatus"])) {
  $cent_id = SECURE($_POST["cent_id"], "d");
  $cent_status = SECURE($_POST["UpdateEventsTypeRecordsStatus"], "d");

  //update event types status in database table 'config_events_types'
  if ($cent_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update event types status in database table 'config_events_types'
  $Response = UPDATE_SQL("UPDATE config_events_types SET cent_status='$status' WHERE cent_id='$cent_id'");
  RequestHandler($Response, [
    "true" => "Event type status updated successfully!",
    "false" => "Unable to update event type status at the moment!"
  ]);

  //create type of audit records
} elseif (isset($_POST['SaveAuditTypeRecords'])) {
  $config_audit_types = [
    "cadt_name" => $_POST["cadt_name"],
    "cadt_status" => $_POST["cadt_status"],
    "cadt_created_at" => CURRENT_DATE_TIME,
    "cadt_created_by" => LOGIN_UserId,
    "cadt_updated_at" => CURRENT_DATE_TIME,
    "cadt_updated_by" => LOGIN_UserId,
    "cadt_purpose" => $_POST["cadt_purpose"],
    "cadt_desc" => $_POST["cadt_desc"],
    "cadt_code" => $_POST["cadt_code"],
    "cadt_shortname" => $_POST["cadt_shortname"],
  ];

  //check duplicates values
  $Check = CHECK("SELECT cadt_name FROM config_audit_types WHERE cadt_name='" . $_POST['cadt_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_audit_types", $config_audit_types);
    $Error = "Unable to save audit type";
  } else {
    $Response = false;
    $Error = "Audit type already exists";
  }
  RequestHandler($Response, [
    "true" => "Audit type saved successfully!",
    "false" => $Error
  ]);

  //update type of audit records $cadt_id
} elseif (isset($_POST["UpdateAuditTypeRecords"])) {
  $cadt_id = SECURE($_POST["cadt_id"], "d");
  $config_audit_types = [
    "cadt_name" => $_POST["cadt_name"],
    "cadt_status" => $_POST["cadt_status"],
    "cadt_updated_at" => CURRENT_DATE_TIME,
    "cadt_updated_by" => LOGIN_UserId,
    "cadt_purpose" => $_POST["cadt_purpose"],
    "cadt_desc" => $_POST["cadt_desc"],
    "cadt_code" => $_POST["cadt_code"],
    "cadt_shortname" => $_POST["cadt_shortname"]
  ];

  //check duplicates values
  $Check = CHECK("SELECT cadt_name FROM config_audit_types WHERE cadt_name='" . $_POST["cadt_name"] . "' AND cadt_id!='$cadt_id'");
  if ($Check == null) {
    $Response = UPDATE("config_audit_types", $config_audit_types, "cadt_id='$cadt_id'");
    $Error = "Unable to update audit type";
  } else {
    $Response = false;
    $Error = "Audit type already exists";
  }
  RequestHandler($Response, [
    "true" => "Audit type updated successfully!",
    "false" => $Error
  ]);

  //update type of audit records status
} elseif (isset($_POST["UpdateAuditTypeRecordsStatus"])) {
  $cadt_id = SECURE($_POST["cadt_id"], "d");
  $cadt_status = SECURE($_POST["UpdateAuditTypeRecordsStatus"], "d");

  //update type of audit records status in database table 'config_audit_types'
  if ($cadt_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update type of audit records status in database table 'config_audit_types'
  $Response = UPDATE_SQL("UPDATE config_audit_types SET cadt_status='$status' WHERE cadt_id='$cadt_id'");
  RequestHandler($Response, [
    "true" => "Audit type status updated successfully!",
    "false" => "Unable to update audit type status at the moment!"
  ]);

  //create TDS Rate records
} elseif (isset($_POST["AddTDSRateRecords"])) {

  $config_tds_rates_slabs = [
    "ctrs_name" => $_POST["ctrs_name"],
    "ctrs_code" => $_POST["ctrs_code"],
    "ctrs_nature_of_payments" => $_POST["ctrs_nature_of_payments"],
    "ctrs_purpose" => $_POST["ctrs_purpose"],
    "ctrs_threshold_limit" => $_POST["ctrs_threshold_limit"],
    "ctrs_rates" => $_POST["ctrs_rates"],
    "ctrs_applicable_to" => $_POST["ctrs_applicable_to"],
    "ctrs_deductor" => $_POST["ctrs_deductor"],
    "ctrs_finanical_year_id" => $_POST["ctrs_finanical_year_id"],
    "ctrs_detailed_desc" => $_POST["ctrs_detailed_desc"],
    "ctrs_status" => $_POST["ctrs_status"],
    "ctrs_created_by" => LOGIN_UserId,
    "ctrs_created_at" => CURRENT_DATE_TIME,
    "ctrs_updated_by" => LOGIN_UserId,
    "ctrs_updated_at" => CURRENT_DATE_TIME,
  ];

  //check duplicates values
  $Check = CHECK("SELECT ctrs_name FROM config_tds_rates_slabs WHERE ctrs_name='" . $_POST['ctrs_name'] . "'");
  if ($Check == null) {
    $Response = INSERT("config_tds_rates_slabs", $config_tds_rates_slabs);
    $Error = "Unable to save TDS rate";
  } else {
    $Response = false;
    $Error = "TDS rate already exists";
  }
  RequestHandler($Response, [
    "true" => "TDS rate saved successfully!",
    "false" => $Error
  ]);

  //update TDS Rate records $ctrs_id
} elseif (isset($_POST["UpdateTDSRateRecords"])) {
  $ctrs_id = SECURE($_POST["ctrs_id"], "d");

  $config_tds_rates_slabs = [
    "ctrs_name" => $_POST["ctrs_name"],
    "ctrs_code" => $_POST["ctrs_code"],
    "ctrs_nature_of_payments" => $_POST["ctrs_nature_of_payments"],
    "ctrs_purpose" => $_POST["ctrs_purpose"],
    "ctrs_threshold_limit" => $_POST["ctrs_threshold_limit"],
    "ctrs_rates" => $_POST["ctrs_rates"],
    "ctrs_applicable_to" => $_POST["ctrs_applicable_to"],
    "ctrs_deductor" => $_POST["ctrs_deductor"],
    "ctrs_finanical_year_id" => $_POST["ctrs_finanical_year_id"],
    "ctrs_detailed_desc" => $_POST["ctrs_detailed_desc"],
    "ctrs_status" => $_POST["ctrs_status"],
    "ctrs_updated_by" => LOGIN_UserId,
    "ctrs_updated_at" => CURRENT_DATE_TIME,
  ];

  //check duplicates values
  $Check = CHECK("SELECT ctrs_name FROM config_tds_rates_slabs WHERE ctrs_name='" . $_POST["ctrs_name"] . "' AND ctrs_id!='$ctrs_id'");
  if ($Check == null) {
    $Response = UPDATE("config_tds_rates_slabs", $config_tds_rates_slabs, "ctrs_id='$ctrs_id'");
    $Error = "Unable to update TDS rate";
  } else {
    $Response = false;
    $Error = "TDS rate already exists";
  }
  RequestHandler($Response, [
    "true" => "TDS rate updated successfully!",
    "false" => $Error
  ]);

  //update TDS Rate records status
} elseif (isset($_POST["UpdateTDSRateStatus"])) {
  $ctrs_id = SECURE($_POST["ctrs_id"], "d");
  $ctrs_status = SECURE($_POST["UpdateTDSRateStatus"], "d");

  //update TDS Rate records status in database table 'config_tds_rates_slabs'
  if ($ctrs_status == 1) {
    $status = 2;
  } else {
    $status = 1;
  }

  //update TDS Rate records status in database table 'config_tds_rates_slabs'
  $Response = UPDATE_SQL("UPDATE config_tds_rates_slabs SET ctrs_status='$status' WHERE ctrs_id='$ctrs_id'");
  RequestHandler($Response, [
    "true" => "TDS rate status updated successfully!",
    "false" => "Unable to update TDS rate status at the moment!"
  ]);
}
