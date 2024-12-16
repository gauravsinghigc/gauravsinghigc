<?php

/**
 * @SystemUserModule
 */

//app users
// 
function AuthAppUser($require)
{
    $UserId = LOGIN_UserId;
    if (empty($UserId)) {
        return null;
    } else {
        $CheckUsers = CHECK("SELECT $require FROM users where UserId='$UserId'");
        if ($CheckUsers == null) {
            return null;
        } else {
            $GetData = FETCH("SELECT $require FROM users where UserId='$UserId'", "$require");
            if ($require == "UserProfileImage") {
                if ($GetData == "default.png") {
                    return STORAGE_URL_D . "/default.png";
                } else {
                    return STORAGE_URL_U . "/$UserId/img/$GetData";
                }
            } else {
                return $GetData;
            }
        }
    }
}


//user address
function UserAddress($UserId, $ColumnName)
{
    $CheckUsers = CHECK("SELECT $ColumnName FROM user_addresses where MainUserId='$UserId'");
    if ($CheckUsers == null) {
        return null;
    } else {
        $GetData = FETCH("SELECT $ColumnName FROM user_addresses where MainUserId='$UserId'", "$ColumnName");
        if ($GetData == null) {
            return 'NA';
        } else {
            return $GetData;
        }
    }
}
