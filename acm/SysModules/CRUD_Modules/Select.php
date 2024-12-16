<?php

//Select Data
function SELECT($SQL, $die = false)
{
    $SELECT = "$SQL";

    if ($die == true) {
        die($SELECT);
    }

    $QUERY = mysqli_query(DBConnection, $SELECT);
    if ($QUERY == true) {
        return $QUERY;
    } else {
        return false;
    }
}

//fetch values 
function FETCH($SQL, $data, $die = false)
{
    if ($die == true) {
        SELECT($SQL, true);
    } else {
        $Query = SELECT($SQL);
        $CountData = mysqli_num_rows($Query);
        if ($CountData == null) {
            $results = 0;
        } else {
            $FetchDATA = mysqli_fetch_array($Query);
            $ReturnData = $FetchDATA["$data"];
            $results = htmlentities(trim($ReturnData));
        }
        return $results;
    }
}

//fetch all in array / json formate
function SET_SQL($sql, $array = false)
{
    $Data = SELECT("$sql");
    $Count = CHECK("$sql");
    if ($Count == 0) {
        return null;
    } else {
        while ($FetchAllData = mysqli_fetch_assoc($Data)) {
            $FetchedColumns[] = $FetchAllData;
        }

        if ($array == true) {
            return json_decode(json_encode($FetchedColumns));
        } else {
            return json_encode($FetchedColumns);
            die();
        }
    }
}

//filter records selects
function FILTER_RECORD_WITH_PARAMETERS($Parameters = [])
{
    if (!empty($Parameters)) {
        $ReturnValues = "";
        foreach ($Parameters as $key => $value) {
            if ($value == null) {
                $ReturnValues .= "";
            } else {
                $ReturnValues .= "$key='$value' and ";
            }
        }

        return $ReturnValues;
    } else {
        return null;
    }
}
