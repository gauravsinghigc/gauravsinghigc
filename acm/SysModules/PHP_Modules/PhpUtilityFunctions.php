<?php
function ReturnSelectionStatus($Value = null)
{
    if ($Value == 1) {
        $status = "checked";
    } else {
        $status = "";
    }
    return $status;
}

//compare two values and return if equall
function CheckEquality($Value = null, $Value2 = null, $return = null)
{
    if ($Value == $Value2) {
        return $return;
    } else {
        return null;
    }
}
