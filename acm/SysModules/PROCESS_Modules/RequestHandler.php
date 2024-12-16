<?php

/**
 * IfIsset() Instruction
 * ---------------
 * $METHOD have two index with separate values
 * 
 * 1 => METHOD : POST | GET 
 * 
 * 2 => $RequestedKey : name attribute value of submit button or provided data from url
 * 
 * ----------------------------------------------------------------
 * $RequestedData is an array containing request parameters  and response msgs with values it can be via 
 * 
 * POST or GET only
 * 
 * 
 */

function IfIsset($METHOD, $RequestedKey, $RequestedData = null)
{
    if ($METHOD == "POST") {
        if (isset($_POST["$RequestedKey"])) {
            $MethodResponse = true;
        }
    } elseif ($METHOD == "GET") {
        if (isset($_GET["$RequestedKey"])) {
            $MethodResponse = true;
        }
    } elseif ($METHOD == "REQUEST") {
        if (isset($_REQUEST["$RequestedKey"])) {
            $MethodResponse = true;
        }
    } else {
        $MethodResponse = null;
    }

    if ($MethodResponse != null) {
        $RequestedData;
    }

    $Response = $RequestedData;
}
