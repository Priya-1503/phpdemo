<?php
include('connection.php);
if (isset($_POST['submit'])){
		$file =$_FILES['file'];
if(isset($_FILES['docx']))
	print_r($_FILES);
	$file_name =$_FILES['docx']['name'];
	$file_size =$_FILES['docx']['size'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['docx']['temp_name'];
	$file_type =$_FILES[['image'['type'];
	
	if(move_uploaded_file($file_tmp,"upload".$file_name)){
	echo"successfully uploaded";
	}else
	{
	echo"file not uploaded";
	
	}
?>	
