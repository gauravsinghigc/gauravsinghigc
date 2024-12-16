<?php


//update profile image 
if (isset($_POST['updateprofileimage'])) {
    $UserId  = $_POST['updateprofileimage'];
    $UserProfileImage = UPLOAD_FILES("../storage/users/$UserId/img", "null", "Profile_Photo_" . "_UID_" . $UserId, "UserProfileImage");
    $Update = UPDATE_SQL("UPDATE users SET UserProfileImage='$UserProfileImage' where UserId='$UserId'");
    RESPONSE($Update, "Profile Image Updated!", "Unable to update profile image!");

    //remove employee
} else if (isset($_GET['remove_team_member'])) {
    $access_url = SECURE($_GET['access_url'], "d");
    $remove_team_member = SECURE($_GET['remove_team_member'], "d");

    if ($remove_team_member == true) {
        $control_id = SECURE($_GET['control_id'], "d");
        $delete = DELETE_FROM("users", "UserId='$control_id'");
    } else {
        $delete = false;
    }
    RESPONSE($delete, "Team member is removed successfully!", "Unable to remove team member!");

    //create new users
} elseif (isset($_POST['CreateNewUser'])) {
    $Users = [
        "UserSalutation" => $_POST['UserSalutation'],
        "UserFullName" => $_POST['UserFullName'],
        "UserPhoneNumber" => $_POST['UserPhoneNumber'],
        "UserEmailId" => $_POST['UserEmailId'],
        "UserPassword" => SECURE($_POST['UserPassword'], "e"),
        "UserStatus" => $_POST['UserStatus'],
        "UserDesignation" => $_POST['UserDesignation'],
        "UserWorkFeilds" => $_POST['UserWorkFeilds'],
        "UserType" => $_POST['UserType'],
        "UserDateOfBirth" => $_POST['UserDateOfBirth'],
        "UserCreatedAt" => CURRENT_DATE_TIME,
        "UserCompanyName" => $_POST['UserCompanyName'],
        "UserCreatedBy" => LOGIN_UserId,
        "UserUpdatedBy" => LOGIN_UserId,
        "UserUpdatedAt" => CURRENT_DATE_TIME,
    ];

    $CheckExistingUsers = CHECK("SELECT * FROM users where UserPhoneNumber='" . $_POST['UserPhoneNumber'] . "' and UserEmailId='" . $_POST['UserEmailId'] . "' ");
    if ($CheckExistingUsers == null) {
        $Insert = INSERT("users", $Users);
        RESPONSE($Insert, "User details saved successfully!", "Unable to save user details!");
    } else {
        RESPONSE(false, "Phone no: <b>" . $_POST['UserPhoneNumber'] . "</b> already exisits", "Unable to save user details!");
    }

    //update user details
} elseif (isset($_POST['UpdateUserDetailsRecords'])) {
    $UserId = SECURE($_POST['UserId'], "d");

    $Users = [
        "UserSalutation" => $_POST['UserSalutation'],
        "UserFullName" => $_POST['UserFullName'],
        "UserPhoneNumber" => $_POST['UserPhoneNumber'],
        "UserEmailId" => $_POST['UserEmailId'],
        "UserPassword" => SECURE($_POST['UserPassword'], "e"),
        "UserStatus" => $_POST['UserStatus'],
        "UserDesignation" => $_POST['UserDesignation'],
        "UserWorkFeilds" => $_POST['UserWorkFeilds'],
        "UserType" => $_POST['UserType'],
        "UserDateOfBirth" => $_POST['UserDateOfBirth'],
        "UserCompanyName" => $_POST['UserCompanyName'],
        "UserUpdatedBy" => LOGIN_UserId,
        "UserUpdatedAt" => CURRENT_DATE_TIME,
    ];

    //check if phone number
    $CheckPhone = CHECK("SELECT * FROM users where UserId!='$UserId' and UserPhoneNumber='" . $_POST['UserPhoneNumber'] . "'");
    if ($CheckPhone == null) {

        //check email-id
        $CheckEmails = CHECK("SELECT * FROM users where UserId!='$UserId' and UserEmailId='" . $_POST['UserEmailId'] . "'");
        if ($CheckEmails == null) {
            $Update = UPDATE("users", $Users, "UserId='" . $UserId . "'");
            $Msg = "User Details updated successfully!";
            $Error = "Something went wrong, unable to update user details at the moment!";
        } else {
            unset($Users['UserEmailId']);
            $Update = UPDATE("users", $Users, "UserId='$UserId'");
            $Msg = "User details updated but not email-id, email id is already exists";
            $Error = "EmailId is already exists!";
        }
    } else {
        unset($Users['UserPhoneNumber']);
        $Update = UPDATE("users", $Users, "UserId='$UserId'");
        $Msg = "User details updated but not phone number, phone number already exists!";
        $Error = "Phone Number is already exists!";
    }
    RESPONSE($Update, $Msg, $Error);

    //update user status
} elseif (isset($_POST['UpdateUserStatus'])) {
    $UserId = SECURE($_POST['UserId'], "d");
    $UserStatus = $_POST['UserStatus'];

    if (isset($_POST['UserStatus'])) {
        $UserStatus = 1;
    } else {
        $UserStatus = 0;
    }

    $users = [
        "UserStatus" => $UserStatus,
        "UserUpdatedAt" => CURRENT_DATE_TIME
    ];

    $UserSql = "SELECT * FROM users where UserId='$UserId'";
    $UserStatus = StatusViewWithText($UserStatus);
    $UserFullName = FETCH($UserSql, "UserFullName");
    $UserPhoneNumber = FETCH($UserSql, "UserPhoneNumber");
    $Update = UPDATE("users", $users, "UserId='$UserId'");
    RESPONSE($Update, "<b class='text-danger'>Status Updated Successfully!</b><br> [-- <b>$UserFullName - ($UserPhoneNumber)</b> --]<br>@ ( Now <b>$UserStatus</b>)", "Unable to update user status!");
}
