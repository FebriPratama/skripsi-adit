<?php
//Importing Database Script 
require_once('dbConnect.php'); 
//Creating sql query 
$idUser = $_GET['id_user'];

$sql = "SELECT * FROM register WHERE id_user = '$idUser'"; 
//getting result 
$r = mysqli_query($con,$sql); 
//creating a blank array 
$result = array(); 
//looping through all the records fetched 
while($row = mysqli_fetch_array($r)){ 
//Pushing name and id in the blank array created 
array_push($result,array( 
"id_event"=>$row['id_event'],
"event"=>$row['event'],
"location"=>$row['location'],
"sdate"=>$row['sdate'],
"stime"=>$row['stime'],
"edate"=>$row['edate'],
"etime"=>$row['etime'],
"poster"=>$row['poster'],
"description"=>$row['description'],
"kuota"=>$row['kuota'],
));
}
//Displaying the array in json format
echo json_encode(array('result'=>$result));
mysqli_close($con);
?>