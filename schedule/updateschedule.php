<?php

	include "../db/connect.php";
	$id = $_POST['id'];
	$batch = $_POST['batch'];
	$btime = $_POST['btime'];
	$day = $_POST['day'];

	$sql = "update batch set batch = '{$batch}', btime = '{$btime}', day = '{$day}'  where id = '{$id}'";
	$result = $conn->query($sql);

	if ($result) {
		echo "success";
	}

?>