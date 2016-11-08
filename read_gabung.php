<?php
//Importing Database Script 
require_once('dbConnect.php'); 

$id_register = $_GET['id_register'];

//Creating sql query 
$sql = "SELECT * FROM gabung WHERE id_register = '$id_register'"; 
//getting result 
$r = mysqli_query($con,$sql); 
//creating a blank array 
$result = array(); 
//looping through all the records fetched 
while($row = mysqli_fetch_array($r)){ 
//Pushing name and id in the blank array created 
array_push($result,array( 
"id"=>$row['id'],
"name"=>$row['name'],
"nim"=>$row['nim'],
"email"=>$row['email'],
"phone"=>$row['phone'],
));
}
//Displaying the array in json format
echo json_encode(array('result'=>$result));
mysqli_close($con);
?>