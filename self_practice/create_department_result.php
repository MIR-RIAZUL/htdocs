<?php


	$department_name = $_GET["department_name"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Department VALUES ( '', '$department_name' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> department_name = $department_name";



	echo "<p><a href=read_department.php>READ all records</a>";
    echo"<p><a href=index.html>BACK TO HOME</a>";

?>