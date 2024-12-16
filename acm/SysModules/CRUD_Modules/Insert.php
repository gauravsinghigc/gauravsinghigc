<?php
//INsert new data
function INSERT($tablename, array  $RequestedData, $PrintResults = false)
{
    $TableValues = "";
    $Datatables = "";

    $table_columns = array_keys($RequestedData);
    $arraycount = count($table_columns);
    $mainarray = $arraycount - 1;
    $countkeys = 0;

    if ($PrintResults == true) {
        echo "<br><b style='color:green;'>• REQUESTING </b> -> <b>[$tablename]</b> ---- <b style='color:green;'>Sent!</b> <br><b style='color:red'><i> Data Received</i></b> <b>[$tablename]</b> @ [<br>";
    }
    foreach ($RequestedData as $key => $data) {
        $countkeys++;
        $$data = $data;
        global $$data;

        if ($PrintResults == true) {
            echo "&nbsp;&nbsp; <b style='color:grey;'> Index:</b> $countkeys ( <b> " . $key . "</b> : " . $data . " ) <br>";
        }

        if ($countkeys <= $mainarray) {
            $TableValues .= "'" . htmlentities(trim($data)) . "', ";
        } else {
            $TableValues .= "'" . htmlentities(trim($data)) . "' ";
        }

        if ($countkeys <= $mainarray) {
            $Datatables .= "$key, ";
        } else {
            $Datatables .= "$key ";
        }
    }

    if ($PrintResults == true) {
        echo "]<br> ---<b style='color:primary;'>END</b><br><br>
        
        <B>---GENERATED SQL:---</B><br>";
    }

    $InsertNewData = "INSERT INTO $tablename ($Datatables) VALUES ($TableValues)";

    //die entry
    if ($PrintResults == true) {
        print("<textarea rows='4' style='width:100%;margin-top:0.5rem;'>$InsertNewData</textarea> <br><br>");
    }

    $Query = mysqli_query(DBConnection, $InsertNewData);
    if ($Query == true) {
        return true;
    } else {
        return false;
    }
}
