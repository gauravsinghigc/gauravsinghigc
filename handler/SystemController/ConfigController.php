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
}
