<?php
	include "../db/connect.php";
	$id = $_POST['id'];
	
	$sql = "delete from batch where id = '{$id}'";
	$result = $conn->query($sql);

	if ($result) {
		echo "success";
	}else{
		echo $sql;
	}	

?>