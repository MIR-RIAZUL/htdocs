<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");



	$results = mysqli_query( $connect, "SELECT * FROM Student" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>student_id</th> <th>name</th> <th>department_id</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $student_id </td>";
		echo "<td> $name </td>";
		echo "<td> $department_id </td>";
		echo "<td> <a href = 'delete_student.php?student_id=$student_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_student_input.php?student_id=$student_id&name=$name&department_id=$department_id'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_student_input.php>Assign Student To Department</a>";

    echo "<p><a href=index.html>BACK TO HOME</a>";

?>