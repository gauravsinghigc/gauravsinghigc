<?php
//date formates
/**
 * @param string $formate 
 * @param string $date
 */
function DATE_FORMATES($format, $date)
{
    $newdateformate = $date;
    if ($date == null  || $date == "" || $date == "0000-00-00" || $date == " ") {
        $newdateformate = "No Update";
    } else {
        $newdateformate = date("$format", strtotime($date));
    }
    return $newdateformate;
}

/**
 * Current Date time 
 * You can call any of these date, time, or both at same time via CONSTANT DECLARATION METHOD
 */

DEFINE("CURRENT_DATE_TIME", date('Y-m-d h:i:s A'));
DEFINE("CURRENT_DATE", date('Y-m-d'));
DEFINE("CURRENT_TIME", date('h:i:s A'));

//function get minutes from two time
/**
 * @param string $time2 time to get minutes from
 * @param string $time1 time to get minutes
 */
function GetMinutes($time2, $time1)
{
    if (strtotime($time1) > strtotime($time2)) {
        list($time1, $time2) = array($time2, $time1);
    }

    $diff_seconds = strtotime($time2) - strtotime($time1);
    $diff_minutes = round($diff_seconds / 60);

    // Example value
    $hours = floor($diff_minutes / 60);
    $remaining_minutes = $diff_minutes % 60;

    if ($diff_minutes == 0) {
        $diff_minute = "Time Over";
    } elseif ($diff_minutes > 0) {
        $hours = abs($hours);
        $remaining_minutes = abs($remaining_minutes);

        $diff_minute = $hours . " hr " . $remaining_minutes . " min over";
    } elseif ($diff_minutes < 0) {
        $diff_minute = $hours . " hr " . $remaining_minutes . " min left";
    }

    return $diff_minute;
}


//converts seconds into hours, minute and seconds
/**
 * @param int $seconds
 */
function GetDurations($second)
{

    if ($second == 0 || $second == null) {
        $results = "0 sec";
    } else {
        $hours = gmdate('H', $second);
        $minutes = gmdate('i', $second);
        $seconds = gmdate('s', $second);

        $results = $hours . "hr " . $minutes . "min " . $seconds . "sec";
    }
    return $results;
}


/**
 * @FutureDates()
 * @param string $date:currentDate formate date('Y-m-d')
 * @param string $EntityNumber: 1, 6, 12 
 * @param string $TypeOfEntity: days, months, years
 * @param string $FutureOrPast: future, past
 */
function FuturePastDates($date, $EntityNumber, $TypeOfEntity = "days", $FutureOrPast = "future")
{
    // Convert the passed date string to a DateTime object
    $dateObj = new DateTime($date);

    // Clone the original date to calculate different future dates
    $FutureDates = clone $dateObj;

    if ($FutureOrPast == "future") {
        // Modify the cloned dates to get the past dates
        $FutureDates->modify("-$EntityNumber $TypeOfEntity");
    } else {
        // Modify the cloned dates to get the future dates
        $FutureDates->modify("+$EntityNumber $TypeOfEntity");
    }

    // Return the future date in the required format
    return $FutureDates->format('Y-m-d');
}

//get number of years from the date to current date
function GetYearDifference($Fromdate, $currentDate = null)
{
    // Convert the given date to a timestamp
    $givenTimestamp = strtotime($Fromdate);

    // If currentDate is not provided, use the current date
    if ($currentDate === null) {
        $currentTimestamp = time(); // Current time as Unix timestamp
    } else {
        // Convert the custom current date to a timestamp
        $currentTimestamp = strtotime($currentDate);
    }

    // Check if both timestamps are valid
    if ($givenTimestamp === false || $currentTimestamp === false) {
        return "Invalid date format.";
    }

    // Calculate the difference in seconds
    $differenceInSeconds = $currentTimestamp - $givenTimestamp;

    // Convert the difference from seconds to years (approximation)
    $years = floor($differenceInSeconds / (365 * 24 * 60 * 60));

    return $years;
}
