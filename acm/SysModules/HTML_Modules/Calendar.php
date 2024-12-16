<?php
function OrganiseDateMonthYear()
{
    // Get the current year, month, and date
    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
        $date = $_GET['day'];
    } else {
        $month = date('n');
        $year = date('Y');
        $date = date('j');
    }

    // Get the number of days in the current month
    $numDays = date('t', mktime(0, 0, 0, $month, 1, $year));

    // Get the first day of the month (1 = Monday, 7 = Sunday)
    $firstDay = date('N', mktime(0, 0, 0, $month, 1, $year));

    // Create an array of month names
    $months = array(1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');

    // Handle previous and next month navigation
    $prevMonth = $month - 1;
    $prevYear = $year;
    if ($prevMonth == 0) {
        $prevMonth = 12;
        $prevYear--;
    }
    $nextMonth = $month + 1;
    $nextYear = $year;
    if ($nextMonth == 13) {
        $nextMonth = 1;
        $nextYear++;
    }
    $prevMonthName = date('F', mktime(0, 0, 0, $prevMonth, 1));
    $nextMonthName = date('F', mktime(0, 0, 0, $nextMonth, 1));

    // Reset link for today's date
    $Reset = isset($_GET['month']) ? "<a href='index.php' class='btn btn-xs btn-danger'><i class='fa fa-calendar'></i> Go to Today Date</a> " : "";

    // Start building the return string (calendar output)
    $return = "<div>
                <h4 class='current-date'><i class='fa fa-calendar text-warning'></i> " . $date . " " . date("D") . " " . $months[$month] . " " . $year . "</h4>
                <h5 class='mb-4'><i class='fa fa-clock text-success'></i> <span id='clock2'>" . date("h:i A") . "</span></h5>
                <p class='flex-s-b m-b-10'>
                <a href='?month=$prevMonth&amp;year=$prevYear&day=$date' class='btn btn-md btn-default'><i class='fa fa-angle-double-left'></i> $prevMonthName</a> 
                <a href='?month=$nextMonth&amp;year=$nextYear&day=$date' class='btn btn-md btn-default'>$nextMonthName <i class='fa fa-angle-double-right'></i></a>
                </p>
                <form class='flex-s-b mb-2'>
                <input type='hidden' name='day' value='$date'>
                <select name='month' class='form-control w-50 m-r-2' onchange='form.submit()'>";

    // Insert month options
    $return .=  InputOptionsWithKey($months, IfRequested('GET', 'month', $month, false));

    // Insert year input
    $return .= "</select>
                <input type='number' value='" . IfRequested('GET', 'year', date('Y'), false) . "' name='year' min='1900' max='2100' class='form-control  m-l-2 w-50' onchange='form.submit()'>
                </form>
                </div>";

    // Start creating the calendar table
    $return .= "<table class='table'>";
    $return .= "<tr class='cal-header'><th class='text-center'>Mon</th><th class='text-center'>Tue</th><th class='text-center'>Wed</th><th class='text-center'>Thu</th><th class='text-center'>Fri</th><th class='text-center'>Sat</th><th class='text-center'>Sun</th></tr>";

    // Create the first row of the calendar
    $return .= "<tr>";

    // Fill the first row with empty cells before the first day of the month
    for ($i = 1; $i < $firstDay; $i++) {
        $return .= "<td class='text-center'></td>";
    }

    // Fill the first week with the actual dates
    for ($i = 1; $i <= (7 - $firstDay + 1); $i++) {
        $select = ($date == $i) ? "active" : "";
        $todayClass = ($i == date('j') && $month == date('n') && $year == date('Y')) ? "bg-danger text-white" : ""; // Add bg-danger and text-white to today's date
        $return .= "<td class='$todayClass text-center'>
                        <a class='$select' href='?month=$month&year=$year&day=$i'>$i</a>
                    </td>";
    }
    $return .= "</tr>";

    // Generate the remaining rows of the calendar
    $currentDay = 7 - $firstDay + 1;
    while ($currentDay <= $numDays) {
        $return .= "<tr>";
        for ($i = 1; $i <= 7; $i++) {
            if ($currentDay <= $numDays) {
                $select = ($date == $currentDay) ? "active" : "";
                $todayClass = ($currentDay == date('j') && $month == date('n') && $year == date('Y')) ? "bg-danger text-white" : ""; // Add bg-danger and text-white to today's date
                $return .= "<td class='$todayClass text-center'>
                                <a class='$select' href='?month=$month&year=$year&day=$currentDay'>$currentDay</a>
                            </td>";
            } else {
                $return .= "<td></td>";
            }
            $currentDay++;
        }
        $return .= "</tr>";
    }

    $return .= "</table>";
    $return .= $Reset;

    return $return;
}



DEFINE("GENERATE_CALENDAR", OrganiseDateMonthYear());
