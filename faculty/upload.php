<?php
	$dir = "./profile/";
	$photo = $_FILES['photo']['name'];
	$id = $_POST['id'];
	$target_file = $dir.$id.".jpg";
	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)){
		echo "Uploaded";
	}
?>