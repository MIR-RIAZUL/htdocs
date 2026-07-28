<?php

	$department_id = $_GET["department_id"];

	
	$department_name = $_GET["department_name"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Department SET department_name='$department_name' WHERE department_id = $department_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> department_name = $department_name <br>";



	echo "<p><a href=read_department.php>READ all records</a>";

?>