<?php

$servername = "localhost";
$username = 'root';
$password ="";
$dbname ="lecture_2";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);

    }
    echo'connect successfully';

    //a student is already in db ..but have to update cgpa 

    //take input
    //id,completed credit,new course credit, new course grade
    //have to find new cgpa

    $done_credit =(float)$_POST['done_credit'];
    $id=(int)$_POST['id'];
    $new_credit=(int)$_POST['new_credit'];
    $new_grade=(float)$_POST['new_grade'];

    $sql ="SELECT cgpa FROM student WHERE id=$id";

    $result =$conn->query($sql);
    $old_cgpa = 0;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $old_cgpa = $row['cgpa'];
    }
}

/// calculate new cgpa=================
$new_cgpa = ($old_cgpa*$done_credit + $new_credit*$new_grade) / ($done_credit + $new_credit);


// update new cgpa to database=================
$sql = "UPDATE student SET cgpa = $new_cgpa WHERE id = $id";
$conn->query($sql);



$conn->close();




?>