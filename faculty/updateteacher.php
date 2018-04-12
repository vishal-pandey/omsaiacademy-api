<?php
	include "../db/connect.php";
	$id = $_POST['id'];
	$name = $_POST['name'];
	$quali = $_POST['quali'];
	$about = $_POST['about'];
	$mobile = $_POST['mobile'];

	$sql = "update faculty set name = '{$name}', mobile = '{$mobile}', quali = '{$quali}', about = '{$about}'  where id = '{$id}'";
	$result = $conn->query($sql);

	if ($result) {
		echo "success";
	}

	// $obj = new StdClass();

	
	// $obj = $result->fetch_object();

	// if (json_encode($obj) != "") {
	// 	echo json_encode($obj);
	}
	

?>