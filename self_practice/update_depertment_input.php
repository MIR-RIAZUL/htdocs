<?php

	$department_id = $_GET["department_id"];

	$department_name = $_GET["department_name"];

?>

<h1>Update Record</h1>



<form method=get action=update_department_result.php>




	<input type=hidden name=department_id value='<?php echo $department_id; ?>'> <br>



	department_name: <input type=text name=department_name value='<?php echo $department_name; ?>'>

	<p>


	<input type=submit value=Update>
    <br>
    <br>
    <a href=index.html>BACK TO HOME</a>

</form>