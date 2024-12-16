<?php

//DB configuations
if (CONTROL_DATABASE == true) {
    $DBConnection = new mysqli(DB_SERVER_HOST, DB_SERVER_USER, DB_SERVER_PASS, DB_SERVER_DB_NAME);
    define("DBConnection", $DBConnection);

    if ($DBConnection == true) {
        $DBStatus = "<i class='fa fa-check-circle text-success'></i> Online";
    } else {
        $DBStatus = "<i class='fa fa-warning text-danger'></i> Offline";
    }
} else {
    $DBStatus = "<i class='fa fa-times text-warning'></i> DB Not Used!";
}

//display Database Status
if (CONTROL_DB_STATUS == true) {
    echo $DBStatus;
}
