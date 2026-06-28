<?php
 $servername = "localhost";
$username = 'root';
$password ="";
$dbname ="sundarban";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);

    }
    echo'connect successfully';

    $query1="SELECT cname,SUM(revenue) as total_r
FROM sales_data
GROUP BY cname;";

$store=$conn->query($query1);

while($show=$store->fetch_assoc())
    {
        echo $show['cname']."--". $show['total_r']."<br>";
    }

    $query2="UPDATE sales_data
SET cname='low performing'
WHERE revenue<40000;";

$store=$conn->query($query2);

$query3="UPDATE sales_data
SET revenue=revenue+revenue*0.1
WHERE revenue>70000;";

$store=$conn->query($query3);

$query4="SELECT cid,COUNT(sid) as total_s
FROM sales_data
GROUP BY cid;";


$store=$conn->query($query4);

while($show=$store->fetch_assoc())
    {
        echo $show['cid']."--". $show['total_s']."<br>";
    }



    ?>