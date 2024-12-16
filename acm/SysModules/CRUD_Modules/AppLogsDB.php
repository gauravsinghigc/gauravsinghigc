<?php
//Generate Log file for the project
function GENERATE_APP_LOGS($TITLE, $ACTION, $logtype)
{
    $TITLE = strtoupper($TITLE);

    $ArrayValues = "";

    if (is_array($ACTION)) {
        foreach ($ACTION as $key => $value) {
            $ArrayValues .= "$key=$value, ";
        }
    }
    $ACTION = $ArrayValues;

    if (CONTROL_APP_LOGS == "true") {
        $logTitle = SECURE("$TITLE", "e");
        $logdesc = SECURE("$ACTION", "e");
        $systeminfo = SYSTEM_INFO;
        $logenv = CONTROL_WORK_ENV;
        $SaveLogs = "INSERT INTO systemlogs (logTitle, logdesc, created_at, systeminfo, logtype, logenv) VALUES ('$logTitle', '$logdesc', '" . CURRENT_DATE_TIME . "', '$systeminfo', '$logtype', '$logenv')";
        mysqli_query(DBConnection, $SaveLogs);
    }
}
