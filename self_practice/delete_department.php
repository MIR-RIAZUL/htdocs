<?php

	$department_id = $_GET["department_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM Department WHERE department_id=$department_id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read_department.php>READ all records</a>";
    echo "<p><a href=index.html>BACK TO HOME</a>";

?>