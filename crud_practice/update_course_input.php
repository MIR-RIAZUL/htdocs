<?php

	$course_id = $_GET["course_id"];

	$title = $_GET["title"];

	

?>



<h1>Update Record</h1>



<form method=get action=update_course_result.php>



	<input type=hidden name=course_id value='<?php echo $course_id; ?>'> <br>



	title: <input type=text name=title value='<?php echo $title; ?>'>


	<p>

	<input type=submit value=Update>

</form>