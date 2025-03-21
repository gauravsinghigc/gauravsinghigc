<?php
require __DIR__ . "/../ModuleController.php";

if (isset($_POST['SaveNewEnquiryTypes'])) {
    $config_enquiry_types = [
        "cet_name" => $_POST['cet_name'],
        "cet_status" => $_POST['cet_status'],
        "cet_icon" => $_POST['cet_icon'],
        "cet_created_at" => CURRENT_DATE_TIME,
        "cet_created_by" => LOGIN_UserId,
        "cet_updated_at" => CURRENT_DATE_TIME,
        "cet_updated_by" => LOGIN_UserId,
        "cet_user_id" => LOGIN_UserId
    ];
    $Response = INSERT("config_enquiry_types", $config_enquiry_types);
    RESPONSE($Response, "New enquiry type has been added successfully!", "Unable to add enquiry type!");

    //update enquiry details
} elseif (isset($_POST['UpdateEnquiryTypes'])) {
    $cet_id = SECURE($_POST['cet_id'], "d");

    $config_enquiry_types = [
        "cet_name" => $_POST['cet_name'],
        "cet_status" => $_POST['cet_status'],
        "cet_icon" => $_POST['cet_icon'],
        "cet_updated_at" => CURRENT_DATE_TIME,
        "cet_updated_by" => LOGIN_UserId,
    ];
    $Response = UPDATE("config_enquiry_types", $config_enquiry_types, "cet_id='$cet_id'");
    RESPONSE($Response, "Enquiry type has been updated successfully!", "Unable to update enquiry type!");

    //remove enquiry record
} else if (isset($_GET['remove_enquiry_type_records'])) {
    $cet_id = SECURE($_GET['control_id'], "d");
    $Response = DeleteReqHandler("remove_enquiry_type_records", [
        "config_enquiry_types" => "cet_id='$cet_id'"
    ], [
        "true" => "Enquiry Record removed successfully!",
        "false" => "Unable to remove enquiry record at the moment!"
    ]);
    RESPONSE($Response, "Enquiry type has been removed successfully!", "Unable to remove enquiry type!");

    //insert enquiry flow chart and steps
} elseif (isset($_POST['SaveNewEnquiryFlowStep'])) {
    $config_enquiry_flow = [
        "cef_name" => $_POST['cef_name'],
        "cef_short_name" => LowerCase(RemoveAllSpecialCharacters($_POST['cef_name'])),
        "cef_status" => $_POST['cef_status'],
        "cef_sort_order" => $_POST['cef_sort_order'],
        "cef_created_by" => LOGIN_UserId,
        "cef_updated_by" => LOGIN_UserId,
        "cef_created_at" => CURRENT_DATE_TIME,
        "cef_updated_at" => CURRENT_DATE_TIME,
        "cef_user_id" => LOGIN_UserId
    ];

    //check short name is not exists
    $Check = CHECK("SELECT cef_short_name FROM config_enquiry_flow WHERE cef_short_name='" . LowerCase(RemoveAllSpecialCharacters($_POST['cef_name'])) . "'");
    if ($Check == null) {
        $Response = INSERT("config_enquiry_flow", $config_enquiry_flow);
        RESPONSE($Response, "New enquiry flow step has been added successfully!", "Unable to add enquiry flow step!");
    } else {
        RESPONSE(false, "Short name already exists!", "Short name already exists!");
    }

    //update enquiry flow chart and steps
} elseif (isset($_POST['UpdateEnquiryFlowStep'])) {
    $cef_id = SECURE($_POST['cef_id'], "d");
    $config_enquiry_flow = [
        "cef_name" => $_POST['cef_name'],
        "cef_short_name" => LowerCase(RemoveAllSpecialCharacters($_POST['cef_name'])),
        "cef_status" => $_POST['cef_status'],
        "cef_sort_order" => $_POST['cef_sort_order'],
        "cef_updated_by" => LOGIN_UserId,
        "cef_updated_at" => CURRENT_DATE_TIME,
    ];
    //check existing record via short name
    $Check = CHECK("SELECT cef_short_name FROM config_enquiry_flow WHERE cef_short_name='" . LowerCase(RemoveAllSpecialCharacters($_POST['cef_name'])) . "' AND cef_id!='$cef_id'");
    if ($Check == null) {
        $Response = UPDATE("config_enquiry_flow", $config_enquiry_flow, "cef_id='$cef_id'");
        RESPONSE($Response, "Enquiry flow step has been updated successfully!", "Unable to update enquiry flow step!");
    } else {
        RESPONSE(false, "Short name already exists!", "Short name already exists!");
    }

    //remove records
} elseif (isset($_GET['remove_enquiry_flow_chart_record'])) {
    $cef_id = SECURE($_GET['control_id'], "d");
    $Response = DeleteReqHandler("remove_enquiry_flow_chart_record", [
        "config_enquiry_flow" => "cef_id='$cef_id'"
    ], [
        "true" => "Enquiry flow record removed successfully!",
        "false" => "Unable to remove enquiry flow record at the moment!"
    ]);
    RESPONSE($Response, "Enquiry flow step has been removed successfully!", "Unable to remove enquiry flow step!");
}
