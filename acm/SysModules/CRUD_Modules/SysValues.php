<?php
//configuration
function CONFIG($Data, $die = false)
{
    global $DBConnection;
    $SELECT_configurations = "SELECT configurationname, configurationvalue  FROM configurations where configurationname='$Data'";

    //die entry
    if ($die == true) {
        die($SELECT_configurations);
    }
    $QUERY_configurations = mysqli_query($DBConnection, $SELECT_configurations);
    $Configurations = mysqli_fetch_array($QUERY_configurations);
    $IsConfigurationFetched = mysqli_num_rows($QUERY_configurations);
    if ($IsConfigurationFetched == 0) {
        $Value = null;
        $Check = CHECK("SELECT configurationvalue FROM configurations where configurationname='$Data'");
        if ($Check == null) {
            $data = array(
                "configurationname" => "$Data",
                "configurationvalue" => ""
            );
            INSERT("configurations", $data);
        }
    } else {
        $Value = $Configurations['configurationvalue'];
    }

    return $Value;
}
