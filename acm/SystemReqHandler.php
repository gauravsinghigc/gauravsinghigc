<?php

//sent response to submitted request url
if (isset($_REQUEST['access_url']) == null) {
    $UrlReqeust = "Failed";
    $access_url = "NA";
    $FormRequestor = "Un-Authorized Submission!";
    $FormValidator = "Invalid Form";
    echo "
    <section style='width:80%;margin:1% auto;text-align:center;color:red;border-radius:1rem;padding:0.2rem;padding-bottom:1rem;padding-top:0px;border-style:dashed;border-width:2px;border-color:red;'>
    <h4 style='color:red;background-color:black;padding:1rem; border-radius:1rem; font-family: monospace;font-size: 1.5rem;margin-top:0.2rem;margin-bottom:0.2rem;'>ACCESS DENIED</h4>
    <p style='color:red;font-family: monospace;font-size: 0.7rem;'>
    Your access has been denied. Please ensure that you have the necessary permissions to access this resource. If you believe this is an error, contact your administrator at " . DEVELOPER_SUPPORT_MAIL_ID . "
    </p><br>
<p style='color:red;text-align:left;padding-left;1rem;font-family: monospace;font-size: 0.8rem;'>
 <span>
 <b>Checking Submission details:</b></span><br>
        --- Controller Handler: <span><b>Ok</b></span></span><br>
    <span>--- Form Request : <span><b>$FormRequestor</b></span></span><br>
    <span>--- Form Validation : <span><b>$FormValidator</b></span></span><br>
    <span>--- Request URL : <span><b>$UrlReqeust</b></span> <br>
        --- URL : <b>$access_url</b></span><br>
        --- Database Status: <span><b>$DBStatus</b></span></span><br>
        --- Database Connection : <span><b>$DBStatus</b></span></span><br>
        --- <span>Sender Device Details: <b>" . SECURE(VALIDATOR_REQ, "d") . "</b></span>
    </p>
<hr style='margin-bottom:2rem;'>
    <a href='../index.php' style='color:black;font-family: monospace;font-size: 0.8rem;margin-top:2rem;'>< Back to Home</a><br><br><br>
    </section>";
    die();
} else {
    echo "
    <section style='width:80%;margin:1% auto;text-align:center;border-radius:1rem;padding:0.2rem;padding-top:0px;padding-bottom:1rem;border-style:dashed;border-width:2px;border-color:green;'>
    <h4 style='color:green;background-color:black;padding:1rem; border-radius:1rem; font-family: monospace;font-size: 1.5rem;margin-top:0.2rem;margin-bottom:0.2rem;'>ACCESS GRANTED</h4>
      <p style='color:green;font-family: monospace;font-size: 0.7rem;'>
    Your access has been granted. Welcome! You now have the necessary permissions to access this resource. If you encounter any issues, please contact support at  " . DEVELOPER_SUPPORT_MAIL_ID . "
    </p><br>
    
    ";
    $access_url = SECURE($_REQUEST['access_url'], "d");
    $UrlReqeust = "Ok";
}


//validate submittion requests
if (FORM_REQUESTOR != null) {
    $FormRequestor = "Ok";
    if (FORM_REQUESTOR == SECURE(VALIDATOR_REQ, "e")) {
        echo "<h1>Unable to Validate Form Request at the Moment</h1>
 <p>Please check submitted form request. All Request must be PASSED out via form requestor & validator.</p>
 <a href='../index.php'>Back to Home</a><br><br><br>";
        $FormValidator = "Failed";
    } else {
        $FormValidator = "Ok";
    }
} else {
    $FormRequestor = "Failed";
    $FormValidator = "Invalid";
}
?>

<head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Blinker&display=swap');

        body,
        span {
            font-family: 'Blinker', sans-serif !important;
            letter-spacing: 1px;
        }
    </style>
</head>

<body class="bg-white" style="font-size: 0.7rem !important;font-family: monospace;font-weight: 500;padding:0rem;background-color:white !important;">
    <p style='text-align:left;margin-left:1rem;'>
        <span>------- Start Controller --------</span><br>
        <span><b>Checking submitted details:</b></span><br>
        <span><b style="color:red;font-size:13px;">$</b> Controller Status :
            --- Controller : <span class="text-success"><b>Ok</b></span></span><br>
        <span><b style="color:red;font-size:13px;">$</b> Checking Applicable Requests :</span><br>
        <span>--- Form Request : <span class="bold"><b><?php echo $FormRequestor; ?></b></span></span><br>
        <span>--- Form Validation : <span class="bold"><b><?php echo $FormValidator; ?></b></span></span><br>
        <span>--- Request URL : <span class="bold"><b><?php echo $UrlReqeust; ?></b></span> <br>
            ---- URL : <br><b><?php echo $access_url; ?></b></span><br>
        <span><b style="color:red;font-size:13px;">$</b> Checking Database Connection :
            <span class="bold"><b><?php echo $DBStatus; ?></b></span></span><br>
        <span><b style="color:red;font-size:13px;">$</b> Checking Database Status :
            <span class="bold"><b><?php echo $DBStatus; ?></b></span></span><br>
        <span><b style="color:red;font-size:13px;">$</b> Requested Device :
            [ <span class="bold"><b><?php echo SECURE(VALIDATOR_REQ, "d"); ?></b></span> ]</span><br>
        ------ Requirements END -------<br><br>
        <hr>
        <span> <b style='font-size:13px;color:red;'>$</b> System Response: </span><br>
        <hr>