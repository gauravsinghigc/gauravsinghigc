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
