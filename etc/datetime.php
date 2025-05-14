<!-- 
Date and Time manipulation  
-->

<?php
// Date and Time manipulation in PHP
$currentDate = date('Y-m-d H:i:s');
$timestamp = time();
$formattedDate = date('d/m/Y', $timestamp);
$timestampFromDate = strtotime('2023-10-01 12:00:00');
$timeDifference = $timestamp - $timestampFromDate;
$timeDifferenceInDays = floor($timeDifference / (60 * 60 * 24));
$timeDifferenceInHours = floor($timeDifference / (60 * 60));
$timeDifferenceInMinutes = floor($timeDifference / 60);
$timeDifferenceInSeconds = $timeDifference % 60;

$timeZone = date_default_timezone_get();
$timeZoneList = timezone_identifiers_list();
$timeZoneOffset = timezone_offset_get(new DateTimeZone($timeZone), new DateTime($currentDate));
$timeZoneAbbreviation = timezone_name_from_abbr($timeZoneOffset);
$timeZoneAbbreviation = $timeZoneAbbreviation ?: 'UTC';
$timeZoneAbbreviation = $timeZoneAbbreviation ?: 'GMT';


echo "<h2>Date and Time Manipulation</h2>";
echo "<p>Current Date: $currentDate</p>";
echo "<p>Timestamp: $timestamp</p>";
echo "<p>Formatted Date: $formattedDate</p>";
echo "<p>Timestamp from Date: $timestampFromDate</p>";
echo "<p>Time Difference: $timeDifference seconds</p>";
echo "<p>Time Difference in Days: $timeDifferenceInDays days</p>";
echo "<p>Time Difference in Hours: $timeDifferenceInHours hours</p>";
echo "<p>Time Difference in Minutes: $timeDifferenceInMinutes minutes</p>";
echo "<p>Time Difference in Seconds: $timeDifferenceInSeconds seconds</p>";
echo "<p>Time Zone: $timeZone</p>";
echo "<p>Time Zone List: " . implode(', ', $timeZoneList) . "</p>";
echo "<p>Time Zone Offset: $timeZoneOffset seconds</p>";
echo "<p>Time Zone Abbreviation: $timeZoneAbbreviation</p>";

?>