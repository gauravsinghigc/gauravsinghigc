<?php

/**
 * IfIsset() Instruction
 * ---------------
 * Method ($method_with_data) have two index with separate values
 * 
 * 1 => METHOD : POST | GET 
 * 
 * 2 => REQUESTER : name attribute value of submit button or provided data from url
 * 
 * ----------------------------------------------------------------
 * $RequestedData is an array containing request parameters with values it can be via 
 * 
 * POST or GET only
 * 
 * ----------------------------------------------------------------
 * $CURD_VALUE is type of CURD OPERATIONS performed with the Request like there value can be any and never null default null for no response
 * 
 * $CURD_VALUE => INSERT : for insert values provided by $RequestedData array
 * 
 * $CURD_VALUE => UPDATE : for update values provided by $RequestedData array
 * 
 * $CURD_VALUE => DELETE : for delete culumns containing values provided by $RequestedData array
 * 
 * ----------------------------------------------------------------
 * $Req_DB_Table_Name is the NAME of DB Table Name 
 * for example : 'users', 'products', 'customers','admin' etc it can be anything that have table names in database.
 * 
 * ----------------------------------------------------------------
 * $SQL_EXECUTION_STATUS is status of SQL Command die or not it's value can be TRUE or FALSE and default value is NULL for no response
 */

function IfIsset(array $method_with_data, array $RequestedData, $CRUD_VALUE = NULL, $Req_DB_Table_Name = null, $WhereConditionsDefaultisNull = null,  $SQL_EXECUTION_STATUS = null)
{
    //if method is GET
    if ($method_with_data['METHOD'] == "GET" || $method_with_data['METHOD'] == "get" || $method_with_data['METHOD'] == "Get") {
        $Method = true;

        //check requestor
        if (isset($_GET["" . $method_with_data['REQUESTER'] . ""])) {
            $REQUESTER = true;
        } else {
            $REQUESTER = null;
            die("Invalid REQUESTER @ GET");
        }

        //if method is POST
    } else if ($method_with_data['METHOD'] == "POST" || $method_with_data['METHOD'] == "post" || $method_with_data['METHOD'] == "Post") {
        $Method = true;

        //check requestor
        if (isset($_POST["" . $method_with_data['REQUESTER'] . ""])) {
            $REQUESTER = true;
        } else {
            $REQUESTER = null;
            die("Invalid REQUESTER @ POST");
        }
    } else {
        $Method = false;
        die("Invalid Isset Request @ POST | GET");
    }

    //CHECK method & requestor status
    if ($Method == true && $REQUESTER == true) {

        //check $CRUD_VALUE
        if ($CRUD_VALUE == true) {

            //PERFORME CURD OPERATIONS
            //check $Req_DB_Table_Name Status
            if ($Req_DB_Table_Name != null) {

                //execute submited request with data
                $RequestedData = $RequestedData;

                //INSERT
                if ($CRUD_VALUE == "INSERT" || $CRUD_VALUE == "Insert" || $CRUD_VALUE == "insert" || $CRUD_VALUE == "SAVE") {
                    $CRUD_OPERATION_STATUS = INSERT("$Req_DB_Table_Name", $RequestedData, $SQL_EXECUTION_STATUS);

                    //UPDATE
                } elseif ($CRUD_VALUE == "UPDATE" || $CRUD_VALUE == "Update" || $CRUD_VALUE == "update" || $CRUD_VALUE == "EDIT") {
                    $CRUD_OPERATION_STATUS = UPDATE("$Req_DB_Table_Name", $RequestedData, $WhereConditionsDefaultisNull, $SQL_EXECUTION_STATUS);

                    //DELETE
                } elseif ($CRUD_VALUE == "DELETE" || $CRUD_VALUE == "Delete" || $CRUD_VALUE == "delete" || $CRUD_VALUE == "REMOVE") {
                    $CRUD_OPERATION_STATUS = DELETE_FROM("$Req_DB_Table_Name", $RequestedData, $WhereConditionsDefaultisNull, $SQL_EXECUTION_STATUS);

                    //else no $CRUD VALUE
                } else {
                    die("No Valid CRUD_VALUE found @ $CRUD_VALUE");
                }

                //Send Response to Sender
                if ($CRUD_OPERATION_STATUS == true) {
                    return true;
                } else {
                    return false;
                }
                //END
                //end of CURD OPERATIONS

                //end $Req_DB_Table_Name
            } else {
                die("No Valid DB Table Name found @ TABLE : $Req_DB_Table_Name");
            }

            //invalid method & Requestor 
        } else {
            die("Invalid REQUESTER Found @ REQUESTER : $REQUESTER");
        }

        //method is false
    } else {
        $Method = $_REQUEST["" . $method_with_data['GET'] . ""];
        die("Invalid METHOD is Received @ METHOD : $Method");
    }
}
