<?php
function FinanicalYear($RequestingId = null, $RequestingColumn = null)
{
    if ($RequestingId != null || $RequestingColumn != null) {
        $FinancialYearSQL = "SELECT $RequestingColumn FROM config_finanical_years where cfy_id='$RequestingId'";
        $GetData = FETCH($FinancialYearSQL, $RequestingColumn);

        if ($GetData == null) {
            return null;
        } else {
            return $GetData;
        }
    } else {
        return null;
    }
}
