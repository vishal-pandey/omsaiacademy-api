<?php
	include "../db/connect.php";
	// $id = $_POST['id'];
	$batch = $_POST['batch'];
	$btime = $_POST['btime'];
	$day = $_POST['day'];
	

	$sql = "insert into batch (batch, btime, day) VALUES ('{$batch}','{$btime}','{$day}')";
	$result = $conn->query($sql);

	if ($result) {
		echo "success";
	}else{
		echo $sql;
	}

	
	

?>