<?php

require('anyco_ui.inc');

$conn = oci_connect('hr','hr','//localhost/XE');

if(!$conn){
			$e = oci_error();
			trigger_error('Could not connect to database: '.$e['message'], E_USER_ERROR);
		}
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

		$s = oci_parse($conn, "Select * From EMPLOYEES Where EMPLOYEE_ID ='" . $username ."' and EMAIL ='" . $password ."'");
		if(!$s){
			$e = oci_error($conn);
			trigger_error('Could not parse statement: ' .$e['message'], E_USER_ERROR);
		}
		$r = oci_execute($s);
		if(!$r){
			$e = oci_error($conn);
			trigger_error('Could not execute statement: ' .$e['message'], E_USER_ERROR);
		}
		$row = oci_fetch_array($s);

		$a = oci_num_rows($s);
		if($a > 0){
			header("Location: anyco.php");
		}else{
			echo "Incorrect Username/Password";
		}
	}

ui_print_header('Log In');

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
		<input type="number" steps="1" min="0" name="username" placeholder="Enter Username"/><br/><br/>
		<input type="password" name="password" placeholder="Enter Password"/><br/></br>
		<input type="submit" name="submit" value="LogIn" /><br/>	
	</form>

</body>
</html>