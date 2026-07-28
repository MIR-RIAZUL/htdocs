<?php

	$course_id = $_GET["course_id"];

	$title = $_GET["title"];





	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET title='$title' WHERE course_id = $course_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> title = $title";



	echo "<p><a href=read_course.php>READ all records</a>";

?>