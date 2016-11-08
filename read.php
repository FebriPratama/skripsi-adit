<?php
//Importing Database Script 
require_once('dbConnect.php'); 
//Creating sql query 
$sql = "SELECT *, (SELECT COUNT(*) FROM gabung WHERE id_register = id_event) AS jumlah FROM register WHERE STR_TO_DATE(CONCAT(edate, ' ', etime), '%M %d, %Y %H:%i:%s') > DATE_ADD(STR_TO_DATE(CONCAT(CURDATE(), ' ', CURTIME()), '%Y-%m-%d %H:%i:%s'), INTERVAL 7 HOUR)"; 
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
"jumlah"=>$row['jumlah'],
));
}
//Displaying the array in json format
echo json_encode(array('result'=>$result));
mysqli_close($con);
?>