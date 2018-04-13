<?php
	$dir = "./other";
	$img = scandir($dir);
	echo json_encode($img);
?>