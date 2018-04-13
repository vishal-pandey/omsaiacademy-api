<?php
	$dir = "./".$_POST['folder']."/";
	$file = $_FILES['file']['name'];
	$target_file = $dir.$file;
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
		echo "Uploaded";
	}else{	
		echo $target_file;
	}
?>