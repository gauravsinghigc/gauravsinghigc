<?php
//check login & validate it
if (isset($_SESSION['APP_LOGIN_USER_ID']) != null) {
    $UserId = $_SESSION['APP_LOGIN_USER_ID'];
    $APP_KEY = $_SESSION['APP_KEY'];

    //check userid is not
    if (trim(SECURE($UserId, "d")) == null || trim(SECURE($UserId, "d")) == "" || trim(SECURE($UserId, "d")) == " ") {
        LOCATION("warning", "Invalid User ID!", DOMAIN . "/auth?AuthView=LoginForm");
        exit;

        //Login id validate
    } else {

        //check user-id is available in database or not
        $UserId = trim(SECURE($UserId, "d"));
        $CheckUserExists = CHECK("SELECT UserId from users where UserId='$UserId'");

        //check and validate app key
        $ExistingAppKey = FETCH("SELECT UserEmailId from users where UserId='$UserId'", "UserEmailId");
        if (SECURE($APP_KEY, "d") != $ExistingAppKey) {
            LOCATION("warning", "Invalid App Key!", DOMAIN . "/auth?AuthView=LoginForm");
            exit;

            //if APP key is validate and Pass the security check
        } else {


            //check user exist or not!
            if ($CheckUserExists != null) {
                //user constants
                define("LOGIN_USER_ID", $UserId);
                define("LOGIN_UserId", FETCH("SELECT UserId FROM users where UserId='$UserId'", "UserId"));
                define("LOGIN_UserFullName", FETCH("SELECT UserFullName FROM users where UserId='$UserId'", "UserFullName"));
                define("LOGIN_UserPhoneNumber", FETCH("SELECT UserPhoneNumber FROM users where UserId='$UserId'", "UserPhoneNumber"));
                define("LOGIN_UserEmailId", FETCH("SELECT UserEmailId from users where UserId='$UserId'", "UserEmailId"));
                define("LOGIN_UserCreatedAt", FETCH("SELECT UserCreatedAt FROM users where UserId='$UserId'", "UserCreatedAt"));
                define("LOGIN_UserUpdatedAt", FETCH("SELECT UserUpdatedAt FROM users where UserId='$UserId'", "UserUpdatedAt"));
                define("LOGIN_UserStatus", FETCH("SELECT UserStatus FROM users where UserId='$UserId'", "UserStatus"));
                define("LOGIN_UserProfileImage1", FETCH("SELECT UserProfileImage FROM users WHERE UserId='$UserId'", "UserProfileImage"));
                define("LOGIN_UserType", FETCH("SELECT UserType FROM users WHERE UserId='$UserId'", "UserType"));

                //user image
                if (LOGIN_UserProfileImage1 == "default.png") {
                    define("LOGIN_UserProfileImage", STORAGE_URL_D . "/default.png");
                } else {
                    define("LOGIN_UserProfileImage", STORAGE_URL_U . "/" . LOGIN_UserId . "/img/" . LOGIN_UserProfileImage1);
                }

                //destory all login session and token
            } else {
                //delete session and cookie
                session_unset();
                session_destroy();
                setcookie("APP_LOGIN_USER_ID", "", time() - 3600);

                //redirect to login page
                LOCATION("warning", "Login session expired, please login again!", DOMAIN . "/auth?AuthView=LoginForm");
            }
        }
    }

    //no login
} else {
    LOCATION("warning", "Login session expired, please login again!", DOMAIN . "/auth?AuthView=LoginForm");
}
