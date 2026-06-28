<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Attendees=$_POST['Attendees'];
$Seat_Capacity=$_POST['Seat_Capacity'];
$Ticket_Price =$_POST['Ticket_Price'];

$total_screen=ceil($Attendees / $Seat_Capacity);
$total_empty_seat=($Attendees % $Seat_Capacity);
$waste_money=$total_empty_seat * $Ticket_Price ;


echo"total screen: ".$total_screen."<br>"."<br>";
echo"empty seat: ".$total_empty_seat."<br>"."<br>";
echo"wasted money: ".$waste_money;

}
?>