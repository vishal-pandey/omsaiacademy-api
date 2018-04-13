<?php
	$dir = "./slider/";
	$dir = $_POST['folder'];
	$photo = $_FILES['photo']['name'];
	$target_file = $dir.$photo;
	// if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
		// echo "Uploaded";
	// }
	echo $target_file;
?>