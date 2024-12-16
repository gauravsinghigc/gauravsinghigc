<?php

//form submit token
function FormInputToken()
{

    $TokenValue = SECURE(VALIDATOR_REQ, "e");
?>
    <input type="text" name="AuthToken" value="<?php echo $TokenValue; ?>" hidden="">
<?php }

//page access
function AccessUrl($GetAutoUrl = true)
{
    if ($GetAutoUrl == true) {
        $RunningUrl = GET_URL();
    } else {
        $RunningUrl = $GetAutoUrl;
    }
?>
    <input type="text" name="access_url" value="<?php echo SECURE($RunningUrl, "e"); ?>" hidden="">
<?php }

//form primary details
function FormPrimaryInputs($url = true, array $morerequest = null)
{
    FormInputToken();
    if ($url == true) {
        AccessUrl(true);
    } else {
        AccessUrl($url);
    }
    $return = "";
    if ($morerequest != null) {
        foreach ($morerequest as $key => $value) {
            $return .= "<input type='text' name='" . $key . "' value='" . SECURE($value, "e") . "' hidden=''>";
        }
    }

    return $return;
}

//function for Adminstrator Password
define("AdminstratorPassword", "Gsi" . date('dmy') . "@9810" . "#FBD");
