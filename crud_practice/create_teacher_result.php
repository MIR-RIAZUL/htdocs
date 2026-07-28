<?php

	$name = $_GET["name"];

	$course_id = $_GET["course_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO teacher VALUES ( '', '$name', '$course_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> course_id = $course_id";



	echo "<p><a href=read_teacher.php>READ all records</a>";

?>