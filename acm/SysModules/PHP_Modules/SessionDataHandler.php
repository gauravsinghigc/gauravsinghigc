<?php

//session data handler
function IfSessionExists($SessionKey, $ValueAssigned)
{
    if (isset($_SESSION["$SessionKey"])) {
        $return = $_SESSION["$SessionKey"];
    } else {
        $_SESSION["$SessionKey"] = $ValueAssigned;
        $return = $_SESSION["$SessionKey"];
    }
    return $return;
}

//dynamic menu with multiple modules
function ReturnSessionalValues($GetParameter, $SessionName, $Defaultvalue, $MethodType = "GET")
{
    //generate sessional values via get method
    if ($MethodType == "GET") {
        if (isset($_GET["" . $GetParameter . ""])) {
            $SessionalValue = $_SESSION["" . $SessionName . ""] = $_GET["" . $GetParameter . ""];
        } else {
            if (isset($_SESSION["" . $SessionName . ""])) {
                if (isset($_GET["" . $GetParameter . ""])) {
                    $SessionalValue = $_SESSION["" . $SessionName . ""] = $_GET["" . $GetParameter . ""];
                } else {
                    $SessionalValue = $_SESSION["" . $SessionName . ""] = $_SESSION["" . $SessionName . ""];
                }
            } else {
                $SessionalValue = $_SESSION["" . $SessionName . ""] = $Defaultvalue;
            }
        }

        //generate sessional values via post method
    } else {
        if (isset($_POST["" . $GetParameter . ""])) {
            $SessionalValue = $_SESSION["" . $SessionName . ""] = $_POST["" . $GetParameter . ""];
        } else {
            if (isset($_SESSION["" . $SessionName . ""])) {
                if (isset($_POST["" . $GetParameter . ""])) {
                    $SessionalValue = $_SESSION["" . $SessionName . ""] = $_POST["" . $GetParameter . ""];
                } else {
                    $SessionalValue = $_SESSION["" . $SessionName . ""] = $_SESSION["" . $SessionName . ""];
                }
            } else {
                $SessionalValue = $_SESSION["" . $SessionName . ""] = $Defaultvalue;
            }
        }
    }

    return $SessionalValue;
}
