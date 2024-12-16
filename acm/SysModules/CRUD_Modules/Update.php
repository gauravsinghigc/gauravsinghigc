<?php
//Update function
function UPDATE_SQL($SQL, $die = false)
{

    //die entry
    if ($die == true) {
        die($SQL);
    }
    $Query = mysqli_query(DBConnection, $SQL);
    if ($Query == true) {
        return true;
    } else {
        return false;
    }
}


//update table 
function UPDATE($sqltables, array $colums, $conditions, $PrintResponses = false)
{
    $AvalableArrays = count($colums) - 1;
    $Columns = "";
    $countkeys = 0;
    if ($PrintResponses == true) {
        echo "<br><b style='color:green;'>• REQUESTING </b> -> <b>[$sqltables]</b> ---- <b style='color:green;'>Sent!</b> <br><b style='color:red'><i> Data Received</i></b> <b>[$sqltables]</b> @ [<br>";
    }
    foreach ($colums as $key => $value) {
        $countkeys++;
        $$value = $value;
        global $$value;
        if ($PrintResponses == true) {
            echo "&nbsp;&nbsp; <b style='color:grey;'> Index:</b> $countkeys ( <b> " . $key . "</b> : " . $value . " ) <br>";
        }
        if ($countkeys <= $AvalableArrays) {
            $Columns .= "$key='" . htmlentities(trim($value)) . "', ";
        } else {
            $Columns .= "$key='" . htmlentities(trim($value)) . "' ";
        }
    }
    if ($PrintResponses == true) {
        echo "]<br> ---<b style='color:primary;'>END</b><br><hr>---";
    }
    $SQL = "UPDATE $sqltables SET $Columns where $conditions";

    $Update = UPDATE_SQL($SQL);

    //print entry
    if ($PrintResponses == true) {
        print("<textarea rows='4' style='width:100%;margin-top:0.5rem;'>$SQL</textarea> <br><br>");
    }

    if ($Update == true) {
        return true;
    } else {
        return false;
    }
}

//upate table
function CUSTOM_COLUMN_UPDATE($sqltables, array $colums, $conditions, $die = false)
{
    $AvalableArrays = count($colums) - 1;
    $Columns = "";
    foreach ($colums as $key => $value) {
        global $$value;
        if ($AvalableArrays == $key) {
            $Columns .= $value . "='" . htmlentities(trim($$value)) . "'";
        } else {
            $Columns .= $value . "='" . htmlentities(trim($$value)) . "',";
        }
    }

    $Update = UPDATE_SQL("UPDATE $sqltables SET $Columns where $conditions");

    //die entry
    if ($die == true) {
        UPDATE_SQL("UPDATE $sqltables SET $Columns where $conditions", true);
    }

    if ($Update == true) {
        return true;
    } else {
        return false;
    }
}
