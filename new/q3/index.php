
<?php
 $servername = "localhost";
 $username = 'root';
 $password ="";
 $dbname ="campus_library";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
    echo'connect successfully';

    echo "<br>";

    $query1="SELECT statu, COUNT(LoanID) as total_book
    FROM book_loans
    GROUP BY statu
    HAVING total_book >1;";

    $store = $conn-> query($query1);

    if ($store->num_rows > 0) {
    while ($show = $store->fetch_assoc()) {
        echo $show['statu'] . " -- " . $show['total_book'] . "<br>";
    }
} else {
    echo "No records found.";
}

    $query2="UPDATE book_loans
    SET statu ='Grace Period'
    WHERE statu='Overdue' AND DaysOverdue <7;";
    $store =$conn->query($query2);


     $query3="UPDATE book_loans
    SET PenaltyFee= (PenaltyFee +PenaltyFee*0.1) 
    WHERE PenaltyFee >20 AND PenaltyFee<46;";

    $store =$conn->query($query3);

    $query4="SELECT BookTitle,COUNT(PenaltyFee) as total
FROM book_loans
GROUP BY BookTitle
ORDER BY total DESC;";
 $store =$conn->query($query4);

  if ($store->num_rows > 0) {
    while ($show = $store->fetch_assoc()) {
        echo $show['BookTitle'] . " -- " . $show['total'] . "<br>";
    }
} else {
    echo "No records found.";
}



?>