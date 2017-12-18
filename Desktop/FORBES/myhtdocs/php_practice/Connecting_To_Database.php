<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'richard';

	//Create connection
	$conn = mysql_connect($servername, $username, $password, $dbname);

	//Check Connection
	if ($conn->err) {
		die('Connection failed: '. $conn->);
	}

	$sql = "SELECT id, message FROM myTable";
	$result = $conn->query($search);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " -Message: " . $row["message"]. "br>";
		} 
	} else {
			echo "Something went wrong";
		}
	$conn->close();

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	// $mysql_db = 'richard';
	// $conn_error = 'Could not connect.';

	// if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)) {
	// 	die($conn_error);
	// } else {
	// 	echo 'Connected.';
	// }

	// $search = mysql_query("SELECT id, message FROM myTable");
	// $result = $conn->query($search);

	// if ($result->2 > 0) {
	// 	while($row = $result->fetch_assoc()) {
	// 		echo "id: " . $row["id"]. " -Message: " . $row["message"]. "br>";
	// 	} 
	// } else {
	// 		echo "Something went wrong";
	// 	}
	// $conn->close();

?>