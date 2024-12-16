<?php
function VendorTypeDetails($RecordId = null, $ColumnName = null)
{

    if ($RecordId == null) {
        $VendorSQL = "SELECT * FROM config_vendor_types ORDER BY vendor_type_name ASC";
        $VendorTypes = SET_SQL($VendorSQL, true);
        if ($VendorTypes == null) {
            $return = null;
        } else {
            $return = $VendorTypes;
        }
    } else {
        $GetVendorType = FETCH("SELECT $ColumnName FROM config_vendor_types WHERE vendor_type_id='$RecordId'", "$ColumnName");
        if ($GetVendorType == null) {
            $return = null;
        } else {
            $return = $GetVendorType;
        }
    }

    return $return;
}

//vendor address
function VendorAddressDetails($VendorId = null, $AddressColumn = null)
{
    if ($AddressColumn == null && $VendorId != null) {
        $VendorAddressSQL = "SELECT * FROM vendor_address where vendor_main_id='$VendorId' ORDER BY vendor_address_id DESC";
        $vendor_address = FETCH($VendorAddressSQL, "vendor_address");
        $vendor_address .= " " . FETCH($VendorAddressSQL, "vendor_area_locality");
        $vendor_address .= " " . FETCH($VendorAddressSQL, "vendor_city");
        $vendor_address .= " " . FETCH($VendorAddressSQL, "vendor_state");
        $vendor_address .= " " . FETCH($VendorAddressSQL, "vendor_country");
        $vendor_address .= "-" . FETCH($VendorAddressSQL, "vendor_pincode");
        $return = $vendor_address;
    } else {
        $GetVendorAddress = FETCH("SELECT $AddressColumn FROM vendor_address WHERE vendor_main_id='$VendorId' ORDER BY vendor_address_id DESC", "$AddressColumn");
        if ($GetVendorAddress == null) {
            $return = null;
        } else {
            $return = $GetVendorAddress;
        }
    }

    return $return;
}
