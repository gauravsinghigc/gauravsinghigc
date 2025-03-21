<?php
require __DIR__ . "/../ModuleController.php";

if (isset($_POST['SavePrimaryDetailOfVendors'])) {
    //vendor details
    $vendor = [
        "vendor_name" => $_POST['vendor_name'],
        "vendor_type_id" => $_POST['vendor_type_id'],
        "vendor_biz_name" => $_POST['vendor_biz_name'],
        "vendor_phone" =>  $_POST['vendor_phone'],
        "vendor_phone_code" => $_POST['PhoneCode'],
        "vendor_email" => $_POST['vendor_email'],
        "vendor_created_at" => CURRENT_DATE_TIME,
        "vendor_created_by" => LOGIN_UserId,
        "vendor_updated_at" => CURRENT_DATE_TIME,
        "vendor_updated_by" => LOGIN_UserId,
        "vendor_status" => $_POST['vendor_status'],
        "vendor_logo" => UPLOAD_FILES("../storage/vendor/dp", null, $_POST['vendor_biz_name'], "vendor_logo")
    ];

    //check phone number
    $CheckPhoneNumberExitsOrNot = CHECK("SELECT vendor_phone FROM vendor where vendor_phone='" . $_POST['vendor_phone'] . "'");
    if ($CheckPhoneNumberExitsOrNot == null) {

        //check email id
        $CheckEmailId = CHECK("SELECT vendor_email FROM vendor where vendor_email='" . $_POST['vendor_email'] . "'");
        if ($CheckEmailId == null) {

            //insert vendor details
            $Response = INSERT("vendor", $vendor);

            //check insert status
            if ($Response == true) {

                //VendorId
                $vendor_id = FETCH("SELECT vendor_id FROM vendor where vendor_email='" . $_POST['vendor_email'] . "' and vendor_phone='" . $_POST['vendor_phone'] . "'", "vendor_id");

                //vendor address
                $vendor_address = [
                    "vendor_main_id" => $vendor_id,
                    "vendor_address_gst_no" => $_POST['vendor_address_gst_no'],
                    "vendor_address_type" => $_POST['vendor_address_type'],
                    "vendor_address" => $_POST['vendor_address'],
                    "vendor_area_locality" => $_POST['vendor_area_locality'],
                    "vendor_city" => $_POST['vendor_city'],
                    "vendor_state" => $_POST['vendor_state'],
                    "vendor_country" => $_POST['vendor_country'],
                    "vendor_pincode" => $_POST['vendor_pincode'],
                    "vendor_address_created_by" => LOGIN_UserId,
                    "vendor_address_updated_by" => LOGIN_UserId,
                    "vendor_address_created_at" => CURRENT_DATE_TIME,
                    "vendor_address_updated_at" => CURRENT_DATE_TIME,
                    "vendor_address_status" => 1
                ];
                //insert vendor address
                $Response = INSERT("vendor_address", $vendor_address);

                //save vendor website, social media and much 
                if (isset($_POST['vendor_website_url'])) {
                    if ($_POST['vendor_website_url'] != null || $_POST['vendor_website_url'] != "") {
                        $vendor_urls = [
                            "vendor_url_main_id" => $vendor_id,
                            "vendor_url_name" => "WEBSITE",
                            "vendor_url" => $_POST['vendor_website_url'],
                            "vendor_url_created_at" => CURRENT_DATE_TIME,
                            "vendor_url_updated_at" => CURRENT_DATE_TIME,
                            "vendor_url_created_by" => LOGIN_UserId,
                            "vendor_url_updated_by" => LOGIN_UserId,
                            "vendor_url_status" => 1
                        ];
                        //insert vendor website
                        $Response = INSERT("vendor_urls", $vendor_urls);
                    }
                }

                //save vendor vendor_facebook_url
                if (isset($_POST['vendor_facebook_url'])) {
                    if ($_POST['vendor_facebook_url'] != null || $_POST['vendor_facebook_url'] != "") {
                        $vendor_social_media = [
                            "vendor_url_main_id" => $vendor_id,
                            "vendor_url_name" => "FACEBOOK",
                            "vendor_url" => $_POST['vendor_facebook_url'],
                            "vendor_url_created_at" => CURRENT_DATE_TIME,
                            "vendor_url_updated_at" => CURRENT_DATE_TIME,
                            "vendor_url_created_by" => LOGIN_UserId,
                            "vendor_url_updated_by" => LOGIN_UserId,
                            "vendor_url_status" => 1
                        ];
                        //insert vendor social media
                        $Response = INSERT("vendor_urls", $vendor_social_media);
                    }
                }

                //save vendor_instagram_url
                if (isset($_POST['vendor_instagram_url'])) {
                    if ($_POST['vendor_instagram_url'] != null || $_POST['vendor_instagram_url'] != "") {
                        $vendor_social_media = [
                            "vendor_url_main_id" => $vendor_id,
                            "vendor_url_name" => "INSTAGRAM",
                            "vendor_url" => $_POST['vendor_instagram_url'],
                            "vendor_url_created_at" => CURRENT_DATE_TIME,
                            "vendor_url_updated_at" => CURRENT_DATE_TIME,
                            "vendor_url_created_by" => LOGIN_UserId,
                            "vendor_url_updated_by" => LOGIN_UserId,
                            "vendor_url_status" => 1
                        ];
                        //insert vendor social media
                        $Response = INSERT("vendor_urls", $vendor_social_media);
                    }
                }

                //save vendor_youtube_url
                if (isset($_POST['vendor_youtube_url'])) {
                    if ($_POST['vendor_youtube_url'] != null || $_POST['vendor_youtube_url'] != "") {
                        $vendor_social_media = [
                            "vendor_url_main_id" => $vendor_id,
                            "vendor_url_name" => "YOUTUBE",
                            "vendor_url" => $_POST['vendor_youtube_url'],
                            "vendor_url_created_at" => CURRENT_DATE_TIME,
                            "vendor_url_updated_at" => CURRENT_DATE_TIME,
                            "vendor_url_created_by" => LOGIN_UserId,
                            "vendor_url_updated_by" => LOGIN_UserId,
                            "vendor_url_status" => 1
                        ];
                        //insert vendor social media
                        $Response = INSERT("vendor_urls", $vendor_social_media);
                    }
                }

                //Check More details option are enabled or not
                if (isset($_POST['MoreDetails'])) {
                    if ($_POST['MoreDetails'] == "true") {
                        $access_url = APP_URL . "/vendors/details/?vid=" . SECURE($vendor_id, "e");
                    }
                }

                $Error = "Unable to Add other details at the moment!";
            } else {
                $Error = "Unable to save vendor";
            }
        } else {
            $Response = false;
            $Error = "Email-Id already exists";
        }
    } else {
        $Response = false;
        $Error = "Phone number already exists";
    }
    RequestHandler($Response, [
        "true" => "Vendor saved successfully!",
        "false" => $Error
    ]);

    //update vendor status
} elseif (isset($_POST['UpdateVendorStatus'])) {
    $vendor_id = SECURE($_POST['vendor_id'], "d");
    $status = SECURE($_POST['UpdateVendorStatus'], "d");

    if ($status == 1) {
        $status = 2;
    } else {
        $status = 1;
    }
    $Response = UPDATE("vendor", ["vendor_status" => $status], "vendor_id = " . $vendor_id);
    RequestHandler($Response, [
        "true" => "Vendor status updated successfully!",
        "false" => "Unable to update vendor status"
    ]);
}
