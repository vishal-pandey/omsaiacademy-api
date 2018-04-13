<?php
	$dir = "./slider/";
	$img = $_POST['img'];
	if (unlink($dir.$img)) {
		echo "success";
	}
?>