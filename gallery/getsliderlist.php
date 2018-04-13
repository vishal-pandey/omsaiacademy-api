<?php
	$dir = "./slider";
	$img = scandir($dir);
	echo json_decode($img);
	print_r($img);
?>