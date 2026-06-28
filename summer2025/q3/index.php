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

    $query1="SELECT CategoryName ,SUM(Revenue) as rev
FROM sales_data
GROUP  BY CategoryID;";

$store=$conn-> query($query1);
if ($store->num_rows > 0) {
while ($show = $store->fetch_assoc()) {
echo $show['CategoryName'] . " -- " . $show['rev'] . "<br>";
}
} else {
echo "No records found.";
} 

$query2="UPDATE sales_data
SET CategoryName ='Low Performing'
WHERE Revenue < 40000;";
$store=$conn-> query($query2);


$query3="UPDATE sales_data
SET Revenue=Revenue+Revenue*0.1
WHERE Revenue>70000;";
$store=$conn-> query($query3);

$query4="SELECT ProductName,CategoryName,
CASE
WHEN Revenue>(
SELECT AVG(Revenue)
FROM sales_data s2
WHERE s2.CategoryID=s1.CategoryID
)
THEN 'Top Seller'
ELSE 'Regular Seller'
END AS Seller
FROM sales_data s1;";

$store=$conn-> query($query4);

echo "<h3>Seller Status</h3>";

if ($store->num_rows > 0) {
    while ($show = $store->fetch_assoc()) {
        echo $show['ProductName'] . " -- "
           . $show['CategoryName'] . " -- "
           . $show['Seller'] . "<br>";
    }
} else {
    echo "No records found.";
}
?>