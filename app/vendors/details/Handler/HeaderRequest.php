<?php
//store vendor id in session and for view prospect
if (isset($_GET['vid'])) {
    $REQ_VendorId = SECURE($_GET['vid'], "d");
    $_SESSION['VENDOR_ID'] = $REQ_VendorId;
} else {
    $REQ_VendorId = $_SESSION['VENDOR_ID'];
}
$VendorSQL = "SELECT * FROM vendor where vendor_id='$REQ_VendorId'";
$VendorURLSQL = "SELECT * FROM vendor_urls where vendor_url_main_id='$REQ_VendorId'";
$VendorAddressSQL = "SELECT * FROM vendor_address where vendor_main_id='$REQ_VendorId'";
$VendorOtherContactsSQL = "SELECT * FROM vendor_contact_persons where vcp_main_vendor_id='$REQ_VendorId'";
$VendorReviewSQL = "SELECT * FROM vendor_reviews where vendor_main_id='$REQ_VendorId'";

//check vendor view modules or requesting fresh module for entry or update
if (isset($_GET['view'])) {
    $_SESSION['VIEW_MODULE_FOR_VENDOR'] = $_GET['view'];
} elseif (isset($_GET['vid'])) {
    $_SESSION['VIEW_MODULE_FOR_VENDOR'] = "v_dashboard";
} else {
    if (isset($_SESSION['VIEW_MODULE_FOR_VENDOR'])) {
        if (isset($_GET['view'])) {
            $_SESSION['VIEW_MODULE_FOR_VENDOR'] = $_GET['view'];
        } else {
            $_SESSION['VIEW_MODULE_FOR_VENDOR'] = $_SESSION['VIEW_MODULE_FOR_VENDOR'];
        }
    } else {
        $_SESSION['VIEW_MODULE_FOR_VENDOR'] = "v_dashboard";
    }
}

$SelectedDashView = ReturnSessionalValues("dash_view", "RECENT_DASH_VIEW", "contracts");

$ModuleViewName = VENDOR_MENUS["" . $_SESSION['VIEW_MODULE_FOR_VENDOR'] . ""]['name'];
$ModuleViewIcon = VENDOR_MENUS["" . $_SESSION['VIEW_MODULE_FOR_VENDOR'] . ""]['icon'];
$ModuleView = VENDOR_MENUS["" . $_SESSION['VIEW_MODULE_FOR_VENDOR'] . ""]['module'];
