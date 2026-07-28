<?php

	$student_id = $_GET["student_id"];

	$name = $_GET["name"];

	$department_id = $_GET["department_id"];

?>



<h1>Update Record</h1>




<form method=get action=update_student_result.php>




	<input type=hidden name=student_id value='<?php echo $student_id; ?>'> <br>




	f0: <input type=text name=name value='<?php echo $name; ?>'>
	<p>

	f1: <input type=text name=department_id value='<?php echo $department_id; ?>'>

	<p>

	<input type=submit value=Update Student>

</form>