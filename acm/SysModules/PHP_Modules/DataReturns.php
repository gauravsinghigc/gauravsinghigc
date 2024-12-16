<?php

//function booleans values 
function BOOL_DATA($data = true, $true = true, $false = false)
{
  if ($data == true) {
    return $true;
  } else {
    return $false;
  }
}

//return value
function ReturnValue($data)
{
  if ($data == null) {
    return "Not Available";
  } else {
    return $data;
  }
}

//get phone number format with mask 
function PhoneNumberMask($phoneNumber)
{
  // Check if the phone number is at least 4 digits long
  if (strlen($phoneNumber) >= 4) {
    // Get the last 4 digits of the phone number
    $lastFourDigits = substr($phoneNumber, -4);

    // Replace the rest with "XXXX"
    $maskedPhoneNumber = 'XX-XXXX-' . $lastFourDigits;

    // Display the masked phone number
    return $maskedPhoneNumber;
  } else {
    // Handle cases where the phone number is too short
    return $phoneNumber;
  }
}

//return different color every time
function RandomColorText($text)
{
  // Generate a random color in hex format
  $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

  // Return the text wrapped with a span tag and inline style for color
  return '<span style="color:' . $randomColor . ';">' . $text . '</span>';
}

//function 
function PriceInWords($number)
{
  $number = abs($number);
  $decimal = round($number - ($no = floor($number)), 2) * 100;
  $hundred = null;
  $digits_length = strlen($no);
  $i = 0;
  $str = array();
  $words = array(
    0 => '',
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen',
    16 => 'sixteen',
    17 => 'seventeen',
    18 => 'eighteen',
    19 => 'nineteen',
    20 => 'twenty',
    30 => 'thirty',
    40 => 'forty',
    50 => 'fifty',
    60 => 'sixty',
    70 => 'seventy',
    80 => 'eighty',
    90 => 'ninety'
  );
  $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
  while ($i < $digits_length) {
    $divider = ($i == 2) ? 10 : 100;
    $number = floor($no % $divider);
    $no = floor($no / $divider);
    $i += $divider == 10 ? 1 : 2;
    if ($number) {
      $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
      $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
      $str[] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
    } else $str[] = null;
  }
  $Rupees = implode('', array_reverse($str));
  $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
  return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise . " Only.";
}

//get records status
function GetActiveStatus($Value1, $Value2, $return = "active")
{
  if ($Value1 == $Value2) {
    return $return;
  } else {
    return "";
  }
}
