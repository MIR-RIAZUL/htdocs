<?php

	$name = $_GET["name"];

	$department_id = $_GET["department_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Student VALUES ( '', '$name', '$department_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> department_id = $department_id";



	echo "<p><a href=read_student.php>READ all records</a>";
  
    echo"<p><a href=index.html>BACK TO HOME</a>";

?>