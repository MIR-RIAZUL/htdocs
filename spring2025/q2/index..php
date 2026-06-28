<?php

$Attendees=$_POST['Attendees'];
$Cost_per_Person=$_POST['Cost_per_Person'];
$Venue_Capacity =$_POST['Venue_Capacity'];

$total_vanue=ceil($Attendees/$Venue_Capacity);

$empty_seat=($total_vanue * $Venue_Capacity) - $Attendees;

$wasted_money=$empty_seat* $Cost_per_Person;

echo"total vanue: ". $total_vanue."<br>";
echo"total empty seat: ". $empty_seat."<br>";
echo"total wasted mopney: ". $wasted_money;


?>