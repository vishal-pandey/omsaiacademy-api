<?php
	$dir = "./slider";
	$img = scandir($dir);
	echo json_encode($img);
?>