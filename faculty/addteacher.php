<?php
	include "../db/connect.php";
	// $id = $_POST['id'];
	$name = $_POST['name'];
	$quali = $_POST['quali'];
	$mobile = $_POST['mobile'];
	$about = $_POST['about'];

	$sql = "insert into faculty (name, quali, mobile, about) VALUES ('{$name}','{$quali}','{$mobile}','{$about}')";
	$result = $conn->query($sql);

	if ($result) {
		echo "success";
	}else{
		echo $sql;
	}

	// $obj = new StdClass();

	
	// $obj = $result->fetch_object();

	// if (json_encode($obj) != "") {
	// 	echo json_encode($obj);
	// }
	

?>