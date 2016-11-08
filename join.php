<?php

require_once('dbConnect.php'); 

if($_SERVER['REQUEST_METHOD']=='POST'){ 
//Getting values 
$name = $_POST['name']; 
$nim = $_POST['nim']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$id_register = $_POST['id_register']; 

//Creating an sql query 
$sql = "INSERT INTO gabung (name,nim,email,phone,id_register) VALUES 
('$name','$nim','$email','$phone','$id_register')"; 

//Panggil Koneksi require_once('dbConnect.php'); 
//Executing query ke database 
if(mysqli_query($con,$sql))
{

 echo 'Sukses Tambah Data'; 
}else{ 
echo 'Gagal Tambah Data'; 
} 
//Closing the database 
mysqli_close($con); } 
?>