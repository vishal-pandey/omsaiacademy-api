<?php
	$dir = "./slider";
	$img = scandir($dir);
	// $img = array_diff(scandir($dir), array('..', '.'));
	echo json_encode($img);
	// print_r($img);
?>