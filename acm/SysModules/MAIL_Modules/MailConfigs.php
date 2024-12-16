<?php

//get CURRENT SMTP configuration
/**
 * @SMTPConfigs
 * @DATA will be HOST, USERNAME, PASSWORD, PORT, FROM
 */
function SMTP_CONFIGS($Data)
{
    //bined SMTP configuration with default names
    if ($Data == "HOST") {
        $Data = "config_mail_sender_host";
    } elseif ($Data == "USERNAME") {
        $Data = "config_mail_sender_username";
    } elseif ($Data == "PASSWORD") {
        $Data = "config_mail_sender_password";
    } elseif ($Data == "PORT") {
        $Data = "config_mail_sender_port";
    } elseif ($Data == "FROM") {
        $Data = "config_mail_sent_from";
    } else {
        $Data = null;
    }

    //fetch SMTP config values via binded records
    if ($Data != null) {
        $return = FETCH("SELECT $Data from config_mail_sender ORDER BY config_mail_sender_id DESC limit 1", "$Data");
    } else {
        $return = null;
    }

    return $return;
}
