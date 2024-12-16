<?php

//expanse category
DEFINE(
    "EXPANSE_CATEGORIES",
    array(
        "RECHARGE & BILLINGS",
        "TRANSPORTATION",
        "MARKETING & ADVERTISING",
        "OFFICE EXPANSE",
        "DOMAIN, HOSTING & IT SERVICES",
        "SALARY & STIPENDS",
        "EVENT & FUNCTIONS",
        "OTHERS"
    )
);

//document types
define(
    "DOC_NAME",
    array(
        "PAN CARD",
        "ADDHAAR CARD",
        "RATION CARD",
        "PASSPORT",
        "BIRTH CERTIFICATE",
        "DRIVING LISCENECE",
        "VEHICLE REGISTRATION CERTIFICATE",
        "VOTAR CARD",
        "PASSBOOK",
        "MARKSHEETS",
        "OTHERS"
    )
);

DEFINE(
    "CALL_STATUS",
    array(
        "FRESH",
        "RINGING",
        "OUT OF REACH",
        "SWITCH OFF",
        "INVALID_PHONE_NUMBER",
        "BUSY",
        "NOT INTERESTED",
        "FEEDBACK",
        "FollowUp"
    )
);

//bank transfer type
define("TRANSFER_TYPE", array("NEFT", "IMPS", "RTGS"));

//bank transfer status 
define("TRANSFER_STATUS", array("Paid", "Pending", "Failed"));

//cheque status
define("CHEQUE_STATUS", array("Issue", "In Bank", "Paid", "Bounce"));

//wallet and upi app/provider
define("WALLER_UPI_APP", array("Google Pay", "Phonepay", "Paytm", "Mobikwik", "AmazonPay", "Others"));

//custom transaction id
define("TXN_ID", "TXN-" . date("Y") . "" . date("Y", strtotime("+1 year")) . "" . date("md") . "" . rand(11111, 999999));

//transaction modes
define("TXN_MODE", array("CASH", "ONLINE_TRANSFER", "WALLET_UPI_OTHERS", "CHEQUE_OR_DD"));

//all txn status
define("PAID_UNPAID_STATUS", array("PAID", "UN-PAID"));
