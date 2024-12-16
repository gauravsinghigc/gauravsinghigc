<?php

//app constant
define("APP_URL", DOMAIN . "/app");
define("STORAGE_URL", DOMAIN . "/storage");
define("STORAGE_URL_D", DOMAIN . "/storage/default");
define("STORAGE_URL_U", DOMAIN . "/storage/users");
define("AUTH_URL", DOMAIN . "/auth");
define("CONTROLLER", DOMAIN . "/handler/ModuleController.php");
define("ASSETS_URL", DOMAIN . "/assets");

//Company Profile
define("APP_NAME", CONFIG("APP_NAME"));
define("APP_LOGO", STORAGE_URL . "/app/img/logo/" . CONFIG("APP_LOGO"));
define("WEBSITE_LOGO_SQ", STORAGE_URL . "/app/img/logo/" . CONFIG("WEBSITE_LOGO_SQ"));
define("WEBSITE_LOGO_REC", STORAGE_URL . "/app/img/logo/" . CONFIG("WEBSITE_LOGO_REC"));
define("FAVICON_ICON", STORAGE_URL . "/app/img/logo/" . CONFIG("FAVICON_ICON"));
define("LOGIN_BG_IMAGE", STORAGE_URL . "/app/img/bg/" . CONFIG("LOGIN_BG_IMAGE"));
define("TAGLINE", CONFIG("TAGLINE"));
define("OWNER_NAME", CONFIG("OWNER_NAME"));
define("PRIMARY_PHONE", CONFIG("PRIMARY_PHONE"));
define("PRIMARY_EMAIL", CONFIG("PRIMARY_EMAIL"));
define("SHORT_DESCRIPTION", CONFIG("SHORT_DESCRIPTION"));
define("PRIMARY_ADDRESS", CONFIG("PRIMARY_ADDRESS"));
define("PRIMARY_AREA", CONFIG("PRIMARY_AREA"));
define("PRIMARY_CITY", CONFIG("PRIMARY_CITY"));
define("PRIMARY_STATE", CONFIG("PRIMARY_STATE"));
define("PRIMARY_PINCODE", CONFIG("PRIMARY_PINCODE"));
define("PRIMARY_COUNTRY", CONFIG("PRIMARY_COUNTRY"));
define("PRIMARY_MAP_LOCATION_LINK", CONFIG("PRIMARY_MAP_LOCATION_LINK"));
define("PRIMARY_GST", CONFIG("GST_NO"));
define("COMPANY_TYPE", CONFIG("COMPANY_TYPE"));
define("FINANCIAL_YEAR", CONFIG("FINANCIAL_YEAR"));
define("GST_NO", CONFIG("GST_NO"));
define("APP_THEME", CONFIG("APP_THEME"));

//mail id's setups
define("SENDER_MAIL_ID", CONFIG("SENDER_MAIL_ID"));
define("RECEIVER_MAIL", CONFIG("RECEIVER_MAIL"));
define("REPLY_TO", CONFIG("REPLY_TO"));
define("SUPPORT_MAIL", CONFIG("SUPPORT_MAIL"));
define("ENQUIRY_MAIL", CONFIG("ENQUIRY_MAIL"));
define("ADMIN_MAIL", CONFIG("ADMIN_MAIL"));


//API keys, 3rd party variables and add-on
define("SMS_API_KEY", CONFIG("SMS_API_KEY"));

//downloadable & add-on links
define("DOWNLOAD_ANDROID_APP_LINK", CONFIG("DOWNLOAD_ANDROID_APP_LINK"));
define("DOWNLOAD_IOS_APP_LINK", CONFIG("DOWNLOAD_IOS_APP_LINK"));
define("DOWNLOAD_BROCHER_LINK", CONFIG("DOWNLOAD_BROCHER_LINK"));

//Controll activity or die activities, function 
define("CONTROL_WORK_ENV", CONFIG("CONTROL_WORK_ENV"));
define("CONTROL_SMS", CONFIG("CONTROL_SMS"));
define("CONTROL_MAILS", CONFIG("CONTROL_MAILS"));
define("CONTROL_APP_LOGS", CONFIG("CONTROL_APP_LOGS"));
define("WEBSITE", CONFIG("WEBSITE"));
define("APP", CONFIG("APP"));

//payment gateway configurations
define("PG_OPTIONS", array("RAZORAPAY", "PAYTM"));
define("ONLINE_PAYMENT_OPTION", CONFIG("ONLINE_PAYMENT_OPTION"));
define("PG_MODE", CONFIG("PG_MODE"));
define("PG_PROVIDER", CONFIG("PG_PROVIDER"));
define("MERCHENT_ID", CONFIG("MERCHENT_ID"));
define("MERCHANT_KEY", CONFIG("MERCHANT_KEY"));
define("MAX_ORDER_QTY", CONFIG("MAX_ORDER_QTY"));
define("MIN_ORDER_QTY", CONFIG("MIN_ORDER_QTY"));


//default variables
define("DEFAULT_USER_ICON", STORAGE_URL_D . "/default/default.png");

