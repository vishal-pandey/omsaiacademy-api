<?php
	$dir = "./slider";
	// $img = scandir($dir);
	$img = array_diff(scandir($dir), ['.','..']);
	echo json_encode($img);
	// print_r($img);
?>