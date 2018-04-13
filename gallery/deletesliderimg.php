<?php
	// $dir = "./slider/";
	$img = $_POST['img'];
	$dir = "./".$_POST['filder']."/";
	if (unlink($dir.$img)) {
		echo "success";
	}
?>