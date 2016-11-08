<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$poster = $_POST['poster'];
		
		require_once('dbConnect.php');
		
		$sql = "INSERT INTO register (poster) VALUES (?)";

		$stmt = mysqli_prepare($con,$sql);
		
		mysqli_stmt_bind_param($stmt,"s",$poster);
		mysqli_stmt_execute($stmt);
		
		$check = mysqli_stmt_affected_rows($stmt);
		
		if($check == 1){
			echo "Image Uploaded Successfully";
		}else{
			echo "Error Uploading Image";
		}
		mysqli_close($con);
	}else{
		echo "Error";
	}?>