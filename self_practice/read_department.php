<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");



	$results = mysqli_query( $connect, "SELECT * FROM Department" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>department_id</th> <th>department_name</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $department_id </td>";
		echo "<td> $department_name </td>";
		echo "<td> <a href = 'delete_department.php?department_id=$department_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_depertment_input.php?department_id=$department_id&department_name=$department_name'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_department_input.php>Add a new department</a>";
	echo "<p><a href=index.html>BACK TO HOME</a>";   
?>