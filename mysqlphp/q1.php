<?php
 $servername = "localhost";
$username = 'root';
$password ="";
$dbname ="uiutech_final";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);

    }
    echo'connect successfully';

    $query1="SELECT rating,COUNT(empID) as total
FROM employeefinal
GROUP BY rating;";

$sore=$conn->query($query1);
while($show=$sore->fetch_assoc())
    {
        echo $show['rating']."--". $show['total']."<br>";
    }



    $query2="UPDATE employeefinal
SET rating='C'
WHERE salay>50000 AND rating!='D';";

$store=$conn->query($query2);

$query3="UPDATE employeefinal
SET salay=salay+5000
WHERE salay>5000 AND salay<55000;";

$store=$conn->query($query3);

$query4="SELECT dname,COUNT(empID) as total
FROM employeefinal
GROUP BY dname
ORDER BY total DESC;";



$store=$conn->query($query4);

while($show=$store->fetch_assoc())
    {
        echo $show['dname']."--". $show['total']."<br>";
    }







?>