<?php
	$img = $_POST['img'];
	$dir = "./".$_POST['folder']."/";
	if (unlink($dir.$img)) {
		echo "success";
	}
?>