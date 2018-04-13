<?php
	include "../db/connect.php";

	$id = $_POST['id'];

	$sql = "select * from batch where id = ".$id;

	$result = $conn->query($sql);
	$obj = new StdClass();

	$obj = $result->fetch_object();
	echo json_encode($obj);

				
				

?>