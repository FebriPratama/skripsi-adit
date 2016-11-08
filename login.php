<?php

require_once('dbConnect.php'); 

 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
 
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 
 //Creating sql query
 $sql = "SELECT * FROM users WHERE username='$username' AND email='$email' AND password='$password'";
 
 //executing query
 $result = mysqli_query($con,$sql);
 
 //fetching result
 $check = mysqli_fetch_array($result);
 
 //if we got some result
 if(isset($check)){
 //displaying success
 echo "success ".$check['id'].' '.$check['image'];;

 }else{
 //displaying failure
 echo "failure";
 }
 mysqli_close($con);
 }
?>
