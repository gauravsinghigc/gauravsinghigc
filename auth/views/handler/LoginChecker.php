<?php
if (isset($_SESSION['APP_LOGIN_USER_ID']) != null) {

    $UserId = $_SESSION['APP_LOGIN_USER_ID'];
    $APP_KEY = $_SESSION['APP_KEY'];

    //Validation Array
    $Validation = [];

    //validate UserId
    if (trim(SECURE($UserId, "d")) != null || trim(SECURE($UserId, "d")) != "") {
        //push true in validation array
        array_push($Validation, true);
    } else {
        //push false in validation array
        array_push($Validation, false);
    }

    //check APP_KEY and validate it
    if (trim(SECURE($UserId, "d")) != null) {

        //get users email-id
        $UserId = trim(SECURE($UserId, "d"));
        $UserEmailId = FETCH("SELECT UserEmailId FROM users where UserId='$UserId'", "UserEmailId");

        if (filter_var(trim(SECURE($APP_KEY, "d")), FILTER_VALIDATE_EMAIL)) {
            //validate APP_KEY
            if ($UserEmailId == trim(SECURE($APP_KEY, "d"))) {
                //push true in validation array
                array_push($Validation, true);
            } else {
                //push false in validation array
                array_push($Validation, false);
            }
        } else {
            //push false in validation array
            array_push($Validation, false);
        }
    }

    //check if all true is exits in $Validation then redirect to main app
    if (!in_array(false, $Validation)) {

        //check login token and validate it
        LOCATION("info", "Welcome User, You are login in successfully!", DOMAIN . "/app");
    }
}
if (isset($_SERVER['HTTP_REFERER'])) {
    $LAST_OPEN_URL = $_SERVER['HTTP_REFERER'];
} else {
    $LAST_OPEN_URL = true;
}
