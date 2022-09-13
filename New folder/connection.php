<?php
	$code = $_POST['code'];
	$name = $_POST['name'];
	$l_hours = $_POST['l_hours'];
	$t_hours = $_POST['t_hours'];
	$p_hours = $_POST['p_hours'];
	$j_hours = $_POST['j_hours'];
    $credits= $_POST['credits']

	// Database connection
	$conn = new mysqli('localhost','root','','db_connect');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into courses(code, name, l_hours, t_hours, p_hours, j_hours, credits) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiiiii", $code, $name, $l_hours, $t_hours, $p_hours, $j_hours, $credits);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>