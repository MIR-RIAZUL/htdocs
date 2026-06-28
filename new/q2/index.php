<?php

$soldPerDay = $_POST['solditem'] ?? 0;
$numOfDay = $_POST['numberday'] ?? 0;
$target = $_POST['target'] ?? 0;

$totalItemSold = ($soldPerDay * $numOfDay);



if ($target > $totalItemSold) {
    $status = $target - $totalItemSold;
    if ($totalItemSold > 499) {
        echo "Excellent" . "<br>";
        echo "below target by: " . $status;
    } else if ($totalItemSold > 300 && $totalItemSold < 500) {

        echo "good" . "<br>";
        echo "below target by: " . $status;
    } else if ($totalItemSold > 149 && $totalItemSold < 300) {

        echo "avarage" . "<br>";
        echo "below target by: " . $status;
    } else if ($totalItemSold < 150) {

        echo "poor" . "<br>";
        echo "below target by: " . $status;
    }
}


if ($target < $totalItemSold) {
    $status = $totalItemSold - $target;

    if ($totalItemSold > 499) {
        echo "Excellent" . "<br>";
        echo "above target by: " . $status;
    } else if ($totalItemSold > 300 && $totalItemSold < 500) {

        echo "good" . "<br>";
        echo "above target by: " . $status;
    } else if ($totalItemSold > 149 && $totalItemSold < 300) {

        echo "avarage" . "<br>";
        echo "above target by: " . $status;
    } else if ($totalItemSold < 150) {

        echo "poor" . "<br>";
        echo "above target by: " . $status;
    }
}
