<?php
//flash msg
function MSG($type, $msg)
{
    $_SESSION["$type"] = "$msg";
}

//function for msg and redirect same
function LOCATION($type, $msg, $url)
{
    MSG("$type", "$msg");
    header("location: $url");
}

//responser for all controllers
function RESPONSE($act, $msg, $msg2)
{
    global $access_url;
    if ($act == true) {
        LOCATION("success", "$msg", "$access_url");
    } else {
        LOCATION("danger", "$msg2", "$access_url");
    }
}

//controller request
function CONTROLLER($controllername = null)
{

    if ($controllername == null) {
        $controller = CONTROLLER;
    } else {
        $controller = DOMAIN . "/handler/" . $controllername;
    }

    return $controller;
}

//Request Handler
function RequestHandler($Response, array $results)
{
    RESPONSE($Response, $results['true'], $results['false']);
}

//Handler Delete Requests
function DeleteReqHandler($valid, array $Requestings, array $feedback = [false])
{
    $access_url = SECURE($_GET['access_url'], "d");
    $CheckStatus = SECURE($_GET["$valid"], "d");

    if ($CheckStatus == true) {
        foreach ($Requestings as $key => $value) {
            $Response = DELETE_FROM("$key", "$value");
            $GetData = SET_SQL("SELECT * FROM $key where $value", false);
        }
    } else {
        $Response = false;
    }
    return RESPONSE($Response, $feedback['true'], $feedback['false']);
}

//function HandleInvalidData()
function HandleInvalidData($Data, $redirectto)
{
    if ($Data == null || $Data == '' || $Data == false || $Data == " ") {
        header("location: $redirectto");
    }
}
