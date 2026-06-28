<?php

$ct1 = $_GET['ct1'];
$ct2 = $_GET['ct2'];
$ct3 = $_GET['ct3'];
$ct4 = $_GET['ct4'];

$mark =[$ct1,$ct2,$ct3,$ct4];

//sort($mark); assending

rsort($mark);

$ava =($mark[0]+$mark[1]+$mark[2])/3;

echo'avarage is '.$ava;

?>

