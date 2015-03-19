<?php

$avgcents = 30;
$numdays = date("t");
$numdollars = 200;
$taskspermonth = $numdollars / ($avgcents / 100);
$tasksperday = $taskspermonth / $numdays;
$daysvalue = $numdollars / $numdays;

echo "You said you need to make $numdollars dollars this month. There are $numdays days in this month. At the rate of $avgcents cents per task, you would need to do $tasksperday tasks per day, or tasks adding up to a value of $daysvalue dollars.";

?>
