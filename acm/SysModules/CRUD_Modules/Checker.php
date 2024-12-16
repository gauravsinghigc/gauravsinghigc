<?php
//Check function
/**
 * @SQL : database query for execution
 * @die : for diing the query
 * @PrintSQL : print sql without dieing
 */

function CHECK($SQL, $die = false, $PrintSQL = false)
{
    $Check = "$SQL";

    //die entry
    if ($die == true) {
        die($Check);
    }

    //print sql
    if ($PrintSQL == true) {
        echo "<br><hr><code>$SQL</code><hr><br>";
    }

    //check query
    $Query = mysqli_query(DBConnection, $Check);
    $Count = mysqli_num_rows($Query);
    if ($Count == 0 or $Count == null) {
        return false;
    } else {
        return true;
    }
}
