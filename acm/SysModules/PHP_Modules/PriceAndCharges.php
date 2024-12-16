<?php
//amount total
function AMOUNT($SQL, $T)
{
    global $DBConnection;
    $TotalAmountPaid = SELECT("$SQL");
    $TotalAmount = 0;
    while ($fetchtotalpayment = mysqli_fetch_array($TotalAmountPaid)) {
        $TotalAmount += (int)$fetchtotalpayment["$T"];
    }
    if ($TotalAmount == 0 or $TotalAmount == null) {
        $TotalAmount = 0;
    } else {
        $TotalAmount = $TotalAmount;
    }
    return (int)$TotalAmount;
}


//tax display
function TaxDisplay($tax, $productprice)
{
    if ($tax == null | $tax == 0) {
        $TaxDisplay = 0 . " %";
    } else {
        $TaxDisplay = round((int)$tax / (int)$productprice * 100, 3);
    }

    return $TaxDisplay;
}


//payment status
function PayStatus($paystatus)
{
    if ($paystatus == "Paid" || $paystatus == "Cleared" || $paystatus == "PAID" || $paystatus == "paid" || $paystatus == "Completed" || $paystatus == "COMPLETED") {
        echo "<span class='text-success'><i class='fa fa-check-circle-o'></i> Paid</span>";
    } else {
        echo "<span class='text-danger'><i class='fa fa-warning'></i> Un Paid</span>";
    }
}

//function for payment modes
function PaymentModes($paymode)
{
    if ($paymode == "CASH") {
        echo "<span class='bold text-success'><i class='fa fa-money'></i> $paymode</span>";
    } elseif ($paymode == "ONLINE_TRANSFER") {
        echo "<span class='bold text-primary'><i class='fa fa-globe'></i> $paymode</span>";
    } elseif ($paymode == "WALLET_UPI_OTHERS") {
        echo "<span class='bold text-info'><i class='fa fa-mobile-phone'></i> $paymode</span>";
    } elseif ($paymode == "CHEQUE_OR_DD") {
        echo "<span class='bold text-danger'><i class='fa fa-exchange'></i> $paymode</span>";
    } else {
        echo "<span class='bold text-black'><i class='fa fa-check-circle-o'></i> $paymode</span>";
    }
}
