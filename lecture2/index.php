<?php
 // database connection
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
    //up to this ..it is connection 

    // $sql ="CREATE TABLE student(
    // id INT PRIMARY KEY,
    // name VARCHAR(100),
    // cgpa FLOAT(3,2)
    // );";

    // $conn->query($sql); //excute query


    // $sql="INSERT INTO student(id,name,cgpa)
    // VALUES(1,'a',3.5),
    // (2,'b',4.5),
    // (3,'c',5.5);
    // ";

    // $conn->query($sql);

    $id=(int)$_POST['id'];
    $name=$_POST['name'];
    $cgpa=(float)$_POST['cgpa'];

    $sql="INSERT INTO student (id,name,cgpa)
    VALUES ($id,'$name',$cgpa);";

    $conn->query($sql);

?>