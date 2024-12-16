<?php
//getworkdays 
function CountWorkingDays($startdate, $endate)
{

  $workingDays = 0;
  $startTimestamp = strtotime($startdate);
  $endTimestamp = strtotime($endate);
  for ($i = $startTimestamp; $i <= $endTimestamp; $i = $i + (60 * 60 * 24)) {
    if (date("N", $i) <= 5) $workingDays = $workingDays + 1;
  }
  return $workingDays;
}

//get weekend days
function CountNonWorkingDays($startDate, $endDate)
{
  $weekendDays = 0;
  $startTimestamp = strtotime($startDate);
  $endTimestamp = strtotime($endDate);
  for ($i = $startTimestamp; $i <= $endTimestamp; $i = $i + (60 * 60 * 24)) {
    if (date("N", $i) > 5) $weekendDays = $weekendDays + 1;
  }
  return $weekendDays;
}


//function GetDays from current date
function GetDays($fromdate)
{
  $ProjectDueDate = $fromdate;
  $TodayDate = strtotime(CURRENT_DATE_TIME);
  $ProjectDaysLefts = strtotime($ProjectDueDate);
  $DaysLeft = (int)$ProjectDaysLefts - (int)$TodayDate;
  $TimeLeft = round($DaysLeft / (60 * 60 * 24));

  return $TimeLeft;
}

//get hours 
function GetHours($starttime, $endtime)
{
  $hours = round((strtotime($endtime) - strtotime($starttime)) / 3600, 1);

  return $hours;
}

//function GetDays from current date
function DaysBetweenDates($fromdate, $Todaydate)
{
  $startDate = new DateTime($fromdate);
  $endDate = new DateTime($Todaydate);

  $interval = $startDate->diff($endDate);
  $days = $interval->days;

  if ($startDate == $endDate) {
    $days = 1;
  }
  return $days;
}
