<?php
require_once('dbConnect.php'); 
if($_SERVER['REQUEST_METHOD']=='POST'){ 
//Getting values 
$event = $_POST['event']; 
$location = $_POST['location']; 
$sdate = $_POST['sdate'];
$stime = $_POST['stime'];
$edate = $_POST['edate'];
$etime = $_POST['etime'];
$poster = $_POST['poster'];
$description = $_POST['description'];
$kuota = $_POST['kuota'];
$id_user = $_POST['id_user'];
//Creating an sql query 
$sql = "INSERT INTO register (event,location,sdate,stime,edate,etime,poster,description,kuota,id_user) VALUES 
('$event','$location','$sdate','$stime','$edate','$etime','','$description','$kuota','$id_user')"; 

//Panggil Koneksi require_once('dbConnect.php'); 
//Executing query ke database 
if(mysqli_query($con,$sql))
{
	$ins_id = strval(mysqli_insert_id($con));	
	$poster_name = "poster_$ins_id.jpg";
	
	mysqli_query($con, "UPDATE register SET poster = '$poster_name' WHERE id_event = '$ins_id'");
	
	$decode_img = base64_decode($poster);
	file_put_contents("images/".$poster_name, $decode_img);
	
 echo 'Sukses Tambah Data'; 
}else{ 
echo 'Gagal Tambah Data'; 
} 
//Closing the database 
mysqli_close($con); } 
?>