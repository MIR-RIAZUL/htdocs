<?php

function calculatepizza($student_count,$slice_per_pizza,$slice_per_student,$price_per_pizza)
{
    $total_slice_needed =$student_count * $slice_per_student;
    $pizza_needed = $total_slice_needed / $slice_per_pizza;
    $pizza_needed = ceil($pizza_needed);
    $total_cost = $pizza_needed * $price_per_pizza;

    return $total_cost;
}
// function add($a,$b)
// {
//     return $a + $b;
// }
// $a =$_POST['first'];
// $b =$_POST['second'];

// //$c = $a+$b;
// $c =add($a,$b);
// echo "the sum is ".$c;

//echo "hello world";
$student_count = $_POST['total_student'];
$slice_per_pizza =$_POST['slice_per_pizza'];
$slice_per_student = $_POST['slice_per_student'];
$price_per_pizza =$_POST['price_per_pizza'];

$cost =calculatepizza ($student_count,$slice_per_pizza,$slice_per_student,$price_per_pizza);

if($cost>5000)
    {
        $cost=0.9*$cost;
        echo'10% discount applied ..the total cost is '.$cost;
        
    }
    else{
      echo'the total cost is '.$cost;
    }



?>