//configs constants
$config_array = [
    "GOOGLE_MAP_API",
    "MINIMUM_ATTANDANCE_RANGE",
    "OFFICE_START_TIME",
    "OFFICE_MAX_START_TIME",
    "OFFICE_HALF_DAY_ALLOWED",
    "MAXIMUM_ALLOWED_LATE_CHECK_IN",
    "OFFICE_LUNCH_START_TIME",
    "OFFICE_LUNCH_TIME_IN_MINUTES",
    "OFFICE_END_TIME",
    "SHORT_LEAVE_MAX_TIME",
    "WORKING_DAYS_IN_MONTH",
    "MAXIMUM_SHORT_LEAVE_IN_MONTH",
    "DEDUCTION_AMOUNT_ON_PER_LATE",
    "EMP_CODE"
];
define("CONFIG_CONSTANTS", $config_array);

//app constants
define("GOOGLE_MAP_API", "AIzaSyC2Xh8p7kp8B4VZWFonkjVvwfwmPT0A_Hw");
define("MINIMUM_ATTANDANCE_RANGE", CONFIG("MINIMUM_ATTANDANCE_RANGE"));
define("OFFICE_START_TIME", CONFIG("OFFICE_START_TIME"));
define("OFFICE_MAX_START_TIME", CONFIG("OFFICE_MAX_START_TIME"));
define("OFFICE_HALF_DAY_ALLOWED", CONFIG("OFFICE_HALF_DAY_ALLOWED"));
define("MAXIMUM_ALLOWED_LATE_CHECK_IN", CONFIG("MAXIMUM_ALLOWED_LATE_CHECK_IN"));
define("OFFICE_LUNCH_START_TIME", CONFIG("OFFICE_LUNCH_START_TIME"));
define("OFFICE_END_TIME", CONFIG("OFFICE_END_TIME"));
define("SHORT_LEAVE_MAX_TIME", CONFIG("SHORT_LEAVE_MAX_TIME"));
define("AUTO_MONTHLY_PAYROLL_COSING_DATE", CONFIG("AUTO_MONTHLY_PAYROLL_COSING_DATE"));
define("MAXIMUM_SHORT_LEAVE_IN_MONTH", CONFIG("MAXIMUM_SHORT_LEAVE_IN_MONTH"));
define("DEDUCTION_AMOUNT_ON_PER_LATE", CONFIG("DEDUCTION_AMOUNT_ON_PER_LATE"));
define("PAYROLL_REF_NO", "#PRN" . DATE('dmy'));
define("DEFAULT_RECORD_LISTING",  CONFIG("DEFAULT_RECORD_LISTING"));
define("EMP_CODE",  CONFIG("EMP_CODE"));

//message variables
define("CONTROL_NOTIFICATION", CONFIG("CONTROL_NOTIFICATION"));
define("CONTROL_MSG_DISPLAY_TIME", CONFIG("CONTROL_MSG_DISPLAY_TIME"));
define("CONTROL_NOTIFICATION_SOUND", CONFIG("CONTROL_NOTIFICATION_SOUND"));

define("AUTO_GENERATED_REF_NO", DATE("d/m/y/") . rand(000000, 999999));

if (CONFIG("WORKING_DAYS_IN_MONTH") == 0) {
    $desiredMonth = date("m"); // August, for example
    $desiredYear = date("Y"); // Year of the desired month

    $numberOfDays = cal_days_in_month(CAL_GREGORIAN, $desiredMonth, $desiredYear);
    $WorkingDaysInMonths = $numberOfDays;
} else {
    $WorkingDaysInMonths = CONFIG("WORKING_DAYS_IN_MONTH");
}

define("WORKING_DAYS_IN_MONTH", $WorkingDaysInMonths);

//image varibales
$MAIN_LOGO = APP_LOGO;
define("MAIN_LOGO", $MAIN_LOGO);
$ComingSoonImage = STORAGE_URL_D . "/tool-img/coming-soon.gif";
$DEVELOPED_BY = DEVELOPED_BY;
$CommonUserImage = "default/tool-img/user..png";

//constant values
define("ActionDeleteImage", STORAGE_URL_D . "/tool-img/failed.gif");
define("ActionDeleteTitle", "Confirm Delete?");
define("ActionDeleteMessage", "Are you sure you want to delete this? This action cannot be undone.");
define("ActionDeleteCancel", "Cancel");
define("ActionDeleteConfirm", "Confirm");

//other common variables
//app login page
$LoginPageName = "Login";
$LoginHeading = $LoginPageName . " into " . APP_NAME;

//app login page 
$AdminLoginPageString = "Login into " . APP_NAME . " Admin";
$AdminForgetPageString = "Forget Password";
$AdminVerifyPageString = "Verify Your Account";
$AdminForgetPassText = "Please Enter your registered mail id, we will verify your account first then you are to reset your password for your account";
$AdminVerifyPassText = "Enter OTP sent to your registered mail-id";
$AdminResetPageString = "Reset Password";
