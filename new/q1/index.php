<?php
$ct1 = $_POST['ct1'];
$ct2 = $_POST['ct2'];
$ct3 = $_POST['ct3'];
$mid = $_POST['mid'];
$final = $_POST['final'];

$mark = array($ct1, $ct2, $ct3);

rsort($mark);

$sum = $mark[0] + $mark[1];

echo "Best 2 CT total: " . $sum."<br>";
echo "mid term marks: " .$mid."<br>";
echo "final marks: " .$final."<br>";

$total=$sum+$mid+$final;

if($total>54)
    {
        echo"passed"." total marks: ".$total;
    }
    else 
        {
            echo"fail ,"." total marks: ".$total;
        }

?>