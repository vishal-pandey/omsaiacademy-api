<?php
	$dir = "./slider/";
	$photo = $_FILES['photo']['name'];
	$target_file = $dir.$photo;
	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
		echo "Uploaded";
	}
?>