<?php
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_db = 'adobe_reg';
	$conn_error = 'Could Not Connect!';
	$conn=mysql_connect($mysql_host, $mysql_user, $mysql_pass);
	mysql_select_db($mysql_db);
/*
	if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)) {
		die($conn_error);
	} else {
		//echo 'Connected.';
	}

	$display = mysql_query("SELECT id, email, password FROM details") or die($conn_error);
	$result_count = mysql_num_rows($display);

	while ($result_row = mysql_fetch_assoc($display)) {
		echo 'ID '. ' '. ' Email'. ' '. ' Password'. '<br />';
		echo '<strong> '. $result_row['id']. '. '. $result_row['email']. ' '. $result_row['password']. ' </strong>';
	}

	//echo $_SESSION['user_id'];
	*/
	if (isset($_POST['enter']))
	{


	//if (isset($_POST['email']) && isset($POST['password'])) {
		//$email = mysql_real_escape_string(htmlentities($_POST['email']));
		//$password = mysql_real_escape_string(htmlentities($_POST['password']));
		//echo $email;
		$email=$_POST['email'];
		$password = $_POST['password'];


		

		$qry="INSERT INTO details(email,password) VALUES('$email', '$password')";
		$insert = mysql_query($qry, $conn);
		if ($insert) {
			echo 'Details have been inserted.';
		} else if (!$insert) {
			echo 'There was an error inserting your details.';
		}

	//}
}
?>