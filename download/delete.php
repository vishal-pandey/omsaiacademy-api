<?php
	$file = $_POST['file'];
	$dir = "./".$_POST['folder']."/";
	if (unlink($dir.$file)) {
		echo "success";
	}
?>