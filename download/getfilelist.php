<?php
	$dir = "./".$_POST['folder'];
	$img = scandir($dir);
	echo json_encode($img);
?>