<?php

	$student_id = $_GET["student_id"];

	$name = $_GET["name"];

	$department_id = $_GET["department_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");







	$query 	= "UPDATE Student SET name='$name', department_id='$department_id' WHERE student_id = $student_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");




	echo "<p>Record updated:<br> name = $name <br> department_id = $department_id";




	echo "<p><a href=read_student.php>READ all records</a>";
    echo "<p><a href=index.html>BACK TO HOME</a>";

?>