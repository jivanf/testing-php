<?php
echo 'Christmas in ' . date('Y') . ' will fall in: ' . date("l", strtotime("December 25"));
echo "<br>";

$date1 = new DateTime();
$date2 = new DateTime();

$newYorkTimezone = new DateTimeZone("America/New_York");
$tijuanaTimezone = new DateTimeZone("America/Tijuana");

$date1->setTimezone($tijuanaTimezone);
$date2->setTimezone($newYorkTimezone);

echo 'Time in Tijuana is: ' . $date1->format('g:ia');
echo "<br>";
echo 'Time in New York is: ' . $date2->format('g:ia ');